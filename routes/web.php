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
});

//?end//

// //? login with social account 
// Route::group(['prefix' =>''], function () {

// //? login with social
// Route::get('/redirect/{service}',[ServiceController::class,'redirect']);
// //? callback google
// Route::get('/Kotaby-System/google/callback',[ServiceController::class,'googlecallback'])->name('googleservice');
// //? callback githup 
// Route::get('/Kotaby-System/github/callback',[ServiceController::class,'githubcallback'])->name('githubservice'); 

// });


//?start// must be Authenticate
Route::middleware('Auth')->group(function () {
    Route::get('/home', [UsersController::class, 'home'])->name('homeindex');
    Route::get('/edit-user/{user}', [UsersController::class, 'edit'])->name('users.edit');
    Route::view('/new/book','Author.add-book')->name('bookindex'); 

});
//?end//


//?start// must have role author
Route::middleware('Auth','auth.author')->group(function () {
});
//?end//


//?start// must have role user
Route::middleware('Auth','auth.user')->group(function () {
    
});
//?end//
