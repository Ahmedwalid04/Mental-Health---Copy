<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TherapistProfile;
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // Create TherapistProfile if role is therapist
        /*if ($user->role === 'therapist' && !$user->therapistProfile) {
            TherapistProfile::create([
                'user_id' => $user->id,
                'bio' => '',
                'price_per_half_hour' => 0,
                'qualifications' => null,
                'experience' => null,
                'specializations' => null,
                'profile_image' => null,
            ]);
        }*/

        // Log the user in (optional, remove if you don't want auto-login)
        Auth::login($user);

        // Redirect after successful registration
        return redirect()->to('home')->with('success', 'Registration successful!');
    }

    public function assignTherapistRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->role = 'therapist';
        $user->save(); // This triggers the updated event

        return redirect()->back()->with('success', 'Therapist role assigned.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate and regenerate session to prevent fixation attacks
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');  // or wherever you want to send users after logout
    }
}
