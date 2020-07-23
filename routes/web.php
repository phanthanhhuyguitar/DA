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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout', function () {
    return view('admin.layout.index');
});

/*---------Login-----------*/
Route::get('admin/login', 'UserController@loginAdmin')->name('admin.login');


/*---------Index Dashboard-----------*/
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    //duoc chi dinh mot nhom controller admin
    'namespace'=>'Admin'
],function (){
    /*===========DASHBOARD============*/

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    /*===========CATEGORY============*/
    Route::group([
        'prefix' => 'category'

    ],function (){

//        get de ta goi form sua ra va post giup ta them gui data len
        Route::get('list','CategoryController@getList')->name('category.list');

        Route::get('edit/{id}','CategoryController@getEdit')->name('category.edit');
        Route::post('edit/{id}','CategoryController@postEdit')->name('category.handle.edit');

        Route::get('add','CategoryController@getAdd')->name('category.add');
        Route::post('handle-add','CategoryController@postAdd')->name('category.handle.add');

        Route::get('delete/{id}','CategoryController@getDelete')->name('category.delete');
    });

    /*===========TYPE============*/
    Route::group([
        'prefix' => 'type'
    ],function (){

        Route::get('list','TypeController@getList')->name('type.list');

        Route::get('edit/{id}','TypeController@getEdit')->name('type.edit');
        Route::post('edit/{id}','TypeController@postEdit')->name('type.handle.edit');

        Route::get('add','TypeController@getAdd')->name('type.add');
        Route::post('handle-add','TypeController@postAdd')->name('type.handle.add');

        Route::get('delete/{id}','TypeController@getDelete')->name('type.delete');
    });

    /*===========NEWS============*/
    Route::group([
        'prefix' => 'news'
    ],function (){

        Route::get('list','NewsController@getList')->name('news.list');

        Route::get('edit/{id}','NewsController@getEdit')->name('news.edit');
        Route::post('edit/{id}','NewsController@postEdit')->name('news.handle.edit');

        Route::get('add','NewsController@getAdd')->name('news.add');
        Route::post('handle-add','NewsController@postAdd')->name('news.handle.add');

        Route::get('delete/{id}','NewsController@getDelete')->name('news.delete');
    });

    /*===========COMMENT============*/
    Route::group([
        'prefix' => 'comment',
    ],function (){

        Route::get('delete/{idc}~{idNews}','CommentController@getDelete')->name('comment.delete');
    });

    /*===========SLIDER============*/
    Route::group([
        'prefix' => 'slide'
    ],function (){

        Route::get('list','SlideController@getList')->name('slide.list');

        Route::get('edit/{id}','SlideController@getEdit')->name('slide.edit');
        Route::post('edit/{id}','SlideController@postEdit')->name('slide.handle.edit');

        Route::get('add','SlideController@getAdd')->name('slide.add');
        Route::post('handle-add','SlideController@postAdd')->name('slide.handle.add');

        Route::get('delete/{id}','SlideController@getDelete')->name('slide.delete');
    });

    /*===========USER============*/
    Route::group([
        'prefix' => 'user'
    ], function (){

        Route::get('list','UserController@getList')->name('user.list');

        Route::get('edit/{id}','UserController@getEdit')->name('user.edit');
        Route::post('edit/{id}','UserController@postEdit')->name('user.handle.edit');

        Route::get('add','UserController@getAdd')->name('user.add');
        Route::post('handle-add','UserController@postAdd')->name('user.handle.add');

        Route::get('delete/{id}','UserController@getDelete')->name('user.delete');
    });

    /*===========AJAX============*/
    Route::group([
        'prefix' => 'ajax'
        ], function (){

            Route::get('type/{idCate}','AjaxController@getType')->name('ajax.type');
        }
    );
});
