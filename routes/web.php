<?php

use App\Http\Controllers\ClasseController;
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

Route::get('/classe/create',[ClasseController::class, 'create'] );
Route::post('/store',[ClasseController::class, 'store'] );
route::get('/listeClasse',[App\Http\Controllers\ClasseController::class,'listeClasse']);
