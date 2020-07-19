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
use App\Model\Categories;
Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
],function (){
    Route::group([
        'prefix' => 'category',
//        duoc chi dinh mot nhom controller admin
        'namespace'=>'Admin',
    ],function (){
        /*category*/
//        get de ta goi form sua ra va post giup ta gui data len
        Route::get('list','CategoryController@getList')->name('category.list');

        Route::get('edit/{id}','CategoryController@getEdit')->name('category.edit');
        Route::post('edit/{id}','CategoryController@postEdit')->name('category.handle.edit');

        Route::get('add','CategoryController@getAdd')->name('category.add');
        Route::post('handle-add','CategoryController@postAdd')->name('category.handle.add');
    });

    Route::group([
        'prefix' => 'type',
        'namespace'=>'Admin'
    ],function (){
        /*type*/
        Route::get('list','TypeController@getList')->name('list');
        Route::get('edit','TypeController@getEdit')->name('edit');
        Route::get('add','TypeController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'news',
        'namespace'=>'Admin'
    ],function (){
        /*news*/
        Route::get('list','NewsController@getList')->name('list');
        Route::get('edit','NewsController@getEdit')->name('edit');
        Route::get('add','NewsController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'slide',
        'namespace'=>'Admin'
    ],function (){
        /*slide*/
        Route::get('list','SlideController@getList')->name('list');
        Route::get('edit','SlideController@getEdit')->name('edit');
        Route::get('add','SlideController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'user',
        'namespace'=>'Admin'
    ],function (){
        /*user*/
        Route::get('list','UserController@getList')->name('list');
        Route::get('edit','UserController@getEdit')->name('edit');
        Route::get('add','UserController@getAdd')->name('add');
    });
});
