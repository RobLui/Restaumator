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
    ->name('activate_table')
    ;

Route::post('/settabletononactive', 'Handler@SetTableNonActive')
    ->name('deactivate_table')
    ;

Route::post('/checkifsomethinghappend', 'Handler@CheckIfSomeThingHappend')
    ->name('checker')
    ;

Route::post('/checkifsomethinghappend', 'Handler@CheckIfSomeThingHappend')
;