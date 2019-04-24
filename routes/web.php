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



Auth::routes();
Route::post('set-status','backend\SliderController@setStatus')->name('setStatus');

Route::get('/universty', 'HomeController@index')->name('universty');

Route::get('/','frontend\SiteController@index')->name('index');
Route::get('/university ','frontend\SiteController@universty')->name('universty');
Route::get('/universitydetail','frontend\SiteController@universitydetail')->name('universitydetail');
Route::get('/about','frontend\SiteController@about')->name('about');
Route::get('/contact','frontend\SiteController@contact')->name('contact');
Route::get('/ajax-set','frontend\SiteController@set')->name('set');
Route::get('/ajax-set1','frontend\SiteController@set1')->name('set1');
Route::get('/ajax-set2','frontend\SiteController@set2')->name('set2');
Route::get('/ajax-set3','frontend\SiteController@set3')->name('set3');

Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){
    Route::delete('/sliderimg{image}','backend\ProjectController@sliderimg')->name('sliderimg');
    Route::delete('/homeimg{image}','backend\HomeController@homeimg')->name('homeimg');
    Route::post('/sliderupload','backend\ProjectController@sliderupload')->name('sliderupload');
    Route::post('/homeupload','backend\HomeController@homeupload')->name('homeupload');

    Route::resources([
        'slider' => 'backend\SliderController',
        'country' => 'backend\CountryController',
        'universty' => 'backend\UniversitetController',
        'partner' => 'backend\PartnerController',
        'video' => 'backend\VideoController',
    ]);
});