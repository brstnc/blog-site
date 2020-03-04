<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'blog_id',
        'category_id',
    ];

    public function Blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
