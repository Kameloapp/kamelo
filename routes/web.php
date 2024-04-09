<?php

use App\Http\Controllers\Films;
use App\Http\Controllers\Front;
use App\Http\Controllers\User;
use App\Models\Jeu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/test', function() {
    $jeux = Jeu::where('titre', 'LIKE', '%sky team%' )->orderBy('popularity', 'desc')->get();
    $jeu = $jeux->first();

    dump($jeu->medias()->dump());
});

Route::get('/films/must-see', [Films::class, 'popular'])->name('films-must-see');
Route::get('/films/popular', [Films::class, 'popular'])->name('films-popular');
Route::get('/films/search', [Films::class, 'popular'])->name('films-search');
Route::get('/films/{gud?}', [Films::class, 'item'])->name('films-item');
Route::get('/user', [User::class, 'home'])->name('user-home');
Route::get('/signin', [Front::class, 'signin'])->name('signin');
Route::get('/', [Front::class, 'home'])->name('home');
