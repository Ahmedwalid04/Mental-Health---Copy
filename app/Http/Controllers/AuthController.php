<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TherapistProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

            // Redirect to home
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

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // Assign Basic Plan subscription
        DB::table('subscriptions')->insert([
            'user_id' => $user->id,
            'plan' => 'basic',
            'start_date' => now(),
            'end_date' => null, // No end date for free plan
        ]);

        // Optional: If the user is a therapist, create a therapist profile
        /*
        if ($user->role === 'therapist' && !$user->therapistProfile) {
            TherapistProfile::create([
                'user_id' => $user->id,
                'bio' => '',
                'price_per_half_hour' => 0,
                'qualifications' => null,
                'experience' => null,
                'specializations' => null,
                'profile_image' => null,
            ]);
        }
        */

        // Auto-login
        Auth::login($user);

        // Redirect to pricing page
        return redirect()->to('pricing');
    }

    // Assign therapist role
    public function assignTherapistRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->role = 'therapist';
        $user->save();

        return redirect()->back()->with('success', 'Therapist role assigned.');
    }

    // LOGOUT METHOD
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate and regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
