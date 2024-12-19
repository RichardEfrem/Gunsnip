{{-- @extends('User.bases.base')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="container mx-auto pt-5 px-20" role="main">
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });
            </script>
        @endif
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-[52%] max-md:ml-0 max-md:w-full">
                <div
                    class="flex relative flex-col grow px-8 pt-6 text-5xl font-extrabold text-center text-black whitespace-nowrap max-h-[500px] max-w-full  pb-[926px] max-md:px-5 max-md:pb-24 max-md:mt-5 max-md:max-w-full max-md:text-4xl">
                    <img loading="lazy" src="storage/assets/gundam1.jpg" class="object-cover absolute inset-0 size-full"
                        alt="GUNSNIP background image" />
                    <h1>GUNSNIP</h1>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-[48%] max-md:ml-0 max-md:w-full">
                <h2 id="login-title" class="self-start text-5xl tracking-[3.2px] max-md:max-w-full max-md:text-4xl">
                    Launch Mobile Suit!
                </h2>
                <form
                    method="POST" action="{{ route('login.submit') }}" class="flex flex-col self-stretch my-auto text-2xl font-extrabold text-black max-md:mt-10 max-md:max-w-full"
                    aria-labelledby="login-title">
                    @csrf

                    <label for="email" class="self-start mt-10 tracking-wider  max-md:mt-10">
                        Username / Email Address
                    </label>
                    <input type="email" id="email" name="email"
                        class="px-7 py-7 mt-3.5 whitespace-nowrap bg-white rounded-2xl border-black border-solid border-[3px] max-md:px-5 max-md:max-w-full"
                        placeholder="Aerial@gmail.com" required aria-required="true" />

                    <label for="password" class="self-start mt-5 tracking-wider  max-md:mt-10">
                        Password
                    </label>
                    <input type="password" id="password" name="password"
                        class="px-7 py-7 mt-3.5 whitespace-nowrap bg-white rounded-2xl border-black border-solid border-[3px] max-md:px-5 max-md:max-w-full"
                        placeholder="***************" required aria-required="true" />

                    <a href="#forgot-password"
                        class="self-center mt-8 text-xl font-light hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Forgot Password?
                    </a>

                    <a href="{{ route('register') }}"
                        class="self-center mt-2.5 text-xl font-light hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Don't Have an Account? Register
                    </a>

                    <button type="submit"
                        class="px-16 py-5 mt-16 text-4xl tracking-widest text-center text-yellow-400 whitespace-nowrap bg-blue-700 rounded-2xl max-md:px-5 max-md:mt-10 max-md:max-w-full hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body class="bg-gray-100 h-full w-full flex">
    @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });
            </script>
        @endif
    <div class="flex bg-white h-full w-full">
        <!-- Left Side Image -->
        <div class="w-1/2 h-full">
            <img src="" alt="Robot Image" class="h-full w-full object-cover">
        </div>
        <!-- Right Side Form -->
        <div class="p-8 w-1/2 flex flex-col justify-center">
            <div class="w-full max-w-[80%]">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Launch Mobile Suit!</h1>
                <form class="space-y-4" method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Username / Email Address</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
                    </div>
                    <div class="flex flex-col items-center text-sm space-y-2 mt-4">
                        <a href="#" class="text-blue-500 hover:underline">Forgot Password?</a>
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Don't Have an Account? Register</a>
                    </div>
                    
                    <button class="w-full bg-blue-700 text-[#FFD700] text-2xl font-bold py-3 px-4 rounded-[15px] rounded focus:outline-none focus:shadow-outline hover:bg-blue-500 hover:text-red-500 transition duration-300" type="button">Login</button>

                    <div class="flex flex-col items-center text-sm space-y-2 mt-4">
                        <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Back to Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

