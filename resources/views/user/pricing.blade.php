@extends('layouts.app')

@section('title', 'Pricing')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: white;
            padding: 40px 0;
            min-height: 100vh;
        }
        .pricing-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }
        header {
            text-align: center;
            margin-bottom: 64px;
            position: relative;
            padding: 80px 16px 40px;
            overflow: hidden;
        }
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("storage/uploads/Screenshot (37).png") }}') no-repeat center center;
            background-size: cover;
            opacity: 0.15;
            z-index: -1;
        }
        h1, .subtitle {
            position: relative;
            z-index: 1;
        }
        h1 {
            font-weight: 900;
            font-size: 36px;
            color: #1A1A1A;
            margin-bottom: 10px;
        }
        p.subtitle {
            font-size: 18px;
            color: #374151;
            margin-top: 8px;
        }
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 24px;
        }
        section.plan {
            background: white;
            border-radius: 20px;
            padding: 32px 24px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            width: 320px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        section.plan:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.12);
        }
        section.premium {
            background: linear-gradient(135deg, #0F172A, #1E293B);
            color: white;
        }
        section.platinum {
            background: linear-gradient(135deg, #5B4BFF, #7C5BFF);
            color: white;
        }
        h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        p.desc {
            font-size: 16px;
            color: inherit;
            margin-bottom: 16px;
        }
        p.price {
            font-size: 30px;
            font-weight: 800;
            margin: 20px 0;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 24px;
            text-align: left;
        }
        ul li {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
            font-size: 15px;
        }
        .check::before {
            content: "✔";
            color: #10B981;
            font-weight: bold;
        }
        .times::before {
            content: "✖";
            color: #EF4444;
            font-weight: bold;
        }
        button {
            background: #3B82F6;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background: #2563EB;
            transform: scale(1.05);
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
        }
        section.basic button {
            background-color: #F3F4F6;
            color: #1A1A1A;
        }
        section.basic button:hover {
            background-color: #E5E7EB;
        }
        /* Updated Payment Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 50, 0.6);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: linear-gradient(135deg, #3B82F6, #60A5FA);
            padding: 30px 25px;
            border-radius: 20px;
            width: 420px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            color: white;
            animation: fadeIn 0.5s ease;
        }
        .modal-header {
            font-size: 24px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], input[type="month"] {
            width: 100%;
            padding: 12px 14px;
            margin: 10px 0 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            outline: none;
            background: #EFF6FF;
            color: #1E293B;
        }
        input::placeholder {
            color: #9CA3AF;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }
        .modal-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .modal-footer button {
            flex: 1;
            margin: 0 5px;
            background-color: #1D4ED8;
            color: white;
            font-weight: 700;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            transition: background 0.3s;
            cursor: pointer;
        }
        .modal-footer button:hover {
            background-color: #2563EB;
        }
        .error {
            color: #FECACA;
            font-size: 13px;
            margin-top: -15px;
            margin-bottom: 10px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8);}
            to { opacity: 1; transform: scale(1);}
        }
        @media (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    <div class="pricing-container">
        <header>
            <h1>Find the Right Plan for Your Mental Wellness</h1>
            <p class="subtitle">Affordable plans tailored to support your well-being</p>
        </header>

        <main>
            <section class="plan basic">
                <h2>Basic Plan</h2>
                <p class="desc">Perfect for getting started</p>
                <p class="price">Free</p>
                <ul>
                    <li><span class="check"></span> Access to all articles</li>
                    <li><span class="times"></span> 1-on-1 Sessions</li>
                    <li><span class="times"></span> Assessments</li>
                    <li><span class="times"></span> Activities</li>
                </ul>
                <form method="GET" action="{{ url('/articles') }}">
                    <button type="submit">Get Started</button>
                </form>
            </section>

            <section class="plan premium">
                <h2>Premium Plan</h2>
                <p class="desc">For serious learners</p>
                <p class="price">$29 <span>/month</span></p>
                <ul>
                    <li><span class="check"></span> Access to all articles</li>
                    <li><span class="check"></span> 1-on-1 Sessions</li>
                    <li><span class="check"></span> Assessments</li>
                    <li><span class="check"></span> Activities</li>
                </ul>
                <button type="button" class="show-payment-modal">Get Started</button>
            </section>

            <section class="plan platinum">
                <h2>Platinum Plan</h2>
                <p class="desc">Full access to everything</p>
                <p class="price">$49 <span>/month</span></p>
                <ul>
                    <li><span class="check"></span> Access to all articles</li>
                    <li><span class="check"></span> Unlimited 1-on-1 Sessions</li>
                    <li><span class="check"></span> Advanced Assessments</li>
                    <li><span class="check"></span> Unlimited Activities</li>
                    <li><span class="check"></span> Priority Support</li>
                </ul>
                <button type="button" class="show-payment-modal">Get Started</button>
            </section>
        </main>

        <!-- Payment Modal -->
        <div id="payment-modal" class="modal">
            <div class="modal-content">
                <div class="modal-header">Enter Payment Information</div>
                <form id="payment-form" method="GET" action="{{ url('/sessions') }}">
                    @csrf
                    <div class="form-group">
                        <label for="card-number">Card Number</label>
                        <input type="text" id="card-number" name="card_number" placeholder="1234" required>
                        <div class="error" id="card-number-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="expiry-date">Expiry Date</label>
                        <input type="month" id="expiry-date" name="expiry_date" required>
                        <div class="error" id="expiry-date-error"></div>
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="number" id="cvv" name="cvv" placeholder="123" required>
                        <div class="error" id="cvv-error"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close">Close</button>
                        <button type="submit" id="submit-button">Submit Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.show-payment-modal').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('payment-modal').style.display = 'flex';
            });
        });

        document.querySelector('.close').addEventListener('click', () => {
            document.getElementById('payment-modal').style.display = 'none';
        });

        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;
            const cardNumber = document.getElementById('card-number').value;
            const expiryDate = document.getElementById('expiry-date').value;
            const cvv = document.getElementById('cvv').value;

            if (!cardNumber.match(/^\d{4,}$/)) {
                isValid = false;
                document.getElementById('card-number-error').textContent = "Card number must be at least 4 digits.";
            } else {
                document.getElementById('card-number-error').textContent = '';
            }

            if (!expiryDate) {
                isValid = false;
                document.getElementById('expiry-date-error').textContent = "Please enter expiry date.";
            } else {
                document.getElementById('expiry-date-error').textContent = '';
            }

            if (!cvv.match(/^\d{3}$/)) {
                isValid = false;
                document.getElementById('cvv-error').textContent = "CVV must be exactly 3 digits.";
            } else {
                document.getElementById('cvv-error').textContent = '';
            }

            if (isValid) {
                this.submit();
            }
        });
    </script>
@endsection
