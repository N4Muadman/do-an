<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\MoviesController as movieadmin;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ShowtimesController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\chairsController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BookticketController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('phim-dang-chieu', [MovieController::class, 'movieIsShowing' ])->name('phimdangchieu');

Route::get('phim-sap-chieu', [MovieController::class, 'upcomingMovie' ])->name('phimsapchieu');

Route::get('chi-tiet-phim/{id}', [MovieController::class, 'details'])->name('movie.details');

Route::prefix('lich-chieu')->group(function(){
    Route::get('/', [ShowtimeController::class, 'index'])->name('lichchieu');

    Route::get('area/{id}', [ShowtimeController::class, 'area'])->name('khuvuc');

    Route::get('day/{id}', [ShowtimeController::class, 'date'])->name('ngay');

    Route::get('time/{id}', [ShowtimeController::class, 'time'])->name('gio');

    Route::get('movie/{id}', [ShowtimeController::class, 'movie'])->name('movie');
});
Route::prefix('chon-chi-nhanh')->group(function(){
    Route::get('/{id}', [BranchController::class, 'index'])->name('chonchinhanh');

    Route::get('area/{id}', [BranchController::class, 'area'])->name('khuvucLC');

    Route::get('day/{id}', [BranchController::class, 'date'])->name('ngayLC');

    Route::get('time/{id}', [BranchController::class, 'time'])->name('gioLC');

});

Route::get('chon-ghe', [chairsController::class, 'index'])->name('chonghe');
Route::post('ChooseChair', [chairsController::class, 'ChooseChair'])->name('ChooseChair');

Route::get('dat-ve', [BookticketController::class, 'index'])->name('datve');

Route::get('thanh-toan', [BookticketController::class, 'payment'])->name('payment');
Route::get('ve-moi-dat', [BookticketController::class, 'newticket'])->name('newticket');

Route::get('admins', [DashboardController::class, 'index']);

Route::prefix('admins')->group(function () {
    Route::resource('movie', movieadmin::class);
    Route::put('movie/changeStatus/{id}', [movieadmin::class, 'changeStatus'])->name('movie.changeStatus');
    Route::resource('showtime', ShowtimesController::class);
});
