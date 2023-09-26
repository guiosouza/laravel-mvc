<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::get();
        return view('welcome', ['posts'=>$post]);
    }

    public function detailPost(Post $post) { // using Model as parameter
        // Route model binding
        return view('detail', ['post'=>$post]);
    }
}
