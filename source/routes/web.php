<?php

use App\Http\Controllers\Global\ContactController;
use App\Http\Controllers\Global\HomeController;
use App\Http\Controllers\Global\ServiceController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'contact', 'controller' => ContactController::class], function () {
    Route::get('/', 'contact')->name('global.contact');
    Route::post('/', 'sendMail')->name('global.contact.send');
});

Route::get('/services', [ServiceController::class, 'renderServicesPage'])->name('global.services');

