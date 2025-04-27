@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
@endsection

@section('content')
   
<!-- <div class="header">
        <h1>Articles</h1>
    </div> -->

    @if($articles->isEmpty())
        <div class="container">
            <p class="no-articles">No articles yet</p>

        </div>
    @else
        @foreach($articles as $article)
            <div class="article-box">
                <h2 class="article-title">{{ $article->title }}</h2>
                <p class="article-content">
                    {{ Str::limit($article->content, 200) }}
                </p>
                <a href="{{ route('articles.show', $article->id) }}" class="btn"
                   style="margin-top: 8px; display: inline-block;">Read More</a>
            </div>
        @endforeach
    @endif
@endsection
