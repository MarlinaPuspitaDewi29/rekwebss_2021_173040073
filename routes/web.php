<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
//use PhpParser\Node\Stmt\Return_;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Marlina Puspita Dewi",
        "email" => "marlina_173040073@mail.unpas.ac.id",
        "image" => "marlina.jpg"

    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()

    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});