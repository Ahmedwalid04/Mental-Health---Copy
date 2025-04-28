<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Conference Call</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
        rel="stylesheet"
    />
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #1a202c;
            color: #e2e8f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #2d3748;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            box-shadow: 0 2px 4px rgb(0 0 0 / 0.5);
        }
        header .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        header .logo img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        header .logo h1 {
            font-weight: 600;
            font-size: 1.25rem;
            margin: 0;
        }
        main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 1120px;
            margin: 1.5rem auto;
            padding: 0 1rem;
            width: 100%;
        }
        @media (min-width: 768px) {
            main {
                flex-direction: row;
            }
            .video-section {
                flex: 2;
            }
            .participants-sidebar {
                flex: 1;
                max-width: 320px;
            }
        }
        .video-section {
            background-color: #2d3748;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgb(0 0 0 / 0.5);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            height: 100%;
        }
        .video-header {
            background-color: #1a202c;
            padding: 0.75rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .video-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.125rem;
        }
        .video-controls button {
            background: none;
            border: none;
            color: #a0aec0;
            font-size: 1.25rem;
            margin-left: 1rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .video-controls button:hover {
            color: #f56565; /* red for end call */
        }
        .video-controls button.video-toggle:hover {
            color: #48bb78; /* green */
        }
        .video-controls button.mic-toggle:hover {
            color: #ecc94b; /* yellow */
        }
        .video-container {
            background-color: black;
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .video-container iframe {
            width: 100%;
            height: 100%;
            aspect-ratio: 16 / 9;
            border: none;
        }
        .participants-sidebar {
            background-color: #2d3748;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgb(0 0 0 / 0.5);
            display: flex;
            flex-direction: column;
            height: 100%;
            max-height: 600px;
        }
        .participants-header {
            background-color: #1a202c;
            padding: 0.75rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .participants-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.125rem;
        }
        .participants-header button {
            background: none;
            border: none;
            color: #a0aec0;
            font-size: 1.25rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .participants-header button:hover {
            color: #48bb78;
        }
        .participants-list {
            flex-grow: 1;
            overflow-y: auto;
            border-top: 1px solid #4a5568;
            border-bottom: 1px solid #4a5568;
        }
        .participant {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            gap: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .participant:hover {
            background-color: #4a5568;
        }
        .participant img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }
        .participant-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .participant-info .name {
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.2;
        }
        .participant-info .role {
            font-size: 0.875rem;
            color: #a0aec0;
            line-height: 1.2;
        }
        .participant-icons {
            display: flex;
            gap: 0.5rem;
            font-size: 1.125rem;
            flex-shrink: 0;
        }
        .participant-icons .fa-video.green {
            color: #48bb78;
        }
        .participant-icons .fa-video.red {
            color: #f56565;
        }
        .participant-icons .fa-microphone.green {
            color: #48bb78;
        }
        .participant-icons .fa-microphone.red {
            color: #f56565;
        }
        .chat-input-container {
            background-color: #1a202c;
            padding: 0.75rem 1.5rem;
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
        .chat-input-container input[type="text"] {
            flex-grow: 1;
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            border: none;
            background-color: #4a5568;
            color: #e2e8f0;
            font-size: 1rem;
            outline-offset: 2px;
            outline-color: transparent;
            transition: outline-color 0.3s ease;
        }
        .chat-input-container input[type="text"]::placeholder {
            color: #a0aec0;
        }
        .chat-input-container input[type="text"]:focus {
            outline-color: #4299e1;
            background-color: #2d3748;
        }
        .chat-input-container button {
            background: none;
            border: none;
            color: #63b3ed;
            font-size: 1.25rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .chat-input-container button:hover {
            color: #4299e1;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img
            src="https://storage.googleapis.com/a1aa/image/1c8109ac-50dd-4cc4-36b9-87bf229eb85e.jpg"
            alt="Conference logo, a stylized blue and white speech bubble icon"
            width="40"
            height="40"
        />
        <h1>Team Sync Conference</h1>
    </div>
</header>
<main>
    <section class="video-section">
        <div class="video-header">
            <h2>Session</h2>
            <div class="video-controls">
                <!-- End Call Button wrapped in a form -->
                <form action="{{ route('therapist.conference.endCall', $conference->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="end-call" aria-label="End call" title="End Call">
                        <i class="fas fa-phone-slash"></i>
                    </button>
                </form>

                <!-- Video Toggle Button -->
                <button aria-label="Toggle video" title="Toggle Video" class="video-toggle">
                    <i class="fas fa-video"></i>
                </button>

                <!-- Microphone Toggle Button -->
                <button aria-label="Toggle microphone" title="Toggle Microphone" class="mic-toggle">
                    <i class="fas fa-microphone"></i>
                </button>
            </div>
        </div>

        <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/7WvKcFsAj6E?si=QV2cOJ8H4CxtAomo"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
            ></iframe>
        </div>
    </section>
    <aside class="participants-sidebar">
        <div class="participants-header">
            <h2>Participants (2)</h2>
            <button aria-label="Add participant" title="Add Participant">
                <i class="fas fa-user-plus"></i>
            </button>
        </div>
        <ul class="participants-list">
            <li class="participant" tabindex="0">
                <img
                    src="https://storage.googleapis.com/a1aa/image/3cd2c905-6814-4db7-a1ad-fa258bf28b67.jpg"
                    alt="1"
                    width="48"
                    height="48"
                />
                <div class="participant-info">
                    <span class="name">{{ $conference->therapist->name }}</span>
                    <span class="role">Therapist</span>
                </div>
                <div class="participant-icons">
                    <i class="fas fa-video green" title="Video On"></i>
                    <i class="fas fa-microphone green" title="Microphone On"></i>
                </div>
            </li>
            <li class="participant" tabindex="0">
                <img
                    src="https://storage.googleapis.com/a1aa/image/167af87c-def8-411d-d068-061bde201755.jpg"
                    alt="Avatar of Bob Martinez, a middle-aged man with short brown hair and beard, neutral expression"
                    width="48"
                    height="48"
                />
                <div class="participant-info">
                    <span class="name">{{ $conference->patient->name }}</span>
                    <span class="role">Patient</span>
                </div>
                <div class="participant-icons">
                    <i class="fas fa-video red" title="Video Off"></i>
                    <i class="fas fa-microphone green" title="Microphone On"></i>
                </div>
            </li>
        </ul>
        <form action="{{ route('therapist.conference') }}" method="POST">
            @csrf
            <div class="chat-input-container">
                <input
                    type="text"
                    name="notes"
                    placeholder="Send a message..."
                    aria-label="Chat message input"
                    value="{{ old('notes', $conference->notes) }}"
                />
                <button type="submit" aria-label="Send message" title="Send Message">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>


    </aside>
</main>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            if (mobileMenu.style.display === 'flex') {
                mobileMenu.style.display = 'none';
            } else {
                mobileMenu.style.display = 'flex';
            }
        });
    }
</script>
</body>
</html>
