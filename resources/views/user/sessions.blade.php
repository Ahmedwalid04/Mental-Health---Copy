@extends('layouts.app')

@section('title', 'Sessions')

@section('content')

    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Mental Wellbeing Therapists</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="bg-white text-[#1f2937]">
    <main class="container max-w-full mx-auto ">
        <section aria-label="Hero section" class="text-center pt-10 pb-6">
            <img
                src="https://storage.googleapis.com/a1aa/image/1691a74d-9c50-4352-ca7b-e94fd9d97d35.jpg"
                alt="Illustration of a therapist and a patient talking online with speech bubbles and clock"
                width="600"
                height="240"
                loading="lazy"
                class="mx-auto max-w-[30%] sm:max-w-[25%] md:max-w-[20%]"
            />
            <h1 class="font-extrabold text-[#0b246e] mt-4 text-2xl sm:text-3xl md:text-4xl leading-tight">
                Your Path to Mental Wellbeing Starts Here.
            </h1>
            <p class="text-[#2d4db7] font-normal text-lg mt-2">
                If you need to talk now, we are here to help you
            </p>
        </section>

        <section aria-label="Our therapists" class="bg-[#b4d0eb] py-10">
            <h2 class="text-[#0b246e] font-extrabold text-center text-xl sm:text-2xl md:text-3xl mb-10">
                OUR THERAPISTS
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[1200px] mx-auto px-4">
                @foreach($therapistProfiles as $therapist)
                    <article aria-label="Therapist {{ $therapist->user->name }}" class="bg-[#fef9f0] rounded-lg p-6 w-[300px] h-[380px] mx-auto flex flex-col gap-6">
                        <header class="flex items-center gap-4">
                            <img
                                src="{{ asset('storage/' . $therapist->profile_image) }}"
                                alt="Avatar of therapist {{ $therapist->user->name }}"
                                class="w-12 h-12 rounded-full object-cover bg-teal-500"
                                width="48"
                                height="48"
                                loading="lazy"
                            />
                            <div>
                                <h3 class="text-[#0b246e] font-bold text-xl leading-tight m-0">
                                    {{ $therapist->user->name }}
                                </h3>
                                <p class="text-[#0b246e] font-normal text-xs m-0">
                                    Psychologist
                                </p>
                            </div>
                        </header>
                        <div aria-label="Specializations" class="flex flex-wrap gap-2">
                            @php
                                $specializations = is_string($therapist->specializations) ? json_decode($therapist->specializations, true) : $therapist->specializations;
                            @endphp
                            @if(is_array($specializations))
                                @foreach($specializations as $spec)
                                    <span class="text-xs text-gray-900 bg-gray-300 rounded-md px-2 py-0.5 select-none whitespace-nowrap">
                    {{ $spec }}
                  </span>
                                @endforeach
                            @elseif($specializations)
                                <span class="text-xs text-gray-600 bg-gray-300 rounded-md px-2 py-0.5 select-none whitespace-nowrap">
                  {{ $specializations }}
                </span>
                            @endif
                        </div>
                        <p title="{{ $therapist->bio }}" class="text-[#0b246e] font-normal text-xs mt-0 mb-3 line-clamp-4">
                            {{ \Illuminate\Support\Str::limit($therapist->bio, 100) }}
                        </p>
                        <div aria-label="Session duration" class="flex items-center gap-2 text-[#0b246e] font-semibold text-sm">
                            <svg class="w-4 h-4 stroke-current" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true" focusable="false" >
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="6" x2="12" y2="12"></line>
                                <line x1="12" y1="12" x2="16" y2="14"></line>
                            </svg>
                            <span>30 mins</span>
                        </div>
                        <div aria-label="Price per 30 minutes session" class="flex items-center gap-1 text-[#0b246e] font-semibold text-sm">
                            <svg class="w-4 h-4 fill-current text-[#0b246e]" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>
                                <path d="M12 6v12m-3-3h6"/>
                            </svg>
                            <span>{{ number_format($therapist->price_per_half_hour, 2) }} EGP</span>
                            <span class="bg-[#0b246e] text-white text-[0.625rem] font-semibold rounded-full px-2 py-0.5 select-none whitespace-nowrap">
                30 min
              </span>
                        </div>
                        <div class="flex gap-4 mt-3">
                            <a href="{{ route('therapists.show', $therapist->user->id) }}" aria-label="View profile of {{ $therapist->user->name }}" class="flex-1 bg-[#0b246e] hover:bg-[#0a1d4a] text-white font-semibold text-sm rounded-md py-2 text-center transition-colors">
                                View Profile
                            </a>
                            <a href="{{ route('book.therapist', $therapist->user_id) }}" aria-label="Book a session with {{ $therapist->user->name }}" class="flex-1 bg-[#d1d9f7] hover:bg-[#b7c4f5] text-[#0b246e] font-semibold text-sm rounded-md py-2 text-center transition-colors">
                                Book Now
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </main>
    </body>
    </html>
@endsection
