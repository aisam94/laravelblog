<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index()
    {

        $posts = Post::latest();
        $categories = Category::all();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts', ['posts' => $posts->filter(request(['search']))->get(), 'categories' => $categories]);
    }

    public function show(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
