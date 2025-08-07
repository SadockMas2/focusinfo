<?php

use App\Http\Controllers\ContactController;
use App\Models\Article;
use App\Models\Counter;
use App\Models\Slide;
use App\Models\Report;
use App\Models\Domain;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


Route::post('/set-locale', function (Illuminate\Http\Request $request) {
            $request->validate(['locale' => 'required|in:en,fr']);
            Session::put('locale', $request->locale);
            return Redirect::back();
        })->name('set-locale');
        
        Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return back();
})->name('lang.switch');


Route::get('/', function () {
    $slides = Slide::where('s_status', 'active')->get();
    $counters = Counter::get();
    $domains = Domain::get();
    $articles = Article::with('category')->with('author')->paginate(10);
    return view('pages.home', compact('slides', 'counters','domains','articles'));
})->name('acceuil');
Route::get('/qui-sommes-nous', function () {
    $history = Slide::where('s_status', 'active')->get();
    return view('pages.about', compact('history'));
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

Route::get('/nous-faire-un-don', function () {
    return view('pages.donate');
})->name('don');
Route::get('/articles', function () {
    $articles = Article::with('category')->paginate(10);
    return view('pages.blog', compact('articles'));
})->name('blog');


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
    $equipe = Report::paginate(10);
    return view('pages.equipe', compact('equipe'));
})->name('equipe');

Route::get('/boutique', function () {
    $articles = Report::paginate(10);
    return view('pages.boutique', compact('articles'));
})->name('boutique');

Route::get('/article/{slug}', function (string $slug) {
    $article = Article::where('slug', $slug)->with('category')->firstOrFail();
    $articles = Article::with('category')->paginate(10);
    return view('pages.blog-single', compact('article', 'articles'));
})->name('blog_detail');

Route::get('telecharger/{filename}', function($filename){
    return response()->download($filename);
})->name('downaload');

