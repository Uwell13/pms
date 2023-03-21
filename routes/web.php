<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Inventory\exitingdata\GroupController as ExitingdataGroupController;
use App\Http\Controllers\Inventory\exitingdata\IndexController;
use App\Http\Controllers\Inventory\exitingdata\MainGroupController as ExitingdataMainGroupController;
use App\Http\Controllers\Inventory\exitingdata\SubGroupController as ExitingdataSubGroupController;
use App\Http\Controllers\Inventory\GroupController;
use App\Http\Controllers\Inventory\MainGroupController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('exitingdata', IndexController::class);
    Route::resource('maingroup', ExitingdataMainGroupController::class);
    Route::resource('group', ExitingdataGroupController::class);
    Route::resource('subgroup', ExitingdataSubGroupController::class);

});
