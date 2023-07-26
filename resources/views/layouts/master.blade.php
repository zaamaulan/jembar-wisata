<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Jembar Raya Majalengka</title>
    @vite('resources/css/app.css')
</head>

<body class="container mx-auto">
    <header class="sticky top-0 ">
    {{-- <header class="sticky top-0 backdrop-filter backdrop-blur-lg bg-opacity-30"> --}}
        <nav class="flex justify-between items-center text-neutral-700 py-2 bg-white ">
            <a href="/">
                <div>@include('components.svg.logo')</div>
            </a>
            <ul class="flex capitalize gap-x-32 items-center font-semibold">
                <li><a href="/" class="{{ request()->is('/') ? 'text-sky-400' : '' }}">home</a></li>
                <li><a href="/fasilitas" class="{{ request()->is('fasilitas') ? 'text-sky-400' : '' }}">fasilitas</a></li>
                <li><a href="/blog" class="{{ request()->is('blog') ? 'text-sky-400' : '' }}">blog</a></li>
                <li><a href="/promo" class="{{ request()->is('promo') ? 'text-sky-400' : '' }}">promo</a></li>
                <li><a href="" class="flex">bantuan @include('components.svg.chevron-right')</a></li>
            </ul>
            <x-buttonPesanTiket style="" />
        </nav>
    </header>
    <main>
        {{-- Content Section here --}}
        @yield('content')
    </main>
    <footer>
        <div class="mt-52"></div>
        <div class="bg-neutral-800 text-white justify-evenly pt-16">
            <div class="flex flex-row ml-16">
                <img src="/logo.png" alt="" class="w-32 mx-12">
                <h1 class="text-[30px] font-bold text-left">Jembar Raya <br> Waterpark</h1>
            </div>
            
            <div class="container flex justify-item-start justify-evenly capitalize items-center mt-10">
                <div class="">
                    <h1 class="text-[30px] font-bold text-left mb-5">Sosial</h1>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out" href="https://www.youtube.com/@jembarwaterparkmajalengka6885" target="_blank">Youtube</a>
                    <br>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out" href="https://web.facebook.com/jembarwaterparkmajalengka" target="_blank">Facebook</a>
                    <br>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out" href="https://www.instagram.com/jembarwaterpark/" target="_blank">Instagram</a>
                </div>
                <div class="">
                    <h1 class="text-[30px] font-bold text-left mb-5">Kontak</h1>
                    <p class="text-[15px] font-medium ">Phone: 0852-1212-1000</p>
                    <p class="text-[15px] font-medium ">Email:<a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqXPHkDmNSpgpNzJbzsMtpvjvVKSCdbqCFwDPzPRLXDMxQDGvPLNtTNDVbcpxtRtkNHXHg" class="hover:text-sky-400 transition-all ease-in-out" target="_blank"`>
                        jembarpark@gmail.com</a>
                    </p>
                </div>
                <div class="w-96">
                    <h1 class="text-[30px] font-bold text-left mb-5">Alamat</h1>
                    <p class="text-[15px] font-medium ">Blok Kamis, Ranji Wetan, Kec. Kasokandel, Kabupaten Majalengka, Jawa Barat 45453</p>
                </div>
            </div>
            <div class="my-24"></div>
            <div class="container flex capitalize bg-white text-black text-center justify-center py-3">
                <p class="text-[15px] font-medium">Copyright &copy; 2023 NahlTech. All Rights Reserved.</p>
            </div>
        </div>
        
    </footer>
</body>

</html>
