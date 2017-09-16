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

Route::get('/', ['as' => 'home', 'uses' => 'LandingController@index']);
Route::get('/welcome', ['as' => 'welcome', 'uses' => 'LandingController@welcome']);

Route::post('/', ['as' => 'leads.save', 'uses' => 'LandingController@store']);
Route::get('/obrigado', ['as' => 'leads.success', 'uses' => 'LandingController@success']);

