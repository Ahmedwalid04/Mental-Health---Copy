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
            'price_per_half_hour'  => 'nullable|numeric|min:0',
            'qualifications'       => 'nullable|string',
            'experience'           => 'nullable|string',
            'specializations'      => 'nullable|string',
            'profile_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Ensure user_id is always set
        $data['user_id'] = Auth::id();
    
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
            ->route('profile.edit') // redirect back to the edit page to see changes
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