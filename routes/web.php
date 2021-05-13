<?php

use App\Http\Controllers\Acheter;
use App\Http\Controllers\Login;
use App\Http\Controllers\Plan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Plan::class, 'index']);
Route::post('/chaise', [Plan::class, 'getPlace'])->name('get_place');
Route::post('/verifier', [Plan::class, 'getAcheter'])->name('get_acheter');
Route::post('/inserer', [Plan::class, 'insert'])->name('acheter');
Route::post('/paiement', [Plan::class, 'insertPaiement'])->name('insert_avoir');
Route::get('/acheter', [Acheter::class, 'index'])->name('acheter_liste');
Route::post('/acheter', [Acheter::class, 'getListe'])->name('get_liste');
Route::get('/update', [Acheter::class, 'update'])->name('update');
Route::get('/imprimer', [Acheter::class, 'imprimer'])->name('imprimer');
Route::get('/authentification', [Login::class, 'index'])->name('page_login');
Route::post('/authentification', [Login::class, 'verifier'])->name('login');
Route::get('/mobile', [Login::class, 'verifier'])->name('login_mobile');
Route::get('/total', [Acheter::class, 'getTotal'])->name('chiffre_affaire');
Route::get('/client', [Acheter::class, 'compter_client'])->name('compter_client');
Route::get('/ando', [Acheter::class, 'ando'])->name('ando');
