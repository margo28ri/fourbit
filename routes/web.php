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

Route::get('/', 'SearchController@welcomePage');
Route::get('/interships', 'Searchcontroller@getInterships');

Route::get('/interships', function (){
    $interships = DB::table('internships')->get();
    return view('interships.index', compact('interships'));
});

Route::get('/interships/{intership}', function ($id) {
    $intership = DB::table('internships')->find($id);
    return view('interships.show', compact('intership'));
});