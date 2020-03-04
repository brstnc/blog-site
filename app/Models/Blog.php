<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'content',
        'img_url',
        'statu',
        'user_id'
    ];

    public function Categories()
    {
        return $this->hasMany(BlogCategory::class, 'blog_id');
    }
    public function User()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
