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
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Article Title</label>
                <input id="title" type="text" name="title" value="{{ old('title', $article->title) }}" required/>
            </div>

            <div>
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="12"
                          required>{{ old('content', $article->content) }}</textarea>
            </div>

            <div>
                <label>Current Image</label><br>
                @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" width="150" style="margin-bottom: 12px;"><br>
                @else
                    <p>No image</p>
                @endif
            </div>

            <div>
                <label>Change Image (optional)</label>
                <input type="file" name="image">
            </div>

            <div class="buttons">
                <a href="{{ route('articles.index') }}" class="cancel"
                   style="text-decoration: none; text-align: center;">Cancel</a>
                <button class="save" type="submit">Save Changes</button>
            </div>
        </form>
    </main>
@endsection
