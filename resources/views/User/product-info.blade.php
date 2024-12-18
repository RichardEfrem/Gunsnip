@extends('User.bases.base')

@section('content')
<div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg my-5">

    <!-- Top Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 item-center align-center justify-center">

      <!-- Image Section -->
    <div>
  <!-- Main Product Image -->
      <img
        id="mainImage"
        src="img/cover/pg.jpg"
        alt="Main Product"
        class="w-[500px] h-auto rounded-lg mb-4 object-cover"
      />

      <!-- Thumbnails -->
      <div class="flex gap-2 align-center justify-center">
        <img
          src="akatsuki.webp"
          alt="Thumbnail 1"
          class="w-16 h-16 rounded-lg cursor-pointer object-cover"
          onclick="changeMainImage(this)"
        />
        <img
          src="img/cover/pg.jpg"
          alt="Thumbnail 2"
          class="w-16 h-16 rounded-lg cursor-pointer object-cover"
          onclick="changeMainImage(this)"
        />
        <img
          src="banner1.jpg"
          alt="Thumbnail 3"
          class="w-16 h-16 rounded-lg cursor-pointer object-cover"
          onclick="changeMainImage(this)"
        />
        <img
          src="https://via.placeholder.com/80/0000FF"
          alt="Thumbnail 4"
          class="w-16 h-16 rounded-lg cursor-pointer object-cover"
          onclick="changeMainImage(this)"
        />
  </div>
</div>

      <!-- Product Info -->
      <div mt-10>
        <h1 class="text-2xl font-bold mb-2">High Grade Aerial Rebuild</h1>
        <h2 class="text-gray-600 mb-2">The Witch from Mercury</h2>
        <h2 class="text-gray-600 mb-2"> Scale 1 / 144</h2>
        <div class="flex items-center mb-4">
          <div class="text-yellow-400 text-xl mr-2">★★★★★</div>
          <span class="text-gray-600">(50 reviews)</span>
        </div>
        <p class="text-2xl font-bold text-gray-800 mb-4">Rp 220.000</p>
        <p class="text-gray-600 mb-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, eveniet. Neque minima reprehenderit accusamus saepe ducimus odio, labore harum minus, quas nam, delectus blanditiis totam explicabo magnam dolore? Omnis, facere.
        </p>
        <div class="flex gap-4 items-center">
        <div class="flex items-center border border-gray-300 rounded">
  <button id="decrease"class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-l"onclick="updateQuantity(-1)">
    -
  </button>
  <span
    id="quantity"
    class="w-8 h-8 flex justify-center items-center text-black border-l border-r border-gray-300"
  >
    1
  </span>
  <button
    id="increase"
    class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-r"
    onclick="updateQuantity(1)"
  >
    +
  </button>
</div>
          <button class="bg-blue-600 text-yellow-400 font-bold px-6 py-2 rounded w-[450px]">Checkout</button>
          <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
              </svg>
          </button>
        </div>
      </div>

    </div>

    <!-- Review Section -->
    <div class="mt-8">
      <h3 class="text-xl font-bold mb-4">Review Pembeli</h3>
      <div class="space-y-4">
        <!-- Single Review -->
        <div class="bg-gray-100 p-4 rounded-lg shadow mb-5">
          <div class="flex items-center mb-2">
            <img src="img/cover/pg.jpg" alt="User" class="w-10 h-10 rounded-full mr-3 object-cover">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <div class="text-yellow-400 text-sm">★★★★☆</div>
            </div>
          </div>
          <p class="text-gray-700 mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis urna a arcu cursus laoreet.
          </p>
          
          <img src="akatsuki.webp" alt="Review Image" class="my-2 w-24 h-auto rounded-lg object-cover">
          <p class="text-sm text-gray-500">Posted on 12 Mei 2024</p>
        </div>
      </div>

      <div class="bg-gray-100 p-4 rounded-lg shadow mb-5">
          <div class="flex items-center mb-2">
            <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full mr-3">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <div class="text-yellow-400 text-sm">★★★★☆</div>
            </div>
          </div>
          <p class="text-gray-700 mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis urna a arcu cursus laoreet.
          </p>
    
          <p class="text-sm text-gray-500">Posted on 12 Mei 2024</p>
        </div>
      </div> 

      <!-- Recommendations Section -->
    <div class="mt-8 mb-10">
      <h3 class="text-xl font-bold mb-4">Produk Serupa</h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Single Recommendation -->
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
        <!-- Repeat other products -->
      </div>
    </div>
  </div>

    

  

  <script>
  // Initialize the quantity
  let quantity = 1;

  // Function to update quantity
  function updateQuantity(change) {
    // Update quantity value
    quantity += change;

    // Ensure quantity stays within valid bounds
    if (quantity < 1) {
      quantity = 1;
    }

    // Update the UI
    document.getElementById("quantity").innerText = quantity;
  }
  // Function to change the main image
  function changeMainImage(thumbnail) {
    // Get the src of the clicked thumbnail
    const newSrc = thumbnail.src;

    // Update the main image src
    document.getElementById("mainImage").src = newSrc;
  }
</script>

@endsection