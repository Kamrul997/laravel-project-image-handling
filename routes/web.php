<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddImageController as AddController;
use App\Http\Controllers\ShowImageController as ShowController;
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
Route::get('/', [ShowController::class, 'showImages'])->name("image.show");
Route::get('/addImage', [AddController::class, 'addImage'])->name("image.add");

Route::post('/storeImage', [AddController::class, 'storeImage'])->name("image.store");