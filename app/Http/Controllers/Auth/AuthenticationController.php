<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.dashboard')->with('success', 'Admin Login successful');
            }
            return redirect()->route('user.home')->with('success', 'User Login successful');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'gender' => 'required',
            ],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'password.required' => 'The password field is required.',
                'phone.required' => 'The phone field is required.',
                'gender.required' => 'The gender field is required.',
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);
        return redirect()->route('user.login')->with('success', 'Registration successful! Please log in.');
    }

    public function logout()  {
        Auth::logout();
        return redirect()->route('user.home')->with('success', 'Logout successful');
    }
}
