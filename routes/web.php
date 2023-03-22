<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ship\ShipController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('ship', ShipController::class);
    Route::resource('profile', ProfileController::class);
    Route::get('/ship/{uuid}/selected', function ($uuid) {
        session()->put('ship_uuid', $uuid);
        // dd(session());
        return redirect('/');
    });
    Route::get('/change/ship', function () {
        session()->forget('ship_uuid');
        // dd(session());
        return redirect('/');
    });
});
