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
Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('expense-sheet', 'ExpenseController@expenses')->name('expense-sheet');
Route::post('/add-expense', 'ExpenseController@addexpense')->name('add-expense');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', 'PagesController@profile')->name('profile');
Route::get('allusers', 'PagesController@allusers')->name('allusers');
Route::get('user/{user_id}', 'PagesController@singleUser')->name('user');
Route::post('editprofile', 'PagesController@editprofile')->name('editprofile');
Route::post('submitComment', 'PagesController@submitComment')->name('submitComment');
Route::post('replysubmitComment', 'PagesController@replysubmitComment')->name('replysubmitComment');
