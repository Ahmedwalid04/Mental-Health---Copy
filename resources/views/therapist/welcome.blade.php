{{-- resources/views/welcome.blade.php --}}
@extends('layouts.notlogged')

@section('title', 'welcome page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/therapist/welcome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <img src="{{ asset('pics/bg.jpg') }}"
             alt="Silhouette of a head filled with words related to mental health"
             class="bg-image" width="1920" height="400">
        <h1>Your Mental Wellness Companion</h1>
        <p>Track, Reflect, and Improve Your Mental Health</p>
    </section>

    <!-- Buttons -->
    <div class="buttons">
        <button class="btn btn-signin" type="button" onclick="showLogin()">Sign in</button>
        <button class="btn btn-register" type="button" onclick="showRegister()">Register</button>
    </div>

    <!-- Sign In Popup -->
    <div id="loginPopup" class="popup-overlay">
        <div class="popup-box">
            <div class="popup-left">
                <img src="{{ asset('pics/22.png') }}" alt="Mental Illustration" class="popup-img">
            </div>
            <div class="popup-right">
                <span class="close-btn" onclick="closePopup('loginPopup')">×</span>
                <h2>Welcome back</h2>
                <p>Sign in to continue to your account</p>

                @if(session('error'))
                    <p class="message">{{ session('error') }}</p>
                @endif
                @if(session('success'))
                    <p class="message success">{{ session('success') }}</p>
                @endif

                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <button type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div id="registerPopup" class="popup-overlay">
        <div class="popup-box">
            <div class="popup-left">
                <img src="{{ asset('pics/22.png') }}" alt="Mental Illustration" class="popup-img">
            </div>
            <div class="popup-right">
                <span class="close-btn" onclick="closePopup('registerPopup')">×</span>
                <h2>Create your account</h2>
                <p>Sign up to get started</p>

                @if ($errors->any())
                    <div class="message">
                        <ul style="list-style: none; padding: 0;">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register.custom') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
                    <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                    <input type="number" name="age" placeholder="Age" value="{{ old('age') }}" required>
                    <select name="role" required>
                        <option value="">Select role</option>
                        <option value="patient" {{ old('role') == 'patient' ? 'selected' : '' }}>Patient</option>
                        <option value="therapist" {{ old('role') == 'therapist' ? 'selected' : '' }}>Therapist</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm password" required>
                    <button type="submit">Sign up</button>
                </form>

                <button class="google-btn" onclick="window.location.href='{{ route('google.login') }}'">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google icon">
                    Continue with Google
                </button>
            </div>
        </div>
    </div>
<div class="divvv">
    <!-- Images Section -->
    <section class="images-section" aria-label="Mental health images">
        <img src="https://storage.googleapis.com/a1aa/image/9cccb86a-3448-47a3-557c-220eb853f272.jpg"
             alt="Blue and pink silhouette of two heads"
             width="600" height="400" loading="lazy">
        <img src="https://storage.googleapis.com/a1aa/image/c4e95f70-42d8-4f41-db97-3091e234f6bd.jpg"
             alt="Person placing heart shapes inside a head"
             width="600" height="400" loading="lazy">
    </section>

    <!-- Features Section -->
    <section class="features-section" aria-labelledby="features-title">
        <h2 id="features-title">Why Choose Our Mental Health System?</h2>
        <p class="description">Tools and resources designed to support your well-being</p>
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true"><i class="fas fa-info-circle"></i></div>
                <div class="feature-content">
                    <h3>Personalized Mood Tracking</h3>
                    <p>Monitor your emotions and identify patterns with AI-driven insights.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true"><i class="fas fa-info-circle"></i></div>
                <div class="feature-content">
                    <h3>Professional Support</h3>
                    <p>Connect with certified therapists and mental health professionals anytime.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true"><i class="fas fa-info-circle"></i></div>
                <div class="feature-content">
                    <h3>Guided Meditation &amp; Exercises</h3>
                    <p>Reduce stress and anxiety with guided meditation and relaxation techniques.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true"><i class="fas fa-info-circle"></i></div>
                <div class="feature-content">
                    <h3>Goal Setting &amp; Progress Tracking</h3>
                    <p>Set mental wellness goals and track your progress over time to stay motivated.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true"><i class="fas fa-info-circle"></i></div>
                <div class="feature-content">
                    <h3>Daily Affirmations &amp; Journaling</h3>
                    <p>Receive positive affirmations and maintain a digital journal to reflect on your thoughts and emotions.</p>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Scripts and Alerts -->
    <script>
        function showLogin() {
            document.getElementById("loginPopup").style.display = "flex";
        }
        function showRegister() {
            document.getElementById("registerPopup").style.display = "flex";
        }
        function closePopup(id) {
            document.getElementById(id).style.display = "none";
        }
        window.onload = function () {
            const box = document.getElementById('alertBox');
            if (box) setTimeout(() => { box.style.display = 'none'; }, 4000);
        };
    </script>

    @if(session('success') || session('error'))
        <div id="alertBox" class="alert-popup">
            <div class="alert-content {{ session('success') ? 'success' : 'error' }}">
                <span class="close-alert" onclick="document.getElementById('alertBox').style.display='none'">&times;</span>
                <p>{{ session('success') ?? session('error') }}</p>
            </div>
        </div>
    @endif
@endsection
