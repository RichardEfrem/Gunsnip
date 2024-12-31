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
                        <div class="bg-blue-600 pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="{{ route('openprofile') }}">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/user-chosen.png" alt="Profile avatar" class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-yellow-400 m-4">
                                            <div class="text-l font-medium">Pilot's Information</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="bg-white pb-1 hover:bg-gray-400 ease-in-out duration-300">
                            <a href="{{ route('openaddress') }}">
                                <div class="flex items-center">
                                    <div class="p-2 m-3">
                                        <img src="storage/assets/compass.png" alt="Profile avatar"
                                            class="w-[36px]" />
                                    </div>
                                    <div class="flex flex-col flex-grow">
                                        <div class="text-black m-4">
                                            <div class="text-l font-medium">Manage Address</div>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.49 12 3.75-3.751m0 0-3.75-3.75m3.75 3.75H3.74V19.5" />
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
                        <img src="storage/assets/menu-icon.png" alt="Menu" class="w-[36px] hover:bg-slate-100" />
                    </button>
                </div>

                <div class="flex-1 bg-white md:ml-12 p-6 rounded-lg">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-6">
                            <div class="relative">

                                <img src="storage/assets/user-chosen.png" alt="Profile avatar"
                                    class="w-32 md:w-40 rounded-full ml-32 md:ml-0" />
                            </div>
                            <div class="w-full md:w-auto">
                                <label class="block text-sm md:text-xl font-bold text-black mb-1">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}"
                                    class="border border-black rounded-[16px] px-4 py-3 w-full md:w-[512px] shadow-md">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xl text-black font-bold mb-1">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}"
                                    class="border border-black rounded-[16px] px-4 py-3 shadow-md w-full">
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="burgerMenuModal" class="absolute inset-0 bg-black bg-opacity-50 z-50 hidden md:hidden h-[1500px]"
        style="backdrop-filter: blur(1px)">
        <button id="closeBurgerMenu" class="absolute top-3 right-5 text-yellow-400 text-4xl font-bold z-10">
            &times;
        </button>
        <div class="flex flex-col bg-white m-5 space-y-4 border-2 border-black">
            <div class="bg-blue-600">
                <a href="#">
                    <div class="flex items-center">
                        <div class="p-2 m-3">
                            <img src="{{ asset('assets/user-chosen.png') }}" alt="Profile avatar" class="w-[36px]" />
                        </div>
                        <div class="flex flex-col flex-grow">
                            <div class="text-yellow-400 m-4">
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
                                <div class="text-l font-medium">My Purchase</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-white">
                <a href="#">
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

        </div>
    </div>

    <script>
        document.getElementById('burgerMenu').addEventListener('click', function() {
            document.getElementById('burgerMenuModal').classList.remove('hidden');
        });
        document.getElementById('closeBurgerMenu').addEventListener('click', function() {
            document.getElementById('burgerMenuModal').classList.add('hidden');
        });
    </script>
@endsection
