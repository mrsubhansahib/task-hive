<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/login' , function(){
    return view('pages.auth.user-login');
});
Route::get('/account' , function(){
    return view('pages.auth.new-account');
});
Route::get('/profile' , function(){
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
