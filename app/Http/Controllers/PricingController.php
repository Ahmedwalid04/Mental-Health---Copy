<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscriptions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the payment form data
        $validated = $request->validate([
            'plan' => 'required|in:basic,premium,platinum',
            'card_number' => 'required|string',
            'expiry_date' => 'required|date_format:Y-m',
            'cvv' => 'required|string',
        ]);

        $user = auth()->user(); // Get the authenticated user

        // Find the existing active subscription
        $existingSubscription = subscriptions::where('user_id', $user->id)
            ->whereNull('end_date') // Assuming the subscription is ongoing if end_date is null
            ->first();

        if ($existingSubscription) {
            // Update the existing subscription with the new plan
            $existingSubscription->plan = $validated['plan'];
            $existingSubscription->start_date = now();  // Update start date
            $existingSubscription->end_date = null;     // Ongoing plan, no end date yet
            $existingSubscription->save();  // Save the updated subscription
        } else {
            // If no active subscription exists, create a new one (if needed)
            subscriptions::create([
                'user_id' => $user->id,
                'plan' => $validated['plan'],
                'start_date' => now(),
                'end_date' => null, // Ongoing plan, no end date yet
            ]);
        }

        // Return a response indicating successful subscription and plan update
        return response()->json([
            'message' => 'Successfully updated your subscription to ' . $validated['plan'] . ' plan',
            'plan' => $validated['plan'],  // Send back the updated plan to use for frontend changes
        ]);
    }
}
