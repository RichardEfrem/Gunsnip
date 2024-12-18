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

    <h1 class="text-4xl font-bold">Order History</h1>

    <div>
        <form action="{{ route('orderhistory.index') }}" method="GET">
            <input 
                type="text" 
                class="mt-4 bg-gray-200 pr-60 pl-4 py-2 rounded-md" 
                placeholder=" Search Series " 
                name="search" 
                value="{{ request('search') }}">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-800 text-white rounded-md p-2 ml-2 ease-in-out duration-300">
                Search
            </button>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-300">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Order Date
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Total Price
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderhistory as $item)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-300">
                        {{ $item->id }}
                    </th>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->user_id }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->order_date }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->total_price }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        {{ $item->status }}
                    </td>
                    <td class="px-6 py-4 border border-gray-300">
                        <div class="flex items-center">
                            <a href="" class="font-medium text-green-600 dark:text-green-500 hover:underline mr-2">View</a>
                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit Status</button>                            
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 px-4">
            {{ $orderhistory->links() }}
        </div>
    </div>
</section>
@endsection