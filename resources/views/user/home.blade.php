@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <img
            src="pics/bg.jpg"
            alt="Silhouette of a head filled with words related to mental health"
            class="bg-image"
            width="1920"
            height="400"
        />
        <div class="hero-text">
            <h1>Your Mental Wellness Companion</h1>
            <p>Track, Reflect, and Improve Your Mental Health</p>
        </div>
    </section>

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
@endsection
