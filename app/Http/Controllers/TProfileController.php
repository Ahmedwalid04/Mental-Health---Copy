<?php

namespace App\Http\Controllers;

use App\Models\TherapistProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->validate([
            'bio'                  => 'nullable|string',
            'price_per_half_hour'  => 'nullable|numeric|min:0',
            'qualifications'       => 'nullable|array',
            'experience'           => 'nullable|array',
            'specializations'      => 'nullable|array',
            'profile_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('profile_image')) {
            // delete old if exists
            if ($old = TrainerProfile::where('user_id', Auth::id())->value('profile_image')) {
                Storage::disk('public')->delete($old);
            }
            $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // JSON-encode arrays (or default to empty array)
        $data['qualifications']  = json_encode($data['qualifications']  ?? []);
        $data['experience']      = json_encode($data['experience']      ?? []);
        $data['specializations'] = json_encode($data['specializations'] ?? []);

        // Upsert by user_id
        TherapistProfile::updateOrCreate(
            ['user_id' => Auth::id()],
            $data
        );

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile saved successfully.');
    }
}
