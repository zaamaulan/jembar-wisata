@extends('layouts.master')

@section('title', 'Blog')
@vite('resources/css/app.css')


@section('content')
    <section class="mt-20 flex flex-col container mx-auto my-28">
        <div>
        {{-- <div class="grid grid-cols-3 gap-20"> --}}
            <div class="grid grid-cols-5 gap-4">
                <p class="font-semibold">Judul Post</p>
                <p class="font-semibold">Isi Post</p>
                <p class="font-semibold">Slug Post</p>
                <p class="font-semibold">User Id</p>
                <p class="font-semibold">User</p>
                @foreach ($posts as $post)
                    {{-- <x-card style="shadow-lg h-[30rem]" title="{{ $p->judul_post }}" thumbnail="blog.png" caption="{{ $p->isi_post }}" href="/blog/{$slug}" /> --}}
                    <p>{{ $post->judul_post }}</p>
                    <p>{{ $post->isi_post }}</p>
                    <p>{{ $post->slug }}</p>
                    <p>{{ $post->user_id }}</p>
                    <p>{{ $post->user['name'] }}</p>
                @endforeach
            </div>
        </div>
    </section>
@endsection
