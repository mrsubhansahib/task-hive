<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkspaceController;
use App\Models\User;

//**//**// ( GUEST ) //**//**//
Route::middleware('guest')->controller(AuthController::class)->group(function () {

    //----  ( REGISTRATION )  ----//
    Route::get('/register' , 'create')->name('register');
    Route::post('/register' , 'store');

    //----  ( LOGIN )  ----//
    Route::get('/login' , 'createUser')->name('login');
    Route::post('/login' , 'storeUser');

});

//**//**//  ( AUTH )  //**//*//
Route::middleware('auth')->group(function () {

    //----  ( DASHBOARD )  ----//
    Route::get('/home', function () {
        return view('dashboard');
    })->name('home');

    //----  ( NEW-ACCOUNT )  ----//
    Route::controller(UserController::class)->group(function () {
        //----  ( CREATE )  ----//
        Route::get('/account' , 'create')->name('user.account');
        Route::post('/account', 'store');
        //----  ( LOGOUT )  ----//
        Route::get('/logout', 'logout')->name('user.logout');
    });

    //---- ( PROFILE )  ----//
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile' , 'view')->name('profile.view');
        Route::get('/edit-profile' , 'edit')->name('profile.edit');
        Route::post('/edit-profile' , 'update');
        Route::get('/change-password' , 'changePassword')->name('confirm_password');
        Route::post('/change-password' , 'confirmPassword');
    });

    //---- ( WORKSPACE ) ----//
    Route::controller(WorkspaceController::class)->group(function () {
        Route::get('/workspace' , 'create')->name('workspace.create');
        Route::get('/edit-workspace' , 'edit')->name('workspace.edit');
        Route::post('/edit-workspace' , 'update');
    });

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



