<?php

namespace App\Http\Controllers;

use App\Models\News;
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
            'description' => $validatedData['description']
        ]);
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $folderImage = 'storage/news/';
                $image->move($folderImage, $imageName);
                $nameDes = 'description_' . substr($image->getClientOriginalName() , 0, strrpos($image->getClientOriginalName() , '.'));
                $nameCon ='content_' .substr($image->getClientOriginalName() , 0, strrpos($image->getClientOriginalName() , '.'));
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
    public function news()
    {
        $news = News::paginate(4);
        return view('news',['news' => $news]);
    }
    public function detail($slug)
    {
        $news= News::where('slug',$slug)->first();
       return view('detail',['slug'=>$slug,'news'=>$news]);
    }
    public function list()
    {
        $news = News::all();
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
            
                return "<form method='POST' action='".$route."'>
                            ".$csrf."
                            <button class='btn btn-danger' type='submit'>Xoá</button>
                        </form>";
            })
            ->make(true);
    }
    public function destroy($id)
    {
        $new= News::find($id);
        $new->delete();
        return back()->with('success','Xoá thành công');
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
            return redirect()->back()->withErrors(['errorLogin' => 'メールアドレスまたはパスワードが間違っている!']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
