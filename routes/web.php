<?php

use App\Http\Controllers\AddressController;
use App\Models\Series;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\UserHomepageController;
use App\Http\Controllers\UserOrderHistory;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserProductInfoController;
use App\Http\Controllers\UserProductPageController;
use App\Http\Controllers\UserProfileController;

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


// User Page 
Route::get('/', [UserHomepageController::class, 'index'])->name('home');

//Login Register
Route::get('/register', [UserRegisterController::class, 'index'])->name('register');

Route::post('/register', [UserRegisterController::class, 'registerUser'])->name('register.submit');

Route::get('/login', [UserLoginController::class, 'index'])->name('login');

Route::post('/login', [UserLoginController::class, 'authenticate'])->name('login.submit');

//Product Page
Route::get('/productPage', [UserProductPageController::class, 'index'])->name('productpage.index');

Route::get('/productPage/filter', [UserProductPageController::class, 'filter'])->name('gunpla.filter');

Route::get('/productPage/{grade}', [UserProductPageController::class, 'filterByGrade'])->name('gunpla.filterbygrade');

//Product Info
Route::middleware(['auth.check'])->group(function () {
    Route::get('/productInfo/{id}', [UserProductInfoController::class, 'index'])->name('productinfo.index');

    Route::get('/search', [UserProductPageController::class, 'search'])->name('search');

    Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout_user');

    Route::get('/cart/{id}', [CartController::class, 'index'])->name('opencart');

    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

    Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');

    Route::post('/cart/order', [CartController::class, 'confirmOrder'])->name('cart.order');

    Route::get('/profile', [UserProfileController::class, 'index'])->name('openprofile');

    Route::put('/profile/update', [UserProfileController::class, 'updateProfile'])->name('profile.update');

    Route::get('/address', [AddressController::class, 'index'])->name('openaddress');

    Route::post('/address/store', [AddressController::class, 'store'])->name('address.store');

    Route::get('/orderhistory', [UserOrderHistory::class, 'index'])->name('openhistory');
});






// Admin Page
Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('loginadmin.index');

Route::post('/admin/login', [LoginAdminController::class, 'authenticate'])->name('admin.authenticate');

Route::post('/admin', [LoginAdminController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {

    Route::get('/admin', function () {
        if (Auth::check()){
            $user = Auth::user();
            return view('admin/dashboard', compact('user'));   
        }
        return redirect('login');
    })->name('admindashboard');
    
    //User Panel Route
    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('adminuser.index');

    Route::get('/admin/user/add', [AdminUserController::class, 'openAdd'])->name('adduser.open');

    Route::post('/admin/user/add', [AdminUserController::class, 'store'])->name('admin.user.store');

    Route::get('admin/user/edit/{userid}', [AdminUserController::class, 'openEdit'])->name('edituser.open');

    Route::put('/admin/user/update/{userid}', [AdminUserController::class, 'updateUser'])->name('adminuser.update');

    Route::delete('/admin/user/{id}', [AdminUserController::class, 'deleteUser'])->name('adminuser.delete');

    //Grade Panel Route
    Route::get('admin/grade', [GradeController::class, 'index'])->name('grade.index');

    Route::get('admin/grade/add', [GradeController::class, 'openAdd'])->name('addgrade.open');

    Route::post('admin/grade/add', [GradeController::class, 'submitGrade'])->name('addgrade.submit');

    Route::delete('/admin/grade/{id}', [GradeController::class, 'deleteGrade'])->name('admingrade.delete');

    //Series Panel Route
    Route::get('admin/series', [SeriesController::class, 'index'])->name('series.index');

    Route::get('admin/series/add', [SeriesController::class, 'openAdd'])->name('addseries.open');

    Route::get('admin/series/edit/{seriesid}', [SeriesController::class, 'openEdit'])->name('editseries.open');

    Route::post('admin/series/add', [SeriesController::class, 'addSeries'])->name('series.add');

    Route::put('admin/series/edit/{seriesid}', [SeriesController::class, 'editSeries'])->name('series.edit');

    Route::delete('admin/series/{seriesid}', [SeriesController::class, 'deleteSeries'])->name('series.delete');

    //Product Panel Route
    Route::get('admin/product', [ProductController::class, 'index'])->name('product.index');
    
    Route::get('admin/product/add', [ProductController::class, 'openAdd'])->name('addproduct.open');

    Route::post('admin/product/add', [ProductController::class, 'addGunpla'])->name('addproduct.submit');

    Route::delete('admin/product/{seriesid}', [ProductController::class, 'deleteGunpla'])->name('gunpla.delete');

    Route::get('admin/product/edit/{gunplaid}', [ProductController::class, 'openEdit'])->name('editproduct.open');

    Route::put('admin/product/edit/{gunplaid}', [ProductController::class, 'editGunpla'])->name('editproduct.submit');

    Route::get('admin/product/edit/picture/{gunplaid}', [ProductController::class, 'openPicture'])->name('gunplapicture.open');

    Route::post('admin/product/edit/picture/{gunplaid}', [ProductController::class, 'uploadPicture'])->name('gunplapicture.upload');

    Route::delete('admin/product/edit/picture/{gunplaid}/{imageid}', [ProductController::class, 'deletePicture'])->name('gunplapicture.delete');

    //Order History Panel Route
    Route::get('admin/orderhistory', [OrderHistoryController::class, 'index'])->name('orderhistory.index');

    Route::post('/orderhistory/{id}/update-status', [OrderHistoryController::class, 'updateStatus'])->name('orderhistory.updateStatus');

    //Admin Banner Controller
    Route::get('admin/bannercontroll', [AdminBannerController::class, 'index'])->name('bannercontroller.index');

    Route::post('admin/bannercontroll/add', [AdminBannerController::class, 'addBanner'])->name('banner.add');

    Route::delete('admin/bannercontroll/{id}', [AdminBannerController::class, 'deleteBanner'])->name('deletebanner');
});