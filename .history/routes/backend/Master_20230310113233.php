<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('master', 'MasterController@index')->name('master');
Route::post('simpanBAB', 'MasterController@index')->name('master');
Route::post('simpanEP', 'MasterController@index')->name('master');
