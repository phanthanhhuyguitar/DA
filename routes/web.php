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
        'prefix' => 'category'
    ],function (){
        /*category*/
        Route::get('list','CategoryController@getList')->name('list');
        Route::get('edit','CategoryController@getEdit')->name('edit');
        Route::get('add','CategoryController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'type'
    ],function (){
        /*type*/
        Route::get('list','TypeController@getList')->name('list');
        Route::get('edit','TypeController@getEdit')->name('edit');
        Route::get('add','TypeController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'news'
    ],function (){
        /*news*/
        Route::get('list','NewsController@getList')->name('list');
        Route::get('edit','NewsController@getEdit')->name('edit');
        Route::get('add','NewsController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'slide'
    ],function (){
        /*slide*/
        Route::get('list','SlideController@getList')->name('list');
        Route::get('edit','SlideController@getEdit')->name('edit');
        Route::get('add','SlideController@getAdd')->name('add');
    });

    Route::group([
        'prefix' => 'user'
    ],function (){
        /*user*/
        Route::get('list','UserController@getList')->name('list');
        Route::get('edit','UserController@getEdit')->name('edit');
        Route::get('add','UserController@getAdd')->name('add');
    });
});
