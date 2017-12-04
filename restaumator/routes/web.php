<?php

Auth::routes();

Route::get('/', 'ProductpageController@index')
    ->name('productpage')
;

Route::get('/home', 'HomeController@index')
    ->name('home')
;

Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard')
;

Route::get('/statistics', 'StatisticsController@index')
    ->name('statistics')
;

Route::post('/settabletoactive', 'Handler@SetTableActive')
;