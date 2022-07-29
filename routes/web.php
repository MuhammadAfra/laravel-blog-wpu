<?php


use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Muhammad Afra",
        "email" => "muhammadafra45@gmail.com"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

//halaman single post
// Route::get('posts/{slug}',[PostController::class, 'show']);

Route::get('posts/{posts:slug}',[PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('categories/{categories:slug}', function(Category $category) {   
    // $this->Category = $category;
    // dd($this->Category);
    return view('posts', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);

});


Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});


    // return view('post', [
    //     "title" => "Single Post",
    //     "post" => Post::find($slug)
    // ]);
