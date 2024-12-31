<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; // Ensure the correct model is imported
use App\Models\OrderHistory;

class UserOrderHistory extends Controller
{
    public function index()
    {
        // Retrieve all orders for the authenticated user
        $orders = OrderHistory::where('user_id', Auth::id())
            ->with(['OrderHistoryItem.gunpla']) // Eager load items and gunpla
            ->get();

        // Pass the orders to the view (create the view 'user.order_history' as needed)
        return view('User/history', compact('orders'));
    }
}

