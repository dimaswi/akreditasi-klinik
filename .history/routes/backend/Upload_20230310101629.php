<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('upload', 'UploadController@index')->name('upload');
Route::post('simpanDokumen', [FileController::class, 'store']);
