@extends('layouts.therapist')

@section('title', 'Sessions')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/therapist/sessions.css') }}">

    <div class="container" role="main">
        <div class="btn-group" role="tablist" aria-label="Session categories">
            <button id="btnUpcoming" class="btn-upcoming btn-active" role="tab" aria-selected="true" aria-controls="sessionsList" tabindex="0">Upcoming Sessions</button>
            <button id="btnCompleted" class="btn-completed btn-inactive" role="tab" aria-selected="false" aria-controls="sessionsList" tabindex="-1">Completed Sessions</button>
        </div>

        <div id="sessionsList" aria-live="polite" aria-atomic="true">
            <!-- Session cards inserted here dynamically -->
        </div>
    </div>

    <script>
        const sessions = {
            upcoming: [
                { id: 1, name: "Sarah Johnson", datetime: "2024-01-20 10:00 AM", duration: "60min" },
                { id: 2, name: "Michael Chen", datetime: "2024-01-20 11:30 AM", duration: "30min" },
                { id: 3, name: "Emma Davis", datetime: "2024-01-20 2:00 PM", duration: "60min" }
            ],
            completed: [
                { id: 4, name: "Olivia Brown", datetime: "2023-12-15 9:00 AM", duration: "45min" },
                { id: 5, name: "Liam Wilson", datetime: "2023-12-14 3:30 PM", duration: "30min" },
                { id: 6, name: "Sophia Martinez", datetime: "2023-12-13 1:00 PM", duration: "60min" }
            ]
        };

        const btnUpcoming = document.getElementById('btnUpcoming');
        const btnCompleted = document.getElementById('btnCompleted');
        const sessionsList = document.getElementById('sessionsList');

        function clearSessions() {
            sessionsList.innerHTML = '';
        }

        function createSessionCard(session) {
            const card = document.createElement('section');
            card.className = 'session-card';
            card.setAttribute('aria-label', `Session with ${session.name}`);

            const infoDiv = document.createElement('div');
            infoDiv.className = 'session-info';

            const nameP = document.createElement('p');
            nameP.className = 'session-name';
            nameP.textContent = session.name;

            const detailsDiv = document.createElement('div');
            detailsDiv.className = 'session-details';

            const datetimeSpan = document.createElement('span');
            datetimeSpan.textContent = session.datetime;

            const durationSpan = document.createElement('span');
            durationSpan.className = 'duration-badge';
            durationSpan.textContent = session.duration;

            detailsDiv.appendChild(datetimeSpan);
            detailsDiv.appendChild(durationSpan);

            infoDiv.appendChild(nameP);
            infoDiv.appendChild(detailsDiv);

            const actionsDiv = document.createElement('div');
            actionsDiv.className = 'session-actions';

            const notesBtn = document.createElement('button');
            notesBtn.className = 'btn-notes';
            notesBtn.type = 'button';
            notesBtn.textContent = 'Session Notes';
            notesBtn.setAttribute('aria-label', `View session notes for ${session.name}`);

            const startBtn = document.createElement('button');
            startBtn.className = 'btn-start';
            startBtn.type = 'button';
            startBtn.textContent = 'Start Session';
            startBtn.setAttribute('aria-label', `Start session with ${session.name}`);

            actionsDiv.appendChild(notesBtn);
            actionsDiv.appendChild(startBtn);

            card.appendChild(infoDiv);
            card.appendChild(actionsDiv);

            return card;
        }

        function renderSessions(type) {
            clearSessions();
            sessions[type].forEach(session => {
                const card = createSessionCard(session);
                sessionsList.appendChild(card);
            });
        }

        function setActiveTab(active) {
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

        btnUpcoming.addEventListener('click', () => {
            setActiveTab('upcoming');
            renderSessions('upcoming');
        });

        btnCompleted.addEventListener('click', () => {
            setActiveTab('completed');
            renderSessions('completed');
        });

        // Initial render
        renderSessions('upcoming');
    </script>


@endsection
