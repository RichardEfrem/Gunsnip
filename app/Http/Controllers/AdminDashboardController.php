<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Count of order history by status
        $orderStatusCounts = [
            'Pending' => OrderHistory::where('status', 'Pending')->count(),
            'On Process' => OrderHistory::where('status', 'On Process')->count(),
            'On Delivery' => OrderHistory::where('status', 'On Delivery')->count(),
            'Finished' => OrderHistory::where('status', 'Finished')->count(),
            'Cancelled' => OrderHistory::where('status', 'Cancelled')->count(),
        ];

        // Total revenue
        $totalRevenue = OrderHistory::sum('total_price');
        $currentMonthRevenue = OrderHistory::whereMonth('order_date', Carbon::now()->month)
            ->whereYear('order_date', Carbon::now()->year)
            ->sum('total_price');

        // Total orders
        $totalOrders = OrderHistory::count();
        $currentMonthOrders = OrderHistory::whereMonth('order_date', Carbon::now()->month)
            ->whereYear('order_date', Carbon::now()->year)
            ->count();

        return view('admin.dashboard', compact(
            'orderStatusCounts',
            'totalRevenue',
            'currentMonthRevenue',
            'totalOrders',
            'currentMonthOrders'
        ));
    }
}
