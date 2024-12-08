<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\GradeController;
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

    Route::get('admin/user/edit/{userid}', [AdminUserController::class, 'openEdit'])->name('edituser.open');

    Route::put('/admin/user/update/{userid}', [AdminUserController::class, 'updateUser'])->name('adminuser.update');

    Route::delete('/admin/user/{id}', [AdminUserController::class, 'deleteUser'])->name('adminuser.delete');

    Route::get('admin/grade', [GradeController::class, 'index'])->name('grade.index');

    Route::get('admin/grade/add', [GradeController::class, 'openAdd'])->name('addgrade.open');

    Route::post('admin/grade/add', [GradeController::class, 'submitGrade'])->name('addgrade.submit');

    Route::delete('/admin/grade/{id}', [GradeController::class, 'deleteGrade'])->name('admingrade.delete');
});