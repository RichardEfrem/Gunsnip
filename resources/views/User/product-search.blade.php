@extends('User.bases.base')



@section('content')
<body class="bg-gray-100">
  <div class="flex mx-32 my-10">
    <!-- Sidebar -->
    <aside class="w-64 bg-white p-4 border-r border-gray-300 hidden lg:block" id="filter-sidebar">
      <!-- Toggleable filter sections -->
      <div class="space-y-4">
        <div>
          <button class="w-full text-left text-lg font-semibold mb-4" onclick="toggleFilter('filter1')">Filter Grades ▼</button>
          <div id="filter1" class=" space-y-2 hidden">
            <label><input type="checkbox" class="mr-2">Super Deformed</label><br>
            <label><input type="checkbox" class="mr-2">High Grade</label><br>
            <label><input type="checkbox" class="mr-2">Master grade</label><br>
            <label><input type="checkbox" class="mr-2">Real Grade</label><br>
            <label><input type="checkbox" class="mr-2">Perfect Grade</label>
          </div>
          <hr class="mt-2">
        </div>
        <div>
          <button class="w-full text-left text-lg font-semibold mb-4" onclick="toggleFilter('filter2')">Filter Scale ▼</button>
          <div id="filter2" class="mt-2 space-y-2 hidden">
          <label><input type="checkbox" class="mr-2">Super Deformed</label><br>
            <label><input type="checkbox" class="mr-2">1/144</label><br>
            <label><input type="checkbox" class="mr-2">1/100</label><br>
            <label><input type="checkbox" class="mr-2">1/60</label><br>
            <label><input type="checkbox" class="mr-2">no scale</label>
          </div>
          <hr class="mt-2">
        </div>
        <div>
          <button class="w-full text-left text-lg font-semibold mb-4" onclick="toggleFilter('filter3')">Filter Rating ▼</button>
          <div id="filter3" class="mt-2 space-y-2 hidden">
          <label><input type="checkbox" class="mr-2">5 stars</label><br>
            <label><input type="checkbox" class="mr-2">4 stars</label><br>
            <label><input type="checkbox" class="mr-2">3 stars</label><br>
          </div>
          <hr class="mt-2">
        </div>
      </div>
    </aside>

    <!-- Product Layout -->
    <div class="flex-1 p-4">
      
      <!-- Sorting -->
      <div class="flex justify-between mb-4 relative">
      <h1 class="text-left text-lg font-semibold align-left">Hasil Pencarian untuk "HG Aerial" sebanyak 24 produk</h1>
        <button class="bg-gray-200 px-4 py-2 rounded text-gray-700 flex items-center" onclick="toggleSorting()">
          Sort Latest <span class="ml-2 transform rotate-0" id="sorting-arrow">▼</span>
        </button>
        <div id="sorting-options" class="absolute top-12 right-0 bg-white border border-gray-300 rounded shadow-lg hidden z-10">
          <button class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-100">
            <span class="mr-2">⬆️</span> Ascending
          </button>
          <button class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-100">
            <span class="mr-2">⬇️</span> Descending
          </button>
        </div>
      </div>

      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Example Product -->
              <!-- Card Section -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
        <!-- Image Section -->
        <div class="w-full h-64 bg-gray-100 relative">
          <a href="/product-info"><img src="akatsuki.webp" alt="RG Akatsuki" class="object-cover w-full h-full" /></a>

          <!-- Buttons (Hidden by default, visible on hover) -->
          <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <!-- Wishlist Button -->
            <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
              </svg>
            </button>
            <!-- Compare Button -->
            <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
            </button>
          </div>

          <!-- Add to Cart Button -->
          <button 
            class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
            style="width: 250px; height: 60px;"
          >
            Add to Cart
          </button>
        </div>

        <!-- Description Section -->
        <div class="p-4">
          <!-- Product Name and Date -->
          <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold">RG Akatsuki</h2>
            <span class="text-sm text-gray-500">Dec 2024</span>
          </div>
          
          <!-- Gundam Series Name -->
          <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
          
          <!-- Price -->
          <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
          
          <!-- Rating -->
          <div class="flex items-center mt-2">
            <!-- Star Icons -->
            <div class="flex text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
            </div>
            <!-- Rating Score -->
            <span class="text-gray-600 text-xs ml-2">4.5/5 (120+ review)</span>
          </div>
        </div>
      </div>


      <!-- Card Section -->
      <div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
        <!-- Image Section -->
        <div class="w-full h-64 bg-gray-100 relative">
          <img src="akatsuki.webp" alt="RG Akatsuki" class="object-cover w-full h-full" />

          <!-- Buttons (Hidden by default, visible on hover) -->
          <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <!-- Wishlist Button -->
            <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
              </svg>
            </button>
            <!-- Compare Button -->
            <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
            </button>
          </div>

          <!-- Add to Cart Button -->
          <button 
            class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
            style="width: 250px; height: 60px;"
          >
            Add to Cart
          </button>
        </div>

        <!-- Description Section -->
        <div class="p-4">
          <!-- Product Name and Date -->
          <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold">RG Akatsuki</h2>
            <span class="text-sm text-gray-500">Dec 2024</span>
          </div>
          
          <!-- Gundam Series Name -->
          <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
          
          <!-- Price -->
          <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
          
          <!-- Rating -->
          <div class="flex items-center mt-2">
            <!-- Star Icons -->
            <div class="flex text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
              </svg>
            </div>
            <!-- Rating Score -->
            <span class="text-gray-600 text-xs ml-2">4.5/5 (120+ review)</span>
          </div>
        </div>
      </div>
</a>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-cover w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-xs ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-xs ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-xs ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>

<!-- Card Section -->
<div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
  <!-- Image Section -->
  <div class="w-full h-64 bg-gray-100 relative">
    <img src="akatsuki.webp" alt="RG Akatsuki" class="object-contain w-full h-full" />

    <!-- Buttons (Hidden by default, visible on hover) -->
    <div class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
      <!-- Wishlist Button -->
      <button class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
      </button>
      <!-- Compare Button -->
      <button class="w-10 h-10 bg-yellow-500 text-white rounded-full flex items-center justify-center shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </button>
    </div>

    <!-- Add to Cart Button -->
    <button 
      class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bg-white text-black text-lg font-semibold shadow-md rounded-lg opacity-0 group-hover:opacity-100 transition-all"
      style="width: 250px; height: 60px;"
    >
      Add to Cart
    </button>
  </div>

  <!-- Description Section -->
  <div class="p-4">
    <!-- Product Name and Date -->
    <div class="flex justify-between items-center">
      <h2 class="text-lg font-semibold">RG Akatsuki</h2>
      <span class="text-sm text-gray-500">Dec 2024</span>
    </div>
    
    <!-- Gundam Series Name -->
    <p class="text-gray-600 text-sm mt-1">Mobile Suit Gundam SEED</p>
    
    <!-- Price -->
    <p class="text-xl font-bold text-gray-800 mt-2">Rp. 700,000</p>
    
    <!-- Rating -->
    <div class="flex items-center mt-2">
      <!-- Star Icons -->
      <div class="flex text-yellow-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
        </svg>
      </div>
      <!-- Rating Score -->
      <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
    </div>
  </div>
</div>
        <!-- Add more products up to 15 items per page -->
      </div>

      <!-- Pagination -->
      <div class="mt-4 flex justify-center">
        <button class="px-4 py-2 border rounded bg-black text-white mx-1">1</button>
        <button class="px-4 py-2 border rounded mx-1 hover:bg-black hover:text-white">2</button>
        <button class="px-4 py-2 border rounded mx-1 hover:bg-black hover:text-white">3</button>
        <!-- Add more pages if needed -->
      </div>
    </div>
  </div>

  <script>
    function toggleFilter(id) {
      const filter = document.getElementById(id);
      filter.classList.toggle('hidden');
    }

    function toggleSorting() {
      const sorting = document.getElementById('sorting-options');
      sorting.classList.toggle('hidden');

      const arrow = document.getElementById('sorting-arrow');
      if (sorting.classList.contains('hidden')) {
        arrow.style.transform = 'rotate(0deg)';
      } else {
        arrow.style.transform = 'rotate(180deg)';
      }
    }
  </script>
</body>
@endsection