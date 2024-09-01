<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Social\SocialController;

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

//? admin routes
require __DIR__ . '/admin.php';

Route::get('/', function () {
    return view('welcome');
});

//?start//
// todo group user to login & logout & register //
Route::prefix('users')->name('users.')->group(function (){

    // todo Login & register
    Route::get('/login', [UsersController::class, 'loginIndex'])->name('loginindex');
    Route::POST('/login/check', [UsersController::class, 'login'])->name('login');
    Route::get('/login/checklogin',function (){redirect(route('logout'));});
    Route::get('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('Auth');
    Route::POST('/regist/create', [UsersController::class, 'register'])->name('register');
    Route::get('/regist', [UsersController::class, 'registerIndex'])->name('registindex');
    Route::view('/forget/password', 'Auth.Users.forget-pass')->name('forgetpass');
    Route::POST('/forget/password', [UsersController::class, 'forget'])->name('forget.pass');
    Route::get('/resend/code', [UsersController::class, 'resend'])->name('resend.code');
    Route::POST('/verfiy/code', [UsersController::class, 'codeverify'])->name('verify.code');
    Route::view('/re-send/code','Auth.Users.verfiy-code')->name('verfiyindex'); 
    Route::PUT('/edit/password/{user}', [UsersController::class, 'Updatepass'])->name('edit.pass');

});

//?end//

//? login with social account 

    //? login with social
    Route::get('/redirect/{service}',[SocialController::class,'redirect'])->name('social-service');
    //? callback google
    Route::get('/auth/google/callback',[SocialController::class,'Googlecallback'])->name('googleservice');
    //? callback githup 
    Route::get('/auth/github/callback',[SocialController::class,'Githubcallback'])->name('githubservice'); 



//?start// must be Authenticate
Route::middleware('Auth','verified')->group(function () {
    Route::get('/home', [UsersController::class, 'home'])->name('homeindex');
    Route::get('/common/books', [UsersController::class, 'common'])->name('commonindex');
    Route::get('/edit-user/{user}', [UsersController::class, 'edit'])->name('users.edit');
    Route::PUT('/edit-user/{user}', [UsersController::class, 'update'])->name('users.update');
    Route::view('/new/book','Auth.Books.add-book')->name('bookindex'); 
    Route::get('/show/book',[BooksController::class, 'show'])->name('books.show'); 
    Route::get('/users/profile',[UsersController::class, 'index'])->name('users.index'); 
    Route::get('/users/authors',[UsersController::class, 'authors'])->name('users.authors'); 
    Route::get('/departments/index',[UsersController::class, 'depIndex'])->name('dep.index'); 
});
//?end//

Route::get('/verfiy/email/{user}', [UsersController::class, 'verfiy'])->name('verifyEmail');

//?start// must have role author
Route::middleware('Auth','auth.author')->group(function () {
});
//?end//


//?start// must have role user
Route::middleware('Auth','auth.user')->group(function () {
    
});
//?end//
