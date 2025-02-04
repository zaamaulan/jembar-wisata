@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        {{-- <div> --}}
        {{-- <div class="grid grid-cols-3 gap-20"> 
            <div class="grid grid-cols-5 gap-4">
                <p class="font-semibold">Judul Post</p>
                <p class="font-semibold">Isi Post</p>
                <p class="font-semibold">Slug Post</p>
                <p class="font-semibold">User Id</p>
                <p class="font-semibold">User</p>
                @foreach ($posts as $post)
                    <x-card style="shadow-lg h-[30rem]" title="{{ $p->judul_post }}" thumbnail="blog.png" caption="{{ $p->isi_post }}" href="/blog/{$slug}" />
                    <p>{{ $post->judul_post }}</p>
                    <p>{{ $post->isi_post }}</p>
                    <a href="/posts/{{ $post->slug }}" class="bg-sky-400 px-4 py-2 w-fit h-fit">Selengkapnya</a>
                    <p>{{ $post->user_id }}</p>
                    <p>{{ $post->user['name'] }}</p>
                @endforeach
            </div> --}}
            <div class="flex flex-col gap-y-1">
            <h1 class="text-neutral-700 text-[40px] font-semibold text-left">BLOG LAINNYA</h1>
            <div class="grid grid-cols-3 gap-11">

            @foreach ($posts as $post)
                 <x-card style="shadow-lg" thumbnail="/jembar.png" title="{{ $post->judul_post }}" caption="" href="/posts/{{ $post->slug }}"/>
            @endforeach
            </div>
            </div>
        {{-- </div>
        </div>
        </div>  --}}
    </section>
@endsection