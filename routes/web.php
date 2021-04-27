<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


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


Route::get('/welcome', function (){
    return view('welcome');
});
Route::get('/about', function (){
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('post/create', function(){
    DB::table('post')->insert([
        'title' => 'Hello!',
        'body' => 'My name is Inabat'
    ]);
});
Route::get('/post', function(){
    $post = Post::find(1);
    return $post->title;
});
