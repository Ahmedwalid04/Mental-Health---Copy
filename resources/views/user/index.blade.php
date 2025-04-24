@extends('layouts.app')

@section('content')



  <div class="container">
    @if($articles->isEmpty())
      <p class="no-articles">No articles yet</p>
    @else
      @foreach($articles as $article)
        <article class="{{ $loop->first ? 'highlighted' : '' }}">
          <header>
            <div class="author-info">
              <img
                src="{{ $article->author->therapistProfile ? asset('storage/' . $article->author->therapistProfile->profile_image) : asset('images/default-profile.png') }}"
                alt="Author Profile"
              />
              <div>
                <p class="author-name">{{ $article->author->name }}</p>
                <p class="post-time">{{ $article->created_at->diffForHumans() }}</p>
              </div>
            </div>
            <button aria-label="More options" class="more-options">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          </header>
          <h2>{{ $article->title }}</h2>
          <p class="description">
            {{ Str::limit($article->content, 200) }}
            <a
              href="{{ route('articles.show', $article->id) }}"
              target="_blank"
              rel="noopener noreferrer"
              class="read-more"
            >
              Read more
            </a>
          </p>

          @if($article->tags)
            <div class="tags">
              @foreach($article->tags as $tag)
                <span class="tag">{{ $tag->name }}</span>
              @endforeach
            </div>
          @endif
        </article>
      @endforeach
    @endif
  </div>
@endsection


<style>
    body {
        background-color: #b7d3ec;
        margin: 0;
        padding: 16px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        color: #1a202c;
        min-height: 100vh;
    }

    .container {
        max-width: 768px;
        margin: 0 auto;
    }

    article {
        background-color: #f9f4e9;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 24px;
        box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
        position: relative;
    }
    header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
    }

    .author-info {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .author-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .author-name {
        font-weight: 600;
        font-size: 12px;
        line-height: 1.2;
        margin: 0;
    }

    .post-time {
        font-size: 10px;
        color: #4a5568;
        margin: 0;
        line-height: 1.2;
    }

    .more-options {
        background: none;
        border: none;
        color: #1a202c;
        font-size: 18px;
        cursor: pointer;
        padding: 0;
        line-height: 1;
    }

    .more-options:hover {
        color: #4a5568;
    }

    h2 {
        font-weight: 700;
        font-size: 14px;
        margin: 0 0 8px 0;
        line-height: 1.3;
    }

    p.description {
        font-size: 12px;
        color: inherit;
        margin: 0 0 12px 0;
        line-height: 1.4;
    }

    p.description a.read-more {
        color: #3b5998;
        font-weight: 600;
        text-decoration: none;
        margin-left: 4px;
    }

    p.description a.read-more:hover {
        text-decoration: underline;
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 0;
    }

    .tag {
        background-color: #d1d9e9;
        color: #1a202c;
        font-size: 9px;
        font-weight: 600;
        padding: 2px 8px;
        border-radius: 4px;
        white-space: nowrap;
    }

    @media (max-width: 480px) {
        body {
            padding: 12px;
        }

        article {
            padding: 16px;
        }

        h2 {
            font-size: 13px;
        }

        p.description {
            font-size: 11px;
        }

        .author-name {
            font-size: 11px;
        }

        .post-time {
            font-size: 9px;
        }
    }
</style>
