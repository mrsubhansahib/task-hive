<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\profile\ProfileController;
use App\Models\User;

//**//**// ( GUEST ) //**//**//
Route::middleware('guest')->group(function () {

    //----  ( REGISTRATION )  ----//
    Route::get('/register' , [RegisterController::class, 'createRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'storeRegister']);

    //----  ( LOGIN )  ----//
    Route::get('/login' , [LoginController::class, 'createLogin'])->name('login');
    Route::post('/login' , [LoginController::class, 'storeLogin']);

});

//**//**//  ( AUTH )  //**//*//
Route::middleware('auth')->group(function () {

    //----  ( DASHBOARD )  ----//
    Route::get('/home', function () {return view('dashboard');})->name('home');

    //----  ( NEW-ACCOUNT )  ----//
    Route::get('/account' , [RegisterController::class, 'createAccount'])->name('Account');
    Route::post('/account', [RegisterController::class, 'storeAccount']);

    //----  ( USER-LOGIN )  ----//
    Route::get('/user-login' , [LoginController::class, 'createUserLogin'])->name('user-login');
    Route::post('/user-login' , [LoginController::class, 'storeUserLogin']);

    //---- ( PROFILE )  ----//
    Route::get('/profile' , [ProfileController::class, 'viewProfile'])->name('profile');
    Route::get('/edit-profile' , [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::post('/edit-profile' , [ProfileController::class, 'updateProfile'])->name('update-profile');
    Route::get('/change-password' , [ProfileController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password' , [ProfileController::class, 'confirmPassword']);

    //----  ( LOGOUT )  ----//
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/user-profile' , function(){
    return view('pages.auth.user-profile');
});
Route::get('/project' , function(){
    return view('pages.project.project');
});
Route::get('/new-project' , function(){
    return view('pages.project.new-project');
});
Route::get('/project-details' , function(){
    return view('pages.project.project-details');
});
Route::get('/client' , function(){
    return view('pages.clients.client-details');
});
Route::get('/client-manage' , function(){
    return view('pages.clients.manage-client');
});
Route::get('/board' , function(){
    return view('pages.board.board');
});
Route::get('/calendar' , function(){
    return view('pages.calendar.calendar');
});
Route::get('/message' , function(){
    return view('pages.message.message');
});
Route::get('/component' , function(){
    return view('pages.components.chart-apex');
});

});



