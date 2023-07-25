<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Jembar Raya Majalengka</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="sticky top-0">
        <nav class="flex justify-between items-center text-neutral-700 py-2 bg-white px-[11.5rem] ">
            <a href="/">
                <div>@include('components.svg.logo')</div>
            </a>
            <ul class="flex capitalize gap-x-32 items-center font-semibold text-base">
                <li><a href="/" class="{{ request()->is('/') ? 'text-sky-400' : '' }}">home</a></li>
                <li><a href="/fasilitas" class="{{ request()->is('fasilitas') ? 'text-sky-400' : '' }}">fasilitas</a></li>
                <li><a href="/blog" class="{{ request()->is('blog') ? 'text-sky-400' : '' }}">blog</a></li>
                <li><a href="/promo" class="{{ request()->is('promo') ? 'text-sky-400' : '' }}">promo</a></li>
                <li class="flex items-center"><a href="" class="flex">bantuan @include('components.svg.chevron-right')</a></li>
            </ul>
            <x-button style="bg-sky-400 text-white" buttonTitle="pesan tiket" href="pesan-tiket"/>
        </nav>
    </header>
    <main>
        {{-- Content Section here --}}
        @yield('content')
    </main>
    <footer>
        
    </footer>
</body>

</html>
