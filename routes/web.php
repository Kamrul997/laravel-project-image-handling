<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddImageController as AddImageController;
use App\Http\Controllers\ShowImageController as ShowImageController;
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
// Route::get('/', [HomeController::class, 'home'])->name("homePage");

Route::get('/', [ShowImageController::class, 'showImages'])->name("image.show");
Route::get('/addImage', [AddImageController::class, 'addImage'])->name("image.add");

Route::post('/storeImage', [AddImageController::class, 'storeImage'])->name("image.store");
