@extends('User.bases.base')

@section('content')

    <body class="bg-gray-100">
        <div class="flex mx-32 my-10">
            <!-- Sidebar -->
            <aside class="w-64 bg-white p-4 border-r border-gray-300 hidden lg:block" id="filter-sidebar">
                <form id="filter-form" action="{{ route('gunpla.filter') }}" method="GET">
                    <!-- Grades -->
                    <h1 class="w-full text-left text-lg font-semibold mb-4">Grades</h1>
                    <div id="filter1" class="space-y-2">
                        @foreach ($grades as $item)
                            <label>
                                <input type="checkbox" name="grades[]" class="mr-2" value="{{ $item->id }}"
                                    {{ in_array($item->id, request('grades', [])) ? 'checked' : '' }}>
                                {{ $item->grade_name }}
                            </label><br>
                        @endforeach
                    </div>

                    <!-- Series -->
                    <h1 class="w-full text-left text-lg font-semibold mb-4 mt-4">Series</h1>
                    <div id="filter2" class="mt-2 space-y-2">
                        @foreach ($series as $item)
                            <label>
                                <input type="checkbox" name="series[]" class="mr-2" value="{{ $item->id }}"
                                    {{ in_array($item->id, request('series', [])) ? 'checked' : '' }}>
                                {{ $item->name }}
                            </label><br>
                        @endforeach
                    </div>

                    <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Filter</button>
                </form>

            </aside>

            <!-- Product Layout -->
            <div class="flex-1 p-4">

                {{-- <!-- Sorting -->
                <div class="flex justify-between mb-4 relative">
                    <h1 class="text-left text-lg font-semibold align-left">Hasil Pencarian untuk "HG Aerial" sebanyak 24
                        produk</h1>
                    <button class="bg-gray-200 px-4 py-2 rounded text-gray-700 flex items-center" onclick="toggleSorting()">
                        Sort Latest <span class="ml-2 transform rotate-0" id="sorting-arrow">▼</span>
                    </button>
                    <div id="sorting-options"
                        class="absolute top-12 right-0 bg-white border border-gray-300 rounded shadow-lg hidden z-10">
                        <button class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-100">
                            <span class="mr-2">⬆️</span> Ascending
                        </button>
                        <button class="flex items-center px-4 py-2 w-full text-left hover:bg-gray-100">
                            <span class="mr-2">⬇️</span> Descending
                        </button>
                    </div>
                </div> --}}

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card Section -->
                    @foreach ($gunpla as $item)
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
                <!-- Pagination -->
                <div class="mt-4 flex justify-center">
                    {{ $gunpla->links() }}
                </div>
            </div>
        </div>

        {{-- <script>
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
        </script> --}}
    </body>
@endsection
