@extends('User.bases.base')

@section('content')
<div class="container mx-auto p-6">
    <!-- Main Content Section -->
    <div class="grid grid-cols-4 gap-6 mx-20">

      <!-- Main Section -->
      <div class="col-span-3 bg-white p-6 rounded shadow">
        <!-- Mini Navigation -->
        <div class="flex flex-col mb-8">
          <!-- Page Title -->
          <h1 class="text-xl font-bold mb-4">Order Summary</h1>

          <!-- Steps -->
          <div class="flex items-center space-x-4">
            <!-- Step 1 -->
            <a href="http://127.0.0.1:8000/delivery" class="flex flex-col items-center text-center">
              <div class="p-2 bg-gray-300 rounded-full">
                <!-- House Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2.1L1 12h3v9h7v-6h2v6h7v-9h3L12 2.1zm0 2.7l6 5.4v8.8h-3v-6H9v6H6V10.2l6-5.4z"></path>
                </svg>
              </div>
              <span class="mt-2 text-sm font-medium">Address</span>
            </a>

            <!-- Dotted Line -->
            <div class="w-36 h-px bg-gray-400"></div>

            <!-- Step 2 -->
            <a href="http://127.0.0.1:8000/delivery-card" class="flex flex-col items-center text-center">
              <div class="p-2 bg-gray-300 rounded-full">
                <!-- Credit Card Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 16 16" fill="currentColor">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"></path>
                  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"></path>
                </svg>
              </div>
              <span class="mt-2 text-sm font-medium">Payment</span>
            </a>

            <!-- Dotted Line -->
            <div class="w-36 h-px bg-gray-400"></div>

            <!-- Step 3 -->
            <a href="http://127.0.0.1:8000/delivery-delivered" class="flex flex-col items-center text-center">
              <div class="p-2 bg-gray-300 rounded-full">
                <!-- Box Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 16 16" fill="currentColor">
                  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"></path>
                </svg>
              </div>
              <span class="mt-2 text-sm font-medium">Shipping</span>
            </a>

            <!-- Dotted Line -->
            <div class="w-36 h-px bg-gray-400"></div>

            <!-- Step 4 -->
            <a href="http://127.0.0.1:8000/delivery-summary" class="flex flex-col items-center text-center">
              <div class="p-2 bg-black text-white rounded-full">
                <!-- List Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 128 128" fill="currentColor">
                  <path d="M33.5 9c-7.2 0-13 5.8-13 13v80c0 7.2 5.8 13 13 13h61c7.2 0 13-5.8 13-13V22c0-7.2-5.8-13-13-13H33.5zM33.5 15h61c3.9 0 7 3.1 7 7v80c0 3.9-3.1 7-7 7h-61c-3.9 0-7-3.1-7-7V22c0-3.9 3.1-7 7-7zm0 7v15h61V22H33.5zm4 29c-1.7 0-3 1.3-3 3s1.3 3 3 3h51c1.7 0 3-1.3 3-3s-1.3-3-3-3h-51zm0 15c-1.7 0-3 1.3-3 3s1.3 3 3 3h51c1.7 0 3-1.3 3-3s-1.3-3-3-3h-51zm0 15c-1.7 0-3 1.3-3 3s1.3 3 3 3h26c1.7 0 3-1.3 3-3s-1.3-3-3-3h-26z"></path>
                </svg>
              </div>
              <span class="mt-2 text-sm font-medium">Summary</span>
            </a>
          </div>
        </div>


        <!-- Address Selection -->
        <div class="mb-6">

          <h1 class="text-xl font-bold mb-5">
            Paket anda telah tiba! 
          </h1>
          

            
                <!-- Product Information -->
                <div class="border-b pb-4 mb-4">
                <div class="flex items-center space-x-4">
                    <img src="./Summary_files/80" alt="HG Aerial 1/144" class="w-20 h-20 object-cover">
                    <div>
                    <h2 class="text-lg font-bold text-gray-800">HG Aerial 1/144</h2>
                    <p class="text-gray-600">Rp. 320.000</p>
                    </div>
                </div>
                </div>

                <!-- Shipping Address -->
                <div class="border-b pb-4 mb-4">
                <h3 class="text-sm font-bold text-gray-800 mb-2">Alamat Pengiriman</h3>
                <p class="text-gray-800">Wesley Vijaya Pranata</p>
                <p class="text-gray-600">Jl. Apokat no. 38, Kota Mojokerto, Jawa Timur, 61312</p>
                <p class="text-gray-600 flex items-center">
                    
                    +628401741114
                </p>
                </div>

                <!-- Payment Information -->
                <div>
                <h3 class="text-sm font-bold text-gray-800 mb-2">Pembayaran</h3>
                <p class="text-gray-800">OVO (08********99)</p>
                </div>
           


          
          <a href="http://127.0.0.1:8000/">          
            <button class="w-full mt-6 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Kembali</button>
          </a>
        </div>

        <hr class="my-6">

        <!-- Add New Address Form -->
        

      </div>

      <!-- Subtotal Section -->
      <div class="bg-white p-6 rounded shadow">
        <div class="border-b pb-4 mb-4">
          <div class="flex justify-between">
            <p class="text-gray-600">Subtotal</p>
            <p id="subtotal-cart">Rp. 320,000</p>
          </div>
          <div class="flex justify-between mt-2">
            <p class="text-gray-600">Biaya Antar</p>
            <p id="delivery-cost">Rp. 20,000</p>
          </div>
        </div>
        <div class="flex justify-between font-semibold text-lg">
          <p>Total</p>
          <p id="grand-total">Rp. 340,000</p>
        </div>
      </div>

    </div>
  </div>
    </div>
@endsection