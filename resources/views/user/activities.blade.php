{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Activities')

@section('content')
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
            Activities
        </title>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
        <style>
            body {
                font-family: 'Inter', Arial, sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#BAD6EB] text-gray-800 min-h-screen p-4 sm:p-6 ">
    <div class=" mx-auto pt-12 pb-16 bg-[#BAD6EB] ">
        <main>
            <section aria-label="Activity cards" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8 justify-center">
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/JQE-XQkisp8?feature=shared">
                        <img alt="Person meditating in lotus pose with leaves in background illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/2e5dec6c-e4d0-46b3-359c-e49334b871f5.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Mindfulness Meditation
                    </h3>
                    <p class="text-sm text-gray-600">
                        10-15 minutes
                    </p>
                </article>
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/exRZtzY3Y-c?si=XZvcoipbioPbBGVy">
                        <img alt="Person writing with music notes and moon illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/818a6309-7c66-442a-fa94-3a050a4b98d3.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Creative Expression (Drawing, Writing, Music)
                    </h3>
                    <p class="text-sm text-gray-600">
                        20-30 minutes
                    </p>
                </article>
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/exRZtzY3Y-c?si=XZvcoipbioPbBGVy">
                        <img alt="Hands writing in notebook illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/62a6783e-e4dd-4628-ee0c-75c4209714f1.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Gratitude Journaling
                    </h3>
                    <p class="text-sm text-gray-600">
                        5 minutes
                    </p>
                </article>
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/BsEkNunXtkw?si=4M77Wbv89qAFnyzL">
                        <img alt="Visualization techniques with abstract shapes illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/606dae21-546f-4e8a-4a51-41dafa60f994.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Visualization Techniques
                    </h3>
                    <p class="text-sm text-gray-600">
                        5-10 minutes
                    </p>
                </article>
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/D9OOXCu5XMg?si=BWqlmZHMR6JnZM3N">
                        <img alt="Person reading with glasses and plant illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/0886653f-4bc2-4dc7-26e8-21aa834e1bdf.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Reading and Reflection
                    </h3>
                    <p class="text-sm text-gray-600">
                        15-30 minutes
                    </p>
                </article>
                <article class="bg-white rounded-md shadow-md p-4 flex flex-col items-center text-center w-[330px] h-[250px] mx-auto">
                    <a class="block mb-3" href="https://youtu.be/KVm5QuXSxxA?si=N0k-czCrS9MUPpOH">
                        <img alt="Person doing yoga pose with mental focus illustration" class="w-[160px] h-[140px] object-cover rounded-md" height="140" loading="lazy" src="https://storage.googleapis.com/a1aa/image/3bcf1918-d347-477d-dd87-6077afb2a4ee.jpg" width="160"/>
                    </a>
                    <h3 class="text-base font-semibold text-gray-900 leading-tight mb-1">
                        Physical Exercise with a Mental Focus
                    </h3>
                    <p class="text-sm text-gray-600">
                        20-30 minutes
                    </p>
                </article>
            </section>
        </main>
    </div>
    </body>
    </html>

@endsection
