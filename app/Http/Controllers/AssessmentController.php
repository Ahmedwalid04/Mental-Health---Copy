<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    public function index()
{
    return view('user.assessmentsindex');
}
    public function create()
    {
        return view('user.assessmentcreate');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'answers' => 'required|array|size:5',
        ]);
    
        $score = array_sum($validated['answers']);
    
        $summary = $score >= 7
            ? 'You may benefit from therapy.'
            : 'No therapy needed at the moment.';
    
        // Store the assessment in the database
        Assessment::create([
            'user_id' => Auth::id(),
            'answers' => $validated['answers'],
            'score' => $score,
            'result_summary' => $summary,
        ]);
    
        // Log the session to check if it's set
        session()->put('result_summary', $summary); // Make sure session data is set
    
        // Return redirect with session data
        return redirect()->route('assessments.result');
    }
    

    public function result()
    {
        $summary = session('result_summary', 'No result available. Please complete the assessment first.');
    
        return view('user.assessmentresult', compact('summary'));
    }
    
}