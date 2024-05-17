<?php

use App\Http\Controllers\Authenticate;
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

Route::controller(Authenticate::class)->group(function () {
    Route::get('/signin', [Authenticate::class, 'signin'])->name('login');
    Route::get('/signup', [Authenticate::class, 'signup'])->name('signup');
    Route::get('/signout', [Authenticate::class, 'signout'])->name('logout');

    Route::post('/in', 'authenticate')->name('user-authenticate');
    Route::post('/register', 'register')->name('user-register');

    /*Route::get('/password-request', 'passwordRequest')->name('password-request');
    Route::post('/password-request', 'doPasswordRequest')->name('do-password-request');
    Route::get('/password-reset/{token}', 'passwordReset')->name('password-reset');
    Route::post('/password-reset/', 'doPasswordReset')->name('do-password-reset');*/
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [User::class, 'home'])->name('user-home');
});



Route::get('/films/must-see', [Films::class, 'popular'])->name('films-must-see');
Route::get('/films/popular', [Films::class, 'popular'])->name('films-popular');
Route::get('/films/search', [Films::class, 'popular'])->name('films-search');
Route::get('/films/{gud?}', [Films::class, 'item'])->name('films-item');

Route::get('/', [Front::class, 'home'])->name('home');
