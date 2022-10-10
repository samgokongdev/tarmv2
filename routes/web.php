<?php

use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SptController;
use App\Http\Controllers\TunggakanController;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Datatables;

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

Route::resource('/', HomeController::class);

Route::resource('tunggakan', TunggakanController::class);

Route::resource('spt', SptController::class);
