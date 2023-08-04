<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function upload(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description'=>'required',
            'content' => 'required',
        ]);
        $string= ucfirst($request->title);
        $slug =Str::slug($string, '-') . '-' . time();
        $news = News::create([
            'title' => $string,
            'content' => $validatedData['content'],
            'slug'=>$slug,
            'description' => $validatedData['description'],
            'isInBin' => 0
        ]);
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $i => $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $folderImage = 'storage/news/';
                $image->move($folderImage, $imageName);
                $nameDes = 'description_' .$i+1;
                $nameCon ='content_' .$i+1;
                $description = $request->input($nameDes);

                $content = $request->input($nameCon);
                $news->images()->create([
                    'image_path' =>  $imageName,
                    'description' => $description,
                    'content' =>$content
                ]);
            }
        }

        return redirect()->back()->with('success', 'Bài viết đã được đăng thành công!');
    }
    public function news(Request $request)
    {
        $query = $request->input('query');
        $news = News::where('title', 'like', '%' . $query . '%')->where('isInBin','!=',1)->paginate(4);
        return view('news',['news' => $news]);
    }
    public function detail($slug)
    {
        $news= News::where('slug',$slug)->first();
       return view('detail',['slug'=>$slug,'news'=>$news]);
    }
    public function list()
    {
        $news = News::where('isInBin','=',0)->get();
        return  DataTables::of($news)
           
            ->addColumn('image', function (News $new) {
                return $new->getImage();
            })
            ->addColumn('created',function(News $new) {
                return Carbon::parse($new->created_at)->format('Y-m-d');
            })
            ->addColumn('action',function(News $new) {
                $csrf = csrf_field();
                $route = route('moveBin', $new->id);
            
                return "<form method='POST' action='".$route."'>
                            ".$csrf."
                            <button class='btn btn-danger' type='submit'>Thêm vào thùng rác</button>
                        </form>";
            })
            ->make(true);
    }
    public function listBin()
    {
        $news = News::where('isInBin','=','1')->get();
        return  DataTables::of($news)
           
            ->addColumn('image', function (News $new) {
                return $new->getImage();
            })
            ->addColumn('created',function(News $new) {
                return Carbon::parse($new->created_at)->format('Y-m-d');
            })
            ->addColumn('action',function(News $new) {
                $csrf = csrf_field();
                $route = route('destroy', $new->id);
                $route1 = route('change', $new->id);

                $deleteAjax = "deleteAjax('$route')";
                $buttonDelete  = '<button class="btn btn-sm btn-danger btn-delete" onclick="' . "$deleteAjax\">" . ' Xóa' . '</button>';
                return "<div class='row'>
                <div class='p-5'>.$buttonDelete.</div>
                        <div class='p-5'><form method='POST' action='".$route1."'>
                            ".$csrf."
                            <button class='btn btn-success' type='submit'>Khôi phục</button>
                        </form></div></div>
                        ";
            })
            ->make(true);
    }
    public function destroy($id)
    {
        $new= News::find($id);
        if ($new->delete()) {
            return response()->json(['statusCode' => 200]);
        } else {
            return response()->json(['statusCode' => 400]);
        }
    }
    public function login()
    {
        return view('admin.login');
    }
    public function check(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('admin.index');
        }
        else
        {
            return redirect()->back()->withErrors(['errorLogin' => 'Địa chỉ email hoặc mật khẩu chưa chính xác!']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function data()
    {
        $news = News::all();
        return response()->json($news);
    }
    public function bin()
    {
        return view('admin.dustbin');
    }
    public function moveBin($id)
    {
        $new = News::find($id);
        $new->isInBin= 1;
        $new->save();
        return redirect()->back()->with('success','Đã thêm tin tức vào thùng rác');

    }
    public function change($id)
    {
        $new = News::find($id);
        $new->isInBin= 0;
        $new->save();
        return redirect()->route('admin.index')->with('success','Đã khôi phục bài viết');
    }
    public function removeAll()
    {
        Image::where('news_id', '!=', null)->delete();
        $news= News::query()->delete();

            return response()->json(['statusCode' => 200]);
    }
}
