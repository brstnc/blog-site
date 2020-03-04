<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone'
    ];

    protected $hidden = [
        'password'
    ];

    public function Blog()
    {
        return $this->hasMany(Blog::class, 'user_id');
    }
}
