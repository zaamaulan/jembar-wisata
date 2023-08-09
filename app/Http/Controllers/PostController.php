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
        $posts = Post::with('User')->get();
        return view('guest.posts.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('guest.posts.show', compact('post'));
    }


    public function slug(Request $request)
    {
        SlugService::createSlug(Post::class, 'slug', $request->judul_post);
        // $slug = SlugService::createSlug(Post::class, 'slug', $request->judul_post);
        // return response()->json(['slug' => $slug]);
    }
}
