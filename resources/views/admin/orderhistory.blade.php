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
</section>
@endsection