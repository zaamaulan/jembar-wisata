<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

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

    public function slug(Request $request){
        SlugService::createSlug(Post::class, 'slug', $request->judul_post);
        // $slug = SlugService::createSlug(Post::class, 'slug', $request->judul_post);
        // return response()->json(['slug' => $slug]);
    }
}
