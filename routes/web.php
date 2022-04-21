<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/{any}', function () {
    return view('mainpage');
})->where('any', '.*');

// Auth::routes();

// // Route::get('/home', [HomeController::class, 'index'])->name('home');

// // Admin routes
// Route::prefix('admin')->group(function () {
//     Route::get('/adminHome', [AdminController::class, 'adminHome'])->name('adminHome');
//     Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser');
//     Route::post('/postAddedUser', [AdminController::class, 'postAddedUser'])->name('postAddedUser');
//     Route::get('/showUsers', [AdminController::class, 'showUsers'])->name('showUsers');
//     Route::get('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
//     Route::post('/postUpdatedUser/{id}', [AdminController::class, 'postUpdatedUser'])->name('postUpdatedUser');
//     Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
//     Route::get('/showAddresses', [AdminController::class, 'showAddresses'])->name('showAddresses');
//     Route::get('/updateAddress/{id}', [AdminController::class, 'updateAddress'])->name('updateAddress');
//     Route::post('/postUpdatedAddress/{id}', [AdminController::class, 'postUpdatedAddress'])->name('postUpdatedAddress');
//     Route::get('/deleteAddress/{id}', [AdminController::class, 'deleteAddress'])->name('deleteAddress');
// });

// // User dashboard routes
// Route::prefix('user_dashboard')->group(function () {
//     Route::get('/userHome', [UserDashboardController::class, 'userHome'])->name('userHome');
//     Route::get('/userAddAddress', [UserDashboardController::class, 'userAddAddress'])->name('userAddAddress');
//     Route::post('/postUserAddedAddress', [UserDashboardController::class, 'postUserAddedAddress'])->name('postUserAddedAddress');
//     Route::get('/userUpdateAddress/{id}', [UserDashboardController::class, 'userUpdateAddress'])->name('userUpdateAddress');
//     Route::get('/userShowAddresses', [UserDashboardController::class, 'userShowAddresses'])->name('userShowAddresses');
//     Route::post('/userPostUpdatedAddress/{id}', [UserDashboardController::class, 'userPostUpdatedAddress'])->name('userPostUpdatedAddress');
//     Route::get('/userDeleteAddress/{id}', [UserDashboardController::class, 'userDeleteAddress'])->name('userDeleteAddress');
//     Route::get('/userUpdateProfile', [UserDashboardController::class, 'userUpdateProfile'])->name('userUpdateProfile');
//     Route::post('/userPostUpdatedProfile/{id}', [UserDashboardController::class, 'userPostUpdatedProfile'])->name('userPostUpdatedProfile');

// });

