<?php



Route::get('/', function () {
    return view('welcome');
});
Route::view('/grocery', 'grocery');
Route::post('/grocery/post', 'GroceryController@store');


Auth::routes();

Route::get('/home', 'HomeController@ForAdminindex')->name('home');

Route::get('/home/edit/{edit}', 'HomeController@edit');
Route::post('/home/update/{update}', 'HomeController@update');
Route::post('/home/delete/{delete}', 'HomeController@destroy');

