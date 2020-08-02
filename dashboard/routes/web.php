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

Route::get('/', 'LoginController@index')->name('login');

Route::post('/','LoginController@verify');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/nadmin','AdminController@index')->name('admin.index');
	Route::get('/nadmin/form','AdminController@form')->name('admin.form');
	Route::get('/nadmin/network','AdminController@network_index')->name('admin.network');
	Route::post('/nadmin/form','AdminController@create');

	Route::get('/nadmin/csm','AdminController@csm_index')->name('admin.csm');
	Route::get('/nadmin/csm/addproject','AdminController@csm_form')->name('admin.csmform');
	Route::post('/nadmin/csm/addproject','AdminController@csm_form_post');

	Route::get('/nadmin/infra','AdminController@infra_index')->name('admin.infra');
	Route::get('/nadmin/infra/addproject','AdminController@infra_form')->name('admin.infraform');
	Route::post('/nadmin/infra/addproject','AdminController@infra_form_post');

	Route::get('/nadmin/issm','AdminController@issm_index')->name('admin.issm');
	Route::get('/nadmin/issm/addproject','AdminController@issm_form')->name('admin.issmform');
	Route::post('/nadmin/issm/addproject','AdminController@issm_form_post');

	Route::get('/nadmin/application','AdminController@application_index')->name('admin.application');
	Route::get('/nadmin/application/addproject','AdminController@application_add')->name('admin.addproject');
	Route::post('/nadmin/application/addproject','AdminController@addproject');

	Route::get('/nadmin/software','AdminController@software_index')->name('admin.software');
	Route::get('/nadmin/software/addproject','AdminController@software_form')->name('admin.softwareform');
	Route::post('/nadmin/software/addproject','AdminController@software_form_post');

	Route::get('/nadmin/details/{id}/{team}','AdminController@details')->name('admin.details');
    Route::get('/nadmin/from/{id}','AdminController@edit')->name('admin.edit');
    Route::post('/nadmin/from/{id}','AdminController@fedit');

    Route::get('/nadmin/dtails/{id}/{pr}/{pid}/{team}','AdminController@dtails')->name('admin.dtails');
	Route::get('/nadmin/details_add/{id}/{team}','AdminController@add')->name('admin.add');
	Route::post('/nadmin/details_add/{id}/{team}','AdminController@adddetailse');
    Route::get('/nadmin/rollback/{id}/{pr}/{pid}/{team}','AdminController@rollback')->name('admin.rollback');


	});

Route::get('/logout', 'logoutController@index');