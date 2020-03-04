<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function blog_create_get()
    {
        $categories = Category::all();
        View::share('categories', $categories);

        return \view('panel.blog.create');
    }

    public function blog_create_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'blog_img' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->statu = $request->statu;

        $file = $request->blog_img;
        $name = time() . '.jpg';
        $file->move('images/blog/', $name);
        $adres = '/images/blog' . '/' . $name;
        $blog->img_url = $adres;

        $blog->save();
        foreach ($request->categories as $category) {
            BlogCategory::create([
                'blog_id' => $blog->id,
                'category_id' => $category
            ]);
        }

        return redirect()->route('panel.index');

    }

    public function blog_edit_get($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        View::share('categories', $categories);
        View::share('blog', $blog);

        return view('panel.blog.edit');
    }

    public function blog_edit_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'categories' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::find($request->blog_id);
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->statu = $request->statu;

        if ($request->hasFile('blog_img'))
        {
            $file = $request->blog_img;
            $name = time() . '.jpg';
            $file->move('images/blog/', $name);
            $adres = '/images/blog' . '/' . $name;
            $blog->img_url = $adres;
        }

        $blog->save();

        $blog->Categories()->delete();

        foreach ($request->categories as $category) {
            BlogCategory::create([
                'blog_id' => $blog->id,
                'category_id' => $category
            ]);
        }

        return redirect()->back()->with('message', 'Blog başarılı bir şekilse güncellendi !');
    }

    public function blog_delete($id)
    {
        $blog = Blog::find($id);
        $blog->Categories()->delete();
        $blog->delete();
        return redirect()->back()->with('message', 'Blog başarılı bir şekilse silindi !');
    }
}
