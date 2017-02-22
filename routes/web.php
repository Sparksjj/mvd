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
Route::get('/device1', function(){
	return view('site.devices.device1');
});
Route::resource('resource',  'Site\ResourceController', ['only' => ['show', 'index']]);

Auth::routes();


Route::group(['middleware' => ['auth', 'checkPermission:museum_device']], function () {

	Route::resource('memory_book',  'Site\BookController', ['only' => ['show', 'index']]);
	Route::resource('projectors',  'Site\ProjectorController', ['only' => ['show', 'index']]);
	Route::resource('articles',  'Site\ArticlesController', ['only' => ['show', 'index']]);

});

Route::group(['middleware' => ['auth', 'checkPermission:museum_employee'], 'prefix' => 'admin'], function () {
	Route::get('/', 'Admin\MainController@index')->name('admin.index');
	Route::resource('documents', 'Admin\DocumentController');
	Route::resource('aboutadmin', 'Admin\AboutController', ['only' => ['show', 'edit', 'update']]);
	Route::resource('contactadmin', 'Admin\ContactController', ['only' => ['show', 'edit', 'update']]);
	Route::resource('adminuser', 'Admin\UserController', ['only' => ['index', 'update', 'destroy']]);
	Route::resource('admindevice', 'Admin\DeviceController');
	Route::resource('categories', 'Admin\CategoryController');

	Route::resource('book', 'Admin\BookController', ['except' => ['show']]);
	Route::resource('book.page', 'Admin\PageController', ['except' => ['show']]);

	Route::resource('projector', 'Admin\ProjectorController', ['except' => ['show']]);
	Route::resource('projector.video', 'Admin\VideoController', ['except' => ['show']]);

	Route::delete('destroySource/{id}', 'Admin\DocumentController@destroySource')->name('sources.destroy');
	Route::post('uploadImage', 'Admin\MainController@uploadImage')->name('uploadImage');
	Route::delete('deleteImage/{id}', 'Admin\ArticleController@destroySlImage')->name('article.image.delete');
	Route::post('uploadSliderArticle/{id}', 'Admin\ArticleController@uploadImage')->name('uploadSImage');
	Route::resource('adminarticle', 'Admin\ArticleController');
});
Route::get('parser', function(){
        $path_app = '/home/sparksjj/projectsng/mvd';
        $csv = array_map('str_getcsv', file($path_app . '/test.csv'));
        foreach($csv as $document)
        {
        	/*category */
                $category_id = null;
                if ($document[7]) $category_id = 19;

                else if ($document[8]==1) $category_id = 16;
                else if ($document[8]==2) $category_id = 17;
                else if ($document[8]==3) $category_id = 18;

                else if ($document[9]) $category_id = 14;

                else if ($document[10]) $category_id = 13;

                else if ($document[11]==1) $category_id = 11;
                else if ($document[11]==2) $category_id = 10;
                else if ($document[11]==3) $category_id = 12;

                else if ($document[12]) $category_id = 8;

                else if ($document[13]) $category_id = 7;

                else if ($document[14]) $category_id = 6;

                else if ($document[15]) $category_id = 5;

                else if ($document[16]==1) $category_id = 4;
                else if ($document[16]==2) $category_id = 4;
                else if ($document[16]==3) $category_id = 4;
                else if ($document[16]==4) $category_id = 20;

                else if ($document[17]) $category_id = 3;

            /*type*/
            	$type;
                     if ($document[5]==2) $type = 'video';
                else if ($document[5]==3) $type = '3d';
                else if ($document[5]==1) $type = 'image';
                else if ($document[5]==4) $type = 'pdf';

            /*type*/
            	$desc = null;
                     if ($document[2] != '') $desc = $document[2];

            /*storage*/
            	$storage = null;
                     if ($document[4] != '') $storage = $document[4];
            /*number*/
            	$number = null;
                     if ($document[3] != '') $number = $document[3];
            /*attend doc*/
            	$attend = false;
                     if ($document[6] != '') $attend = explode(',', $document[3]);
			
                $document = App\Document::updateOrCreate( [ 'inventory_number' => $number ],
                        [
                                'category_id' 			=> $category_id,
                                'type' 					=> $type,
                                'description_ru'		=> $desc,
                                'title_ru' 				=> $document[1],
                                'storage' 				=> $storage,
                        ]
                );

                if ($type != '3d') {

                	$files_url = glob( $path_app . '/files/' . $number . '.*');
                	$files_url = array_merge($files_url, glob( $path_app . '/files/' . $number . '-*.*'));
               
                	if (count($files_url) > 0) {
				        $document->sources()->delete();
                		foreach( $files_url as $index=>$value){                			
				        	$fileext = pathinfo($value)['extension'];
				            $file_name = md5($number.'_'.$index . rand(0, 9999)) . '.' . $fileext;
                		
				            copy($value, $path_app . '/public/documents/' . $file_name);

			                $source = new App\Source();
					        $source->path = '/documents/' . $file_name;
					        $document->sources()->save($source);
                		}
                	}
                }else{
                	if(file_exists($path_app . '/files/' . $number)){                
	                	$files_url = glob( $path_app . '/files/'. $number . '/*.*');
	                	if (count($files_url) > 0) {
					        $document->sources()->delete();
	                		foreach( $files_url as $index=>$value){                			
					        	$fileext = pathinfo($value)['extension'];
					            $file_name = md5($number.'_'.$index . rand(0, 9999)) . '.' . $fileext;
					            copy($value, $path_app . '/public/documents/' . $file_name);
				                $source = new App\Source();
						        $source->path = '/documents/' . $file_name;
						        $document->sources()->save($source);
	                		}
	                	}
                	}
                }
                if ($attend) {
                	$id_arr = [];
                	foreach ($attend as $key => $value) {
                		$el = App\Document::where('inventory_number', $value)->first();
                		if($el){
                			array_push($id_arr, $el->id);
                		}
                	}
                	$document->join_documents()->sync($id_arr);
                }

        }
});
