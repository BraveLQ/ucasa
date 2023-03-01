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
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
//Route::get('/', [\App\Http\Controllers\HomeController::class, 'checkUserType']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //User routes
    Route::resource('/home', \App\Http\Controllers\Public\HomeController::class);
    Route::resource('/calendars', \App\Http\Controllers\Public\CalendarController::class);
    Route::resource('/anonymousbox', \App\Http\Controllers\Public\AnonBoxController::class);
    Route::resource('/settings', \App\Http\Controllers\Public\SettingsController::class);
    Route::resource('/gym', \App\Http\Controllers\GymController::class);
    Route::resource('/instagram', \App\Http\Controllers\InstaController::class);
    Route::resource('/club', \App\Http\Controllers\Public\ClubsController::class);
});
Route::middleware(['auth','role:admin'])->group(function (){
    //Admin routes
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/calendar', function (){
        return Inertia::render('Admin/Calendar/Calendar');
    })->name('calendar');
    Route::resource('/events', \App\Http\Controllers\EventController::class);
    Route::resource('/messages', \App\Http\Controllers\Admin\AnonymousBoxController::class);
    Route::resource('/clubs', \App\Http\Controllers\Admin\ClubsController::class);
});

