<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Q2
Route::get('/record-transfer', 'RecordTransferController@index');

// Q3
Route::get('/define-callback-js', 'CallbackController@index');

// Q4
Route::get('/sort-js', 'ArrayController@sort');
Route::get('/foreach-js', 'ArrayController@foreach');
Route::get('/filter-js', 'ArrayController@filter');
Route::get('/map-js', 'ArrayController@map');
Route::get('/reduce-js', 'ArrayController@reduce');

// Q5

Route::get('animation', 'AnimationController@index');
