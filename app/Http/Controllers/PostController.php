<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index() 
    {
        return view('posts',[
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $posts) 
    {
        // $this->post = $posts;
        // dd($this->post);
        return view('post', [
            "title" => "Single Post",
            "posts" => $posts
        ]);
    }
}
