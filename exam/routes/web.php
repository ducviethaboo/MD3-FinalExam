<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/',[AgencyController::class,'getAllAgency'])->name('show');
Route::get('/add',[AgencyController::class,'showFormAddAgency'])->name('add.agency');
Route::post('/add',[AgencyController::class,'addAgency'])->name('add.agency.post');
Route::get('/delete/{id}',[AgencyController::class,'deleteAgency'])->name('delete.agency.post');
Route::get('/edit/{id}',[AgencyController::class,'showFormEditAgency'])->name('edit.agency');
Route::post('/edit',[AgencyController::class,'editAgency'])->name('edit.agency.post');
Route::get('/search',[AgencyController::class,'search'])->name('search.agency');
Route::post('/search',[AgencyController::class,'search'])->name('search.agency.post');
