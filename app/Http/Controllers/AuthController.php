<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // LOGIN METHOD
    public function login(Request $request)
    {
        // Validate inputs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find the user and check the password
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Log the user in
            Auth::login($user);

            // Redirect to home with a success message
            return redirect()->to('/home');
        }

        // If login fails
        return back()->with('error', 'Invalid credentials. Please register first.');
    }

    // REGISTER METHOD
    public function register(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:1',
            'role' => 'required|in:patient,admin,therapist',
            'password' => 'required|confirmed|min:6',
        ]);

        // Create new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // Redirect after successful registration
        return redirect()->to('home')->with('success', 'Registration successful!');
    }
}
