<?php

Route::group(['prefix' => ''], function() {
    Route::get('/', function() {
        return view('pages.home');
    });

    Route::resource('tours', 'ToursController');
});
