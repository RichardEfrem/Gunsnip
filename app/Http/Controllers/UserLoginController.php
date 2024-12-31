<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    // Show the login form
    public function index()
    {
        return view('User/login');
    }

    // Handle user login
    public function authenticate(Request $r)
    {
        // Validate the credentials
        $credentials = $r->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        // Attempt login with the provided credentials
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();  // Regenerate the session to prevent session fixation
            return redirect()->route('home');
        }

        // If authentication fails, return with an error message
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->with('error', 'Login failed! Invalid credentials.')->onlyInput('email');
    }

    // Logout the user
    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session to prevent session fixation
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the login page with a success message
        return redirect()->route('home')->with('success', 'You have been logged out successfully.');
    }
}

