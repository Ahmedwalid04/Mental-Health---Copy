<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>
        Profile Session History
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 p-6">
<div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg p-8">
    <div class="flex justify-end mb-8">
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="logout-btn" aria-label="Logout">Logout</button>
        </form>
    </div>
    <div class="flex items-center space-x-8 mb-8">
        <img alt="Profile picture placeholder, gray circle 120 by 120 pixels" class="w-32 h-32 rounded-full shadow-md object-cover" height="120" src="https://storage.googleapis.com/a1aa/image/17d419c2-905b-4673-5487-c0c39e9fe57a.jpg" width="120"/>
        <div>
            <div class="flex items-center space-x-3">
                <h1 class="text-gray-900 font-semibold text-2xl">
                    <span>{{ Auth::user()->name }}</span>
                </h1>
                <a aria-label="Edit profile" class="text-indigo-600 text-sm font-medium hover:underline" href="#">
                    Edit
                </a>
            </div>
            <p class="text-gray-700 text-base mt-2">
                <span>{{ Auth::user()->age }}</span>
            </p>
            <span class="inline-block mt-4 bg-indigo-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm select-none">
            {{ Auth::$subscriprion->plan }}
     </span>
        </div>
    </div>
    <h2 class="text-gray-900 font-semibold text-lg mb-5 border-b border-gray-200 pb-2">

    </h2>
    <ul class="space-y-4">
        <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center space-x-4">
                <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                    <i class="far fa-clock text-lg">
                    </i>
                </div>
                <div>
                    <p class="text-gray-900 text-base font-semibold">
                        Cardio
                    </p>
                    <p class="text-indigo-700 text-sm mt-1 font-medium">
                        2024-01-15
                    </p>
                </div>
            </div>
            <span class="text-gray-900 text-base font-semibold">
      45min
     </span>
        </li>
        <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center space-x-4">
                <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                    <i class="far fa-clock text-lg">
                    </i>
                </div>
                <div>
                    <p class="text-gray-900 text-base font-semibold">
                        Strength
                    </p>
                    <p class="text-indigo-700 text-sm mt-1 font-medium">
                        2024-01-13
                    </p>
                </div>
            </div>
            <span class="text-gray-900 text-base font-semibold">
      60min
     </span>
        </li>
        <li class="flex justify-between items-center bg-indigo-50 rounded-xl p-4 shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="flex items-center space-x-4">
                <div class="bg-indigo-700 text-white w-12 h-12 rounded-xl flex items-center justify-center shadow-md">
                    <i class="far fa-clock text-lg">
                    </i>
                </div>
                <div>
                    <p class="text-gray-900 text-base font-semibold">
                        Yoga
                    </p>
                    <p class="text-indigo-700 text-sm mt-1 font-medium">
                        2024-01-10
                    </p>
                </div>
            </div>
            <span class="text-gray-900 text-base font-semibold">
      30min
     </span>
        </li>
    </ul>
</div>
</body>
</html>
