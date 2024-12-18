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
          <h1 class="text-xl font-bold mb-4">Delivery Address</h1>

          <!-- Steps -->
          <div class="flex items-center space-x-4">
            <!-- Step 1 -->
            <a href="http://127.0.0.1:8000/delivery" class="flex flex-col items-center text-center">
              <div class="p-2 bg-black text-white rounded-full w-16 h-16">
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
              <div class="p-2 bg-gray-300 rounded-full">
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

          <h1 class="text-xl font-bold">
            Pilih alamat pengantaran anda!
          </h1>
          <p class="my-2 text-gray-500 mb-8">Jika alamat yang tidak ada di pilihan berikut anda bisa menambahkannya sendiri</p>
          <div class="grid grid-cols-2 gap-4">

          <!-- Card Address -->
          <div class="max-w-sm p-4 border rounded-lg shadow-sm">
              <!-- Header -->
              <div class="flex justify-between items-center mb-2">
                <h2 class="text-lg font-bold">Wesley Vijaya Pranata</h2>
                <div class="w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center text-white">
                  <!-- Check Icon -->
                  <input type="checkbox" class="w-5 h-5 text-purple-500 border-gray-300 rounded focus:ring focus:ring-purple-300">
                </div>
              </div>

              <!-- Address -->
              <div class="text-sm text-gray-700 mb-4">
                Jl. Siwalan Kerto VIII no. c15, 61318<br>
                Surabaya, Jawa Timur
              </div>

              <!-- Buttons -->
              <div class="flex space-x-2">
                <!-- Edit Button -->
                <button class="flex items-center px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 mr-2" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a1.5 1.5 0 0 0-2.121 0l-.586.586 2.122 2.122.586-.586a1.5 1.5 0 0 0 0-2.122zm-3.708 3.708L2 15h3.5l9.794-9.794-2.122-2.122z"></path>
                  </svg>
                  Edit
                </button>
                <!-- Delete Button -->
                <button class="flex items-center px-4 py-2 bg-red-100 text-red-600 rounded-md hover:bg-red-200">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 mr-2" viewBox="0 0 16 16">
                    <path d="M5.5 5.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-7zm3 0V5h-2v.5h2zm3 0h1v7a1.5 1.5 0 0 1-1.5 1.5h-4A1.5 1.5 0 0 1 4 12.5v-7h1v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7z"></path>
                    <path fill-rule="evenodd" d="M14.5 4h-3.5a.5.5 0 0 1-.5-.5V3h-4v.5a.5.5 0 0 1-.5.5H1.5a.5.5 0 0 1-.5-.5V2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5zm-3-1V2h-4v1h4z"></path>
                  </svg>
                  Delete
                </button>
              </div>
            </div>

            <!-- Card Address -->
          <div class="max-w-sm p-4 border rounded-lg shadow-sm">
              <!-- Header -->
              <div class="flex justify-between items-center mb-2">
                <h2 class="text-lg font-bold">Wesley Vijaya Pranata</h2>
                <div class="w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center text-white">
                  <!-- Check Icon -->
                  <input type="checkbox" class="w-5 h-5 text-purple-500 border-gray-300 rounded focus:ring focus:ring-purple-300">
                </div>
              </div>

              <!-- Address -->
              <div class="text-sm text-gray-700 mb-4">
                Jl. Siwalan Kerto VIII no. c15, 61318<br>
                Surabaya, Jawa Timur
              </div>

              <!-- Buttons -->
              <div class="flex space-x-2">
                <!-- Edit Button -->
                <button class="flex items-center px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 mr-2" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a1.5 1.5 0 0 0-2.121 0l-.586.586 2.122 2.122.586-.586a1.5 1.5 0 0 0 0-2.122zm-3.708 3.708L2 15h3.5l9.794-9.794-2.122-2.122z"></path>
                  </svg>
                  Edit
                </button>
                <!-- Delete Button -->
                <button class="flex items-center px-4 py-2 bg-red-100 text-red-600 rounded-md hover:bg-red-200">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 mr-2" viewBox="0 0 16 16">
                    <path d="M5.5 5.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-7zm3 0V5h-2v.5h2zm3 0h1v7a1.5 1.5 0 0 1-1.5 1.5h-4A1.5 1.5 0 0 1 4 12.5v-7h1v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7z"></path>
                    <path fill-rule="evenodd" d="M14.5 4h-3.5a.5.5 0 0 1-.5-.5V3h-4v.5a.5.5 0 0 1-.5.5H1.5a.5.5 0 0 1-.5-.5V2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5zm-3-1V2h-4v1h4z"></path>
                  </svg>
                  Delete
                </button>
              </div>
            </div>
            
          </div>
            <a href="http://127.0.0.1:8000/delivery-card">
              <button class="w-full mt-6 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Konfirmasi</button>
            
            </a>
          </div>

        <hr class="my-6">

        <!-- Add New Address Form -->
        <div>
          <h2 class="text-lg font-semibold mb-4">Add new Address</h2>
          <form>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" class="mt-1 block w-full border-gray-300 rounded shadow-sm  focus:ring-blue-500 focus:border-blue-500 h-10 p-3">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input type="text" id="phone" class="mt-1 block w-full border-gray-300 h-10 p-3 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>
            <div class="mt-4">
              <label for="address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
              <input type="text" id="address" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 h-10 p-3">
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
              <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                <select id="kelurahan" class="mt-1 block w-full h-12 border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 text-base px-4 leading-10">
                  <option class="h-10 p-3">Pilih Kelurahan</option>
                </select>
              </div>
              <div>
                <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                <select id="kecamatan" class="mt-1 block w-full h-12 border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 text-base px-4 leading-10">
                  <option>Pilih Kecamatan</option>
                </select>
              </div>
              <div>
                <label for="kota" class="block text-sm font-medium text-gray-700">Kota</label>
                <select id="kota" class="mt-1 block w-full h-12 border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 text-base px-4 leading-10">
                  <option>Pilih Kota</option>
                </select>
              </div>
              <div>
                <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                <select id="provinsi" class="mt-1 block w-full h-12 border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 text-base px-4 leading-10">
                  <option>Pilih Provinsi</option>
                </select>
              </div>
            </div>
            <div class="mt-4">
              <label for="postal-code" class="block text-sm font-medium text-gray-700">Kode Pos</label>
              <input type="text" id="postal-code" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500 h-10 p-3">
            </div>
            <button class="w-full mt-6 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Tambah Alamat</button>
          </form>
        </div>

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