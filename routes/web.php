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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/create', 'StaffController@index');
Route::post('add_staff', 'StaffController@addStaff');
Route::get('delete_staff_{id}', 'StaffController@deleteStaff');

Route::get('update_staff_{id}', 'StaffController@getUpdateStaff');
Route::post('update_staff_details', 'StaffController@updateStaff');

//view the details of staff
Route::get('view_staff_{id}', 'StaffController@viewStaffDetails');
Route::get('assign_task_{id}', 'StaffController@assignTask');

Route::post('add_task', 'StaffController@assignStaffTask');



