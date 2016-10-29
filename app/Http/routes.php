<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
    
});*/
Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');

Route::post('/feedback', 'IndexController@feedback');
Route::post('/applink', 'IndexController@applink');
Route::get('/contactus','IndexController@contactus');
Route::get('/privacy','IndexController@privacy');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'Admin\IndexController@index');
//Route::get('/admin/createpage', 'Admin\IndexController@createpage');

Route::get('/admin/createpage', function () {
    return view('admin.createpage');
    
});
Route::get('/admin/editpage/id/{id}', 'Admin\IndexController@editpage');
Route::post('/admin/savepage', 'Admin\IndexController@savepage');
Route::post('/admin/updatepage', 'Admin\IndexController@updatepage');
Route::get('/admin/listing', 'Admin\IndexController@listing');

Route::get('/admin/preferences', 'Admin\PreferencesController@index');
Route::post('/admin/preferences/updatepreferences', 'Admin\PreferencesController@updatepreferences');



Route::get('/admin/services/create', function () {
    return view('admin.createservices');
    
});
Route::get('/admin/services/edit/id/{id}', 'Admin\ServicesController@edit');
Route::post('/admin/services/save', 'Admin\ServicesController@save');
Route::post('/admin/services/update', 'Admin\ServicesController@update');
Route::get('/admin/services', 'Admin\ServicesController@index');




Route::get('/admin/manufactures/create', function () {
    return view('admin.createmanufactures');
    
});
Route::get('/admin/manufactures/edit/id/{id}', 'Admin\ManufacturesController@edit');
Route::post('/admin/manufactures/save', 'Admin\ManufacturesController@save');
Route::post('/admin/manufactures/update', 'Admin\ManufacturesController@update');
Route::get('/admin/manufactures', 'Admin\ManufacturesController@index');



Route::get('/admin/testimonial/create', function () {
    return view('admin.createtestimonial');
    
});
Route::get('/admin/testimonial/edit/id/{id}', 'Admin\TestimonialController@edit');
Route::post('/admin/testimonial/save', 'Admin\TestimonialController@save');
Route::post('/admin/testimonial/update', 'Admin\TestimonialController@update');
Route::get('/admin/testimonial', 'Admin\TestimonialController@index');






Route::get('/admin/applicationfeature/create', function () {
    return view('admin.createapplicationfeature');
    
});
Route::get('/admin/applicationfeature/edit/id/{id}', 'Admin\ApplicationfeatureController@edit');
Route::post('/admin/applicationfeature/save', 'Admin\ApplicationfeatureController@save');
Route::post('/admin/applicationfeature/update', 'Admin\ApplicationfeatureController@update');
Route::get('/admin/applicationfeature', 'Admin\ApplicationfeatureController@index');




Route::get('/admin/generalservices/create', function () {
    return view('admin.creategeneralservices');
    
});
Route::get('/admin/generalservices/edit/id/{id}', 'Admin\GeneralservicesController@edit');
Route::post('/admin/generalservices/save', 'Admin\GeneralservicesController@save');
Route::post('/admin/generalservices/update', 'Admin\GeneralservicesController@update');
Route::get('/admin/generalservices', 'Admin\GeneralservicesController@index');



Route::get('/getdata', 'ApiController@getdata');