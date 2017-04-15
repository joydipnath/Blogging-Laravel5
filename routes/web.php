<?php

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
Route::get('/', function () {
    return view('blog.homepage');
});

Route::get('/post', 'BlogPostController@index')->name('post');
Route::post('/post', 'BlogPostController@register')->name('post');

// Route::get('/post', function () {
//     return view('blog.blogpost');
// });


Auth::routes();

Route::get('/home', 'HomeController@index');

