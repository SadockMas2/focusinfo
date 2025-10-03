<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;


class BlogController extends Controller

{
        public function index(Request $request)
        {
            $categoryId = $request->query('category_id'); 
            $category = null;

            $query = \App\Models\Article::published();

            if ($categoryId) {
                $category = \App\Models\Category::find($categoryId); 
                $query->where('category_id', $categoryId);
            }

            $slides = $query->latest()->take(5)->get();

           
            $mostViewedArticleThisWeek = (clone $query)
                ->where('published_at', '>=', now()->subWeek())
                ->orderBy('view_count', 'desc')
                ->first();

        
            $articles = (clone $query)->latest()->paginate(10);

            return view('pages.home', compact('slides', 'mostViewedArticleThisWeek', 'articles', 'category'));
        }


        public function byCategory(Category $category)
        {
            $articles = \App\Models\Article::published()
                ->where('category_id', $category->id)
                ->latest()
                ->paginate(10);

        
            $slides = \App\Models\Article::published()
                ->latest()
                ->take(5)
                ->get();

            return view('pages.home', compact('articles', 'category', 'slides'));
        }

       public function search(Request $request)
        {
            $query = $request->input('query');
            $categoryId = $request->input('category_id'); 

            $articlesQuery = Article::published();

            // Filtre par catégorie si besoin
            if ($categoryId) {
                $articlesQuery->where('category_id', $categoryId);
            }

            // Recherche par mots-clés
            if ($query) {
                $keywords = explode(' ', $query); // chaque mot devient un critère
                $articlesQuery->where(function($q) use ($keywords) {
                    foreach($keywords as $word) {
                        $q->orWhere('title', 'like', "%{$word}%")
                        ->orWhere('excerpt', 'like', "%{$word}%")
                        ->orWhere('content', 'like', "%{$word}%")
                        ->orWhereHas('category', function($q2) use ($word) {
                            $q2->where('name', 'like', "%{$word}%");
                        });
                    }
                });
            }

            $articles = $articlesQuery->latest()->paginate(10)->withQueryString();

            return view('pages.home', [
                'articles' => $articles,
                'query' => $query,
                'category' => $categoryId ? Category::find($categoryId) : null,
                'slides' => collect([]),
                'mostViewedArticleThisWeek' => null
            ]);
        }

                public function show($id)
        {
            $article = Article::with('comments')->findOrFail($id);
            return view('blog-single', compact('article'));
        }

        public function showCategory($slug)
        {
            $category = \App\Models\Category::where('slug', $slug)->firstOrFail();

            $articles = \App\Models\Article::published()
                ->where('category_id', $category->id)
                ->latest()
                ->paginate(10);

            return view('pages.category', compact('category', 'articles'));
        }



}



