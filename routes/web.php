<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

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
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/computers', [PagesController::class, 'kompiuteriai'])->name('kompiuteriai');
Route::get('/small', [PagesController::class, 'smulki_technika'])->name('smulki_technika');
Route::get('/big', [PagesController::class, 'stambi_technika'])->name('stambi_technika');
Route::get('/wash', [PagesController::class, 'valymo_technika'])->name('valymo_technika');
Route::get('/garden', [PagesController::class, 'sodo_technika'])->name('sodo_technika');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
