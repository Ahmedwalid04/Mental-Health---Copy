@extends('layouts.therapist')

@section('title', 'Edit Article')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/therapist/edit.css') }}">
@endsection

@section('content')
    <header>
        <h1>Edit Article</h1>
        <a href="{{ route('articles.index') }}" class="back">Back</a>
    </header>

    <main>
    <form action="{{ route('profile.save') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Profile Image -->
    <div>
        <label>Profile Image</label><br>
        @if($profile && $profile->profile_image)
            <img src="{{ asset('storage/'.$profile->profile_image) }}" width="120"><br>
        @endif
        <input type="file" name="profile_image">
        @error('profile_image')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Bio -->
    <div>
        <label>Bio</label><br>
        <textarea name="bio" rows="4">{{ old('bio', $profile->bio ?? '') }}</textarea>
        @error('bio')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Price per 30m -->
    <div>
        <label>Price per 30 min ($)</label><br>
        <input type="number" name="price_per_half_hour" step="0.01" value="{{ old('price_per_half_hour', $profile->price_per_half_hour ?? 0) }}">
        @error('price_per_half_hour')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Qualifications -->
    <div>
        <label>Qualifications (one per line)</label><br>
        <textarea name="qualifications" rows="3">{{ old('qualifications', $profile->qualifications ?? '') }}</textarea>
        @error('qualifications')
            <span style="color: green;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Experience -->
    <div>
        <label>Experience (one per line)</label><br>
        <textarea name="experience" rows="3">{{ old('experience', $profile->experience ?? '') }}</textarea>
        @error('experience')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <!-- Specializations -->
    <div>
        <label>Specializations (one per line)</label><br>
        <textarea name="specializations" rows="3">{{ old('specializations', $profile->specializations ?? '') }}</textarea>
        @error('specializations')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">{{ $profile ? 'Update Profile' : 'Create Profile' }}</button>
</form>
    </main>
@endsection
