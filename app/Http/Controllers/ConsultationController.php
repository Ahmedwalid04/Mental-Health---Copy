<?php

namespace App\Http\Controllers;

use App\Models\TherapistProfile;
use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function bookTherapist($therapistId)
    {
        $user = Auth::user(); // the logged-in patient

        // Create a new consultation
        $consultation = Consultation::create([
            'patient_id' => $user->id,
            'therapist_id' => $therapistId,
        ]);

        return redirect()->back()->with('success', 'Therapist booked successfully!');
    }

    public function sessions()
    {
        $sessions = Consultation::where('therapist_id',Auth::id())
            ->where('status', 'scheduled')
            ->orderBy('scheduled_at', 'asc')
            ->get();

        return view('therapist.sessions', compact('sessions'));
    }

    public function Csessions()
    {
        $sessions = Consultation::where('therapist_id',Auth::id())
            ->where('status', 'completed')
            ->orderBy('scheduled_at', 'asc')
            ->get();

        return view('therapist.sessions', compact('sessions'));
    }


    public function conference(Request $request)
    {
        // Check if the form to update notes was submitted
        if ($request->isMethod('head')) {
            // Validate the notes input
            $request->validate([
                'notes' => 'required|string|max:1000', // Adjust validation as needed
            ]);

            // Find the consultation by therapist_id and the first one
            $conference = Consultation::with(['therapist', 'patient'])
                ->where('therapist_id', Auth::id())
                ->first();

            if ($conference) {
                // Update the notes for the consultation
                $conference->notes = $request->input('notes');
                $conference->save();  // Save the updated notes
            }

        }

        // Otherwise, just fetch the conference if it's a normal view request
        $conference = Consultation::with(['therapist', 'patient'])
            ->where('therapist_id', Auth::id())
            ->first();

        return view('therapist.conference', compact('conference'));
    }

    public function endCall(Request $request, $conferenceId)
    {
        // Find the consultation using the ID
        $conference = Consultation::findOrFail($conferenceId);

        // Update the session state to 'completed'
        $conference->status = 'completed';
        $conference->save();  // Save the changes

        // Redirect back with a success message
        return redirect()->route('therapist.sessions')->with('status', 'Session completed successfully');
    }




}
