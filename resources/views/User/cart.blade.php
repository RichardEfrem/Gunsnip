@extends('User.bases.base')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Check Out</h1>
    <div class="grid grid-cols-4 gap-6">

      <!-- Main Cart Section -->
      <div class="col-span-3 bg-white p-6 rounded shadow">
        <div class="border-b pb-4 mb-4" data-product-index="0">
          <div class="flex items-center">
            <img src="./Lepas Kost3_files/100" alt="Product" class="w-20 h-20 object-cover rounded">
            <div class="ml-4 flex-grow">
              <p class="font-semibold text-lg">High Grade Aerial Rebuild</p>
              <p class="text-gray-600">Rp. 320,000</p>
            </div>
            <div class="flex items-center">
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-l quantity-btn" data-action="decrement">-</button>
              <span id="quantity-display-0" class="w-12 mx-2 text-center border rounded">1</span>
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-r quantity-btn" data-action="increment">+</button>
            </div>
            <div class="ml-4">
              <p id="subtotal-0" class="font-semibold">Rp. 320,000</p>
            </div>
            <button class="ml-4 text-red-500 hover:text-red-700 remove-btn">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Repeat for more products -->
        <div class="border-b pb-4 mb-4" data-product-index="1">
          <div class="flex items-center">
            <img src="akatsuki.webp" alt="Product" class="w-20 h-20 object-cover rounded">
            <div class="ml-4 flex-grow">
              <p class="font-semibold text-lg">High Grade Aerial Rebuild</p>
              <p class="text-gray-600">Rp. 320,000</p>
            </div>
            <div class="flex items-center">
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-l quantity-btn" data-action="decrement">-</button>
              <span id="quantity-display-1" class="w-12 mx-2 text-center border rounded">1</span>
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-r quantity-btn" data-action="increment">+</button>
            </div>
            <div class="ml-4">
              <p id="subtotal-1" class="font-semibold">Rp. 320,000</p>
            </div>
            <button class="ml-4 text-red-500 hover:text-red-700 remove-btn">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>


         <div class="border-b pb-4 mb-4" data-product-index="1">
          <div class="flex items-center">
            <img src="./Lepas Kost3_files/100" alt="Product" class="w-20 h-20 object-cover rounded">
            <div class="ml-4 flex-grow">
              <p class="font-semibold text-lg">High Grade Aerial Rebuild</p>
              <p class="text-gray-600">Rp. 320,000</p>
            </div>
            <div class="flex items-center">
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-l quantity-btn" data-action="decrement">-</button>
              <span id="quantity-display-2" class="w-12 mx-2 text-center border rounded">1</span>
              <button class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-r quantity-btn" data-action="increment">+</button>
            </div>
            <div class="ml-4">
              <p id="subtotal-1" class="font-semibold">Rp. 320,000</p>
            </div>
            <button class="ml-4 text-red-500 hover:text-red-700 remove-btn">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>

      </div>

      <!-- Price Section -->
      <div class="bg-white p-6 rounded shadow">
        <div class="border-b pb-4 mb-4">
          <div class="flex justify-between">
            <p class="text-gray-600">Subtotal</p>
            <p id="subtotal-cart">Rp. 640,000</p>
          </div>
          <div class="flex justify-between mt-2">
            <p class="text-gray-600">Biaya Antar</p>
            <p id="delivery-cost">Rp. 20,000</p>
          </div>
        </div>
        <div class="flex justify-between font-semibold text-lg">
          <p>Total</p>
          <p id="grand-total">Rp. 660,000</p>
        </div>
        <a href="http://127.0.0.1:8000/delivery">
            <button class="w-full mt-6 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Checkout</button>
        </a>
        
      </div>

    </div>
  </div>

  <script>
    const prices = [320000, 320000];
    const deliveryCost = 20000;

    document.addEventListener('click', (event) => {
      const target = event.target;
      const productElement = target.closest('[data-product-index]');
      if (!productElement) return;

      const index = parseInt(productElement.getAttribute('data-product-index'));
      const quantityDisplay = document.getElementById(`quantity-display-${index}`);
      const subtotalElement = document.getElementById(`subtotal-${index}`);

      if (target.classList.contains('quantity-btn')) {
        const action = target.getAttribute('data-action');
        let quantity = parseInt(quantityDisplay.textContent);

        if (action === 'increment') {
          quantity += 1;
        } else if (action === 'decrement') {
          quantity = Math.max(1, quantity - 1);
        }

        quantityDisplay.textContent = quantity;
        const subtotal = prices[index] * quantity;
        subtotalElement.textContent = `Rp. ${subtotal.toLocaleString()}`;
        updateCartTotal();
      }

      if (target.classList.contains('remove-btn')) {
        alert('Remove item functionality is not yet implemented');
      }
    });

    function updateCartTotal() {
      let subtotal = 0;

      prices.forEach((price, index) => {
        const quantity = parseInt(document.getElementById(`quantity-display-${index}`).textContent);
        subtotal += price * quantity;
      });

      document.getElementById('subtotal-cart').textContent = `Rp. ${subtotal.toLocaleString()}`;
      document.getElementById('grand-total').textContent = `Rp. ${(subtotal + deliveryCost).toLocaleString()}`;
    }
  </script>



    </div>

@endsection