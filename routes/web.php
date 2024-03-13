<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpjsController;

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


// homepage
Route::get('/', [BpjsController::class, 'viewHome'])->name('home');
// bpjs
Route::get('/tampilbpjs', [BpjsController::class, 'index'])->name('tampilbpjs');
Route::post('/check-bpjs', [BpjsController::class, 'checkBpjs'])->name('check.bpjs');
// dokter view
Route::get('/tampildokter', [BpjsController::class, 'tampildokter'])->name('tampildokter');

// select
Route::get('select', [BpjsController::class, 'showSelectForm'])->name('select');
Route::post('/select', [BpjsController::class, 'handleSelection'])->name('select.handle');



Route::get('/print/{id}', [BpjsController::class, 'print'])->name('print');





