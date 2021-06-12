<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\SearchTrainerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchCategory;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/semester', [CompaniesController::class,'semester']);
Route::get('/courses_catalog_has_semester', [CompaniesController::class,'courses_catalog_has_semester']);
Route::get('/coursecatalog', [CompaniesController::class,'coursecatalog']);
Route::get('/diary', [CompaniesController::class,'diary']);
Route::get('/diary_week', [CompaniesController::class,'diary_week']);
Route::get('/diary_date', [CompaniesController::class,'diary_date']);
Route::get('/teachers', [CompaniesController::class,'teachers']);
Route::get('/students', [CompaniesController::class,'students']);
Route::get('/classes', [CompaniesController::class,'classes']);
Route::get('/facultys', [CompaniesController::class,'facultys']);
Route::get('/courses', [CompaniesController::class,'courses']);


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');