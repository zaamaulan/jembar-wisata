<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Page Not Found</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-white ">
        <div class="container flex items-center min-h-screen px-6 py-12 mx-auto">
            <div class="flex flex-col items-center max-w-sm mx-auto text-center">
                <p class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">
                    {{-- <p class="p-3 text-sm font-medium text-blue-500 rounded-full bg-blue-50"> --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg> --}}
                    404
                </p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">Page not found</h1>
                <p class="mt-4 text-gray-500 ">The page you are looking for doesn't exist</p>

                <div class="flex items-center w-full justify-center mt-6 gap-x-3 shrink-0 sm:w-auto">

                    <a href="{{ URL::previous() }}"
                        class="flex items-center w-1/2 px-2 py-1.5 text-sm tracking-wide text-neutral-700 sm:w-auto font-semibold space-x-2">

                        <svg class="feather feather-arrow-left" fill="none" height="20" stroke="#404040" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <line x1="19" x2="5" y1="12" y2="12" />
                            <polyline points="12 19 5 12 12 5" />
                        </svg>
                        <span>Go back</span>
                    </a>

                    {{-- <button
                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>


                        <span>Go back</span>
                    </button> --}}

                    {{-- <button
                        class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                        Take me home
                    </button> --}}
                </div>
            </div>
        </div>
    </section>
</body>

</html>
