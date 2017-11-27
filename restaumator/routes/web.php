<?php

Route::get('/', 'ProductpageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('home');
