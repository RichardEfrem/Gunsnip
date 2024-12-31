<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body class="bg-gray-100 h-full w-full flex">
    <div class="flex bg-white h-full w-full">
        <!-- Left Side Image -->
        <div class="w-1/2 h-full">
            <img src="storage/assets/GRegister.png" alt="Robot Image" class="h-full w-full object-cover">
        </div>
        <!-- Right Side Form -->
        <div class="p-8 w-1/2 flex flex-col justify-center">
            <div class="w-full max-w-[80%]">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Account</h1>
                <form class="space-y-4" method="POST" action="{{ route('register.submit') }}">
                    @csrf
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Username</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Enter your username">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter your email">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Enter your password">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Password Confirmation</label>
                        <input class="shadow appearance-none border border-black border-2 rounded rounded-[15px] w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" name="password_confirmation" type="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="w-full bg-blue-700 text-[#FFD700] text-2xl font-bold py-3 px-4 rounded-[15px] rounded focus:outline-none focus:shadow-outline hover:bg-blue-500 hover:text-red-500 transition duration-300" type="button">Sign up</button>
                </form>
                <div class="flex flex-col items-center text-sm space-y-2 mt-4">
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Already Have an Account? Login</a>
                    <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

