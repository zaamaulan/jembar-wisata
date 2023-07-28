<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    protected $author = ['lorem ipsum dolor'];

    public function index()
    {

    }

    public function show(){
        $post = Post::all();
        return view('blog', ['post' => $post, 'author' => $this->author]);
    }
}
