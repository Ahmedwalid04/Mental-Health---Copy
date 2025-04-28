<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\subscriptions;

class PricingController extends Controller
{
    /**
     * Save or update subscription in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'card_number' => 'required|numeric|min:1000',
            'expiry_date' => 'required|date_format:Y-m',
            'cvv' => 'required|digits:3',
            'plan' => 'required|in:basic,premium,platinum',
        ]);

        $userId = Auth::id();

        $subscription = subscriptions::where('user_id', $userId)->first();

        if ($subscription) {
            // Update existing subscription
            $subscription->update([
                'plan' => $request->plan,
                'start_date' => now(),
                'end_date' => now()->addMonth(),
            ]);

            $message = 'Subscription updated successfully!';
        } else {
            // Create new subscription
            subscriptions::create([
                'user_id' => $userId,
                'plan' => $request->plan,
                'start_date' => now(),
                'end_date' => now()->addMonth(),
            ]);

            $message = 'Subscription created successfully!';
        }

        return redirect()->back()->with('success', $message);
    }

    /**
     * Update only the user's subscription plan.
     */
    public function update(Request $request)
    {
        $request->validate([
            'plan' => 'required|in:basic,premium,platinum',
        ]);

        $subscription = subscriptions::where('user_id', Auth::id())->first();

        if ($subscription) {
            $subscription->update([
                'plan' => $request->plan,
                'start_date' => now(),
                'end_date' => now()->addMonth(),
            ]);

            return redirect()->back()->with('success', 'Subscription updated successfully!');
        }

        return redirect()->back()->with('error', 'No subscription found to update.');
    }

    public function index()
    {
        $plans = [
            [
                'plan' => 'basic',
                'title' => 'Basic',
                'price' => 0,
                'period' => '/month',
                'bg' => 'bg-white',
                'text' => 'text-gray-900',
                'features' => [
                    '✔ Access to free articles',
                    '✔ Community support',
                    '✖ Personalized coaching',
                    '✖ Advanced analytics',
                ],
            ],
            [
                'plan' => 'premium',
                'title' => 'Premium',
                'price' => 29,
                'period' => '/month',
                'bg' => 'bg-indigo-600',
                'text' => 'text-white',
                'features' => [
                    '✔ Access to all articles',
                    '✔ Priority support',
                    '✔ Personalized coaching',
                    '✖ Advanced analytics',
                ],
            ],
            [
                'plan' => 'platinum',
                'title' => 'Platinum',
                'price' => 59,
                'period' => '/month',
                'bg' => 'bg-emerald-600',
                'text' => 'text-white',
                'features' => [
                    '✔ Access to all articles',
                    '✔ Priority support',
                    '✔ Personalized coaching',
                    '✔ Advanced analytics',
                ],
            ],
        ];

        return view('user.pricing', compact('plans'));
    }

    public function showPricingPage()
    {
        $user = auth()->user();

        // جلب اشتراك المستخدم من جدول subscriptions
        $subscription = subscriptions::where('user_id', $user->id)
            ->latest('created_at') // تجلب أحدث اشتراك حسب تاريخ الإنشاء
            ->first();

        $plan = $subscription ? $subscription->plan : null; // لو لم يجد اشتراك يرجع null

        return view('user.pricing', [
            'subscription' => $plan, // نرسل الخطة للاستخدام داخل Blade
        ]);
    }

}
