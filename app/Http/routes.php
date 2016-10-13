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

Route::get('/', function () {
    return view('welcome');
    // return ("Hello world");
});

Route::get('contact', 'Controller@contact');

Route::get('showAllProducts', 'TestController@showAllProducts');

Route::get('showTestEntries', 'TestEntryController@index');

Route::get('storeTestEntries', 'TestEntryController@store');

Route::get('upload', ['as' => 'upload', 'uses' => 'uploadFormController@viewForm']);

Route::post('upload_store', ['as' => 'upload_store', 'uses' => 'uploadFormController@receiveUpload']);

Route::get('tester', 'testerController@store');

Route::get('bootstrap', 'Controller@bootstrap');

Route::post('searchtest', 'TestController@doSearch');

Route::get('search', function () {
    return view('searchform');
});

Route::get('showSearch', 'TestController@showSearch');

Route::get('searchtable', 'TestController@searchTable');