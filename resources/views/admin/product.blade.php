@extends('admin/base.base')

@section('admin/content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section class="mt-4">

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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

    <h1 class="text-4xl font-bold">Gunpla Products</h1>

    <div class="mt-10">
        <a href="{{ route('addproduct.open') }}" class="bg-slate-500 hover:bg-slate-800 text-white rounded-md p-2 ease-in-out duration-300">Add New Gunpla</a>
    </div>

    <div>
        <form action="{{ route('product.index') }}" method="GET">
            <input 
                type="text" 
                class="mt-4 bg-gray-200 pr-60 pl-4 py-2 rounded-md" 
                placeholder=" Search Gunpla " 
                name="search" 
                value="{{ request('search') }}">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-800 text-white rounded-md p-2 ml-2 ease-in-out duration-300">
                Search
            </button>
        </form>
    </div>

    <div class="mt-6">
        <form action="{{ route('product.index') }}" method="GET">
            <!-- Grade Filter -->
            <select name="grade" class="bg-gray-200 px-4 py-2 rounded-md">
                <option value="">Filter by Grade</option>
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}" {{ request('grade') == $grade->id ? 'selected' : '' }}>
                        {{ $grade->grade_name }}
                    </option>
                @endforeach
            </select>
    
            <!-- Release Date Filter -->
            <input 
                type="date" 
                name="release_date" 
                class="bg-gray-200 px-4 py-2 rounded-md"
                value="{{ request('release_date') }}" 
            />
    
            <!-- Price Filter -->
            <input 
                type="number" 
                name="price_min" 
                placeholder="Min Price" 
                class="bg-gray-200 px-4 py-2 rounded-md"
                value="{{ request('price_min') }}"
            />
            <input 
                type="number" 
                name="price_max" 
                placeholder="Max Price" 
                class="bg-gray-200 px-4 py-2 rounded-md"
                value="{{ request('price_max') }}"
            />
    
            <!-- Total Stock Filter -->
            <input 
                type="number" 
                name="stock_min" 
                placeholder="Minimum Stock" 
                class="bg-gray-200 px-4 py-2 rounded-md"
                value="{{ request('stock_min') }}"
            />
    
            <!-- Submit Button -->
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-800 text-white rounded-md p-2 ml-2 ease-in-out duration-300">
                Apply Filters
            </button>
        </form>
    </div>
    

    <div>
        
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-300">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Gunpla Name
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Release Date
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Total Stock
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Total Sales
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Grade
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Series
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gunplas as $item)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-300">
                        {{ $item->name }}
                    </th>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->price }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->description }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->release_date }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->totalStock }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        @if ($item->totalSales == null)
                           0
                        @else
                        {{ $item->totalSales }}
                        @endif
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->grade ? $item->grade->grade_name : 'N/A' }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->series ? $item->series->name : 'N/A' }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        <div class="flex items-center">
                            <a href="{{ route('gunplapicture.open', $item->id) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline mr-2">Picture</a>
                            <a href="{{ route('editproduct.open', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                            <button 
                                type="button" 
                                onclick="confirmDelete({{ $item->id }})" 
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                Delete
                            </button>
                            <form id="delete-form-{{ $item->id }}" action="{{ route('gunpla.delete', $item->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 px-4">
            {{ $gunplas->links() }}
        </div>
    </div>

    <script>
        function confirmDelete(gunplaId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + gunplaId).submit();
                }
            });
        }
    </script>

</section>

@endsection