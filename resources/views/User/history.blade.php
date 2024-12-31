@extends('User.bases.base')

@section('content')
<div class="container mx-auto p-6">
    <section class="flex overflow-hidden flex-col bg-white" aria-label="Manage Payment Section">   
        <main class="flex flex-col self-center mt-14 w-full max-w-[1660px] max-md:mt-10 max-md:max-w-full">
            <h1 class="self-start ml-20 text-4xl font-bold text-black max-md:text-4xl">
                Purchase History
            </h1>
            <div class="mt-16 max-md:mt-8 ml-20 max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
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
    
                            <div class="bg-white pb-1 hover:bg-gray-400 ease-in-out duration-300">
                                <a href="address">
                                    <div class="flex items-center">
                                        <div class="p-2 m-3">
                                            <img src="storage/assets/compass.png" alt="Profile avatar" class="w-[36px]" />
                                        </div>
                                        <div class="flex flex-col flex-grow">
                                            <div class="text-black m-4">
                                                <div class="text-l font-medium ">Manage Address</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
    
                            <div class="bg-blue-600 pb-1 hover:bg-gray-400 ease-in-out duration-300">
                                <a href="{{ route('openhistory') }}">
                                    <div class="flex items-center">
                                        <div class="p-2 m-3">
                                            <img src="storage/assets/cart.png" alt="Profile avatar" class="w-[36px]" />
                                        </div>
                                        <div class="flex flex-col flex-grow">
                                            <div class="text-black m-4">
                                                <div class="text-l font-medium text-yellow-400">My Purchase</div>
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

                    <section class="flex flex-col ml-5 w-[66%] max-md:ml-0 max-md:w-full" aria-label="Purchase History Items">
                        <div class="flex flex-col w-full max-md:mt-4 max-md:max-w-full">
                            @foreach($orders as $order)
                            <article class="py-9 pr-3.5 pl-12 bg-white border-b-2 w-full border-neutral-700 max-md:pl-5 max-md:max-w-full h-[350px]">
                                <div class="flex gap-5 max-md:flex-col">
                                    <img src="{{ $order->product_image }}" alt="{{ $order->product_name }}" class="object-cover shrink-0 mt-6 max-w-full aspect-square w-[250px] h-[250px] max-md:mt-10" />
                                    <div class="flex flex-col ml-5 w-[75%] max-md:ml-0 max-md:w-full">
                                        <div class="flex flex-col items-start w-full text-base text-stone-500 max-md:mt-10 max-md:max-w-full">
                                            <time datetime="{{ $order->order_date }}" class="self-end">Order Date: {{ $order->order_date }}</time>
                                            <h2 class="text-xl font-bold text-black">{{ $order->product_name }}</h2>
                                            <p class="mt-2">Delivery Date: {{ $order->delivery_date }}</p>
                                            <p class="mt-2">Shipping Address: {{ $order->shipping_address }}</p>
                                            <span class="px-3 mt-5 {{ $order->status_class }}" role="status">Status: {{ $order->status }}</span>
                                            <p class="mt-2 font-bold text-black">Total Price: ${{ number_format($order->total_price, 2) }}</p>
                                            <div class="flex flex-wrap gap-5 mt-11 max-w-full text-2xl font-bold text-center text-black w-[820px] max-md:mt-10">
                                                <a href="delivery-summary/{{ $order->id }}">
                                                    <button class="grow px-16 py-5 rounded-2xl bg-zinc-300 w-fit max-md:px-5 hover:bg-zinc-400 focus:outline-none focus:ring-2 focus:ring-blue-700">
                                                    Cek Order
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </main>

        <footer class="flex w-full bg-blue-700 min-h-[412px] mt-[813px] max-md:mt-10 max-md:max-w-full" role="contentinfo"></footer>
    </section>
</div>
@endsection
