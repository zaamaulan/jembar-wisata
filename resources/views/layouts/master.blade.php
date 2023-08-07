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
    <header class="sticky top-0 z-[99]">
        <nav class="flex justify-between items-center text-neutral-700 py-2 bg-white px-[11.5rem] ">
            <a href="/">
                <div>@include('components.svg.logo')</div>
            </a>
            <ul class="flex capitalize gap-x-32 items-center font-semibold text-base">
                <li><a href="/" class="{{ request()->is('/') ? 'text-sky-400' : '' }}">home</a></li>
                <li><a href="/fasilitas" class="{{ request()->is('fasilitas') ? 'text-sky-400' : '' }}">fasilitas</a></li>
                <li><a href="/blog" class="{{ request()->is(['blog']) ? 'text-sky-400' : '' }}">blog</a></li>
                <li><a href="/promo" class="{{ request()->is('promo') ? 'text-sky-400' : '' }}">promo</a></li>
                <li class="flex items-center"><a href="" class="flex">bantuan @include('components.svg.chevron-right')</a></li>
            </ul>
            <x-button type="" style="hover:bg-sky-500 bg-sky-400 transition-colors duration-200 text-white" buttonTitle="pesan tiket" href="pesan-tiket" />
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="bg-neutral-800 text-white py-24">
            <div class="flex items-center gap-x-6 mb-16 px-[11.5rem]">
                @include('components.svg.logo-image')
                <h1 class="text-[30px] font-bold text-left">Jembar Raya <br> Waterpark</h1>
            </div>

            <div class="flex justify-between px-[11.5rem] capitalize items-center">
                <div class="">
                    <h1 class="text-[30px] font-bold text-left mb-3">Sosial</h1>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out"
                        href="https://www.youtube.com/@jembarwaterparkmajalengka6885" target="_blank">Youtube</a>
                    <br>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out"
                        href="https://web.facebook.com/jembarwaterparkmajalengka" target="_blank">Facebook</a>
                    <br>
                    <a class="text-[15px] font-medium hover:text-sky-400 transition-all ease-in-out" href="https://www.instagram.com/jembarwaterpark/"
                        target="_blank">Instagram</a>
                </div>
                <div class="">
                    <h1 class="text-[30px] font-bold text-left mb-3">Kontak</h1>
                    <p class="text-[15px] font-medium ">Phone: 0852-1212-1000</p>
                    <p class="text-[15px] font-medium ">Email:<a
                            href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqXPHkDmNSpgpNzJbzsMtpvjvVKSCdbqCFwDPzPRLXDMxQDGvPLNtTNDVbcpxtRtkNHXHg"
                            class="hover:text-sky-400 transition-all ease-in-out lowercase" target="_blank"`>
                            jembarpark@gmail.com</a>
                    </p>
                </div>
                <div class="w-96">
                    <h1 class="text-[30px] font-bold text-left mb-3">Alamat</h1>
                    <p class="text-[15px] font-medium ">Blok Kamis, Ranji Wetan, Kec. Kasokandel, Kabupaten Majalengka, Jawa Barat 45453</p>
                </div>
            </div>
        </div>
        <div class="flex capitalize bg-white text-neutral-700 text-center justify-center py-3">
            <p class="text-base font-medium">Copyright &copy; 2023 NahlTech. All Rights Reserved.</p>
        </div>

    </footer>
</body>

</html>
