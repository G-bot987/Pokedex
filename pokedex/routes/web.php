<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\PokemonController;
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

Route::middleware(['auth'])->group(function () {
    Route::resource('/pokedex', PokemonController::class)->names([
        'index' => 'pokedex',
    ]);
});

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');

Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
