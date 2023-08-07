<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex">
    <aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l ">
        <a href="#">
            @include('components.svg.logo')
        </a>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="-mx-3 flex flex-col justify-between">
                <div class="space-y-6">

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase">analytics</label>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin">
                            <svg class="w-5 h-5" fill="none" stroke="#404040" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                <polyline points="17 6 23 6 23 12" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Dashboard</span>
                        </a>

                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase">data</label>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/account">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Account</span>
                        </a>

                    </div>
                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase">content</label>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/blog">
                            <svg class="w-5 h-5" fill="none" height="24" stroke="#404040" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Blog</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/fasilitas">
                            <svg class="w-5 h-5" fill="none" stroke="#404040" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect height="14" rx="2" ry="2" width="20" x="2" y="7" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Fasilitas</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/promo">
                            <svg class="w-5 h-5" fill="none" stroke="#404040" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <line x1="19" x2="5" y1="5" y2="19" />
                                <circle cx="6.5" cy="6.5" r="2.5" />
                                <circle cx="17.5" cy="17.5" r="2.5" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Promo</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/tiket">
                            <svg class="w-5 h-5" fill="none" stroke="#404040" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect height="16" rx="2" ry="2" width="22" x="1" y="4" />
                                <line x1="1" x2="23" y1="10" y2="10" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Tiket</span>
                        </a>
                    </div>

                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase">Customization</label>

                        <a class="flex items-center px-3 py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                            href="/admin/setting">
                            <svg enable-background="new 0 0 32 32" id="Editable-line" version="1.1" viewBox="0 0 32 32" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-5 h-5 ">
                                <circle cx="16" cy="16" fill="none" id="XMLID_224_" r="4" stroke="#404040"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                <path
                                    d="  M27.758,10.366l-1-1.732c-0.552-0.957-1.775-1.284-2.732-0.732L23.5,8.206C21.5,9.36,19,7.917,19,5.608V5c0-1.105-0.895-2-2-2h-2  c-1.105,0-2,0.895-2,2v0.608c0,2.309-2.5,3.753-4.5,2.598L7.974,7.902C7.017,7.35,5.794,7.677,5.242,8.634l-1,1.732  c-0.552,0.957-0.225,2.18,0.732,2.732L5.5,13.402c2,1.155,2,4.041,0,5.196l-0.526,0.304c-0.957,0.552-1.284,1.775-0.732,2.732  l1,1.732c0.552,0.957,1.775,1.284,2.732,0.732L8.5,23.794c2-1.155,4.5,0.289,4.5,2.598V27c0,1.105,0.895,2,2,2h2  c1.105,0,2-0.895,2-2v-0.608c0-2.309,2.5-3.753,4.5-2.598l0.526,0.304c0.957,0.552,2.18,0.225,2.732-0.732l1-1.732  c0.552-0.957,0.225-2.18-0.732-2.732L26.5,18.598c-2-1.155-2-4.041,0-5.196l0.526-0.304C27.983,12.546,28.311,11.323,27.758,10.366z  "
                                    fill="none" id="XMLID_242_" stroke="#404040" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="2" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Setting</span>
                        </a>
                    </div>
                </div>
            </nav>

            <form class="space-y-3 flex items-center py-2 text-neutral-700 transition-colors duration-300 transform rounded-lg hover:text-gray-700"
                method="post" action="/logout">
                @csrf
                <svg class="3-5 h-5" fill="none" stroke="#404040" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" x2="9" y1="12" y2="12" />
                </svg>

                <button type="submit" class="mx-2 text-sm font-medium">Log Out</button>
            </form>

        </div>
    </aside>
    <main class="text-neutral-700 flex w-full justify-center items-center min-h-screen ">
        @yield('content')
    </main>
</body>

</html>
