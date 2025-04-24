@extends('layouts.app')

@section('content')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');
  body {
    background-color: #c9ddfc !important;
    font-family: 'Inter', sans-serif;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
  }

  .header h1 {
    color: #0f2c67;
    font-weight: 600;
    font-size: 18px;
    margin: 0;
  }

  .btn {
    background-color: #0f2c67;
    color: white;
    font-weight: 600;
    font-size: 12px;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 0.2);
    cursor: pointer;
    text-decoration: none;
  }

  .container {
    background-color: #fef8f0;
    border-radius: 8px;
    padding: 40px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 280px;
    box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
  }

  .container img {
    margin-bottom: 16px;
    width: 240px;
    height: 160px;
    object-fit: cover;
    background-color: #ccc;
  }

  .no-articles {
    color: white;
    font-weight: 600;
    font-size: 12px;
    margin: 0 0 4px 0;
  }

  .subtext {
    color: #7a7a8c;
    font-size: 12px;
    margin: 0 0 16px 0;
  }

  .article-box {
    background-color: #fef8f0;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 1px 3px rgb(0 0 0 / 0.1);
  }

  .article-title {
    color: #0f2c67;
    font-weight: 600;
    margin-bottom: 8px;
  }

  .article-content {
    font-size: 14px;
    color: #333;
  }
</style>

<div class="header">
  <h1>Articles</h1>
  <a href="{{ route('articles.create') }}" class="btn">Add Article</a>
</div>

@if($articles->isEmpty())
  <div class="container">
    <img src="https://placehold.co/240x160/cccccc/757575/png?text=240%C3%97160" alt="Placeholder image" />
    <p class="no-articles">No articles yet</p>
    <p class="subtext">Create your first article to get started</p>
    <a href="{{ route('articles.create') }}" class="btn">Add Article</a>
  </div>
@else
  @foreach($articles as $article)
    <div class="article-box">
      <h2 class="article-title">{{ $article->title }}</h2>
      <p class="article-content">
  {{ Str::limit($article->content, 200) }}
</p>
<a href="{{ route('articles.show', $article->id) }}" class="btn" style="margin-top: 8px; display: inline-block;">Read More</a>
    </div>
  @endforeach
@endif
@endsection
