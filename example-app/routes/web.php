<?php

use App\Http\Controllers\client\AntoanbaomatController;
use App\Http\Controllers\client\ChinhphudientuController;
use App\Http\Controllers\client\ChinhsachnhansuController;
use App\Http\Controllers\client\cocautochucController;
use App\Http\Controllers\client\doitacController;
use App\Http\Controllers\client\GiaiphapdoanhnghiepController;
use App\Http\Controllers\client\GiaiphapgiaoducController;
use App\Http\Controllers\client\GiaiphapyteController;
use App\Http\Controllers\client\GioithieuchungController;
use App\Http\Controllers\client\GoctrainghiemController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\client\khachhangController;
use App\Http\Controllers\client\nguonlucController;
use App\Http\Controllers\client\phanhoikhachhangController;
use App\Http\Controllers\client\tamnhimsumenhController;
use App\Http\Controllers\client\tintucvnptController;
use App\Http\Controllers\client\tintucvnptitController;
use App\Http\Controllers\client\tintuyendungController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/gioithieuchung', [GioithieuchungController::class, 'gioithieuchung'])->name('gioithieuchung');
    Route::get('/cocautochuc', [cocautochucController::class, 'tochuc'])->name('cocautochuc');
    Route::get('/tamnhinsumenh', [tamnhimsumenhController::class, 'sumenh'])->name('tamnhinsumenh');
    Route::get('/doitac', [doitacController::class, 'doitac'])->name('doitac');
    Route::get('/khachhang', [khachhangController::class, 'khachhang'])->name('khachhang');
    Route::get('/nguonluc', [nguonlucController::class, 'nguonluc'])->name('nguonluc');
    Route::get('/tinvnpt', [tintucvnptController::class, 'vnpt'])->name('tinvnpt');
    Route::get('/tinvnpt-it', [tintucvnptitController::class, 'vnptit'])->name('tinvnpt-it');
    Route::get('/phanhoikhachhang', [phanhoikhachhangController::class, 'phanhoi'])->name('phanhoikhachhang');
    Route::get('/chinhphudientu', [ChinhphudientuController::class, 'chinhphudientu'])->name('chinhphudientu');
    Route::get('/giaiphapyte', [GiaiphapyteController::class, 'yte'])->name('giaiphapyte');
    Route::get('/giaiphapgiaoduc', [GiaiphapgiaoducController::class, 'giaoduc'])->name('giaiphapgiaoduc');
    Route::get('/giaiphapdoanhnghiep', [GiaiphapdoanhnghiepController::class, 'doanhnghiep'])->name('giaiphapdoanhnghiep');
    Route::get('/antoanbaomat', [AntoanbaomatController::class, 'antoanbaomat'])->name('antoanbaomat');
    Route::get('/tintuyentdung', [tintuyendungController::class, 'tuyendung'])->name('tintuyendung');
    Route::get('/chinhsachnhansu', [ChinhsachnhansuController::class, 'nhansu'])->name('chinhsachnhansu');
    Route::get('/goctrainghiem', [GoctrainghiemController::class, 'trainghiem'])->name('goctrainghiem');
});
