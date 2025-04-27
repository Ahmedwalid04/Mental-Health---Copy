{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Activities')

@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Activities</title>
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                height: auto;
                width: auto;
                margin: auto;
                font-family: Arial, sans-serif;
                background-color: #BAD6EB;
                padding: 16px;
                color: #333;
            }
            a, button {
                font-family: inherit;
            }
            /* Container */
            .container {
                max-width: 1120px;
                margin: 0 auto;
                padding-top: 50px;
                height: 700px;
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
                margin-top: 30px;
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
                height: 250px;
                width: 330px;
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
                font-size: 16px;
                font-weight: 600;
                color: #1f2937;
                margin: 0 0 6px 0;
                line-height: 1.2;
            }
            .card p {
                font-size: 14px;
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
                    <a href="https://youtu.be/exRZtzY3Y-c?si=XZvcoipbioPbBGVy">
                        <img src="{{ asset('pics/creative.jpg') }}" alt="Person writing with music notes and moon illustration" />
                    </a>
                    <h3>Creative Expression (Drawing, Writing, Music)</h3>
                    <p>20-30 minutes</p>
                </article>
                <article class="card">
                    <a href="https://youtu.be/exRZtzY3Y-c?si=XZvcoipbioPbBGVy">
                        <img src="{{ asset('pics/journaling.jpg') }}" alt="Hands writing in notebook illustration" />
                    </a>
                    <h3>Gratitude Journaling</h3>
                    <p>5 minutes</p>
                </article>
                <article class="card">
                    <a href="https://youtu.be/BsEkNunXtkw?si=4M77Wbv89qAFnyzL">
                        <img src="{{ asset('pics/visualization.jpg') }}" alt="Visualization techniques with abstract shapes illustration" />
                    </a>
                    <h3>Visualization Techniques</h3>
                    <p>5-10 minutes</p>
                </article>
                <article class="card">
                    <a href="https://youtu.be/D9OOXCu5XMg?si=BWqlmZHMR6JnZM3N">
                        <img src="{{ asset('pics/reading.jpg') }}" alt="Person reading with glasses and plant illustration" />
                    </a>
                    <h3>Reading and Reflection</h3>
                    <p>15-30 minutes</p>
                </article>
                <article class="card">
                    <a href="https://youtu.be/KVm5QuXSxxA?si=N0k-czCrS9MUPpOH">
                        <img src="{{ asset('pics/physica;.jpg') }}" alt="Person doing yoga pose with mental focus illustration" />
                    </a>
                    <h3>Physical Exercise with a Mental Focus</h3>
                    <p>20-30 minutes</p>
                </article>
            </section>
        </main>
    </div>
    </body>
    </html>
@endsection
