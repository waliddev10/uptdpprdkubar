<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalenderPenugasanController;
use App\Http\Controllers\KontakPegawaiController;
use App\Http\Controllers\Master\BidangController;
use App\Http\Controllers\Master\JabatanTimController;
use App\Http\Controllers\Master\JenisPenugasanController;
use App\Http\Controllers\Master\KategoriPenugasanController;
use App\Http\Controllers\Master\PangkatController;
use App\Http\Controllers\Master\SkpdController;
use App\Http\Controllers\Master\TanggalLiburController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\RiwayatPenugasanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPenugasanController;
use Illuminate\Support\Facades\Artisan;
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

// setup

// Route::get('/migrate', function () {
//     return Artisan::call('migrate');
// });
// Route::get('/migrate/fresh', function () {
//     return Artisan::call('migrate:fresh');
// });
// Route::get('/seed', function () {
//     return Artisan::call('db:seed');
// });
// Route::get('/symlink', function () {
//     $target =  env('SYMLINK_PATH');
//     $shortcut = env('SYMLINK_PATH_TARGET');
//     return symlink($target, $shortcut);
// });

// router

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class)->middleware('role:admin')->except('show');
});

require __DIR__ . '/auth.php';
