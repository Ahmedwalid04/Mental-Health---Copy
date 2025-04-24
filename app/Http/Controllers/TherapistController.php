<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TherapistProfile;
use App\Models\User;

class TherapistController extends Controller
{
    /**
     * Show the therapist's profile page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showProfile()
    {
        // Ensure the user is authenticated
        $therapist = Auth::user();

        if (!$therapist) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your profile.');
        }

        $p = $therapist->therapistProfile;

        if (!$p) {
            return redirect()->route('dashboard')->with('error', 'Profile not found. Please create your profile first.');
        }

        return view('profile', compact('therapist', 'p'));
    }
    public function show($id)
    {
        // Find the user and eager load the therapist profile
        $user = User::with('therapistProfile')->findOrFail($id);

        return view('therapist.profile', compact('user'));
    }
}
