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

Auth::routes();
Route::post('/data/spotlight', 'AppController@getSpotlightData');
Route::post('/data/sparql', 'AppController@getSparqlData');
Route::get('/data/sparql', 'AppController@getSparqlNamespaces');
Route::post('/data/rdf', 'AppController@getRdfData');
Route::get('/{any}', 'AppController@index')->where('any', '.*');
