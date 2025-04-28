@extends('layouts.therapist')

@section('title', 'Sessions')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/therapist/sessions.css') }}">

    <div class="container" role="main">
        <div class="btn-group" role="tablist" aria-label="Session categories">
            <a href="{{ route('sessions.upcoming') }}">
                <button id="btnUpcoming" class="btn-upcoming btn-active" role="tab" aria-selected="true" aria-controls="sessionsList" tabindex="0">
                    Upcoming Sessions
                </button>
            </a>
            <a href="{{ route('sessions.completed') }}">
                <button id="btnCompleted" class="btn-completed btn-inactive" role="tab" aria-selected="false" aria-controls="sessionsList" tabindex="-1">
                    Completed Sessions
                </button>
            </a>
        </div>

        <div id="sessionsList" aria-live="polite" aria-atomic="true">
            @foreach ($sessions as $session)
                <section class="session-card" aria-label="Session with {{ $session->patient->name }}">
                    <div class="session-info">
                        <p class="session-name">{{ $session->patient->name }}</p>
                        <div class="session-details">
                            <span>{{ \Carbon\Carbon::parse($session->scheduled_at)->format('Y-m-d h:i A') }}</span>
                            <span class="duration-badge">{{ $session->duration ?? '60min' }}</span> <!-- fallback if no duration -->
                        </div>
                    </div>
                    <div class="session-actions">
                        <!-- Button to open the modal -->
                        <button class="btn-notes" type="button" aria-label="View session notes">Session Notes</button>

                        <!-- The Modal -->
                        <div id="notesModal" class="modal">
                            <div class="modal-content">
                                <span class="close-btn" aria-label="Close modal">&times;</span>
                                <h2>Session Notes</h2>
                                <p id="sessionNotes">No notes available yet.</p>
                            </div>
                        </div>

                        <!-- Show Start Session button only if the session is not completed -->
                        @if($session->status !== 'completed')
                            <a href="/conference">
                                <button class="btn-start" type="button" aria-label="Start session with {{ $session->patient->name }}">
                                    Start Session
                                </button>
                            </a>
                        @endif
                    </div>
                </section>
            @endforeach
        </div>

    </div>
    <script>
        // Get the modal and elements
        var modal = document.getElementById("notesModal");
        var btn = document.querySelector(".btn-notes");
        var span = document.querySelector(".close-btn");

        // Open the modal when the button is clicked
        btn.onclick = function() {
            modal.style.display = "block";
            document.getElementById("sessionNotes").textContent = "{{ $session->notes ?? 'No notes available.' }}";
        }

        // Close the modal when the close button is clicked
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Close the modal when the user clicks anywhere outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function setActiveTab(active) {
            const btnUpcoming = document.getElementById('btnUpcoming');
            const btnCompleted = document.getElementById('btnCompleted');

            if (active === 'upcoming') {
                btnUpcoming.classList.add('btn-active');
                btnUpcoming.classList.remove('btn-inactive');
                btnUpcoming.setAttribute('aria-selected', 'true');
                btnUpcoming.tabIndex = 0;

                btnCompleted.classList.add('btn-inactive');
                btnCompleted.classList.remove('btn-active');
                btnCompleted.setAttribute('aria-selected', 'false');
                btnCompleted.tabIndex = -1;
            } else {
                btnCompleted.classList.add('btn-active');
                btnCompleted.classList.remove('btn-inactive');
                btnCompleted.setAttribute('aria-selected', 'true');
                btnCompleted.tabIndex = 0;

                btnUpcoming.classList.add('btn-inactive');
                btnUpcoming.classList.remove('btn-active');
                btnUpcoming.setAttribute('aria-selected', 'false');
                btnUpcoming.tabIndex = -1;
            }
        }

        // Initial state based on URL (you can modify the logic based on your specific requirements)
        window.onload = function() {
            const currentPath = window.location.pathname;
            if (currentPath.includes('completed')) {
                setActiveTab('completed');
            } else {
                setActiveTab('upcoming');
            }
        }
    </script>
@endsection
