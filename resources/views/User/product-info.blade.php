@extends('User.bases.base')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg my-5">
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

        <!-- Top Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 item-center align-center justify-center">

            <!-- Image Section -->
            <div>
                <!-- Main Product Image -->
                <img id="mainImage" src="{{ asset($gunpla->GunplaImage->first()->image_path) ?? 'default-main-image.jpg' }}"
                    alt="{{ $gunpla->name ?? 'Main Product' }}" class="w-[500px] h-auto rounded-lg mb-4 object-cover" />

                <!-- Thumbnails -->
                <div class="flex gap-2 align-center justify-center">
                    @foreach ($gunpla->GunplaImage as $image)
                        <img src="{{ asset($image->image_path) }}" alt="{{ $gunpla->name ?? 'Thumbnail' }}"
                            class="w-16 h-16 rounded-lg cursor-pointer object-cover" onclick="changeMainImage(this)" />
                    @endforeach
                </div>
            </div>


            <!-- Product Info -->
            <div mt-10>
                <h1 class="text-2xl font-bold mb-2">{{ $gunpla->name }}</h1>
                <h2 class="text-gray-600 mb-2">{{ $gunpla->series->name }}</h2>
                <h2 class="text-gray-600 mb-2">{{ $gunpla->grade->grade_name }}</h2>
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 text-xl mr-2">★★★★★</div>
                    <span class="text-gray-600">(50 reviews)</span>
                </div>
                <p class="text-2xl font-bold text-gray-800 mb-4">Rp. {{ $gunpla->price }}</p>
                <p class="text-lg font-bold text-gray-800 mb-4" id="total">Sub-total = Rp. {{ $gunpla->price }}</p>
                <p class="text-gray-600 mb-4">
                    {{ $gunpla->description }}
                </p>
                <div class="flex gap-4 items-center">
                    <div class="flex items-center border border-gray-300 rounded">
                        <button id="decrease"class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-l"
                            onclick="updateQuantity(-1)">
                            -
                        </button>
                        <span id="quantity"
                            class="w-8 h-8 flex justify-center items-center text-black border-l border-r border-gray-300">
                            1
                        </span>
                        <button id="increase"
                            class="bg-black text-white w-8 h-8 flex justify-center items-center rounded-r"
                            onclick="updateQuantity(1)">
                            +
                        </button>
                    </div>
                    <form action="{{ route('cart.add') }}" method="POST" class="flex gap-4 items-center">
                        @csrf
                        <input type="hidden" name="gunpla_id" value="{{ $gunpla->id }}">
                        <input type="hidden" id="cartQuantity" name="quantity" value="1">
                        <input type="hidden" id="cartSubtotal" name="subtotal" value="{{ $gunpla->price }}">
                        <button type="submit"
                            class="bg-blue-600 text-yellow-400 font-bold px-6 py-2 rounded w-[450px] hover:bg-yellow-400 hover:text-blue-600 ease-in-out duration-300">
                            Add to Cart
                        </button>
                    </form>
                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis urna a arcu cursus
                        laoreet.
                    </p>

                    <img src="akatsuki.webp" alt="Review Image" class="my-2 w-24 h-auto rounded-lg object-cover">
                    <p class="text-sm text-gray-500">Posted on 12 Mei 2024</p>
                </div>
            </div>


            <!-- Recommendations Section -->
            <div class="mt-8 mb-10">
                <h3 class="text-xl font-bold mb-4">Similiar Gunpla</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach ($relatedGunplas as $item)
                        <!-- Product Card -->
                        <!-- Card Section -->
                        <div class="max-w-sm rounded overflow-hidden shadow-lg border group relative">
                            <!-- Image Section -->
                            <div class="w-full h-64 bg-gray-100 relative">
                                <a href="{{ route('productinfo.index', $item->id) }}">
                                    @if ($item->GunplaImage->first())
                                        <img src="{{ asset($item->GunplaImage->first()->image_path) }}"
                                            alt="{{ $item->name }}" class="object-contain w-full h-full" />
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </a>


                                <!-- Buttons (Hidden by default, visible on hover) -->
                                <div
                                    class="absolute top-2 right-2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <!-- Wishlist Button -->
                                    <button
                                        class="w-10 h-10 bg-blue-500 text-white rounded-full flex items-center justify-center shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Description Section -->
                            <div class="p-4">
                                <!-- Product Name and Date -->
                                <div class="flex justify-between items-center">
                                    <h2 class="text-lg font-semibold">{{ $item->name }}</h2>
                                    <span class="text-sm text-gray-500">{{ $item->release_date }}</span>
                                </div>

                                <!-- Gundam Series Name -->
                                <p class="text-gray-600 text-sm mt-1">{{ $item->series->name }}</p>

                                <!-- Price -->
                                <p class="text-xl font-bold text-gray-800 mt-2">Rp. {{ $item->price }}</p>

                                <!-- Rating -->
                                <div class="flex items-center mt-2">
                                    <!-- Star Icons -->
                                    <div class="flex text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.895 1.428 8.219L12 18.896 4.636 23.42l1.428-8.219-6.064-5.895 8.332-1.151z" />
                                        </svg>
                                    </div>
                                    <!-- Rating Score -->
                                    <span class="text-gray-600 text-sm ml-2">4.5/5 (120+ review)</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <script>
            // Initialize the quantity and price
            let quantity = 1;
            let price = {{ $gunpla->price }};
            let totalStock = {{ $gunpla->totalStock ?? 0 }};

            // Function to update quantity and calculate subtotal
            function updateQuantity(change) {
                // Check if adding exceeds stock
                if (change > 0 && quantity >= totalStock) {
                    alert("You can't add more items. Stock limit reached.");
                    return;
                }

                // Update quantity value
                quantity += change;

                // Ensure quantity stays within valid bounds
                if (quantity < 1) {
                    quantity = 1;
                }

                // Calculate subtotal
                let subtotal = quantity * price;

                // Update the UI
                document.getElementById("quantity").innerText = quantity;
                document.getElementById("cartQuantity").value = quantity;
                document.getElementById("cartSubtotal").value = subtotal;
                document.getElementById("total").innerText = `Sub-total = Rp. ${subtotal.toLocaleString()}`;
            }



            function changeMainImage(thumbnail) {
                // Get the source of the clicked thumbnail
                const newSrc = thumbnail.src;

                // Find the main image element and update its source
                const mainImage = document.getElementById("mainImage");
                mainImage.src = newSrc;
            }
        </script>
    @endsection
