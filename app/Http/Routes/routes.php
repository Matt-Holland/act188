<?php

Route::get('/', function () {
    return view('welcome');
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

Route::get('frametable-embedded', 'TestController@getEmbeddedFrameTable');
