<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('id', $search)
                ->orWhere('usertype', 'like', "%$search%");
        }

        $users = $query->paginate(5);
        return view('admin/user', ['users' => $users, 'search' => $request->input('search')]);
    }

    public function openAdd()
    {
        return view('admin/addedituser', ['user' => null]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'usertype' => 'required|in:Admin,Customer',
        ]);

        // Save the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'usertype' => $validatedData['usertype'],
        ]);

        Cart::create([
            'user_id' => $user->id,
            'total_price' => 0, // Initialize with a total price of 0
        ]);


        // Redirect with success message
        return redirect()->route('adminuser.index')->with('success', 'User added successfully!');
    }

    public function openEdit($userid)
    {
        $user = User::where('id', $userid)->first();
        return view('admin/addedituser')->with('user', $user);
    }

    public function updateUser(Request $request, $userid)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userid, // Exclude the current user from the unique check
            'usertype' => 'required|in:Admin,Customer',
        ]);

        $user = User::findOrFail($userid);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->usertype = $validatedData['usertype'];

        $user->save();

        return redirect()->route('adminuser.index')->with('success', 'User updated successfully!');
    }

    public function deleteUser($userid)
    {

        $cart = Cart::where('user_id', $userid)->firstOrFail();

        // Delete all related cart items
        $cart->CartItem()->delete();

        // Delete the cart
        $cart->delete();

        $user = User::findOrFail($userid);

        $user->delete();

        return redirect()->route('adminuser.index')->with('success', 'User deleted successfully!');
    }
}
