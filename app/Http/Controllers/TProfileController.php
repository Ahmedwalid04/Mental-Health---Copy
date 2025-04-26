<?php

namespace App\Http\Controllers;

use App\Models\TherapistProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TProfileController extends Controller
{
    // Display the profile
    public function show()
    {
        $profile = TherapistProfile::where('user_id', Auth::id())->first();
        return view('therapist.profile', compact('profile'));
    }

    // Show form for create or edit
    public function edit()
    {
        $profile = TherapistProfile::where('user_id', Auth::id())->first();
        return view('therapist.editprofile', compact('profile'));
    }

    // Handle both create & update
    public function save(Request $request)
    {
        Log::info('Form input: ', $request->all());

        $data = $request->validate([
            'bio'                  => 'nullable|string',
            'price_per_half_hour' => 'nullable|numeric|min:0',
            'qualifications'      => 'nullable|string',
            'experience'          => 'nullable|string',
            'specializations'     => 'nullable|string',
            'profile_image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['user_id'] = Auth::id();

        // Convert comma-separated strings to arrays, then encode as JSON
        $data['qualifications'] = $request->filled('qualifications')
            ? json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->input('qualifications')))))
            : null;

        $data['experience'] = $request->filled('experience')
            ? json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->input('experience')))))
            : null;

        $data['specializations'] = $request->filled('specializations')
            ? json_encode(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $request->input('specializations')))))
            : null;

        // Handle profile image
        if ($request->hasFile('profile_image')) {
            if ($old = TherapistProfile::where('user_id', Auth::id())->value('profile_image')) {
                Storage::disk('public')->delete($old);
            }
            $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        TherapistProfile::updateOrCreate(
            ['user_id' => Auth::id()],
            $data
        );

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile saved successfully.');
    }

    public function showAllForSessions()
    {
        $therapistProfiles = TherapistProfile::with('user')->get(); // eager load related user
        return view('user.sessions', compact('therapistProfiles'));
    }

    public function show1($id)
    {
        $therapist = TherapistProfile::with('user')->findOrFail($id); // using profile id
        return view('user.TProfilePreview', compact('therapist'));
    }

}
