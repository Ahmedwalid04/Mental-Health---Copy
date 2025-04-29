@extends('layouts.therapist')

@section('content')
    <div class="min-h-screen bg-[#BAD6ED] py-10">
        <div class="max-w-7xl mx-auto p-6">

            <div class="flex justify-between items-center border-b-2 border-blue-900 pb-4 mb-10">
                <h1 class="text-3xl font-extrabold text-blue-900 tracking-wide uppercase">Articles</h1>
                <a href="{{ route('articles.create') }}" class="bg-blue-900 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-700 transition">
                    Add Article
                </a>
            </div>

            @if($articles->isEmpty())
                <div class="flex flex-col items-center bg-white rounded-2xl p-12 shadow-xl">
                    <img src="https://placehold.co/240x160/cccccc/757575/png?text=240%C3%97160" alt="Placeholder image" class="mb-6 w-60 h-40 object-cover rounded-lg shadow-md">
                    <p class="text-blue-900 font-bold text-xl mb-2">No articles yet</p>
                    <p class="text-gray-600 text-base mb-6 text-center">Create your first article to get started</p>
                    <a href="{{ route('articles.create') }}" class="bg-blue-900 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition">
                        Add Article
                    </a>
                </div>
            @else
                <div class="space-y-8">
                    @foreach($articles as $article)
                        <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition">
                            <h2 class="text-2xl font-extrabold text-blue-900 mb-4 border-b-2 border-blue-200 pb-2">
                                {{ $article->title }}
                            </h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                {{ Str::limit($article->content, 200) }}
                            </p>
                            <a href="{{ route('articles.show', $article->id) }}" class="bg-blue-700 text-white font-semibold py-2 px-5 rounded-md hover:bg-blue-800 transition">
                                Read More
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
@endsection
