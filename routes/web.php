<?php

use App\Http\Controllers\ConsultationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ConsultationController::class)->group(function (){
    Route::get('/consultation', 'index')->name('consultation.index');
    Route::post('/consultation', 'store')->name('consultation.store');
});