<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        View::share('categories', $categories);
        return view('panel.category.index');
    }
    public function category_create_get()
    {
        return view('panel.category.create');
    }

    public function category_create_post(Request $request)
    {
        $request->validate([
           'name' => 'required'
        ]);

        Category::create([
           'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }

    public function category_edit_get($id)
    {
        $category = Category::find($id);
        View::share('category', $category);

        return view('panel.category.edit');
    }

    public function category_edit_post(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->name = $request->name;
        $category->saveOrFail();

        return redirect()->back()->with('message', 'Kategori başarılı bir şekilse güncellendi !');
    }

    public function category_delete($id)
    {
        $category = Category::find($id);
        $category->Blogs()->delete();
        $category->delete();
        return redirect()->back()->with('message', 'Kategori başarılı bir şekilse silindi !');
    }
}
