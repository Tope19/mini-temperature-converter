<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

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

Route::get('/')->uses(ConversionController::class . '@index');
Route::post('/convert')->uses(ConversionController::class . '@convert')->name('convert');
// Route::post('/convert-fahrenheit-to-celsius')->uses(ConversionController::class . '@convertFahrenheittoCelsius');

