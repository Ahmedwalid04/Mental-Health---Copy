<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AssessmentController;

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

// Forum route
Route::get('/forum', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.forum');
    }
    return view('user.forum');
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
Route::get('/profile', function () {
    $user = Auth::user();
    if ($user && $user->role === 'therapist') {
        return view('therapist.profile');
    }
    return view('user.profile');
});


// Welcome route with redirect if authenticated
Route::get('/', function () {
    $user = Auth::user();
    if ($user) {
        return $user->role === 'therapist'
            ? view('therapist.home')
            : view('user.home');
    }
    return view('user.welcome');
})->name('welcome');

// Authentication routes
Route::post('/login', [AuthController::class, 'login'])->name('login.custom');
Route::post('/register', [AuthController::class, 'register'])->name('register.custom');

//assessments
Route::get('/assessments/result', [AssessmentController::class, 'result'])->name('assessments.result');
Route::resource('assessments', AssessmentController::class)->except(['show']);

//Route::get('/assessments', [AssessmentController::class, 'index'])->name('user.assessmentsindex');


