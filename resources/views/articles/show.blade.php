@extends('layouts.app')

@section('content')
<div class="article-box" style="padding: 24px;">
    <h1 class="article-title">{{ $article->title }}</h1>
    <p class="article-content">{{ $article->content }}</p>
    <a href="{{ route('articles.index') }}" class="btn" style="margin-top: 16px;">Back to Articles</a>
</div>
@endsection
