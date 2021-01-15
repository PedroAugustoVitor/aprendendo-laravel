<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IMCController;

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
    return '<h1>Passo 1 concluído.</h1>';
});

Route::get('/passo/{passo}', [IMCController::class, 'passo']);
Route::get('/form', [IMCController::class, 'form']);