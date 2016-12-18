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
	Route::post('/contacts', 'Site\ContactsController@sendEmail')->name('contacts.sendEmail');

Route::get('/contacts', 'Site\ContactsController@index')->name('contacts.index');
Route::get('/about', 'Site\AboutController@index')->name('about.index');
Route::get('/3d', 'Site\ThreeController@index')->name('3d.index');
Route::get('/search', 'Site\SearchController@index')->name('search.index');
Route::resource('resource',  'Site\ResourceController', ['only' => ['show', 'index'], 'middleware' => ['checkPermission:museum_employee']]);

Auth::routes();

Route::group(['middleware' => ['auth', 'checkPermission:museum_employee'], 'prefix' => 'admin'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin.index');
	Route::resource('documents', 'Admin\DocumentController');
	Route::resource('aboutadmin', 'Admin\AboutController', ['only' => ['show', 'edit', 'update']]);
	Route::resource('contactadmin', 'Admin\ContactController', ['only' => ['show', 'edit', 'update']]);
	Route::resource('adminuser', 'Admin\UserController', ['only' => ['index', 'update', 'destroy']]);
	Route::resource('categories', 'Admin\CategoryController');
	Route::delete('destroySource/{id}', 'Admin\DocumentController@destroySource')->name('sources.destroy');
	Route::post('uploadImage', 'Admin\MainController@uploadImage')->name('uploadImage');
});