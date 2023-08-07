<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#E8E8E8]">
    <div class="flex justify-center items-center h-screen">
        <div class="flex">
            <div><img src="/foto.jpeg" alt="login" class="max-w-[30rem] max-h-[30rem] rounded-tl-md rounded-bl-md"></div>
            <form action="/login" method="post"
                class="bg-white py-10 px-10 text-neutral-700 flex flex-col gap-y-8 max-w-[30rem] rounded-tr-md rounded-br-md">
                @csrf
                <div>
                    <h1 class=" font-semibold text-4xl/[4rem]">Sign In</h1>
                    <h3 class="text-gray-500 font-medium text-base">Masuk untuk melanjutkan ke halaman admin</h3>
                    @if (session()->has('loginError'))
                        <div class="text-red-500 text-sm mt-4">{{ session('loginError') }}</div>
                    @endif
                </div>
                <div class="flex flex-col gap-y-4">
                    <div class="flex flex-col gap-y-3">
                        <label class="capitalize font-medium " for="email">email</label>
                        <input type="email" name="email" id="email"
                            class="border border-gray-500 @error('email')
                            invalid:border-red-500
                        @enderror px-3 py-1.5 focus:outline-none rounded-md"
                            required value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <label class="capitalize font-medium " for="password">password</label>
                        <input type="password" name="password" id="password" class="border border-gray-500 px-3 py-1.5 focus:outline-none rounded-md"
                            required>
                    </div>
                </div>
                <button type="submit" class="bg-zinc-800 hover:bg-zinc-900 text-white px-6 py-2 w-fit rounded-md">Sign In</button>
            </form>
        </div>
    </div>
</body>

</html>
{{-- 
<body class="bg-[#E8E8E8]">

    <div class="container mx-auto mt-48 max-w-4xl  bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:flex">
            <div class="md:shrink-0">
                <img class="max-h-full max-w-full object-cover md:h-[30rem] md:w-[30rem]" src="/foto.jpeg" alt="">
            </div>

            <div class="p-20">
                <h1 class="text-[#2A2A2A] text-3xl/[32px] font-bold leading-normal">Sign In</h1>
                <h2 class="text-[#646464] text-xs font-medium ">Masuk untuk melanjutkan ke halaman <br>admin</h2>
                <br>
                <form action="" method="post">
                    <label for="" class="text-[#2A2A2A] text-xs font-bold leading-normal">Email</label> <br/>
                    <input type="email" name="" id="" class=" border-2 border-slate-400"><br/><br/>

                    <label for="" class="text-[#2A2A2A] text-xs font-bold leading-normal">Password</label> <br/>
                    <input type="password" name="" id="" class="border-2 border-slate-400"><br/> <br/>

                    <button type="submit" class="bg-black hover:active:bg-slate-500 px-5 py-1.5 text-white text-xs font-semibold leading-normal">Sign In</button>

                </form>
            </div>
        </div>
    </div>

</div>
</body> --}}
