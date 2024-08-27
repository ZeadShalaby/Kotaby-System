<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

//?start//
// todo group user to login & logout & register //
Route::group(['prefix' =>'users'], function () {

    // todo Login & register
    Route::get('/login', [UsersController::class, 'loginIndex'])->name('loginindex');
    Route::POST('/login/check', [UsersController::class, 'login'])->name('login');
    Route::get('/login/checklogin',function (){redirect(route('logout'));});
    Route::get('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('Auth');
    Route::POST('/regist/create', [UsersController::class, 'register'])->name('register');
    Route::get('/regist', [UsersController::class, 'registerIndex'])->name('registerIndex');
});

//?end//

Route::get('/home', [UsersController::class, 'home'])->name('homeindex');

//?start// must be Authenticate
Route::middleware('Auth')->group(function () {

});
//?end//


//?start// must have role author
Route::middleware('auth.author')->group(function () {
    
});
//?end//


//?start// must have role user
Route::middleware('auth.user')->group(function () {
    
});
//?end//


//?start// must have role admin
Route::middleware('auth.admin')->group(function () {
    
});
//?end//
