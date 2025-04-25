<!-- Navbar Blade -->
<link rel="stylesheet" href="{{ asset('css/partials/therapistnavbar.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">

<nav class="navbar">
    <div class="nav-container">
        <div class="nav-links">
            <a href="{{ url('/home') }}"><div class="nav-item">Home</div></a>
            <a href="{{ url('/sessions') }}"><div class="nav-item">Sessions</div></a>
            <a href="{{ url('/articles') }}"><div class="nav-item">Articles</div></a>
            <a href="{{ url('/activities') }}"><div class="nav-item">Activities</div></a>
            <a href="{{ url('/pricing') }}"><div class="nav-item">Pricing</div></a>
            <a href="{{ url('/contact') }}"><div class="nav-item">Contact</div></a>
            <a href="{{ url('/assessments') }}"><div class="nav-item">Assessments</div></a>
        </div>

        <div class="nav-profile">
            <div class="nav-avatar">
                <img
                    src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                    alt="Avatar"
                    class="avatar"
                    width="48"
                    height="48"
                    loading="lazy"
                />
            </div>
            <a href="{{ url('/profile') }}">
                <div class="nav-username">
                    @auth <span>{{ Auth::user()->name }}</span> @endauth
                </div>
            </a>
        </div>
    </div>
</nav>
