<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    protected $author = ['lorem ipsum dolor'];

    public function index()
    {
    }

    public function show()
    {
        $posts = Post::with('User')->get();
        return view('blog', ['posts' => $posts]);
    }
}
