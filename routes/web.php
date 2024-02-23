<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonaController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route pour les utilisateurs normaux
    Route::get('/index', [PersonaController::class, 'index'])->name('index');

    // Routes pour les administrateurs et les super administrateurs
    Route::middleware(['admin'])->group(function () {
        Route::resource('personas', PersonaController::class)->except(['show']);
    });

    // Routes supplémentaires pour les super administrateurs
    Route::middleware(['superadmin'])->group(function () {
        Route::resource('users', UserController::class)->except(['create', 'store']);
    });
});
