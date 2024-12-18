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
      <li class="relative group">
        <a href="#" class="hover:text-yellow-300" id="shopButton">Shop ▼</a>
     
        

      <li><a href="#" class="hover:text-yellow-300">Contact us</a></li>
    </ul>
    <!-- Icons -->
    <div class="flex items-center space-x-4">
      <a href="#" class="hover:text-orange-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50" fill="currentColor" id="search-btn">
            <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
          </svg>
        </a>

        <a href="cart" class="hover:text-orange-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </a>

      <a href="notification" class="hover:text-orange-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
          <path d="M 12 2 C 11.172 2 10.5 2.672 10.5 3.5 L 10.5 4.1953125 C 7.9131836 4.862095 6 7.2048001 6 10 L 6 16 L 4 18 L 4 19 L 10.269531 19 A 2 2 0 0 0 10 20 A 2 2 0 0 0 12 22 A 2 2 0 0 0 14 20 A 2 2 0 0 0 13.728516 19 L 20 19 L 20 18 L 18 16 L 18 10 C 18 7.2048001 16.086816 4.862095 13.5 4.1953125 L 13.5 3.5 C 13.5 2.672 12.828 2 12 2 z M 12 6 C 14.206 6 16 7.794 16 10 L 16 16 L 16 16.828125 L 16.171875 17 L 7.828125 17 L 8 16.828125 L 8 16 L 8 10 C 8 7.794 9.794 6 12 6 z"></path>
        </svg>
      </a>

      <a href="" class="hover:text-orange-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
          </svg>
      </a>

      <div class="flex items-center mb-2">
            <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
        <div>
    </div>

  </nav>
  <div class="grid justify-center items-center align-center hidden p-3 bg-blue-600 transition ease-in-out delay-150" id="search-input">
      <div class="relative w-full max-w-lg">
    <input 
        type="text" 
        placeholder="Search...." 
        class="w-[500px] py-2 px-4 rounded-md border focus:ring-2 focus:ring-blue-500 focus:outline-none"
    />
    <a href="product-search">
      <button class="absolute top-1/2 right-2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50" fill="currentColor" id="search-btn">
            <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
          </svg>
      </button>
    </a>
    
    </div>
</div>

  <!-- Mega Menu -->

  <div id="megaMenu" class="z-40 hidden grid absolute bg-blue-600 text-yellow-400 w-full left-0 top-12 shadow-lg justify-center items-center align-center">
    <div class="grid grid-cols-3 gap-6 max-w-7xl mx-auto p-6 bg-cover bg-center">
            <!-- Column 1 -->
            <div class="mx-10">
              <h3 class="font-bold mb-3">Grades</h3>
              <ul class="space-y-2">
              <a href=""class="hover:text-red-600 focus:outline-none"><li>High Grades</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Real Grade</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Master Grade</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Perfect Grade</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Super Deformed</li></a>
              </ul>
            </div>
            <!-- Column 2 -->
            <div class="mx-10">
              <h3 class="font-bold mb-3">Scale</h3>
              <ul class="space-y-2">
              <a href=""class="hover:text-red-600 focus:outline-none"><li>no scale</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Deformed</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>1/144</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>1/100</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>1/60</li></a>
              </ul>
            </div>
            <!-- Column 3 -->
            <div class="mx-10">
              <h3 class="font-bold mb-3">Series</h3>
              <ul class="space-y-2">
              <a href=""class="hover:text-red-600 focus:outline-none"><li>Gundam UC</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Gundam Iron Blooded Orphan</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Gundam SEED</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Gundam Wing</li></a>
                <a href=""class="hover:text-red-600 focus:outline-none"><li>Gundam 00</li></a>
              </ul>
            </div>
          </div>
        </div>
      </li>


  
<script>
    const searchBtn = document.getElementById('search-btn');
    const searchInput = document.getElementById('search-input');

    searchBtn.addEventListener('click', () => {
      searchInput.classList.toggle('hidden');
    });

    const shopButton = document.getElementById('shopButton');
    const megaMenu = document.getElementById('megaMenu');

    shopButton.addEventListener('click', () => {
      megaMenu.classList.toggle('hidden'); // Show/hide the menu
      megaMenu.classList.toggle('animate-fade-in'); // Add animation class
    });
</script>

</body>
</html>
