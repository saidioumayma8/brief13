<?php

use App\Http\Controllers\RecetteController;
use App\Http\Requests\recetteRequest;
use Illuminate\Support\Facades\Route;

use App\Models\Recette ;

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

Route::get('/', [RecetteController::class,'index']);
// route::resource(name:'recettes', \App\Http\Controllers\RecetteController::class)
Route::get('/create', function () {
    return view('create');
});
