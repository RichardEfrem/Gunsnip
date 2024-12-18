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
          <h1 class="text-xl font-bold mb-4">Delivery </h1>

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
              <div class="p-2 bg-black text-white rounded-full">
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
            Barang anda sedang kami proses!
          </h1>
          <p class="my-2 text-gray-500 mb-8">Paket anda akan kami kirim pada 25 Agusts 2024</p>
          <h1 class="text-xl font-bold">
           Estimasi paket anda akan tiba pada 29 Agustus 2024
          </h1>
        

         
  
    <!-- Header -->
    <h1 class="text-xl font-bold text-gray-800">Pilih pembayaran anda</h1>
    <p class="text-sm text-gray-600 mb-4">Pilih metode pembayaran yang ingin anda pakai:</p>

    <!-- Payment Options -->
    <form>
      <!-- Debit Card Option -->
      <div>
        <label class="flex items-center space-x-3">
          <input type="radio" name="payment" value="debit" class="h-4 w-4 text-blue-500" onclick="toggleForm('debitForm')">
          <span class="text-gray-800 font-medium">Debit Card</span>
        </label>
        <div id="debitForm" class="mt-4 hidden">
          <div class="mb-4">
            <label for="name" class="block text-gray-600 mb-2">Name</label>
            <input id="name" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="Your Name">
          </div>
          <div class="mb-4">
            <label for="account" class="block text-gray-600 mb-2">Nomor Akun</label>
            <input id="account" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="Account Number">
          </div>
          <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
              <label for="exp-date" class="block text-gray-600 mb-2">Exp Date</label>
              <input id="exp-date" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="MM/YY">
            </div>
            <div>
              <label for="cvv" class="block text-gray-600 mb-2">CVV</label>
              <input id="cvv" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="CVV">
            </div>
          </div>
          <button type="button" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Save</button>
        </div>
      </div>

      <!-- OVO Option -->
      <div class="mt-4">
        <label class="flex items-center space-x-3">
          <input type="radio" name="payment" value="ovo" class="h-4 w-4 text-blue-500" onclick="toggleForm('ovoForm')">
          <span class="text-gray-800 font-medium">OVO</span>
        </label>
        <div id="ovoForm" class="mt-4 hidden">
          <div class="mb-4">
            <label for="ovo-account" class="block text-gray-600 mb-2">OVO Account Number</label>
            <input id="ovo-account" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="Your OVO Number">
          </div>
          <button type="button" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Save</button>
        </div>
      </div>

      <!-- Gopay Option -->
      <div class="mt-4">
        <label class="flex items-center space-x-3">
          <input type="radio" name="payment" value="gopay" class="h-4 w-4 text-blue-500" onclick="toggleForm('gopayForm')">
          <span class="text-gray-800 font-medium">Gopay</span>
        </label>
        <div id="gopayForm" class="mt-4 hidden">
          <div class="mb-4">
            <label for="gopay-account" class="block text-gray-600 mb-2">Gopay Account Number</label>
            <input id="gopay-account" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="Your Gopay Number">
          </div>
          <button type="button" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Save</button>
        </div>
      </div>

      <!-- Shopee Pay Option -->
      <div class="mt-4">
        <label class="flex items-center space-x-3">
          <input type="radio" name="payment" value="shopeepay" class="h-4 w-4 text-blue-500" onclick="toggleForm('shopeePayForm')">
          <span class="text-gray-800 font-medium">Shopee Pay</span>
        </label>
        <div id="shopeePayForm" class="mt-4 hidden">
          <div class="mb-4">
            <label for="shopeepay-account" class="block text-gray-600 mb-2">Shopee Pay Account Number</label>
            <input id="shopeepay-account" type="text" class="w-full border rounded p-2 focus:outline-blue-500" placeholder="Your Shopee Pay Number">
          </div>
          <button type="button" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Save</button>
        </div>
      </div>
    </form>


  <script>
    function toggleForm(formId) {
      // Hide all forms
      const forms = document.querySelectorAll("[id$='Form']");
      forms.forEach(form => form.classList.add("hidden"));

      // Show selected form
      if (formId) {
        const selectedForm = document.getElementById(formId);
        if (selectedForm) {
          selectedForm.classList.remove("hidden");
        }
      }
    }
  </script>


          
          
          
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