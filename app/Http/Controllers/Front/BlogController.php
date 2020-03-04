<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function blog_detail($id)
    {
        $blog = Blog::find($id);
        View::share('blog', $blog);

        return view('front.blog_detail');
    }
    public function all_articles($user_id)
    {
        $user = User::find($user_id);
        $all_articles = Blog::where('user_id', $user->id)->where('statu', 1)->get();

        View::share('user', $user);
        View::share('all_articles', $all_articles);

        return view('front.all_articles');
    }
    public function category_articles($category_id)
    {
        $category = Category::find($category_id);
        $category_articles = $category->Blogs;

        View::share('category', $category);
        View::share('category_articles', $category_articles);

        return view('front.category_articles');
    }
}
