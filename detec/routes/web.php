<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\TechniqueAreaController;
use App\Http\Controllers\ActivityController;
use App\Models\TechniqueArea;

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
})->name('inicio');


Route::post('/criar-demanda', [DemandController::class, 'store']);

Route::get('/criar-demanda', [DemandController::class, 'index']);

Route::get('/criar-area-tecnica', function () {
    return view('create-techniqueArea');
});

/**Technique Area */

Route::post('/techniqueAreas', [ActivityController::class, 'store']);



