@extends('layouts.app')

@section('title', 'Pricing')

@section('content')
    <html lang="en" class="scroll-smooth" >
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Pricing</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f4f4f4;
                padding-bottom: 40px;
                min-height: 100vh;
            }
            /* Custom scrollbar for modal */
            .modal::-webkit-scrollbar {
                width: 6px;
            }
            .modal::-webkit-scrollbar-thumb {
                background-color: rgba(255 255 255 / 0.3);
                border-radius: 3px;
            }
        </style>
    </head>
    <body class="relative">

    <div class="max-w-full mx-auto ">
        <header class="relative h-[400px] text-center  pt-20 px-4 overflow-hidden bg-gray-100">
            <img
                src="{{ asset('pics/pricing.jpg') }}"
                alt="Silhouette of a head filled with words related to mental health"
                class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-full object-cover opacity-75 pointer-events-none select-none"
                width="1920"
                height="400"
                aria-hidden="true"
            />
            <h1 class="pt-6 relative mt-[205px] font-extrabold text-4xl text-[#1A1A1A] mb-2">
                Find the Right Plan for Your Mental Wellness
            </h1>
            <p class="relative text-lg text-gray-700 mt-2">
                Affordable plans tailored to support your well-being
            </p>
        </header>
    </div>

    <main class="max-w-full mx-auto  grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 pb-10 p-10 bg-[#BAD6EB]">

        <!-- Basic Plan -->
        <section class="bg-white rounded-2xl p-8 shadow-lg flex flex-col transition-transform hover:-translate-y-2 hover:shadow-xl">
            <h2 class="text-2xl font-bold mb-2 text-[#1A1A1A]">Basic Plan</h2>
            <p class="text-lg text-gray-700 mb-6">Perfect for getting started</p>
            <p class="text-4xl font-extrabold mb-8">$0<span class="text-base font-semibold ml-1">Free</span></p>
            <ul class="mb-8 space-y-3 text-gray-700 text-base">
                <li class="flex items-center gap-3"><span class="text-green-500 font-bold select-none">✔</span> Access to all articles</li>
                <li class="flex items-center gap-3"><span class="text-red-500 font-bold select-none">✖</span> 1-on-1 Sessions</li>
                <li class="flex items-center gap-3"><span class="text-red-500 font-bold select-none">✖</span> Assessments</li>
                <li class="flex items-center gap-3"><span class="text-red-500 font-bold select-none">✖</span> Activities</li>
            </ul>
            <form method="GET" action="{{ url('/articles') }}">
                <button type="submit" class="w-full bg-gray-200 text-[#1A1A1A] font-semibold py-3 rounded-xl shadow-sm hover:bg-gray-300 transition">
                    Get Started
                </button>
            </form>
        </section>

        <!-- Premium Plan -->
        <section class="bg-gradient-to-br from-[#0F172A] to-[#1E293B] text-white rounded-2xl p-8 shadow-lg flex flex-col transition-transform hover:-translate-y-2 hover:shadow-xl">
            <h2 class="text-2xl font-bold mb-2">Premium Plan</h2>
            <p class="text-lg mb-6">For serious learners</p>
            <p class="text-4xl font-extrabold mb-8">$29<span class="text-base font-semibold ml-1">/month</span></p>
            <ul class="mb-8 space-y-3 text-base">
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> Access to all articles</li>
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> 1-on-1 Sessions</li>
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> Assessments</li>
                <li class="flex items-center gap-3"><span class="text-red-500 font-bold select-none">✖</span> Activities</li>
            </ul>
            <button type="button" data-plan="premium" class="show-payment-modal w-full bg-blue-600 hover:bg-blue-700 font-semibold py-3 rounded-xl shadow-lg transition">
                Get Started
            </button>
        </section>

        <!-- Platinum Plan -->
        <section class="bg-gradient-to-br from-[#5B4BFF] to-[#7C5BFF] text-white rounded-2xl p-8 shadow-lg flex flex-col transition-transform hover:-translate-y-2 hover:shadow-xl">
            <h2 class="text-2xl font-bold mb-2">Platinum Plan</h2>
            <p class="text-lg mb-6">Full access to everything</p>
            <p class="text-4xl font-extrabold mb-8">$49<span class="text-base font-semibold ml-1">/month</span></p>
            <ul class="mb-8 space-y-3 text-base">
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> Access to all articles</li>
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> 1-on-1 Sessions</li>
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> Advanced Assessments</li>
                <li class="flex items-center gap-3"><span class="text-green-400 font-bold select-none">✔</span> Activities</li>
            </ul>
            <button type="button" data-plan="platinum" class="show-payment-modal w-full bg-blue-600 hover:bg-blue-700 font-semibold py-3 rounded-xl shadow-lg transition">
                Get Started
            </button>
        </section>
    </main>

    <!-- Payment Modal -->
    <div id="payment-modal" class="fixed inset-0 hidden z-50 bg-[rgba(0,0,50,0.6)] flex justify-center items-center p-4">
        <div class="modal-content bg-gradient-to-br from-blue-600 to-blue-400 p-8 rounded-2xl w-full max-w-md shadow-2xl text-white animate-fadeIn">
            <h3 class="modal-header text-2xl font-extrabold text-center mb-6">Enter Payment Information</h3>
            <form id="payment-form" method="POST" action="{{ url('/subscribe') }}" class="space-y-4">
                @csrf
                <input type="hidden" id="selected-plan" name="plan" value="">

                <div>
                    <label for="card-number" class="block font-semibold mb-1">Card Number</label>
                    <input type="text" id="card-number" name="card_number" placeholder="1234" required
                           class="w-full rounded-xl px-4 py-3 text-gray-900 text-lg outline-none focus:ring-2 focus:ring-blue-300"/>
                </div>
                <div>
                    <label for="expiry-date" class="block font-semibold mb-1">Expiry Date</label>
                    <input type="month" id="expiry-date" name="expiry_date" required
                           class="w-full rounded-xl px-4 py-3 text-gray-900 text-lg outline-none focus:ring-2 focus:ring-blue-300"/>
                </div>
                <div>
                    <label for="cvv" class="block font-semibold mb-1">CVV</label>
                    <input type="number" id="cvv" name="cvv" placeholder="123" required
                           class="w-full rounded-xl px-4 py-3 text-gray-900 text-lg outline-none focus:ring-2 focus:ring-blue-300"/>
                </div>
                <div class="modal-footer flex gap-4 mt-6">
                    <button type="button" class="close flex-1 bg-blue-800 hover:bg-blue-900 rounded-xl py-3 font-bold transition">
                        Close
                    </button>
                    <button type="submit" id="submit-button" class="flex-1 bg-blue-500 hover:bg-blue-600 rounded-xl py-3 font-bold transition">
                        Submit Payment
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Show modal and set plan
        document.querySelectorAll('.show-payment-modal').forEach(button => {
            button.addEventListener('click', () => {
                const plan = button.getAttribute('data-plan');
                document.getElementById('selected-plan').value = plan;
                document.getElementById('payment-modal').classList.remove('hidden');
            });
        });

        // Close modal
        document.querySelector('.close').addEventListener('click', () => {
            document.getElementById('payment-modal').classList.add('hidden');
        });

        // Form validation and submit
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;
            const cardNumber = document.getElementById('card-number').value.trim();
            const expiryDate = document.getElementById('expiry-date').value.trim();
            const cvv = document.getElementById('cvv').value.trim();

            if (!/^\d{4,}$/.test(cardNumber)) {
                isValid = false;
                alert('Please enter a valid card number (at least 4 digits).');
            }

            if (!expiryDate) {
                isValid = false;
                alert('Please enter a valid expiry date.');
            }

            if (!/^\d{3}$/.test(cvv)) {
                isValid = false;
                alert('Please enter a valid 3-digit CVV.');
            }

            if (isValid) {
                this.submit();
            }
        });

        // Update buttons after subscription (example usage)
        function updateButtonAfterSubscription(plan) {
            const buttons = document.querySelectorAll('.show-payment-modal');
            buttons.forEach(button => {
                if (button.getAttribute('data-plan') === plan) {
                    button.textContent = 'Subscribed';
                    button.disabled = true;
                    button.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    button.textContent = 'Get Started';
                    button.disabled = false;
                    button.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            });
        }

        // Example call (remove or update based on backend response)
        // updateButtonAfterSubscription('premium');
    </script>

    </body>
    </html>
@endsection
