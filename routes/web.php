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

Route::get('/', function () {
    return view('welcome');
});

// 后台路由开始
Route::resource('admin','Admin\IndexController');
//商品列表
Route::resource('/goods','Admin\GoodsController');
Route::post('/goods/store','Admin\GoodsController@store');
Route::post('/goods/update','Admin\GoodsController@update');
Route::post('/goods/edit','Admin\GoodsController@edit');
//商品添加
// Route::get('admin/goods/add','Admin\GoodsController@create');
//商品接收,存入数据库
// Route::post('admin/goods/store','Admin\GoodsController@store');


//分类列表
Route::resource('/type','Admin\TypeController');
Route::post('/type/store','Admin\TypeController@store');


//轮播图列表
Route::resource('/rotationimg','Admin\RotationimgController');
Route::post('/rotationimg/store','Admin\RotationimgController@store');
Route::post('/rotationimg/edit','Admin\RotationimgController@edit');


// 后台路由结束



// 前台路由开始






// 后台路由结束



