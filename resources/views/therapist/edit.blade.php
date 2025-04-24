@extends('layouts.client')

@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #c6dcfc;
            font-family: system-ui, sans-serif;
            color: #0f1e56;
            padding: 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            max-width: 960px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
            margin: 0;
        }

        .back {
            background-color: #0f1e56;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-size: 0.875rem;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(15, 30, 86, 0.5);
            transition: box-shadow 0.2s ease;
        }

        .back:hover, .back:focus {
            box-shadow: 0 4px 12px rgba(15, 30, 86, 0.7);
            outline: none;
        }

        main {
            background-color: white;
            border-radius: 12px;
            padding: 32px;
            width: 100%;
            max-width: 640px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 0.75rem;
            color: #4a4a4a;
            margin-bottom: 6px;
            display: block;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 0.875rem;
            font-family: inherit;
            color: #111827;
            resize: none;
            margin-bottom: 24px;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #0f1e56;
            box-shadow: 0 0 0 2px rgba(15, 30, 86, 0.5);
        }

        textarea {
            min-height: 240px;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 16px;
            padding-top: 8px;
        }

        .cancel, .save {
            background-color: #0f1e56;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 0.875rem;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(15, 30, 86, 0.5);
            transition: box-shadow 0.2s ease;
        }

        .cancel:hover, .save:hover {
            box-shadow: 0 4px 12px rgba(15, 30, 86, 0.7);
        }
    </style>

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
