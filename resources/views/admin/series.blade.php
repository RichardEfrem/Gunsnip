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

        <h1 class="text-4xl font-bold">Series</h1>

        <div class="mt-16">
            <a href="{{ route('addseries.open') }}" class="bg-slate-500 hover:bg-slate-800 text-white rounded-md p-2 ease-in-out duration-300">Add New Series</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-300">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                            Series Name
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($series as $series)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-300">
                            {{ $series->name }}
                        </th>
                        <td class="px-6 py-4 border border-gray-300">
                            {{ $series->series_description }}
                        </td>
                        <td class="px-6 py-4 border border-gray-300">
                            <div class="flex items-center">
                                <a href="{{ route('editseries.open', $series->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                                <button 
                                    type="button" 
                                    onclick="confirmDelete({{ $series->id }})" 
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    Delete
                                </button>
                                <form id="delete-form-{{ $series->id }}" action="{{ route('series.delete', $series->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

    <script>
        function confirmDelete(seriesId) {
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
                    document.getElementById('delete-form-' + seriesId).submit();
                }
            });
        }
    </script>
@endsection