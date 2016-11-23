<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/lang/{locale}', function ($locale) {
    if(in_array($locale, ['ru', 'en'])) Session::put('language', $locale);
    return redirect()->back();
})->name('lang.set-locale');

Route::get('/', 'Site\MainPageController@index')->name('main.index');

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin.index');
	Route::resource('documents', 'Admin\DocumentController');
	Route::resource('categories', 'Admin\CategoryController');
	Route::delete('destroySource/{id}', 'Admin\DocumentController@destroySource')->name('sources.destroy');
});