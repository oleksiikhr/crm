<?php

// Main page
Route::get('/', 'DashboardController@index');

// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Users
Route::get('profile', 'UserController@profile');
Route::resource('users', 'UserController');

// Logs
Route::get('logs', 'LogController@index');

// Calendar
Route::get('calendar', 'CalendarController@index');

// Axios
Route::get('axios/users.get', 'UserController@getUsers');
Route::get('axios/logs.get', 'LogController@getLogs');
Route::get('axios/calendar.get', 'CalendarController@getCalendar');
