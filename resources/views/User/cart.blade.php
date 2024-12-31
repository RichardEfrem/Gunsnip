@extends('User.bases.base')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
<div class="container mx-auto p-6">
  @if (session('success'))
  <script>
      document.addEventListener('DOMContentLoaded', function() {
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
    <h1 class="text-2xl font-bold mb-6">{{ Auth::user()->name }} Cart</h1>
    <div class="grid grid-cols-4 gap-6">
        <!-- Main Cart Section -->
        <div class="col-span-3 bg-white p-6 rounded shadow">
            @if ($cartItems && $cartItems->isNotEmpty())
                @foreach ($cartItems as $index => $item)
                <div class="border-b pb-4 mb-4" data-product-index="{{ $index }}">
                    <div class="flex items-center">
                      <img src="{{ $item->gunpla->GunplaImage->first() ? asset($item->gunpla->GunplaImage->first()->image_path) : asset('default-image.jpg') }}" alt="Product" class="w-20 h-20 object-cover rounded">

                        <div class="ml-4 flex-grow">
                            <p class="font-semibold text-lg">{{ $item->gunpla->name }} ( {{ $item->amount }} )</p>
                            <p class="text-gray-600">Rp. {{ number_format($item->gunpla->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="ml-4 flex">
                            <p id="subtotal-{{ $index }}" class="font-semibold">Rp. {{ number_format($item->sub_total, 0, ',', '.') }}</p>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="ml-4">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="text-red-500 hover:text-red-700 remove-btn">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                  </svg>
                              </button>
                          </form>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>

        <!-- Price Section -->
        @if ($cartItems && $cartItems->isNotEmpty())
        <div class="bg-white p-6 rounded shadow">
            <div class="border-b pb-4 mb-4">
                <div class="flex justify-between">
                    <p class="text-gray-600">Subtotal</p>
                    <p id="subtotal-cart">Rp. {{ number_format($cart ? $cart->total_price : 0, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between mt-2">
                    <p class="text-gray-600">Delivery Fee</p>
                    <p id="delivery-cost">Rp. 20,000</p>
                </div>
            </div>
            <div class="flex justify-between font-semibold text-lg">
                <p>Total</p>
                <p id="grand-total">Rp. {{ number_format(($cart ? $cart->total_price : 0) + 20000, 0, ',', '.') }}</p>
            </div>
            <form action="{{ route('cart.order') }}" method="POST" id="checkout-form">
                @csrf
                <button type="button" id="checkout-btn" class="w-full mt-6 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                    Checkout
                </button>
            </form>
        </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener('click', (event) => {
        const target = event.target;

        // Handle increment and decrement buttons
        if (target.classList.contains('quantity-btn')) {
            const action = target.getAttribute('data-action');
            const itemId = target.getAttribute('data-item-id');
            const quantityDisplay = document.getElementById(`quantity-display-${itemId}`);
            const subtotalElement = document.getElementById(`subtotal-${itemId}`);

            // Logic for incrementing or decrementing quantity can be added here
            // and AJAX calls to update the backend can be made.
        }
    });

    document.getElementById('checkout-btn')?.addEventListener('click', function(event) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Once placed, the order cannot be canceled.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, place order',
            cancelButtonText: 'No, go back'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('checkout-form').submit();
            }
        });
    });
</script>
@endsection
