<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FrutaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/For',[FrutaController::class,'Formula']);

Route::post('/Fru', [FrutaController::class, 'store']);
Route::delete('/frutas/{id}', [FrutaController::class, 'Delete']);
Route::put('/tipo/frutas/{id}', [FrutaController::class, 'update']);
Route::get('/tipo/frutas/editar/{id}', [FrutaController::class, 'datosEditar']); 