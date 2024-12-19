<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white-600 overflow-auto">
    <nav class="bg-blue-600 text-yellow-400 px-10 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-lg font-bold">
            <a href="/">GUNSNIP</a>
        </div>
        <!-- Navigation Links -->
        <ul class="flex space-x-10 items-center">
            <li><a href="/" class="hover:text-yellow-300">Home</a></li>
            <li class="relative group"><a href="{{ route('productpage.index') }}" class="hover:text-yellow-300">Shop</a>
            <li><a href="#" class="hover:text-yellow-300">Contact us</a></li>
        </ul>
        <!-- Icons -->
        <div class="flex items-center space-x-4">
            <a href="#" class="hover:text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50"
                    fill="currentColor" id="search-btn">
                    <path
                        d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                    </path>
                </svg>
            </a>

            <a href="cart" class="hover:text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" width="30" height="30">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>

            <a href="orders" class="hover:text-orange-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
              </svg>
              
            </a>

            <a href="" class="hover:text-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
            </a>

            @auth
                <!-- If the user is authenticated, you can display user-specific elements -->
                <span class="text-white">Welcome, {{ Auth::user()->name }}</span>
            @else
                <!-- Show login button only if not authenticated -->
                <button class="bg-yellow-400 text-blue-600 px-5 py-1 rounded hover:bg-yellow-300">
                    <a href="{{ route('login') }}">Login</a>
                </button>
            @endauth
        </div>

    </nav>
    <div class="grid justify-center items-center align-center hidden p-3 bg-blue-600 transition ease-in-out delay-150"
        id="search-input">
        <div class="relative w-full max-w-lg">
            <input type="text" placeholder="Search...."
                class="w-[500px] py-2 px-4 rounded-md border focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            <a href="product-search">
                <button
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50"
                        fill="currentColor" id="search-btn">
                        <path
                            d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                        </path>
                    </svg>
                </button>
            </a>

        </div>
    </div>
    </li>



    <script>
        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');

        searchBtn.addEventListener('click', () => {
            searchInput.classList.toggle('hidden');
        });

        // const shopButton = document.getElementById('shopButton');
        // const megaMenu = document.getElementById('megaMenu');

        // shopButton.addEventListener('click', () => {
        //     megaMenu.classList.toggle('hidden'); // Show/hide the menu
        //     megaMenu.classList.toggle('animate-fade-in'); // Add animation class
        // });
    </script>

</body>

</html>
