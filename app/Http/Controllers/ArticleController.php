<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
public function show($slug)
{
    $article = Article::where('slug', $slug)
        ->published()
        ->firstOrFail();

    $prev = $article->previous();
    $next = $article->next();

    // On récupère 3 articles au hasard, en excluant l'article en cours
    $articles = Article::where('id', '!=', $article->id)
        ->published()
        ->inRandomOrder()
        ->take(3)
        ->get();

    return view('pages.blog-single', compact('article', 'prev', 'next', 'articles'));
}

}
