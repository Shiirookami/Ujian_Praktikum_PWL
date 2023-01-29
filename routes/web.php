<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\GuruController;
use App\Http\Controllers\User\UserDashboardController;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Auth::routes();
Route::group([
    'middleware' => 'auth'
],function(){
    Route::group([
        'middleware' => 'role:superadmin',
        'prefix'=>'superadmin',
        'as' => 'superadmin.'
    ],function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
        Route::resource('guru',GuruController::class);
    });
    Route::group([
        'middleware' => 'role:admin',
        'prefix'=>'admin_user',
        'as' => 'admin_user.'
    ],function(){
        Route::get('/',[DashboardAdminController::class, 'index'])->name('dashboard.index');
    });
    Route::group([
        'middleware' => 'role:user',
        'prefix'=>'user_pengguna',
        'as' => 'user_pengguna.'
    ],function(){
        Route::get('/',[UserDashboardController::class, 'index'])->name('dashboard.index');
    });
});


