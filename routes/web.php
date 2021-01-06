<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\LawController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LawController::class, 'index']);
Route::get('/directories', [LawController::class, 'directory']);
Route::get('/abouts', [LawController::class, 'about']);
Route::get('/teams', [LawController::class, 'team']);
Route::get('/galeries', [LawController::class, 'gallery']);
Route::get('/contacts', [LawController::class, 'contact']);



Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::resource('/home', HomController::class);
    Route::resource('/gallery', GaleryController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/directory', DirectoryController::class);

});

