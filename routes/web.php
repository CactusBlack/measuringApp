<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('home');
});

Route::get( '/male', 'MaleController@index' )->name( 'male.index' );
Route::post('/new-male', 'MaleController@store')->name( 'male.store' );


Route::get( '/female', 'FemaleController@index' )->name( 'female.index' );

Route::post( '/customer', 'CustomerController@store')->name( 'customer.store' );
