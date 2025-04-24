{{-- resources/views/home.blade.php --}}
@extends('layouts.client')

@section('title', 'Home')

@section('content')

    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Mental Wellness Companion</title>
        <style>
            /* Reset and base */
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
                background-color: #b7d1e8;
                color: #1a1a1a;
                line-height: 1.5;
            }

            img {
                max-width: 100%;
                height: auto;
                display: block;
                border-radius: 0.25rem;
            }

            /* Container max width */
            .container {
                max-width: 1120px;
                margin-left: auto;
                margin-right: auto;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            /* Hero Section */
            .hero {
                position: relative;
                background-color: #ffffff;
                color: #081F5C;
                text-align: center;
                padding: 5rem 1rem;
                overflow: hidden;
                z-index: -1;
            }

            .hero img.bg-image {

                position: absolute;
                top: 0;
                left: 75%; /* Position from left edge */
                transform: translateX(-50%); /* Shift it left by half its width to center */
                width: 50%;
                height: 100%;
                object-fit: cover;
                opacity: 1;
                z-index: -1;
            }

            .hero h1 {
                font-weight: 800;
                font-size: 2.5rem;
                max-width: 800px;
                margin-left: 10px;
                line-height: 1.1;
                padding: 1rem;
                border-radius: 0.5rem;
                margin-bottom: 0; /* remove space below h1 */
            }

            @media (min-width: 640px) {
                .hero h1 {
                    font-size: 3rem;
                }
            }

            @media (min-width: 768px) {
                .hero h1 {
                    font-size: 3.75rem;
                }
            }

            .hero p {
                font-size: 1.125rem;
                max-width: 600px;
                margin-left: 115px;
                padding: 1rem;
                border-radius: 0.5rem;
                margin-top: 0; /* remove space above p */
            }

            .buttons {
                background-color: white;


                gap: 1rem;
            }

            .btn {
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                font-size: 1rem;
                cursor: pointer;
                border: 1px solid black;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            .btn-signin {
                background-color: #081F5C !important;
                color: #ffffff !important;
            }

            .btn-signin:hover {
                background-color: #96b8c1 !important;
                color: white !important;
            }

            .btn-register {
                background-color: #ffffff !important;
                border: 2px solid #081F5C !important;
                color: #081F5C !important;
            }

            .btn-register:hover {
                background-color: #96b8c1 !important;
                border: 2px solid #96b8c1 !important;
                color: white !important;
            }

            /* Images Section */
            .images-section {
                display: grid;
                grid-template-columns: 1fr;
                gap: 3rem;
                padding: 3rem 1.5rem;
                max-width: 1120px;
                margin-left: auto;
                margin-right: auto;
                background-color: #b7d1e8;
                justify-items: center;
            }

            @media (min-width: 640px) {
                .images-section {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            .images-section img {
                width: 280px;
                max-width: 100%;
                height: auto;
                border-radius: 0.25rem;
            }

            /* Features Section */
            .features-section {
                max-width: 1120px;
                margin-left: auto;
                margin-right: auto;
                padding: 0 1.5rem 4rem 1.5rem;
                background-color: #b7d1e8;
            }

            .features-section h2 {
                color: #0a2e6e;
                font-weight: 600;
                font-size: 1.125rem;
                max-width: 400px;
                margin-bottom: 0.25rem;
            }

            .features-section p.description {
                color: #1a1a1a;
                margin-bottom: 2.5rem;
                max-width: 600px;
            }

            .features-grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 2.5rem 2rem;
            }

            @media (min-width: 640px) {
                .features-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (min-width: 1024px) {
                .features-grid {
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            .feature-item {
                display: flex;
                gap: 1rem;
                max-width: 400px;
            }

            .feature-icon {
                color: #0a2e6e;
                font-size: 1.25rem;
                margin-top: 0.25rem;
                flex-shrink: 0;
            }

            .feature-content h3 {
                font-weight: 600;
                color: #1a1a1a;
                margin: 0 0 0.25rem 0;
                font-size: 1rem;
            }

            .feature-content p {
                margin: 0;
                font-size: 0.875rem;
                color: #1a1a1a;
                line-height: 1.4;
            }
        </style>
        <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
    </head>
    <body>
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="hero">
        <img
                src="pics\bg.jpg"
                alt="Silhouette of a head filled with words related to mental health such as misery, dark, gloominess, blues, health, melancholy, mental, and more in black and gray shades"
                aria-hidden="true"
                class="bg-image"
                width="1920"
                height="400"
        />

        <div class="hero-text">
            <h1>Your Mental Wellness Companion</h1>
            <p>Track, Reflect, and Improve Your Mental Health</p>
        </div>
    </section>

    <!-- Images Section -->
    <section class="images-section" aria-label="Mental health images">
        <img
                src="https://storage.googleapis.com/a1aa/image/9cccb86a-3448-47a3-557c-220eb853f272.jpg"
                alt="Blue and pink silhouette of two heads facing opposite directions filled with words related to mental health such as depression, misery, health, melancholy, discouragement, mental, and more"
                width="600"
                height="400"
                loading="lazy"
        />
        <img
                src="https://storage.googleapis.com/a1aa/image/c4e95f70-42d8-4f41-db97-3091e234f6bd.jpg"
                alt="Illustration of a person climbing a ladder to place red heart shapes inside a blue silhouette of a head, symbolizing mental wellness and care"
                width="600"
                height="400"
                loading="lazy"
        />
    </section>

    <!-- Features Section -->
    <section class="features-section" aria-labelledby="features-title">
        <h2 id="features-title">Why Choose Our Mental Health System?</h2>
        <p class="description">Tools and resources designed to support your well-being</p>
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="feature-content">
                    <h3>Personalized Mood Tracking</h3>
                    <p>Monitor your emotions and identify patterns with AI-driven insights.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="feature-content">
                    <h3>Professional Support</h3>
                    <p>Connect with certified therapists and mental health professionals anytime.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="feature-content">
                    <h3>Guided Meditation &amp; Exercises</h3>
                    <p>Reduce stress and anxiety with guided meditation and relaxation techniques.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="feature-content">
                    <h3>Goal Setting &amp; Progress Tracking</h3>
                    <p>Set mental wellness goals and track your progress over time to stay motivated.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" aria-hidden="true">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="feature-content">
                    <h3>Daily Affirmations &amp; Journaling</h3>
                    <p>Receive positive affirmations and maintain a digital journal to reflect on your thoughts and
                        emotions.</p>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>
@endsection
