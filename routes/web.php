<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginAdminController;

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

Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('loginadmin.index');

Route::post('/admin/login', [LoginAdminController::class, 'authenticate'])->name('admin.authenticate');

Route::post('/admin', [LoginAdminController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin/dashboard');
    })->name('admindashboard');
    
    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('adminuser.index');

    Route::get('/admin/user/add', [AdminUserController::class, 'openAdd'])->name('adduser.open');

    Route::post('/admin/user/add', [AdminUserController::class, 'store'])->name('admin.user.store');
});