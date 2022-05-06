<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
    ]);
})->name('home');
Route::get('/nosotros', function () {
    return Inertia::render('About', [
    ]);
})->name('nosotros');
Route::get('/eventos', function () {
    return Inertia::render('Event', [
    ]);
})->name('eventos');
Route::get('conferencias', function () {
    return Inertia::render('Conferencias', [
    ]);
})->name('conferencias');
 
Route::get('/testimonios', function () {
    return Inertia::render('Testimonios', [
    ]);
})->name('testimonios');
 
Route::get('/contacto', function () {
    return Inertia::render('Contact', [
    ]);
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
