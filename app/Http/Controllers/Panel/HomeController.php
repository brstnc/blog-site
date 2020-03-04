<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        View::share('blogs', $blogs);

        return view('panel.blog.index');
    }
}
