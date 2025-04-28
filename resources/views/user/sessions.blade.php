@extends('layouts.app')

@section('title', 'Sessions')

@section('content')


<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Mental Wellbeing Therapists</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #1f2937;
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
            font-weight: 400;
            font-size: 1.125rem;
            color: #2d4db7;
        }

        /* Therapists Section */
        .therapists-section {
            width: 100%;
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
            flex-wrap: wrap;
        }

        .tag {
            font-size: 0.75rem;
            color: #6b7280;
            background-color: #d1d5db;
            border-radius: 0.375rem;
            padding: 0.125rem 0.5rem;
            user-select: none;
            white-space: nowrap;
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
            width:150px;
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
<body>
<main class="container">
    <section class="hero" aria-label="Hero section">
        <img
            src="https://storage.googleapis.com/a1aa/image/1691a74d-9c50-4352-ca7b-e94fd9d97d35.jpg"
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
            @foreach($therapistProfiles as $therapist)
                <article class="card" aria-label="Therapist {{ $therapist->user->name }}">
                    <header class="card-header">
                        <img
                            src="{{ asset('storage/' . $therapist->profile_image) }}"
                            alt="Avatar of therapist {{ $therapist->user->name }}"
                            class="avatar"
                            width="48"
                            height="48"
                            loading="lazy"
                        />
                        <div>
                            <h3 class="name">{{ $therapist->user->name }}</h3>
                            <p class="title">Psychologist</p>
                        </div>
                    </header>
                    <div class="tags" aria-label="Specializations">
                        @php
                            $specializations = is_string($therapist->specializations) ? json_decode($therapist->specializations, true) : $therapist->specializations;
                        @endphp
                        @if(is_array($specializations))
                            @foreach($specializations as $spec)
                                <span class="tag">{{ $spec }}</span>
                            @endforeach
                        @elseif($specializations)
                            <span class="tag">{{ $specializations }}</span>
                        @endif
                    </div>
                    <p class="date" title="{{ $therapist->bio }}">{{ \Illuminate\Support\Str::limit($therapist->bio, 100) }}</p>
                    <div class="time" aria-label="Session duration">
                        <svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="12" cy="12" r="10" stroke-width="2" stroke="#0b246e" fill="none"></circle>
                            <line x1="12" y1="6" x2="12" y2="12" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                            <line x1="12" y1="12" x2="16" y2="14" stroke="#0b246e" stroke-width="2" stroke-linecap="round"></line>
                        </svg>
                        <span>30 mins</span>
                    </div>
                    <div class="price-group" aria-label="Price per 30 minutes session">
                        <svg class="icon-money" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path fill="currentColor" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                            <path fill="currentColor" d="M12 6v12m-3-3h6"/>
                        </svg>
                        <span class="price">{{ number_format($therapist->price_per_half_hour, 2) }} EGP</span>
                        <span class="price-badge">30 min</span>
                    </div>
                    <div class="buttons">
                        <a href="{{ route('therapists.show', $therapist->user->id) }}"
                           class="btn-profile"
                           aria-label="View profile of {{ $therapist->user->id }}">
                            View Profile
                        </a>
                        <a href="{{ route('book.therapist', $therapist->user_id) }}" class="btn-book" aria-label="Book a session with {{ $therapist->user->name }}">Book Now</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</main>
</body>
</html>

@endsection
