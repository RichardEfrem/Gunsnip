@extends('User.bases.base')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <style>
        /* Simple fade animation */
        .carousel-item {
            display: none;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .carousel-item.active {
            display: block;
            opacity: 1;
        }

        .card {
            width: var(--card-width);
            height: var(--card-height);
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding: 0 36px;
            perspective: 2500px;
            margin: 0 50px;
            border-radius: 5px;
        }

        .cover-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .wrapper {
            transition: all 0.5s;
            position: absolute;
            width: 100%;
            z-index: -1;
            border-radius: 5px;
        }

        .card:hover .wrapper {
            transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
            box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
            border-radius: 5px;
        }

        .wrapper::before,
        .wrapper::after {
            content: "";
            opacity: 0;
            width: 100%;
            height: 80px;
            transition: all 0.5s;
            position: absolute;
            left: 0;
            border-radius: 5px;
        }

        .wrapper::before {
            top: 0;
            height: 100%;
            background-image: linear-gradient(to top,
                    transparent 46%,
                    rgba(12, 13, 19, 0.5)68%,
                    rgba(12, 13, 19) 97%);
            border-radius: 5px;
        }

        .wrapper::after {
            bottom: 0;
            opacity: 1;
            background-image: linear-gradient(to bottom,
                    transparent 46%,
                    rgba(12, 13, 19, 0.5) 68%,
                    rgba(12, 13, 19)97%);
            border-radius: 5px;
        }

        .card:hover .wrapper::before,
        .wrapper::after {
            opacity: 1;
        }

        .card:hover .wrapper::after {
            height: 120px;
        }

        .title {
            width: 100%;
            transition: transform 0.5s;
        }

        .card:hover .title {
            transform: translate3d(0%, -50px, 100px);
        }

        .character {
            width: 100%;
            opacity: 0;
            transition: all 0.5s;
            position: absolute;
            z-index: -1;
        }

        .card:hover .character {
            opacity: 1;
            transform: translate3d(0%, -30%, 100px);
        }
    </style>
    <div class="grid justify-center item-center overflow-hidden">
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
        <div class="relative w-[1600px] h-full px-20 mt-5 overflow-hidden">
            <!-- Slider Container -->
            <div id="carousel" class="relative">
                @foreach ($banners as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ asset($item->imagepath) }}" alt="{{ $item->imagepath }}" class="w-full">
                    </div>
                @endforeach
            </div>

            <!-- Manual Navigation -->
            <div class="absolute inset-0 flex justify-center items-end mb-4 space-x-5">
                @foreach ($banners as $key => $item)
                    <button class="w-3 h-3 bg-gray-300 rounded-full hover:bg-gray-500"
                        data-slide="{{ $key }}"></button>
                @endforeach
            </div>
        </div>
    </div>
    <div class= "grid items-center justify-center">

        <div class="container bg-white w-[100%] my-5 mx-auto p-3 rounded-lg shadow-lg">
            <!-- Browse by Grades Section -->
            <section class="py-50">
                <div class="container mx-auto px-6">

                    <div class="flex justify-between">
                        <h2 class="text-2xl font-bold mb-6">Browse by Grades</h2>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-36">
                        <!-- Grade Cards -->
                        <a href="{{ route('gunpla.filterbygrade', 'Super Deformed') }}">
                            <div class="card">
                                <div class="wrapper">
                                    <img src="storage/img/cover/sd.jpg" class="cover-image" />
                                </div>
                                <img src="storage/img/tittle/sd.webp" class="title" />
                                <img src="storage/img/sd.png" class="character" />
                            </div>
                        </a>
                        <a href="{{ route('gunpla.filterbygrade', 'High Grade') }}">
                            <div class="card">
                                <div class="wrapper">
                                    <img src="storage/img/cover/hg.jpg" class="cover-image" />
                                </div>
                                <img src="storage/img/tittle/hg.webp" class="title" />
                                <img src="storage/img/Hg.png" class="character" />
                            </div>
                        </a>

                        <a href="{{ route('gunpla.filterbygrade', 'Real Grade') }}">
                            <div class="card">
                                <div class="wrapper">
                                    <img src="storage/img/cover/rg.webp" class="cover-image" />
                                </div>
                                <img src="storage/img/tittle/rg.webp" class="title" />
                                <img src="storage/img/rg.png" class="character" />
                            </div>
                        </a>

                        <a href="{{ route('gunpla.filterbygrade', 'Master Grade') }}">
                            <div class="card">
                                <div class="wrapper">
                                    <img src="storage/img/cover/mg.jpg" class="cover-image" />
                                </div>
                                <img src="storage/img/tittle/mg.jpg" class="title" />
                                <img src="storage/img/mg.png" class="character" />
                            </div>
                        </a>

                        <a href="{{ route('gunpla.filterbygrade', 'Perfect Grade') }}">
                            <div class="card">
                                <div class="wrapper">
                                    <img src="storage/img/cover/pg.jpg" class="cover-image" />
                                </div>
                                <img src="storage/img/tittle/pg.png" class="title" />
                                <img src="storage/img/pg.png" class="character" />
                            </div>
                        </a>
                    </div>
            </section>

            <!-- Upcoming Release Section -->
            <section class="py-10">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between">
                        <h2 class="text-2xl font-bold mb-6">New Item</h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @foreach ($gunplanew as $item)
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
            </section>

            <!-- Popular Items Section -->
            <section class="py-10">
                <div class="container mx-auto px-6">
                    <div class="flex justify-between">
                        <h2 class="text-2xl font-bold mb-6">Popular items</h2>
                        <a href="" class="mt-1"><svg width="24" height="24"
                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                            </svg></a>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @foreach ($gunplatop as $item)
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
            </section>

        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.carousel-item');
        const buttons = document.querySelectorAll('[data-slide]');
        let currentIndex = 0;

        // Show the slide at a specific index
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        // Auto-slide every 10 seconds
        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }, 10000);

        // Manual navigation
        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                currentIndex = index;
                showSlide(index);
            });
        });
    </script>
@endsection
