<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\SearchTrainerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchCategory;
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

Route::get('/companies', [CompaniesController::class,'companies']);
Route::get('/trainers', [TrainerController::class,'trainers']);
Route::get('/categories', [CategoryController::class,'categories']);
Route::get('/search', [SearchTrainerController::class,'search']);
Route::get('/searchCategory', [SearchCategory::class,'search']);