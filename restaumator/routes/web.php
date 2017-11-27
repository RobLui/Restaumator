<?php

Route::get('/', 'ProductpageController@index')
    ->name('productpage')
;

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
;

Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard')
;

Route::get('/statistics', 'StatisticsController@index')
    ->name('statics')
;