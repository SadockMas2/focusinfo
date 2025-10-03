@extends('layouts.base')

@section('content')
<div class="container">
    <h2>Articles dans : {{ $category->name }}</h2>

    @forelse($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('article.show', $article->slug) }}">{{ $article->title }}</a>
                </h5>
                <p class="card-text">{{ Str::limit($article->excerpt, 150) }}</p>
            </div>
        </div>
    @empty
        <p>Aucun article pour cette catégorie.</p>
    @endforelse

    {{ $articles->links() }}
</div>
@endsection
