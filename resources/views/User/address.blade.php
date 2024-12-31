@extends('User.bases.base')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="container mx-auto p-6">
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
        <div class="container py-6 px-4 md:py-12 md:px-6 lg:py-16 lg:px-12">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-8 ml-[140px] md:ml-0">Pilot's Profile</h1>
            <div class="flex flex-col lg:flex-row">
                <aside class="w-full lg:w-1/4 border-2 shadow-sm mb-6 lg:mb-0 md:h-[720px]">
                    <div class="bg-white border-2 border-black pb-1">
                        <div class="flex">
                            <div class="p-2 m-2">
                                <img src="/storage/assets/prof-sm.png" alt="Profile avatar" class="rounded-full w-[48px]" />
                            </div>
                            <div class="flex flex-col ml-5">
                                <div class="flex flex-col text-black mt-3">
                                    <div class="self-start text-l font-medium">Let's Launch</div>
                                    <div class="text-xl font-bold">{{ Auth::user()->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 hidden md:block">
                        <div class=" pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="{{ route('openprofile') }}">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/user.png" alt="Profile avatar" class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class=" m-4">
                                            <div class="text-l font-medium">Pilot's Information</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="bg-blue-600 pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="address">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/compass-chosen.png" alt="Profile avatar" class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-black m-4">
                                            <div class="text-l font-medium text-yellow-400">Manage Address</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="bg-white pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="{{ route('openhistory') }}">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/cart.png" alt="Profile avatar" class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-black m-4">
                                            <div class="text-l font-medium">My Purchase</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="bg-white pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="wishlist">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/love.png" alt="Profile avatar" class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-black m-4">
                                            <div class="text-l font-medium">Wishlist</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="bg-white hover:bg-gray-400 ease-in-out duration-300">
                            <a href="{{ route('logout_user') }}">
                                <div class="flex items-center ">
                                    <div class="p-2 m-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-10">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.49 12 3.75-3.751m0 0-3.75-3.75m3.75 3.75H3.74V19.5" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-black m-4">
                                            <div class="text-l font-medium">Log Out</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </aside>
                <div class="block w-full md:hidden flex justify-center mb-4">
                    <button id="burgerMenu" class="text-white">
                        <img src="{{ asset('assets/menu-icon.png') }}" alt="Menu" class="w-[36px] hover:bg-slate-100" />
                    </button>
                </div>

                <div class="flex-1 md:ml-24 bg-white rounded-lg">
                    @if (empty($address))
                        <!-- Add New Address Button -->
                        <div id="addAddressButton"
                            class="p-4 pb-5 md:px-16 md:py-7 text-xl font-medium text-yellow-400 bg-blue-700 rounded-xl md:w-[550px] md:h-[88px] text-center">
                            + Add new Address
                        </div>
                    @else
                    <div class="flex flex-col w-full bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.5)] mt-3 p-1 px-4">
                        <div class="flex flex-wrap gap-5 justify-between w-full md:w-full text-black">
                            <div class="text-2xl font-bold pt-3">{{ $address->recipient }}</div>
                            <button class="flex gap-2 px-3 py-1 mt-3 mr-2 w-[90px] rounded-lg bg-stone-300">
                                <img src="storage/assets/pencil.png" class="w-4 mt-0.5" alt="Edit Icon" />
                                <span class="text-md font-medium" id="addAddressButton">Edit</span>
                            </button>
                        </div>
                        <div class="flex justify-between mt-1 w-full md:w-full">
                            <div class="my-auto text-xl text-black w-[360px] md:w-auto">
                                {{ $address->address }},  {{ $address->city }},  {{ $address->country }}
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="flex gap-3.5 self-start mt-2 mb-3 text-2xl text-black">
                            <img src="storage/assets/phone.png" class=" w-7" alt="Phone icon" />
                            <span class="text-xl mb-1">
                                {{ $address->phonenumber }}
                            </span>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="addAddressModal" class="absolute inset-x-0 top-0 flex items-center justify-center z-50 h-[1380px] hidden"
        style="backdrop-filter: blur(1px)">
        <div
            class="relative bg-white w-5/6 md:w-[600px] border-1 border-black p-8 rounded-lg translate-y-6 shadow-[0px_4px_4px_rgba(0,0,0,0.5)]">
            <button id="cancelButton" class="absolute top-2 right-4 text-black text-4xl font-bold">
                &times;
            </button>
            <h2 class="text-3xl font-bold mb-4">
                @if (empty($address))
                <form action="{{ route('address.store') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Name</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="recipient">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Phone Number</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="phonenumber">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Address</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="address">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">City</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="city">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Country</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="country">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Post Code</label>
                        <input type="text" value=""
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg"
                            name="postcode">
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-700 text-yellow-400 py-3 rounded-2xl text-xl font-semibold mt-4 hover:bg-blue-600 transition-colors">
                        Save
                    </button>
                </form>
                @else
                <form action="" method="POST">
                    @csrf
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Name</label>
                        <input type="text" value="{{ $address->recipient ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="recipient">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Phone Number</label>
                        <input type="text" value="{{ $address->phonenumber ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="phonenumber">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Address</label>
                        <input type="text" value="{{ $address->address ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="address">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">City</label>
                        <input type="text" value="{{ $address->city ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="city">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Country</label>
                        <input type="text" value="{{ $address->country ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="country">
                    </div>
                    <div>
                        <label class="block text-xl text-black font-bold mb-2">Post Code</label>
                        <input type="text" value="{{ $address->postcode ?? '' }}"
                            class="border-3 border-black rounded-[12px] px-4 py-3 shadow-md w-full mb-4 text-lg" name="postcode">
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-700 text-yellow-400 py-3 rounded-2xl text-xl font-semibold mt-4 hover:bg-blue-600 transition-colors">
                        Save
                    </button>
                </form>
                @endif
            </h2>
        </div>
    </div>
    <div id="burgerMenuModal" class="absolute inset-0 bg-black bg-opacity-50 z-50 hidden md:hidden h-[1500px]"
        style="backdrop-filter: blur(1px)">
        <button id="closeBurgerMenu" class="absolute top-3 right-5 text-yellow-400 text-4xl font-bold z-10">
            &times;
        </button>
        <div class="flex flex-col bg-white m-5 space-y-4 border-2 border-black">
            <div class="bg-white">
                <a href="profile">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/user.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">Pilot's Information</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="#">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/cart.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">My Order</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="wishlist">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/love.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">Wishlist</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-blue-600">
                <a href="address">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/compass-chosen.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-yellow-400 m-4">
                                <div class="text-l font-medium">Manage Address</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="#">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/card.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">Manage Payment</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="notification">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/bell.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">Notification</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="#">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/file.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-black m-4">
                                <div class="text-l font-medium">Purchase History</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addAddressButton').addEventListener('click', function() {
            document.getElementById('addAddressModal').classList.remove('hidden');
            document.getElementById('mainContainer').classList.add('h-screen');
        });

        document.getElementById('cancelButton').addEventListener('click', function() {
            document.getElementById('addAddressModal').classList.add('hidden');
            document.getElementById('mainContainer').classList.remove('h-screen');
        });

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        function handleOptionSelection(inputId, dropdownId) {
            const options = document.querySelectorAll(`#${dropdownId} li`);
            options.forEach(option => {
                option.addEventListener('click', function() {
                    document.getElementById(inputId).value = this.getAttribute('data-value');
                    document.getElementById(dropdownId).classList.add('hidden');
                });
            });
        }

        document.getElementById('kelurahanDropdownButton').addEventListener('click', function(event) {
            event.stopPropagation();
            toggleDropdown('kelurahanDropdown');
        });

        document.getElementById('kecamatanDropdownButton').addEventListener('click', function(event) {
            event.stopPropagation();
            toggleDropdown('kecamatanDropdown');
        });

        document.getElementById('kotaDropdownButton').addEventListener('click', function(event) {
            event.stopPropagation();
            toggleDropdown('kotaDropdown');
        });

        document.getElementById('provinsiDropdownButton').addEventListener('click', function(event) {
            event.stopPropagation();
            toggleDropdown('provinsiDropdown');
        });

        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.hidden');
            dropdowns.forEach(function(dropdown) {
                if (!dropdown.contains(event.target) && !event.target.closest('button')) {
                    dropdown.classList.add('hidden');
                }
            });
        });

        handleOptionSelection('kelurahanInput', 'kelurahanDropdown');
        handleOptionSelection('kecamatanInput', 'kecamatanDropdown');
        handleOptionSelection('kotaInput', 'kotaDropdown');
        handleOptionSelection('provinsiInput', 'provinsiDropdown');

        document.getElementById('burgerMenu').addEventListener('click', function() {
            document.getElementById('burgerMenuModal').classList.remove('hidden');
        });
        document.getElementById('closeBurgerMenu').addEventListener('click', function() {
            document.getElementById('burgerMenuModal').classList.add('hidden');
        });
    </script>
@endsection
