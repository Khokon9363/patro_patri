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
Route::get('/customer_register','FrontEndController@register')->name('/customer_register');
Route::get('/customer_login','FrontEndController@login')->name('/customer_login');
Route::get('/about','FrontEndController@about')->name('/about');
Route::get('/service-details/{id}','FrontEndController@serviceDetails');
Route::get('/services/{id}','FrontEndController@servicesDetails');
Route::get('/offers/{id}','FrontEndController@offersDetails');
Route::get('/gallery-details/{id}','FrontEndController@solutionsDetails');
Route::get('/solution-detail/{id}','FrontEndController@solutionDetails');

Auth::routes(['register'=>true]);

Route::prefix('admin')->group(function () {

    Route::get('/dashboard','HomeController@index');
    Route::get('/manage-service','HomeController@services');
    Route::post('/service/store','HomeController@serviceStore');
    Route::get('/service/delete/{service}','HomeController@serviceDelete');
    Route::get('/manage-offer','HomeController@offers');
    Route::post('/offer/store','HomeController@offerStore');
    Route::get('/offer/delete/{id}','HomeController@offerDelete');
    Route::get('/manage-gallery-bride','HomeController@brideGallery');
    Route::post('/bride/store','HomeController@brideStore');
    Route::get('/bride/delete/{id}','HomeController@brideDelete');
    Route::get('/manage-gallery-groom','HomeController@groomGallery');
    Route::post('/groom/store','HomeController@groomStore');

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
