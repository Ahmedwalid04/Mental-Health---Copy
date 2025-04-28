{{-- resources/views/home.blade.php --}}
@extends('layouts.therapist')

@section('title', 'Contact')

@section('content')
    <style>
        .footer1{
            background-color: #BAD6EB;
            padding: 30px;

        }
</style>
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
                    <img alt="Portrait of sengaab" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="/pics/sengab.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Muhammed Tareq
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="sengaab GitHub" class="hover:text-indigo-600" href="https://github.com/sengaab" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="sengaab LinkedIn" class="hover:text-indigo-600" href="https://www.linkedin.com/in/muhammad-aboulgoukh-449791259" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email sengaab" class="hover:text-indigo-600" href="mailto:muhammadaboulgoukh@gmail.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of walid" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="/pics/walid.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Ahmed Walid
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer - Team Leader
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="walid GitHub" class="hover:text-indigo-600" href="https://github.com/alicejohnson" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="walid LinkedIn" class="hover:text-indigo-600" href="https://linkedin.com/in/alicejohnson" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email walid" class="hover:text-indigo-600" href="mailto:alice.johnson@example.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of sayyad" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="/pics/sayyad.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Mohamed Ali El-Sayyad
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="sayyad GitHub" class="hover:text-indigo-600" href="https://github.com/mohamedelsayyad" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="sayyad LinkedIn" class="hover:text-indigo-600" href="https://www.linkedin.com/in/mohamed-elsayyad-700aab292?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email sayyad" class="hover:text-indigo-600" href="mailto:Mohamedsayyad768@gmail.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of kiro" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="/pics/kiro.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Kirollos Magdy
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="kiro GitHub" class="hover:text-indigo-600" href="https://github.com/alicejohnson" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="kiro LinkedIn" class="hover:text-indigo-600" href="https://linkedin.com/in/alicejohnson" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email kiro" class="hover:text-indigo-600" href="mailto:alice.johnson@example.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
                    <img alt="Portrait of kero" class="w-36 h-36 rounded-full object-cover mb-4" height="150" src="/pics/kero.jpg" width="150"/>
                    <h3 class="text-xl font-semibold text-gray-900">
                        Kerollos Maged
                    </h3>
                    <p class="text-indigo-600 font-medium mb-2">
                        Full-Stack Developer
                    </p>

                    <div class="flex space-x-4 text-gray-500">
                        <a aria-label="kero GitHub" class="hover:text-indigo-600" href="https://github.com/keromaged76" target="_blank">
                            <i class="fab fa-github fa-lg">
                            </i>
                        </a>
                        <a aria-label="kero LinkedIn" class="hover:text-indigo-600" href="http://www.linkedin.com/in/kerollos-maged-26353a309" target="_blank">
                            <i class="fab fa-linkedin fa-lg">
                            </i>
                        </a>
                        <a aria-label="Email kero" class="hover:text-indigo-600" href="mailto:kiro.maged76@gmail.com">
                            <i class="fas fa-envelope fa-lg">
                            </i>
                        </a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer class="footer1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-black-500 text-lg font-bold">
            Special thanks to Dr. Asmaa AbuBakr, ChatGPT, and BlackBox for their support.
        </div>
    </footer>
    </body>
    </html>
@endsection
