<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::where('user_id', Auth::id())->first(); // Retrieves the first address of the user

        return view('User/address')->with('address', $address);
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'recipient' => 'required|string|max:255',
            'phonenumber' => 'required|numeric|digits_between:10,20', // Validate as a numeric value with length limits
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postcode' => 'required|string|max:20',
        ]);

        // Create a new address for the authenticated user
        Address::create([
            'user_id' => Auth::id(),
            'recipient' => $request->recipient,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'postcode' => $request->postcode,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Address added successfully!');
    }
}
