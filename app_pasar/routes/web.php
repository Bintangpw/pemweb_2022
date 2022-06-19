<?php

use App\Models\Pasar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\ProfileController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    
    Route::get('pasar', [\App\Http\Controllers\PasarController::class, 'index'])->name('pasar');
    Route::get('tambahPasar', [\App\Http\Controllers\PasarController::class, 'tambahPasar'])->name('tambahPasar');
    Route::post('insertPasar', [\App\Http\Controllers\PasarController::class, 'insertPasar'])->name('insertPasar');
    Route::post('editPasar/{id}', [\App\Http\Controllers\PasarController::class, 'editPasar'])->name('editPasar');
    Route::get('deletePasar/{id}', [\App\Http\Controllers\PasarController::class, 'delete'])->name('delete');
    Route::get('showPasar/{id}', [\App\Http\Controllers\PasarController::class, 'showPasar'])->name('showPasar');
    Route::get('seePasar/{id}', [\App\Http\Controllers\PasarController::class, 'seePasar'])->name('seePasar');
    Route::get('lihatPasar/{id}', [\App\Http\Controllers\PasarController::class, 'lihatPasar'])->name('lihatPasar');

    Route::get('tenant', [\App\Http\Controllers\TenantController::class, 'index'])->name('tenant');
    Route::get('tambahTenant', [\App\Http\Controllers\TenantController::class, 'tambahTenant'])->name('tambahTenant');
    Route::post('insertTenant', [\App\Http\Controllers\TenantController::class, 'insertTenant'])->name('insertTenant');
    Route::post('editTenant/{id}', [\App\Http\Controllers\TenantController::class, 'editTenant'])->name('editTenant');
    Route::get('deleteTenant/{id}', [\App\Http\Controllers\TenantController::class, 'delete'])->name('delete');
    Route::get('showTenant/{id}', [\App\Http\Controllers\TenantController::class, 'showTenant'])->name('showTenant');
    Route::get('seeTenant/{id}', [\App\Http\Controllers\TenantController::class, 'seeTenant'])->name('seeTenant');
    Route::get('lihatTenant/{id}', [\App\Http\Controllers\TenantController::class, 'lihatTenant'])->name('lihatTenant');

    Route::get('pemilik', [\App\Http\Controllers\PemilikController::class, 'index'])->name('pemilik');
    Route::get('tambahPemilik', [\App\Http\Controllers\PemilikController::class, 'tambahPemilik'])->name('tambahPemilik');
    Route::post('insertPemilik', [\App\Http\Controllers\PemilikController::class, 'insertPemilik'])->name('insertPemilik');
    Route::post('editPemilik/{id}', [\App\Http\Controllers\PemilikController::class, 'editPemilik'])->name('editPemilik');
    Route::get('deletePemilik/{id}', [\App\Http\Controllers\PemilikController::class, 'delete'])->name('delete');
    Route::get('showPemilik/{id}', [\App\Http\Controllers\PemilikController::class, 'showPemilik'])->name('showPemilik');
    Route::get('seePemilik/{id}', [\App\Http\Controllers\PemilikController::class, 'seePemilik'])->name('seePemilik');
    Route::get('lihatPemilik/{id}', [\App\Http\Controllers\PemilikController::class, 'lihatPemilik'])->name('lihatPemilik');

    Route::get('pengelola', [\App\Http\Controllers\PengelolaController::class, 'index'])->name('pengelola');
    Route::get('tambahPengelola', [\App\Http\Controllers\PengelolaController::class, 'tambahPengelola'])->name('tambahPengelola');
    Route::post('insertPengelola', [\App\Http\Controllers\PengelolaController::class, 'insertPengelola'])->name('insertPengelola');
    Route::post('editPengelola/{id}', [\App\Http\Controllers\PengelolaController::class, 'editPengelola'])->name('editPengelola');
    Route::get('deletePengelola/{id}', [\App\Http\Controllers\PengelolaController::class, 'delete'])->name('delete');
    Route::get('showPengelola/{id}', [\App\Http\Controllers\PengelolaController::class, 'showPengelola'])->name('showPengelola');
    Route::get('seePengelola/{id}', [\App\Http\Controllers\PengelolaController::class, 'seePengelola'])->name('seePengelola');
    Route::get('lihatPengelola/{id}', [\App\Http\Controllers\PengelolaController::class, 'lihatPengelola'])->name('lihatPengelola');

    Route::get('riwayat_pemilik', [\App\Http\Controllers\RiwayatPemilikController::class, 'index'])->name('riwayat_pemilik');
    Route::get('tambahRwtPemilik', [\App\Http\Controllers\RiwayatPemilikController::class, 'tambahRwtPemilik'])->name('tambahRwtPemilik');
    Route::post('insertRwtPemilik', [\App\Http\Controllers\RiwayatPemilikController::class, 'insertRwtPemilik'])->name('insertRwtPemilik');
    Route::post('editRwtPemilik/{id}', [\App\Http\Controllers\RiwayatPemilikController::class, 'editRwtPemilik'])->name('editRwtPemilik');
    Route::get('deleteRwtPemilik/{id}', [\App\Http\Controllers\RiwayatPemilikController::class, 'delete'])->name('delete');
    Route::get('showRwtPemilik/{id}', [\App\Http\Controllers\RiwayatPemilikController::class, 'showRwtPemilik'])->name('showRwtPemilik');
    Route::get('seeRwtPemilik/{id}', [\App\Http\Controllers\RiwayatPemilikController::class, 'seeRwtPemilik'])->name('seeRwtPemilik');
    Route::get('lihatRwtPemilik/{id}', [\App\Http\Controllers\RiwayatPemilikController::class, 'lihatRwtPemilik'])->name('lihatRwtPemilik');

    Route::get('riwayat_iuran', [\App\Http\Controllers\RiwayatIuranController::class, 'index'])->name('riwayat_iuran');
    Route::get('tambahRwtIuran', [\App\Http\Controllers\RiwayatIuranController::class, 'tambahRwtIuran'])->name('tambahRwtIuran');
    Route::post('insertRwtIuran', [\App\Http\Controllers\RiwayatIuranController::class, 'insertRwtIuran'])->name('insertRwtIuran');
    Route::post('editRwtIuran/{id}', [\App\Http\Controllers\RiwayatIuranController::class, 'editRwtIuran'])->name('editRwtIuran');
    Route::get('deleteRwtIuran/{id}', [\App\Http\Controllers\RiwayatIuranController::class, 'delete'])->name('delete');
    Route::get('showRwtIuran/{id}', [\App\Http\Controllers\RiwayatIuranController::class, 'showRwtIuran'])->name('showRwtIuran');
    
});
