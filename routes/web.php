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



  //Rutas del Frontend

Route::get('/',[

    'as'   => 'front.index',
    'uses' => 'FrontController@index'


]);

    Route::get('categories/{name}',[

        'uses' => 'FrontController@searchCategory',
        'as'   => 'front.search.category'
    ]);


    Route::get('tags/{name}',[

        'uses' => 'FrontController@searchTag',
        'as'   => 'front.search.tag'
    ]);

    Route::get('articles/{id}',[

    'uses' => 'FrontController@viewArticle',
     'as'   => 'front.view.article'

    ]);




   //Rutas  del panel de administracion

    Route::group(['prefix'=> 'admin', 'middleware' =>['auth']], function (){


        Route::get('/',['as' =>'admin.index',  function () {

            return view('welcome');

        }]);

        Route::group(['middleware' => 'admin'], function(){

            Route::resource('users','UsersController');
            Route::get('users/{id}/destroy', [
                'uses' => 'UsersController@destroy',
                'as'   => 'users.destroy'

            ]);

        });




     Route::resource('categories','CategoriesController');
     Route::get('categories/{id}/destroy',[
         'uses' => 'CategoriesController@destroy',
         'as'   => 'admin.categories.destroy'

     ]);


        Route::resource('tags','TagsController');
        Route::get('tags/{id}/destroy',[
            'uses' => 'TagsController@destroy',
            'as'   => 'admin.tags.destroy'

        ]);

        Route::resource('articles','ArticlesController');
        Route::get('articles/{id}/destroy',[
            'uses' => 'ArticlesController@destroy',
            'as'   => 'admin.articles.destroy'
        ]);

        Route::get('image', [

            'uses' =>  'ImagesController@index',

            'as'   => 'admin.images.index '

        ]);
});

    Route::get('auth/login',  'Auth\LoginController@login');
    Route::post('auth/login', 'Auth\LoginController@login');
    Route::get('auth/login',  'Auth\LoginController@logout');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
