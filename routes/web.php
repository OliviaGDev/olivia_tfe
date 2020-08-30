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


Route::view('/', 'auth/login');
Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::redirect('/', '/home');
    Route::get('/home', 'EstimateController@index')->name('home');

    // Clients
    Route::get('/clients/search', 'ClientController@search')->name('clients.search');

    Route::resource('clients','ClientController');

    // Route::get('/clients', 'ClientController@index')->name('clients.index');
    // Route::get('/clients/create', 'ClientController@create')->name('clients.create');
    // Route::post('/clients', 'ClientController@store')->name('clients.store');
    Route::get('/clients/{id}/edit', 'ClientController@edit')->name('clients.edit');
    Route::post('/clients/update', 'ClientController@update')->name('clients.update');
    // Route::delete('/clients/{id}', 'ClientController@destroy')->name('clients.destroy');




    // Estimates
    Route::resource('estimates','EstimateController');

    Route::get('/estimateStreamPDF/{id}','EstimateController@estimateStreamPDF');

    Route::get('/estimateDownloadPDF/{id}','EstimateController@estimateDownloadPDF');

    Route::get('/estimate/edit/{id}', 'EstimateController@edit')->name('estimate.edit');

    Route::post('/estimate/update', 'EstimateController@update');

    // Users
    Route::resource('users','UserController');

    // Modules
    Route::resource('modules','ModuleController');

    Route::get('/module/insert', 'ModuleController@moduleInsert')->name('module.insert');

    Route::put('/module/{id}', 'ModuleController@ajaxAdded')->name('ajax.added');

    Route::get('/moduleDownloadPDF/{id}','ModuleController@moduleDownloadPDF');

});
