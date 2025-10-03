<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Models\Article;
use App\Models\Category;
use App\Models\Counter;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Report;
use App\Models\Domain;
use App\Models\Benevole;
use App\Models\PaymentMethod;
use App\Models\Value;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'fr'])) {
        abort(400); // Langue non supportée
    }
    //  App::setLocale(Session::get('locale'));
    Session::put('locale', $locale);
    return redirect()->back();

})->name('change_language');


Route::get('/', function () {
    $slides = Article::with('category')->with('author')->paginate(10);
    // Slide::where('s_status', 'active')->get();
    $counters = Counter::get();
    $domains = Domain::get();
    $valeurs=Value::paginate(4);
    $articles = Article::with('category')->with('author')->paginate(3);
    return view('pages.home', compact('slides', 'counters', 'domains', 'articles','valeurs'));
})->name('acceuil');
Route::get('/qui-sommes-nous', function () {
    $history = Slide::where('s_status', 'active')->get();
    $valeurs=Value::paginate(4);
    return view('pages.about', compact('history','valeurs'));
})->name('about');
Route::get('/notre-histoire', function () {
    return view('pages.historique');
})->name('historique');

Route::get('/galerie', function () {
    return view('pages.galerie');
})->name('galerie');
Route::get('/videos', function () {
    return view('pages.video');
})->name('videos');


Route::get('/domaines-d-intervention', function () {
    return view('pages.services');
})->name('services');

Route::get('/domaines/{id}', function (int $id) {
    $domaine = Domain::where('id', $id)->firstOrFail();
   return view('pages.domaines_details', compact('domaine'));
})->name('domaines_details');

Route::get('/nous-faire-un-don', function () {

    $methodes=PaymentMethod::all();
    return view('pages.donate', compact('methodes'));
})->name('don');
Route::get('/articles', function () {
    $categories = Category::all();
    $articles = Article::with('category')->with('author')->paginate(12);
    return view('pages.blog', compact('articles', 'categories'));
})->name('blog');

Route::get('/categories', function () {
    $categories = Category::all();
    $articles = Article::with('category')->with('author')->paginate(12);
    return view('pages.blog', compact('articles', 'categories'));
})->name('categories.show');


Route::get('/recherche', function () {
    $categories = Category::all();
    $articles = Article::with('category')->with('author')->paginate(12);
    return view('pages.blog', compact('articles', 'categories'));
})->name('articles.search');

Route::get('/authors', function () {
    $categories = Category::all();
    $articles = Article::with('category')->with('author')->paginate(12);
    return view('pages.blog', compact('articles', 'categories'));
})->name('authors.show');


Route::get('/nos-rapports', function () {
    $rapports = Report::paginate(10);
    return view('pages.rapports', compact('rapports'));
})->name('rapports');
Route::get('/contactez-nous', function () {
    $articles = Report::paginate(10);
    return view('pages.contact', compact('articles'));
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/devenir-benevole', function () {
    $articles = Report::paginate(10);
    return view('pages.devenir-benevole', compact('articles'));
})->name('benevole');


Route::get('/notre-equipe', function () {
    $members = Benevole::paginate(10);
    return view('pages.equipe', compact('members'));
})->name('equipe');

Route::get('/boutique', function () {
    $produits = Product::paginate(10);
    return view('pages.boutique', compact('produits'));
})->name('boutique');

Route::get('/article/{slug}', function (string $slug) {
    $article = Article::where('slug', $slug)->with('category')->with('comments')->firstOrFail();
    $articles = Article::with('category')->with('comments')->paginate(3);
    return view('pages.blog-single', compact('article', 'articles'));
})->name('blog_detail');

Route::get('telecharger/{filename}', function ($filename) {
    return response()->download($filename);
})->name('downaload');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/category/{category}', [BlogController::class, 'byCategory'])->name('blog.category');
Route::get('/blog/search', [BlogController::class, 'search'])->name('blog.search');

Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('blog_detail');



Route::post('/article/{id}/comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('/article/{id}', [BlogController::class, 'show'])->name('article.show');
Route::get('/category/{id}', [BlogController::class, 'byCategory'])->name('category.articles');






