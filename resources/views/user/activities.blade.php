{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Activities')

@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Activity Filter</title>
        <style>
            /* Reset and base */
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #a9c6db;
                padding: 16px;
                color: #333;
            }
            a, button {
                font-family: inherit;
            }
            /* Container */
            .container {
                height: 650px;
                max-width: 1120px;
                margin: 0 auto;
                display: flex;
                flex-wrap: wrap;
                gap: 24px;
                align-items: flex-start;
            }

            /* Sidebar */
            .sidebar {
                background: white;
                border-radius: 6px;
                padding: 16px;
                width: 100%;
                max-width: 280px;
                box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
                user-select: none;
            }
            .sidebar label,
            .sidebar span {
                font-size: 10px;
                font-weight: 600;
                color: #4b5563;
                display: block;
                margin-bottom: 6px;
            }
            .keywords {
                background: #f3f4f6;
                border-radius: 6px;
                padding: 6px 8px;
                min-height: 72px;
                display: flex;
                flex-wrap: wrap;
                gap: 6px;
            }
            .keyword {
                background: #d1d5db;
                font-size: 10px;
                color: #374151;
                border-radius: 4px;
                padding: 2px 8px;
                display: flex;
                align-items: center;
                gap: 6px;
                cursor: default;
            }
            .keyword i {
                font-style: normal;
                font-weight: bold;
                cursor: pointer;
            }
            /* Duration */
            .duration-labels {
                display: flex;
                justify-content: space-between;
                font-size: 10px;
                color: #4b5563;
                margin-bottom: 4px;
            }
            input[type="range"] {
                -webkit-appearance: none;
                width: 100%;
                height: 6px;
                background: #3b82f6;
                border-radius: 3px;
                outline: none;
                margin-bottom: 16px;
                cursor: pointer;
            }
            input[type="range"]::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 16px;
                height: 16px;
                background: #2563eb;
                border-radius: 50%;
                cursor: pointer;
                border: none;
                margin-top: -5px;
                position: relative;
                z-index: 1;
            }
            input[type="range"]::-moz-range-thumb {
                width: 16px;
                height: 16px;
                background: #2563eb;
                border-radius: 50%;
                cursor: pointer;
                border: none;
                position: relative;
                z-index: 1;
            }
            /* Checkboxes */
            .checkbox-group {
                font-size: 10px;
                color: #4b5563;
                margin-bottom: 16px;
                user-select: none;
            }
            .checkbox-group label {
                cursor: pointer;
                user-select: none;
                display: inline-flex;
                align-items: center;
                gap: 4px;
                margin-right: 16px;
            }
            input[type="checkbox"] {
                width: 14px;
                height: 14px;
                cursor: pointer;
            }
            input[type="checkbox"]:checked {
                accent-color: #2563eb;
            }
            /* Main content */
            .main {
                flex: 1 1 0;
                min-width: 0;
            }
            /* Top controls */
            .top-controls {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                margin-bottom: 24px;
                align-items: center;
            }
            .search-wrapper {
                position: relative;
                width: 100%;
                max-width: 320px;
            }
            .search-wrapper input[type="search"] {
                width: 100%;
                padding: 6px 40px 6px 12px;
                font-size: 12px;
                border: 1px solid #d1d5db;
                border-radius: 6px 0 0 6px;
                color: #4b5563;
                outline-offset: 2px;
            }
            .search-wrapper input[type="search"]:focus {
                outline: 2px solid #2563eb;
            }
            .search-wrapper button {
                position: absolute;
                right: 0;
                top: 0;
                bottom: 0;
                background-color: #2563eb;
                border: none;
                color: white;
                font-weight: 600;
                font-size: 12px;
                padding: 6px 12px;
                border-radius: 0 6px 6px 0;
                cursor: pointer;
                user-select: none;
            }
            .search-wrapper button:hover,
            .top-controls button:hover {
                background-color: #1e40af;
            }
            .top-controls button {
                background-color: #2563eb;
                border: none;
                color: white;
                font-weight: 600;
                font-size: 12px;
                padding: 6px 12px;
                border-radius: 6px;
                cursor: pointer;
                user-select: none;
                white-space: nowrap;
            }
            .top-controls button:focus-visible {
                outline: 2px solid #2563eb;
                outline-offset: 2px;
            }
            /* Cards grid */
            .cards {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 24px;
                margin-top: 32px; /* ✅ Add this */
            }

            @media (min-width: 480px) {
                .cards {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
            @media (min-width: 768px) {
                .cards {
                    grid-template-columns: repeat(3, 1fr);
                }
            }
            /* Card */
            .card {
                background: white;
                border-radius: 6px;
                padding: 12px;
                box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .card img {
                width: 160px;
                height: 140px;
                object-fit: cover;
                border-radius: 6px;
                margin-bottom: 12px;
            }
            .card h3 {
                font-size: 10px;
                font-weight: 400;
                color: #1f2937;
                margin: 0 0 6px 0;
                line-height: 1.2;
            }
            .card p {
                font-size: 9px;
                color: #4b5563;
                margin: 0;
            }
        </style>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
    </head>
    <body>
    <div class="container">
        <aside class="sidebar" aria-label="Filter sidebar">
            <div>
                <label for="keywords">Keywords</label>
                <div class="keywords" id="keywords">
                    <span class="keyword">Outdoor <i class="fas fa-times"></i></span>
                    <span class="keyword">Indoor <i class="fas fa-times"></i></span>
                    <span class="keyword">Reading <i class="fas fa-times"></i></span>
                </div>
            </div>
            <div>
                <label for="duration">Duration</label>
                <div class="duration-labels">
                    <span>0</span>
                    <span>30 mins</span>
                </div>
                <input type="range" id="duration" min="0" max="30" value="30" aria-label="Duration slider" />
            </div>
            <div class="checkbox-group" role="group" aria-labelledby="time-label">
                <span id="time-label">Time</span>
                <label><input type="checkbox" checked /> Day</label>
                <label><input type="checkbox" checked /> Night</label>
            </div>
            <div class="checkbox-group" role="group" aria-labelledby="activity-label">
                <span id="activity-label">Activity Type</span>
                <label><input type="checkbox" checked /> Physical</label>
                <label><input type="checkbox" checked /> Mental</label>
            </div>
        </aside>
        <main class="main">
            <div class="top-controls">
                <div class="search-wrapper">
                    <input type="search" placeholder="Search" aria-label="Search" />
                    <button type="button">New</button>
                </div>
                <button type="button">Duration ascending</button>
                <button type="button">Duration descending</button>
                <button type="button">Rating</button>
            </div>
            <section class="cards" aria-label="Activity cards">
                <article class="card">
                    <a href="https://youtu.be/JQE-XQkisp8?feature=shared">
                        <img src="{{ asset('pics/meditation.jpg') }}" alt="Person meditating in lotus pose with leaves in background illustration" />
                    </a>
                    <h3>Mindfulness Meditation</h3>
                    <p>10-15 minutes</p>
                </article>
                <article class="card">
                    <img src="{{ asset('pics/creative.jpg') }}" alt="Person writing with music notes and moon illustration" />
                    <h3>Creative Expression (Drawing, Writing, Music)</h3>
                    <p>20-30 minutes</p>
                </article>
                <article class="card">
                    <img src="{{ asset('pics/journaling.jpg') }}" alt="Hands writing in notebook illustration" />
                    <h3>Gratitude Journaling</h3>
                    <p>5 minutes</p>
                </article>
                <article class="card">
                    <img src="{{ asset('pics/visualization.jpg') }}" alt="Visualization techniques with abstract shapes illustration" />
                    <h3>Visualization Techniques</h3>
                    <p>5-10 minutes</p>
                </article>
                <article class="card">
                    <img src="{{ asset('pics/reading.jpg') }}" alt="Person reading with glasses and plant illustration" />
                    <h3>Reading and Reflection</h3>
                    <p>15-30 minutes</p>
                </article>
                <article class="card">
                    <img src="{{ asset('pics/physica;.jpg') }}" alt="Person doing yoga pose with mental focus illustration" />
                    <h3>Physical Exercise with a Mental Focus</h3>
                    <p>20-30 minutes</p>
                </article>
            </section>
        </main>
    </div>
    </body>
    </html>
@endsection
