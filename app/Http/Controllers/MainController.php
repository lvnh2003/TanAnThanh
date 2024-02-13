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
    public function news(Request $request)
    {
        $news = News::published()->whereNotIn('post_name', ['wp-global-styles-twentytwentythree', 'navigation'])->paginate(4);
        return view('news',['news' => $news]);
    }
    public function detail($slug)
    {
        $news= News::slug($slug)->first();
       return view('detail',['slug'=>$slug,'news'=>$news]);
    }
}
