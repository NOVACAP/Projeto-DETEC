<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandController;

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

Route::post('/ver-demandas', [DemandController::class, 'store']);

Route::get('/ver-demandas', [DemandController::class, 'index']);





Route::get('/criar-demanda', function () {
    return view('create-demand');
});



