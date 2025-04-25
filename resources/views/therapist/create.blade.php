@extends('layouts.therapist')

@section('title', 'Post Article')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/therapist/create.css') }}">
@endsection

@section('content')
    <div class="container">
        <header class="header">
            <h1>Post Article</h1>
            <a href="{{ route('articles.index') }}">
                <button type="button">Back</button>
            </a>
        </header>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Title</label>
            <input
                type="text"
                id="title"
                name="title"
                placeholder="Enter article title"
                autocomplete="off"
                required
            />

            <label for="content">Content</label>
            <textarea id="content" name="content" required></textarea>

            <label for="image">Featured Image</label>
            <label for="image" class="file-label">Choose Image</label>
            <input type="file" id="image" name="image"/>

            <div class="form-footer">
                <div></div>
                <button type="submit">Create Article</button>
            </div>
        </form>
    </div>
@endsection
