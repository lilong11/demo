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

// 前台路由开始
// 前台首页显示
Route::resource('/','Home\IndexController');





//前台路由结束



// 后台路由开始
Route::get('admin','Admin\IndexController@index');





//友情链接路由
Route::get('admin/links','Admin\LinksController@index');






// 后台路由结束







