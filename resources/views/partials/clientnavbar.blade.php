<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Therapist Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
    />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
<nav class="w-full shadow-md bg-black sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex items-center justify-between h-16">
            <div class="flex space-x-8">
                <a href="{{ url('/home') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Home
                </a>
                <a href="{{ url('/Usessions') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Sessions
                </a>
                <a href="{{ url('/articles') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Articles
                </a>
                <a href="{{ url('/activities') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Activities
                </a>
                <a href="{{ url('/assessments') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Assessments
                </a>
                <a href="{{ url('/pricing') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Pricing
                </a>
                <a href="{{ url('/contact') }}" class="text-white hover:text-indigo-600 font-semibold text-base transition">
                    Contact
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ url('/profile') }}" class="flex items-center space-x-3 hover:bg-indigo-600 rounded-full px-3 py-1 transition">
                    <img
                        src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                        alt="Profile avatar of authenticated user with short brown hair, smiling gently, wearing a light blue shirt"
                        width="48"
                        height="48"
                        loading="lazy"
                        class="rounded-full object-cover"
                    />
                    <div class="text-white font-semibold text-sm whitespace-nowrap">
                        @auth <span>{{ Auth::user()->name }}</span> @endauth
                    </div>
                    <i class="ti ti-chevron-down text-gray-500"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>
