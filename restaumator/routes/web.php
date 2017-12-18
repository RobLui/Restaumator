<?php

Auth::routes();

Route::get('/', 'ProductpageController@index')
    ->name('productpage')
    ;

Route::get('/home', 'HomeController@index')
    ->name('home')
    ;

Route::get('/dashboard', 'DashboardController@index')
    ->middleware('auth')
    ->name('dashboard')
    ;

Route::get('/statistics', 'StatisticsController@index')
    ->middleware('auth')
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

Route::get('/setdrinkiconfortable/{tableid}/restaurant/{restaurantid}/hash/{hash}', 'Handler@SetDrinkIconForTable')
    ->name('setdrinkicon')
;

Route::get('/setbilliconfortable/{tableid}/restaurant/{restaurantid}/hash/{hash}', 'Handler@SetBillIconForTable')
    ->name('setbillicon')
;
