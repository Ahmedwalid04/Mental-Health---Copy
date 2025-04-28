<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\TProfileController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PricingController;


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// Home route with role-based view
Route::get('/home', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.home');
    }
    return view('user.home');
});
// Article
Route::resource('articles', ArticleController::class);
Route::get('/therapist/articles', [ArticleController::class, 'index'])->name('therapist.index');

// Activities route
Route::get('/activities', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.activities');
    }
    return view('user.activities');
});


// Contact route
Route::get('/contact', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.contact');
    }
    return view('user.contact');
});


// Link route
Route::get('/link', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.link');
    }
    return view('user.link');
});

// Pricing route
Route::get('/pricing', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.pricing');
    }
    return view('user.pricing');
});

// Sessions route
Route::get('/sessions', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.sessions');
    }
    return view('user.sessions');
});

// Profile route
Route::get('/TProfileController.php', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.TProfileController.php');
    }
    return view('user.TProfileController.php');
});


// Welcome route with redirect if authenticated
Route::get('/', function () {
    $user = Auth::user();
    if ($user) {
        return $user->role === 'therapist'
            ? view('therapist.welcome')
            : view('user.welcome');
    }
    return view('user.welcome');
})->name('welcome');

// Authentication routes
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');
Route::post('/register', [AuthController::class, 'register'])->name('register.custom');

//assessments
Route::get('/assessments/result', [AssessmentController::class, 'result'])->name('assessments.result');
Route::resource('assessments', AssessmentController::class)->except(['show']);


Route::middleware('auth')->group(function () {
    // Show profile (display all fields)
    Route::get('/profile', [TProfileController::class, 'show'])->name('profile.show');

    // Show the form to create or edit profile
    Route::get('/profile/edit', [TProfileController::class, 'edit'])->name('profile.edit');

    // Handle create or update (same URL, same action)
    Route::post('/profile/edit', [TProfileController::class, 'save'])->name('profile.save');
});

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::post('/subscribe', [PricingController::class, 'subscribe'])->middleware('auth');

Route::match(['get', 'post'], '/conference/{consultationId}', [ConsultationController::class, 'conference']);
Route::get('/Usessions', [TProfileController::class, 'showAllForSessions'])->name('sessions');
Route::get('/sessions', [ConsultationController::class, 'sessions'])->name('therapist.sessions');
Route::post('/sessions', [ConsultationController::class, 'sessions'])->name('therapist.sessions');
Route::get('/sessions/upcoming', [ConsultationController::class, 'sessions'])->name('sessions.upcoming');
Route::get('/sessions/completed', [ConsultationController::class, 'csessions'])->name('sessions.completed');
Route::post('/conference/{consultationId}', [ConsultationController::class, 'conference']);
Route::get('/book-therapist/{therapist}', [ConsultationController::class, 'bookTherapist'])->name('book.therapist');
Route::get('/conference', [ConsultationController::class, 'conference'])->name('therapist.conference');
Route::post('/conference', [ConsultationController::class, 'conference'])->name('therapist.conference');
Route::post('/conference/endCall/{conference}', [ConsultationController::class, 'endCall'])->name('therapist.conference.endCall');

// web.php
Route::get('/therapists/{id}', [TProfileController::class, 'show1'])->name('therapists.show');
