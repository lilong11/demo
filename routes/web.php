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
Route::get('admin','Admin\IndexController@index');
//商品列表
Route::get('admin/goods/index','Admin\GoodsController@index');

//商品添加
Route::get('admin/goods/add','Admin\GoodsController@create');
//商品接收,存入数据库
Route::post('admin/goods/store','Admin\GoodsController@store');


//分类列表
Route::get('admin/type/index','Admin\TypeController@index');





// 后台路由结束



// 前台路由开始






// 后台路由结束



