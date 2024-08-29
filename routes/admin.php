<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


//?start//
// todo group admin & name will be admin. name route //
Route::prefix('admin')->name('admin.')->group(function (){
    Route::view('/login/index','Admin.Auth.login')->name('loginindex'); //! admin.loginindex
    Route::POST('/admin/login', [AdminController::class, 'login'])->name('login');  

    //?start// must have role ADMIN
    Route::middleware('Auth','auth.admin')->group(function () {
        Route::view('/dashboard/home','Admin.home')->name('home'); //! admin.loginindex
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');  

    });
    //?end//

});

