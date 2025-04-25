<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TherapistProfile;
use App\Models\User;

class TherapistController extends Controller
{
    /**
     * Show the therapist's TProfileController.php page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showProfile()
    {
        // Ensure the user is authenticated
        $therapist = Auth::user();

        if (!$therapist) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your TProfileController.php.');
        }

        $p = $therapist->therapistProfile;

        if (!$p) {
            return redirect()->route('dashboard')->with('error', 'Profile not found. Please create your TProfileController.php first.');
        }

        return view('TProfileController.php', compact('therapist', 'p'));
    }
    public function show($id)
    {
        // Find the user and eager load the therapist TProfileController.php
        $user = User::with('therapistProfile')->findOrFail($id);

        return view('therapist.TProfileController.php', compact('user'));
    }
}
