<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/niloy', function () {
//     return view('niloy');
// });
// Route::get('/menu', function () {
//     return view('niloyMenu');
// });

// Route::get('/temp', function () {
//     return view('templates.index');

// });

// Route::get('/home', function () {
//     return view('templates.home');
// });

// Route::get('/about', function () {
//     return view('templates.about');
// });

// Route::get('/blog', function () {
//     return view('templates.blog');
// });

// Route::get('/contact', function () {
//     return view('templates.contact');
// });

// Route::get('/service', function () {
//     return view('templates.service');
// });
Route::get( '/', function () {
    return view( 'temp2.index' );
} );

Route::get( '/home', function () {
    return view( 'temp2.home' );
} );

Route::get( '/reg', 'App\Http\Controllers\tempController@create' )->name( 'reg' );

Route::get( '/tables', 'App\Http\Controllers\tempController@index' )->name( 'tables' );

Route::post( '/store', 'App\Http\Controllers\tempController@store' );

Route::get( '/delete/{id}', 'App\Http\Controllers\tempController@destroy' )->name( 'delete' );

Route::get( '/edit/{id}', 'App\Http\Controllers\tempController@edit' )->name( 'edit' );

Route::post( '/update/{id}', 'App\Http\Controllers\tempController@update' );

Route::get( '/teachersReg', 'App\Http\Controllers\teachersController@create' )->name( 'teachersReg' );

Route::post( '/teachers_store', 'App\Http\Controllers\teachersController@store' );

Route::get( '/join', 'App\Http\Controllers\teachersController@index' )->name( 'join' );

Route::get( '/alldelete/{id}', 'App\Http\Controllers\teachersController@destroy' )->name( 'alldelete' );
