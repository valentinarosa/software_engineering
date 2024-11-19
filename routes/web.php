<?php

use Illuminate\Support\Facades\Route;

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Login2', function () {
    return view('Login2');
});


Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');


#Route::get('/', function () {
    #return view('welcome');
#});
