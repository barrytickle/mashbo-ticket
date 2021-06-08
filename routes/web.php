<?php

use App\Http\Controllers\DrawController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
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

Route::get('/', HomeController::class);


Route::group(['prefix' => 'draw'], function(){
    route::get('/create', [DrawController::class, 'create'])->name('front.draw.create');
    route::get('/{id}', [DrawController::class, 'show'])->name('front.draw.show');
    route::post('/store', [DrawController::class, 'store'])->name('front.draw.store');
});

Route::group(['prefix' => 'ticket'], function(){
    route::post('/{draw_id}/store', [TicketController::class, 'store'])->name('front.ticket.store');
});
