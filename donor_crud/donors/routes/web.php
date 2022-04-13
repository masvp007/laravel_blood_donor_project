<?php
use App\Http\Controllers\DonorController;
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
Route::get('/', [DonorController::class, 'home']);
Route::get('/update/{id}',[DonorController::class, 'update'])->name('update');
Route::get('/contact',[DonorController::class,'contact']);
Route::post('/create',[DonorController::class,'create']);
Route::post('/edit/{id}',[DonorController::class,'edit'])->name('edit'); 
Route::post('/delete/{id}',[DonorController::class,'delete'])->name('delete');
Route::get('/search',[DonorController::class,'search'])->name('search');
Route::get('/choose',[DonorController::class,'choose']);