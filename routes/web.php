<?php

use App\Http\Controllers\ImageController;
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

Route::get('/', \App\Http\Controllers\WelcomeController::class);
Route::get('/dashboard', \App\Http\Controllers\WelcomeController::class);

Route::get('/{image}/up', [\App\Http\Controllers\VoteController::class, 'up']);
Route::get('/{image}/down', [\App\Http\Controllers\VoteController::class, 'down']);

Route::get('/error', function () {
    throw new Exception('ERROR');
});

Route::resource('images', ImageController::class)->middleware('auth');

require __DIR__.'/auth.php';
