@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-[#BAD6ED] text-gray-900 p-6">
        <div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg p-8">

            <!-- Logout Button -->
            <div class="flex justify-end mb-8">
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-lg shadow hover:bg-red-700 transition duration-300" aria-label="Logout">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Profile Info -->
            <div class="flex items-center space-x-8 mb-8">
                <img alt="Profile picture" class="w-32 h-32 rounded-full shadow-md object-cover" src="https://storage.googleapis.com/a1aa/image/17d419c2-905b-4673-5487-c0c39e9fe57a.jpg" />
                <div>
                    <div class="flex items-center space-x-3">
                        <h1 class="text-gray-900 font-semibold text-2xl">
                            <span>{{ Auth::user()->name }}</span>
                        </h1>
                        <a aria-label="Edit profile" class="text-indigo-600 text-sm font-medium hover:underline" href="#">
                            Edit
                        </a>
                    </div>
                    <p class="text-gray-700 text-base mt-2">
                        <span>{{ Auth::user()->age }}</span> years old
                    </p>
                    <span class="inline-block mt-4 bg-indigo-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm select-none">
                    @if(Auth::user()->subscription)
                            {{ Auth::user()->subscription->plan }}
                        @else
                            No subscription
                        @endif
                </span>
                </div>
            </div>

            <!-- Session History -->
            <h2 class="text-gray-900 font-semibold text-lg mb-5 border-b border-gray-200 pb-2">
                Session History
            </h2>
            <ul class="space-y-4">
                <!-- Example Session -->
                <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                            <i class="far fa-clock text-lg"></i>
                        </div>
                        <div>
                            <p class="text-gray-900 text-base font-semibold">
                                Cardio
                            </p>
                            <p class="text-indigo-700 text-sm mt-1 font-medium">
                                2024-01-15
                            </p>
                        </div>
                    </div>
                    <span class="text-gray-900 text-base font-semibold">
                    45min
                </span>
                </li>

                <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                            <i class="far fa-clock text-lg"></i>
                        </div>
                        <div>
                            <p class="text-gray-900 text-base font-semibold">
                                Strength
                            </p>
                            <p class="text-indigo-700 text-sm mt-1 font-medium">
                                2024-01-13
                            </p>
                        </div>
                    </div>
                    <span class="text-gray-900 text-base font-semibold">
                    60min
                </span>
                </li>

                <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center space-x-4">
                        <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                            <i class="far fa-clock text-lg"></i>
                        </div>
                        <div>
                            <p class="text-gray-900 text-base font-semibold">
                                Yoga
                            </p>
                            <p class="text-indigo-700 text-sm mt-1 font-medium">
                                2024-01-10
                            </p>
                        </div>
                    </div>
                    <span class="text-gray-900 text-base font-semibold">
                    30min
                </span>
                </li>
            </ul>
        </div>
    </div>
@endsection
