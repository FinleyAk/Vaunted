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


Route::get('/', 'RouteController@index')->name('index');

Route::prefix('documentation')->group(function () {
    Route::get('/', 'DocsController@index')->name('docs_index');
    Route::get('/global', 'DocsController@global');
    Route::get('/converter', 'DocsController@converter');
    Route::get('/vaunted', 'DocsController@vaunted');
    Route::get('/vauntedCommand', 'DocsController@vauntedCommand');
    });
