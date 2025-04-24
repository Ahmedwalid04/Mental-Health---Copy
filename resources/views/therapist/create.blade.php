@extends('layouts.client')

@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Post Article</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');

            body {
                margin: 0;
                background-color: #c3dbfc;
                font-family: 'Inter', sans-serif, Arial, sans-serif;
                color: #142a5c;
            }

            .container {
                max-width: 960px;
                margin: 0 auto;
                padding: 24px;
            }

            .header {
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

            button {
                background-color: #0a1e59;
                color: white;
                border: none;
                border-radius: 6px;
                padding: 8px 16px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
                cursor: pointer;
                font-size: 0.875rem;
                transition: box-shadow 0.2s ease;
            }

            button:hover {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            }

            form {
                background-color: #fff8ec;
                border-radius: 10px;
                padding: 24px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            label {
                display: block;
                font-weight: 600;
                font-size: 0.875rem;
                margin-bottom: 6px;
            }

            input[type="text"],
            textarea {
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 6px;
                padding: 10px 12px;
                font-size: 1rem;
                color: #666;
                box-sizing: border-box;
                margin-bottom: 24px;
                resize: none;
                font-family: inherit;
            }

            input[type="text"]::placeholder {
                color: #999;
            }

            textarea {
                height: 160px;
            }

            input[type="file"] {
                display: none;
            }

            .file-label {
                display: inline-block;
                background-color: #0a1e59;
                color: white;
                border-radius: 6px;
                padding: 8px 16px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
                cursor: pointer;
                font-size: 0.875rem;
                transition: box-shadow 0.2s ease;
                margin-bottom: 24px;
            }

            .file-label:hover {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            }

            .form-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            @media (max-width: 640px) {
                .form-footer {
                    flex-direction: column;
                    gap: 12px;
                }

                .form-footer button {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
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
    </body>
    </html>
@endsection
