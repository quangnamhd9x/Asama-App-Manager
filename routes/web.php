<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\SearchController;
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


Route::prefix('/')->group(function (){
    Route::get('/', [AgencyController::class, 'index'])->name('agency.index');
    Route::get('/add', [AgencyController::class, 'create'])->name('agency.create');
    Route::post('/add', [AgencyController::class, 'store'])->name('agency.store');
    Route::get('/{id}/edit', [AgencyController::class, 'edit'])->name('agency.edit');
    Route::post('/{id}/edit', [AgencyController::class, 'update'])->name('agency.update');
    Route::get('/{id}/destroy', [AgencyController::class, 'destroy'])->name('agency.destroy');
    Route::get('/searchInfo', [SearchController::class, 'search']);
    Route::get('/result', [SearchController::class, 'search'])->name('agency.resultSearch');
});
