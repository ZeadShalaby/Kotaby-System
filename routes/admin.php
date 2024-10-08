<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\DepartmentsController;


//?start//
// todo group admin & name will be admin. name route //
Route::middleware('locale')->prefix('admin')->name('admin.')->group(function () {
    Route::view('/login/index', 'Admin.Auth.login')->name('loginindex'); //! admin.loginindex
    Route::POST('/admin/login', [AdminController::class, 'login'])->name('login');

    //?start// must have role ADMIN
    Route::middleware('Auth', 'auth.admin')->group(function () {
        Route::get('/dashboard/home', [AdminController::class, 'home'])->name('home'); //! admin.loginindex
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

        //? restore departments 
        Route::get('/departments/index', [DepartmentsController::class, 'index'])->name('dep.index');
        Route::get('/departments/books/show/{department}', [DepartmentsController::class, 'show'])->name('dep.book.show');
        Route::get('/departments/show/{department}', [DepartmentsController::class, 'showDep'])->name('dep.show');
        Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('dep.create');
        Route::POST('/departments/store', [DepartmentsController::class, 'store'])->name('dep.store');
        Route::get('/departments/edit/{department}', [DepartmentsController::class, 'edit'])->name('dep.edit');
        Route::PUT('/departments/Update/{department}', [DepartmentsController::class, 'update'])->name('dep.update');
        Route::DELETE('/destroy/deapartments/{department}', [DepartmentsController::class, 'destroy'])->name('dep.destroy');
        Route::DELETE('/destroy/finally/deapartments/{department}', [DepartmentsController::class, 'destroyForce'])->name('dep.destroy.force');
        Route::get('/restore/index', [DepartmentsController::class, 'restoreindex'])->name('dep.trash');
        Route::get('/restore', [DepartmentsController::class, 'restore'])->name('dep.restore');
        Route::DELETE('/destroy/Force', [DepartmentsController::class, 'destroyForce'])->name('destroy.Force');

        //? report books 
        Route::get('/report/books', [BooksController::class, 'reportindex'])->name('report.index');
        Route::get('/refused/report/{book}', [BooksController::class, 'report'])->name('refused.report');
        Route::DELETE('/destroy/books/{book}', [BooksController::class, 'destroy'])->name('destroy.report');

        Route::get('/report/authors', [AdminController::class, 'reportauthor'])->name('report.author.index');
        Route::get('/refused/report/authors/{user}', [AdminController::class, 'reauthor'])->name('refused.author.report');
        Route::DELETE('/destroy/authors/{user}', [AdminController::class, 'authordestroy'])->name('destroy.author');

        Route::get('/report/reviews', [BooksController::class, 'reportreview'])->name('report.review.index');
        Route::get('/refused/report/reviews/{review}', [BooksController::class, 'rereview'])->name('refused.report.review');
        Route::DELETE('/destroy/reviews/{review}', [BooksController::class, 'reviewdestroy'])->name('destroy.review');

    });
    //?end//
    Route::get('/lang/{lang}', [LanguageController::class, 'change'])->name('lang.change');

});

