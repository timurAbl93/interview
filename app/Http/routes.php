<?php

Route::get('/', 'HomeController@getIndex');
Route::post('/test/{id}', 'HomeController@postIndex');
Route::get('/test/{id}', 'HomeController@getTest')->where(['id' => '[0-9]+']);
Route::get('/reg', 'UserController@getReg');
Route::post('/reg', 'UserController@create');
Route::post('/', 'UserController@login');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->back();
});

