<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'Front\HomeController@index')->name('index');

Route::group(['prefix' => 'panel','middleware' => 'auth', 'namespace' => 'Panel'], function () {
    Route::get('/', 'HomeController@index')->name('panel.index');
    Route::group(['prefix' => 'blogs'], function (){
        Route::get('/create', 'BlogController@blog_create_get')->name('blog_create_get');
        Route::post('/create', 'BlogController@blog_create_post')->name('blog_create_post');
        Route::get('/edit/{id}', 'BlogController@blog_edit_get')->name('blog_edit_get');
        Route::post('/edit', 'BlogController@blog_edit_post')->name('blog_edit_post');
        Route::get('/delete/{id}', 'BlogController@blog_delete')->name('blog_delete');
    });
    Route::group(['prefix' => 'categories'], function (){
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@category_create_get')->name('category_create_get');
        Route::post('/create', 'CategoryController@category_create_post')->name('category_create_post');
        Route::get('/edit/{id}', 'CategoryController@category_edit_get')->name('category_edit_get');
        Route::post('/edit', 'CategoryController@category_edit_post')->name('category_edit_post');
        Route::get('/delete/{id}', 'CategoryController@category_delete')->name('category_delete');
    });

});
