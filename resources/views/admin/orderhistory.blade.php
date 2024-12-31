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
                            <button 
                                data-id="{{ $item->id }}" 
                                data-status="{{ $item->status }}" 
                                class="change-status-btn font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                                Edit Status
                            </button>
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

<!-- Modal -->
<div id="statusModal" class="fixed z-10 inset-0 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg w-full max-w-md">
            <h2 class="text-lg font-bold mb-4">Change Order Status</h2>
            <form id="statusForm">
                @csrf
                <input type="hidden" id="orderId">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Select Status</label>
                    <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="Pending">Pending</option>
                        <option value="On Process">On Process</option>
                        <option value="On Delivery">On Delivery</option>
                        <option value="Finished">Finished</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="button" id="closeModal" class="bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md px-4 py-2">Cancel</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white rounded-md px-4 py-2 ml-2">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('statusModal');
        const closeModal = document.getElementById('closeModal');
        const statusForm = document.getElementById('statusForm');

        document.querySelectorAll('.change-status-btn').forEach(button => {
            button.addEventListener('click', function () {
                const orderId = this.getAttribute('data-id');
                const currentStatus = this.getAttribute('data-status');

                document.getElementById('orderId').value = orderId;
                document.getElementById('status').value = currentStatus;

                modal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        statusForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const orderId = document.getElementById('orderId').value;
            const status = document.getElementById('status').value;

            fetch(`/orderhistory/${orderId}/update-status`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify({ status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Success', data.message, 'success');
                    location.reload();
                }
            });
        });
    });
</script>
@endsection
