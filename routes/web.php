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
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingHistoryController;
use App\Http\Controllers\MovieSearchController;
use App\Http\Controllers\Admin\RegisterController as RegisterAdmin;
use App\Http\Controllers\Admin\LoginController as loginAdmin;
use App\Http\Controllers\Admin\UserController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

// hiển thị phim
Route::get('phim-dang-chieu', [MovieController::class, 'movieIsShowing' ])->name('phimdangchieu');
Route::get('phim-sap-chieu', [MovieController::class, 'upcomingMovie' ])->name('phimsapchieu');
Route::get('chi-tiet-phim/{id}', [MovieController::class, 'details'])->name('movie.details');
Route::get('chon-phim/{id}', [MovieController::class, 'chooseMovie'])->name('movie.chooseMovie');

// đặt vé bằng cách chọn phim trước
Route::prefix('lich-chieu')->group(function(){
    Route::get('/', [ShowtimeController::class, 'index'])->name('lichchieu');

    Route::get('area/{id}', [ShowtimeController::class, 'area'])->name('khuvuc');

    Route::get('day/{id}', [ShowtimeController::class, 'date'])->name('ngay');

    Route::get('time/{id}', [ShowtimeController::class, 'time'])->name('gio');

    Route::get('movie/{id}', [ShowtimeController::class, 'movie'])->name('movie');
});

// đặt vé bằng cách chọn phim trước
Route::prefix('chon-chi-nhanh')->middleware('checkMovie')->group(function(){
    Route::get('/', [BranchController::class, 'index'])->name('chonchinhanh');

    Route::get('area/{id}', [BranchController::class, 'area'])->name('khuvucLC');

    Route::get('day/{id}', [BranchController::class, 'date'])->name('ngayLC');

    Route::get('time/{id}', [BranchController::class, 'time'])->name('gioLC');

});


// chọn ghế
Route::get('chon-ghe', [chairsController::class, 'index'])->middleware(['checkLogin','checkShowtimes'])->name('chonghe');
Route::post('ChooseChair', [chairsController::class, 'ChooseChair'])->middleware(['checkLogin','checkShowtimes'])->name('ChooseChair');

// Đặt vé
Route::get('dat-ve', [BookticketController::class, 'index'])->middleware(['checkChair','checkLogin'])->name('datve');
Route::get('thanh-toan', [BookticketController::class, 'payment'])->middleware(['checkChair','checkLogin'])->name('payment');
Route::get('ve-moi-dat', [BookticketController::class, 'newticket'])->middleware(['checkLogin'])->name('newticket');

// Đăng kí , đăng nhập
Route::post('dang-ki', [RegisterController::class, 'register'])->name('register');
Route::post('dang-nhap', [LoginController::class, 'Login'])->name('login');
Route::get('dang-xuat', [LoginController::class, 'Logout'])->name('logout');

//tìm kiếm phim
Route::get('tim-kiem-phim', [MovieSearchController::class, 'index'])->name('moviesearch');

//lịch sử đặt vé

Route::get('lich-su-dat-ve', [BookingHistoryController::class, 'index'])->middleware(['checkLogin'])->name('bookinghistory');

// Admin
Route::get('admins/dang-nhap', [loginAdmin::class, 'index'])->name('admin.login.index');
Route::get('admins/dang-ki', [RegisterAdmin::class, 'index'])->name('admin.register.index');
Route::post('admins/login', [loginAdmin::class, 'login'])->name('admin.login');
Route::post('admins/logout', [loginAdmin::class, 'logout'])->name('admin.logout');
Route::post('admins/register', [RegisterAdmin::class, 'register'])->name('admin.register');

Route::get('admins', [DashboardController::class, 'index'])->middleware('checkLogin.admin')->name('admin.dashboard');
Route::prefix('admins')->middleware('checkLogin.admin')->group(function () {
    Route::resource('movie', movieadmin::class);
    Route::resource('showtime', ShowtimesController::class);
    Route::get('user', [UserController::class, 'index'])->name('admin.user');
});
