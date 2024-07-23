<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\WajahController;
use App\Models\Kuku;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perawatanKuku', [KukuController::class,'index']);
Route::get('/perawatanKuku/create', [KukuController::class, 'create']);
Route::get('/perawatanKuku/insert', [KukuController::class, 'insert']);
Route::post('/perawatanKuku/store', [KukuController::class, 'store'])->name('perawatanKuku-store');
Route::post('/perawatanKuku/hasil', [KukuController::class, 'hasil']);
Route::get('/perawatanKuku/{id}/edit', [KukuController::class, 'edit'])->name('perawatanKuku.edit');
Route::post('/perawatanKuku/{id}/update', [KukuController::class, 'update'])->name('perawatanKuku.update');
Route::get('perawatanKuku/delete/{id}',[KukuController::class,'destroy'])->name('perawatanKuku-delete');
Route::get('/perawatan/hasil', function () {
    return view('kuku.hasil');
})->name('hasil');

Route::get('/perawatanWajah', [WajahController::class,'index']);
Route::get('/perawatanWajah/create', [WajahController::class, 'create']);
Route::get('/perawatanWajah/insert', [WajahController::class, 'insert']);
Route::post('/perawatanWajah/store', [WajahController::class, 'store'])->name('perawatanWajah-store');
Route::post('/perawatanWajah/hasil', [WajahController::class, 'hasil']);
Route::get('/perawatanWajah/{id}/edit', [WajahController::class, 'edit'])->name('perawatanWajah.edit');
Route::post('/perawatanWajah/{id}/update', [WajahController::class, 'update'])->name('perawatanWajah.update');
Route::get('perawatanWajah/delete/{id}',[WajahController::class,'destroy'])->name('perawatanWajah-delete');
Route::get('/perawatan/hasil', function () {
    return view('wajah.hasil');
})->name('hasil');
