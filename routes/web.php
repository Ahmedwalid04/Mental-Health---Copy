<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\TProfileController;

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

Route::get('/sessions', [TProfileController::class, 'showAllForSessions'])->name('sessions');


use App\Http\Controllers\SessionController;

Route::get('/book-session/{therapist}', [SessionController::class, 'create'])->name('book.session');

// web.php
Route::get('/therapists/{id}', [TProfileController::class, 'show1'])->name('therapists.show');
