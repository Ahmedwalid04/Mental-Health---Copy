@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-[#BAD6EB] flex items-center justify-center p-6 text-[#1e40af] antialiased">

        <div class="relative bg-[#fffefa] max-w-4xl w-full rounded-xl shadow-[0_4px_8px_rgba(30,64,175,0.1),0_12px_24px_rgba(30,64,175,0.15)] hover:shadow-[0_6px_12px_rgba(30,64,175,0.15),0_18px_36px_rgba(30,64,175,0.25)] p-10 sm:p-12" role="main" aria-label="Therapist profile page">

            <!-- Edit Profile Button -->
            <a href="{{ route('profile.edit') }}">
                <button
                    type="button"
                    aria-label="Edit Profile"
                    class="absolute top-8 right-8 bg-[#1e40af] text-white font-semibold text-sm rounded-md px-5 py-2 shadow-[0_2px_6px_rgba(30,64,175,0.2)] flex items-center justify-center transition-colors duration-300 hover:bg-[#3b82f6] hover:shadow-[0_4px_12px_rgba(59,130,246,0.5)] focus:outline-none"
                >
                    Edit Profile
                </button>
            </a>

            <!-- Profile Info -->
            <div class="flex flex-col sm:flex-row sm:items-start gap-10">
                <div class="flex flex-col items-center sm:items-start gap-5 min-w-[220px] flex-shrink-0">
                    <img
                        src="https://storage.googleapis.com/a1aa/image/aa68b611-68d9-413e-698b-758e6495f474.jpg"
                        alt="Therapist profile photo"
                        class="w-[220px] h-[220px] rounded-full object-cover bg-slate-300 shadow-[0_8px_20px_rgba(30,64,175,0.15)] border-6 border-[#93c5fd] transition-transform duration-300 hover:scale-[1.05]"
                    />

                    <div class="text-center sm:text-left font-extrabold text-xl">
                        @auth
                            {{ Auth::user()->name }}
                        @endauth
                    </div>

                    <div class="flex items-baseline gap-1 font-semibold text-base">
                        <span class="bg-[#dbeafe] px-3 py-1 rounded-md shadow-inner">EGP</span>
                        @auth
                            {{ number_format(Auth::user()->therapistProfile->price_per_half_hour ?? 0) }}
                        @endauth
                        <span>/ 30min</span>
                    </div>
                </div>

                <!-- About Sections -->
                <div class="flex-1 text-base leading-relaxed">

                    <!-- Qualifications -->
                    <section class="max-w-xl mb-14">
                        <h3 class="flex items-center gap-2 font-extrabold text-sm border-b-2 border-blue-200 pb-1">
                            <i class="fas fa-graduation-cap text-blue-500 text-lg"></i> Qualifications
                        </h3>
                        @auth
                            <p class="mt-2 text-slate-700">
                                {{ Auth::user()->therapistProfile->qualifications ?? 'No qualifications listed.' }}
                            </p>
                        @endauth
                    </section>

                    <!-- Experience -->
                    <section class="max-w-xl mb-14">
                        <h3 class="flex items-center gap-2 font-extrabold text-sm border-b-2 border-blue-200 pb-1">
                            <i class="fas fa-briefcase text-blue-500 text-lg"></i> Experience
                        </h3>
                        @auth
                            <p class="mt-2 text-slate-700">
                                {{ Auth::user()->therapistProfile->experience ?? 'No experience listed.' }}
                            </p>
                        @endauth
                    </section>

                    <!-- About Me -->
                    <section class="max-w-xl">
                        <h3 class="flex items-center gap-2 font-extrabold text-sm border-b-2 border-blue-200 pb-1">
                            <i class="fas fa-info-circle text-blue-500 text-lg"></i> About Me
                        </h3>
                        <textarea
                            readonly
                            class="mt-2 w-full min-h-[100px] border-2 border-blue-300 rounded-lg bg-blue-50 p-4 resize-none leading-relaxed"
                        >@auth {{ Auth::user()->therapistProfile->bio ?? '' }} @endauth</textarea>
                    </section>

                </div>
            </div>

            <!-- Specialties -->
            <div class="max-w-3xl mx-auto mt-10 flex flex-wrap gap-3 justify-center px-2">
                <h3 class="w-full font-extrabold text-sm border-b-2 border-blue-200 pb-1 mb-4 text-center">Specialties</h3>
                @auth
                    @php
                        $specialties = explode(',', Auth::user()->therapistProfile->specializations ?? '');
                    @endphp
                    @if(count($specialties) > 0 && trim($specialties[0]) !== '')
                        @foreach($specialties as $specialty)
                            <span class="bg-blue-200 text-[#1e40af] text-xs font-semibold rounded-full px-4 py-1 shadow-md cursor-default">
                            {{ trim($specialty) }}
                        </span>
                        @endforeach
                    @else
                        <p class="text-slate-700">No specialties listed.</p>
                    @endif
                @endauth
            </div>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="absolute bottom-8 right-8">
                @csrf
                <button
                    type="submit"
                    aria-label="Logout"
                    class="bg-red-600 text-white font-semibold text-sm rounded-md px-5 py-2 shadow-md hover:bg-red-700 focus:outline-none"
                >
                    Logout
                </button>
            </form>

        </div>
    </div>
@endsection
