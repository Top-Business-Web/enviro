<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');

    #### About Us ####
    Route::resource('about_us','AboutUsController');

    #### Career ####
    Route::resource('careers','CareerController');

    #### Category ####
    Route::resource('categories','CategoryController');

    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');

});










