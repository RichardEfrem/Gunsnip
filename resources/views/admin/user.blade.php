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
        <h1 class="text-4xl font-bold">User Lists</h1>

        <div class="mt-16">
            <a href="{{ route('adduser.open') }}" class="bg-slate-500 hover:bg-slate-800 text-white rounded-md p-2 ease-in-out duration-300">Add New User</a>
        </div>

        <div>
            <form action="{{ route('adminuser.index') }}" method="GET">
                <input 
                    type="text" 
                    class="mt-10 bg-gray-200 pr-60 pl-4 py-2 rounded-md" 
                    placeholder=" Search User " 
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
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                           Usertype
                        </th>
                        <th scope="col" class="px-6 py-3 border border-gray-300">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-300">
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4 border border-gray-300">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4 border border-gray-300">
                            {{ $user->usertype }}
                        </td>
                        <td class="px-6 py-4 border border-gray-300">
                            <div class="flex items-center">
                                <a href="{{ route('edituser.open', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                                <button 
                                    type="button" 
                                    onclick="confirmDelete({{ $user->id }})" 
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    Delete
                                </button>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('adminuser.delete', $user->id) }}" method="POST" style="display: none;">
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
                {{ $users->links() }}
            </div>
        </div>


    </section>

    <script>
        function confirmDelete(userId) {
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
                    document.getElementById('delete-form-' + userId).submit();
                }
            });
        }
    </script>
@endsection