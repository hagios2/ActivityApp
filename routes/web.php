<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* auth routes  */

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'Auth\LoginController@authenticate');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

/* end auth routes */


/*  */

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/create-activity', 'ActivityController@createActivity');

Route::post('/create-activity', 'ActivityController@storeActivity');

#this route return query response to be populated in the view

Route::get('/view-activity', 'ActivityController@viewAllDailyActivity'); 

#this return the view

Route::get('/view-daily-activity', 'ActivityController@viewActivityLog');

Route::get('/view/{activity}/details', 'ActivityController@viewActivityHistory');

Route::fallback(function () {
    
    return view('starpages.404');
});




/* 
*
* Routes for SuperAdmin
*/
Route::get('/add-new-member', 'SuperAdminController@addNewMember')->name('new.member');