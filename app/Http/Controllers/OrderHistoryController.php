<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index(Request $request)
    {
        $query = OrderHistory::query();
        if ($request->has('search') && $request->input('search') !== ''){
            $search = $request->input('search');
            $query->where(function($query) use ($search){
                $query->where('status', 'like', "%$search%")
                      ->orWhere('id', 'like', "%$search%")
                      ->orWhere('order_date', 'like', "%$search%");
            });
        }
        $history = $query->paginate(5);
        return view('admin/orderhistory', ['orderhistory' => $history, 'search' => $request->input('search')]);
    }
}