@extends('layouts.app')

@section('title', 'Sessions')

@section('content')


<body>
        <section class="hero container" aria-label="Hero section">
            <img
                src="https://storage.googleapis.com/a1aa/image/e9691643-0a56-42a5-7d03-626281edbb6f.jpg"
                alt="Illustration of a therapist and a patient talking online with speech bubbles and clock"
                width="600"
                height="240"
                loading="lazy"
            />
            <h1>Your Path to Mental Wellbeing Starts Here.</h1>
            <p>If you need to talk now, we are here to help you</p>
        </section>

        <section class="therapists-section" aria-label="Our therapists">
            <h2>OUR THERAPISTS</h2>
            <div class="therapists-grid">
                <!-- Therapist 1 -->
                <article class="card" aria-label="Therapist Ahmed Walid">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">Ahmed Walid</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>02:00PM-05:00PM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>

                <!-- Therapist 2 -->
                <article class="card" aria-label="Therapist Mohamed Elsayyad">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">Mohamed Elsayyad</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>05:00PM-08:00PM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>

                <!-- Therapist 3 -->
                <article class="card" aria-label="Therapist kirollos Maged">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">kirollos Maged</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>08:00PM-11:00PM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>

                <!-- Therapist 4 -->
                <article class="card" aria-label="Therapist Muhammad Tareq">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">Muhammad Tareq</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>08:00AM-11:00AM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>

                <!-- Therapist 5 -->
                <article class="card" aria-label="Therapist Steven Milad">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">Steven Milad</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>12:00PM-03:00PM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>

                <!-- Therapist 6 -->
                <article class="card" aria-label="Therapist kirollos Magdy">
                    <header class="card-header">
                        <img
                            src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                            alt="Avatar of a male psychologist with teal background"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">kirollos Magdy</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags">
                        <span class="tag">Anxiety Disorders</span>
                        <span class="tag">Couple Therapy</span>
                    </div>
                    <div class="time" aria-label="Session time">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>03:00PM-06:00PM</span>
                    </div>
                    <p class="date">Monday,August 19</p>
                    <div class="price-group" aria-label="Price for 1 hour session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">1280 EGP</span>
                        <span class="price-badge">1hr</span>
                    </div>
                    <div class="price-group" aria-label="Price for 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">800 EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn-profile">View Profile</button>
                        <button type="button" class="btn-book">Book Now</button>
                    </div>
                </article>
            </div>
        </section>

</body>

@endsection
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #1f2937;
        }

        .container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding-top: 2.5rem;
            padding-bottom: 1.5rem;
        }

        .hero img {
            max-width: 30%;
            height: auto;
            margin-bottom: 1rem;
        }

        .hero h1 {
            font-weight: 800;
            font-size: 1.5rem;
            line-height: 1.2;
            color: #0b246e;
            margin: 0;
        }

        @media (min-width: 640px) {
            .hero h1 {
                font-size: 1.875rem;
            }
        }

        @media (min-width: 768px) {
            .hero h1 {
                font-size: 2.25rem;
            }
        }

        .hero p {
            margin-top: 0.25rem;
            font-weight: 400;
            font-size: 1.125rem;
            color: #2d4db7;
        }

        /* Therapists Section */
        .therapists-section {
            background-color: #b4d0eb;
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }

        .therapists-section h2 {
            color: #0b246e;
            font-weight: 800;
            font-size: 1.25rem;
            text-align: center;
            margin: 0 0 2.5rem 0;
        }

        @media (min-width: 640px) {
            .therapists-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .therapists-section h2 {
                font-size: 1.875rem;
            }
        }

        .therapists-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .therapists-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .therapists-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .card {
            background-color: #fef9f0;
            border-radius: 0.5rem;
            padding: 1.5rem;
            max-width: 320px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 9999px;
            object-fit: cover;
            background-color: #14b8a6;
        }

        .name {
            font-weight: 700;
            font-size: 0.875rem;
            color: #0b246e;
            margin: 0;
        }

        .title {
            font-weight: 400;
            font-size: 0.75rem;
            color: #0b246e;
            margin: 0;
        }

        .tags {
            display: flex;
            gap: 0.5rem;
        }

        .tag {
            font-size: 0.75rem;
            color: #6b7280;
            background-color: #d1d5db;
            border-radius: 0.375rem;
            padding: 0.125rem 0.5rem;
            user-select: none;
        }

        .time,
        .date,
        .price-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            color: #0b246e;
        }

        .date {
            font-weight: 400;
            font-size: 0.75rem;
            margin-top: -0.25rem;
            margin-bottom: 0.75rem;
        }

        .price-group {
            gap: 0.25rem;
        }

        .price {
            font-weight: 600;
            font-size: 0.875rem;
            color: #0b246e;
        }

        .price-badge {
            background-color: #0b246e;
            color: white;
            font-weight: 600;
            font-size: 0.625rem;
            border-radius: 9999px;
            padding: 0.125rem 0.5rem;
            user-select: none;
            white-space: nowrap;
        }

        .buttons {
            display: flex;
            gap: 0.75rem;
        }

        .btn-profile {
            background-color: #0b246e;
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
            border: none;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
            flex: 1;
        }

        .btn-profile:hover {
            background-color: #0a1d4a;
        }

        .btn-book {
            background-color: #d1d9f7;
            color: #0b246e;
            font-weight: 600;
            font-size: 0.875rem;
            border: none;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
            flex: 1;
        }

        .btn-book:hover {
            background-color: #b7c4f5;
        }

        /* Icons */
        .icon {
            display: inline-block;
            width: 16px;
            height: 16px;
            fill: none;
            stroke: #0b246e;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .icon-money {
            width: 16px;
            height: 16px;
            fill: #0b246e;
            margin-right: 0.25rem;
        }
    </style>
</head>
