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

Route::get('/','FrontEndController@frontEnd')->name('/');
Route::get('customer_register','FrontEndController@register');
Route::get('customer_login','FrontEndController@login')->name('customer_login');

Auth::routes(['register'=>true]);

Route::prefix('admin')->group(function () {

    Route::get('/dashboard','HomeController@index');
    Route::get('/profile','HomeController@profile');
    Route::post('update/profile','HomeController@update');
    Route::get('/manage_mainmenu','MainMenuController@show');
    Route::get('/manage_submenu','SubMenuController@show');
    Route::get('/manage_submenu_two','SubMenuTwoController@show');
    Route::get('/manage_slider','SliderController@show');
    Route::get('/manage_testimonials','TestimonialController@show');
    Route::get('/manage_social','SocialMediaController@show');
    Route::post('saveSocial','SocialMediaController@store');
    Route::post('store/slider','SliderController@store');
    Route::get('/delete/slider/{id}','SliderController@destroy');
    Route::post('update/main_menu','MainMenuController@update');
    Route::post('store/sub_menu','SubMenuController@store');
    Route::get('delete/sub_menu/{id}','SubMenuController@destroy');
    Route::post('store/sub_menu_two','SubMenuTwoController@store');
    Route::post('delete/sub_menu_two/{id}','SubMenuTwoController@destroy');

});