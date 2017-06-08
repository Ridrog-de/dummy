<?php

Route::get('dummy-route', function(){
    return "The Routes are loaded";
})->name('dummy-string-route');

Route::group(['middleware' => 'web', 'namespace' => 'Ridrog\Dummy\Http\Controllers'], function () {
    Route::get('/dummy-controller', 'DummyController@test')->name('dummy-controller-route');
});

Route::get('dummy-view', function(){
    return view('dummy::example');
})->name('dummy-view-route');

Route::get('dummy-translation', function(){
    return trans('dummy::example.message');
})->name('dummy-translation-route');
