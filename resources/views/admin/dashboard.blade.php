@extends('admin/base.base')

@section('admin/content')
<section class="mt-4 mr-4">
    <h1 class="text-4xl font-bold">Welcome, {{ Auth::user()->name }}</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <!-- Order Status Cards -->
        @foreach ($orderStatusCounts as $status => $count)
            <div class="bg-gray-100 shadow-md rounded-lg p-4">
                <h2 class="text-lg font-semibold">{{ $status }}</h2>
                <p class="text-2xl font-bold">{{ $count }}</p>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <!-- Total Revenue -->
        <div class="bg-gray-100 shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Total Revenue (All Time)</h2>
            <p class="text-2xl font-bold">{{ number_format($totalRevenue, 2) }}</p>
        </div>
        <div class="bg-gray-100 shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Total Revenue (This Month)</h2>
            <p class="text-2xl font-bold">{{ number_format($currentMonthRevenue, 2) }}</p>
        </div>

        <!-- Total Orders -->
        <div class="bg-gray-100 shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Total Orders (All Time)</h2>
            <p class="text-2xl font-bold">{{ $totalOrders }}</p>
        </div>
        <div class="bg-gray-100 shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Total Orders (This Month)</h2>
            <p class="text-2xl font-bold">{{ $currentMonthOrders }}</p>
        </div>
    </div>
</section>
@endsection
