<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::where('statu', 1)->inRandomOrder() ->take(1)->get();
        $blogs = Blog::where('statu', 1)->orderBy('created_at', 'desc')->get()->groupBy('user_id');
        View::share('blog', $blog);
        View::share('blogs', $blogs);
        
        return view('front.index');
    }
}
