<?php

Route::get('/', 'AsoController@preAso')->name('home');

Route::post('/aso', 'AsoController@postAso')->name('aso');
