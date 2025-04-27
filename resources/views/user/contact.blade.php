{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
            Our Developers
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
    <body class="bg-gray-50 min-h-screen flex flex-col">
    <section class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex items-center space-x-4">
            <img alt="Company logo showing a blue and white abstract geometric shape" class="w-12 h-12 rounded-full object-cover" height="48" src="https://storage.googleapis.com/a1aa/image/e3aa0ad5-7149-4fbd-73bb-a27b174bb891.jpg" width="48"/>
            <h1 class="text-3xl font-semibold text-gray-900">
                Our Developers
            </h1>
        </div>
    </section>
    <main class="flex-grow bg-[#BAD6EB]">
        <section class="w-full bg-white shadow-md">
            <div class="max-w-7xl mx-auto flex flex-col items-center px-6 py-20">
                <img alt="Group photo of the development team, six diverse people smiling and standing together in a modern office environment" class="w-48 h-48 rounded-full object-cover mb-8 shadow-lg" height="192" src="https://storage.googleapis.com/a1aa/image/4524e726-cd4d-4a62-43fe-19fccadcb7ab.jpg" width="192"/>
                <h2 class="text-3xl sm:text-4xl font-semibold text-gray-900 mb-6 text-center">
                    Meet Our Development Team
                </h2>
                <p class="max-w-3xl text-center text-gray-800 text-lg">
                    Our talented team of developers is dedicated to building innovative and reliable software solutions. Get to know the people behind the code.
                </p>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of sayyad" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/9bdcb5d3-ce7d-49b4-fc66-dc0a2302d4da.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Mohamed Ali El-Sayyad
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="sayyad GitHub" class="hover:text-indigo-600" href="https://github.com/alicejohnson" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="sayyad LinkedIn" class="hover:text-indigo-600" href="https://linkedin.com/in/alicejohnson" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email sayyad" class="hover:text-indigo-600" href="mailto:alice.johnson@example.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of Bob Smith, a male backend developer with short black hair and a beard, wearing a gray t-shirt, smiling" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/bd83cccc-c7f6-4173-e8dd-4c4c366d9609.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Bob Smith
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Backend Developer
                    </p>
                    <p class="text-gray-600 mb-4">
                        Bob is an expert in Node.js and database management, ensuring robust and scalable backend systems.
                    </p>
                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="Bob Smith GitHub" class="hover:text-indigo-600" href="https://github.com/bobsmith" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="Bob Smith LinkedIn" class="hover:text-indigo-600" href="https://linkedin.com/in/bobsmith" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email Bob Smith" class="hover:text-indigo-600" href="mailto:bob.smith@example.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of Carla Nguyen, a female full-stack developer with long black hair, wearing a red blouse, smiling" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/76e98b16-d1d0-4388-84b7-e92f2d5a9623.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Carla Nguyen
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>
                    <p class="text-gray-600 mb-4">
                        Carla bridges frontend and backend with expertise in JavaScript frameworks and cloud services.
                    </p>
                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="Carla Nguyen GitHub" class="hover:text-indigo-600" href="https://github.com/carlanguyen" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="Carla Nguyen LinkedIn" class="hover:text-indigo-600" href="https://linkedin.com/in/carlanguyen" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email Carla Nguyen" class="hover:text-indigo-600" href="mailto:carla.nguyen@example.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer class="bg-white border-t border-gray-200 py-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
            © 2024 Our Company. All rights reserved.
        </div>
    </footer>
    </body>
    </html>
@endsection
