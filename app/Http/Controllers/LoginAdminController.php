<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('admin/loginadmin');
    }

    public function authenticate(Request $r)
    {
        $credentials = $r->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            
            if ($user->usertype === 'Admin') {
                $r->session()->regenerate(); 

                
                return redirect()->route('admindashboard')->with('success', 'Welcome back, Admin!');
            }

            Auth::logout();

            return back()->withErrors([
                'email' => 'You do not have access to the admin area.',
            ])->onlyInput('email');
        }
    
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $r){
        Auth::logout();

        $r->session()->invalidate();

        $r->session()->regenerateToken();
        
        return redirect()->route('loginadmin.index');
    }
}
