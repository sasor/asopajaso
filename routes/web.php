<?php

Route::get('/', 'AsoController@preAso')->name('home');

Route::post('/aso', 'AsoController@postAso')->name('aso');
Route::post('/start', 'AsoController@start')->name('aso.start');
Route::post('/stop', 'AsoController@stop')->name('aso.stop');
Route::post('/restart', 'AsoController@restart')->name('aso.restart');
