<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(){
        $user = User::get();
        return view('admin/user')->with('users', $user);
    }

    public function openAdd(){
        return view('admin/addedituser', ['user' => null]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'usertype' => 'required|in:Admin,Customer',
            'address' => 'required|string|max:255',
        ]);

        // Save the user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'usertype' => $validatedData['usertype'],
            'address' => $validatedData['address'],
        ]);

        // Redirect with success message
        return redirect()->route('adminuser.index')->with('success', 'User added successfully!');
    } 

    public function openEdit($userid){
        $user = User::where('id', $userid)->first();
        return view('admin/addedituser')->with('user', $user);
    }

    public function updateUser(Request $request, $userid){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userid, // Exclude the current user from the unique check
            'usertype' => 'required|in:Admin,Customer',
            'address' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($userid);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->usertype = $validatedData['usertype'];
        $user->address = $validatedData['address'];

        $user->save();

        return redirect()->route('adminuser.index')->with('success', 'User updated successfully!');
    }

    public function deleteUser($userid)
    {
        // Find the user by ID
        $user = User::findOrFail($userid);

        // Delete the user
        $user->delete();

        // Redirect with success message
        return redirect()->route('adminuser.index')->with('success', 'User deleted successfully!');
    }
}
