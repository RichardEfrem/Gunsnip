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

    <h1 class="text-4xl font-bold">{{ $gunpla->name }} Pictures</h1>

    <div class="mt-10 flex">
        <button 
            class="bg-slate-500 hover:bg-slate-800 text-white rounded-md p-2 ease-in-out duration-300" 
            onclick="openModal()">
            Add New Picture for {{ $gunpla->name }}
        </button>
        <a href="{{ route('editproduct.open', $gunpla->id) }}" class="bg-red-500 hover:bg-red-800 text-white rounded-md ml-5 p-2 ease-in-out duration-300">
            Return
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-300"> 
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Gunpla Picture
                    </th>
                    <th scope="col" class="px-6 py-3 border border-gray-300">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($pictures->isNotEmpty())
                @foreach ($pictures as $item)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4 border border-gray-300">
                            <img src="{{ asset($item->image_path) }}" alt="{{ $item->image_path }}" class="h-60 w-60 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 border border-gray-300">
                            <div class="flex items-center">
                                <button 
                                    type="button" 
                                    onclick="confirmDelete('{{ $item->id }}')" 
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    Delete
                                </button>
                                <form id="delete-form-{{ $item->id }}" action="{{ route('gunplapicture.delete', ['gunplaid' => $gunpla->id, 'imageid' => $item->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center px-6 py-4">No images available for this Gunpla.</td>
                </tr>
            @endif
            </tbody>
        </table>

    </div>

     <!-- Modal -->
     <div id="addPictureModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg w-1/3 p-6">
            <h2 class="text-2xl font-bold mb-4">Add New Picture</h2>
            <form action="{{ route('gunplapicture.upload', $gunpla->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Select Image</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="w-full border border-gray-300 rounded-lg p-2" 
                        accept="image/*"
                        required>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Add Picture</button>
                </div>
            </form>
        </div>
    </div>

</section>

<script>
    function openModal() {
        document.getElementById('addPictureModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addPictureModal').classList.add('hidden');
    }

    function confirmDelete(imageid) {
    const form = document.getElementById('delete-form-' + imageid);
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
            form.submit();
        }
    });
    }

</script>

@endsection