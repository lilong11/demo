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

 //登入路由
 Route::get('home/login','Home\IndexController@login');

// 前台首页显示路由
Route::resource('/','Home\IndexController');

 // 用户路由 
 Route::resource('home/user','Home\UserController');















// 前台路由结束





// 后台路由开始
 Route::get('admin','Admin\IndexController@index');
// 用户路由
 Route::get('/user/delete/{id}','Admin\UserController@delete');
 Route::resource('/user','Admin\UserController');
// 文章路由
 Route::get('/worke/delete/{id}','Admin\WorksController@delete');
 Route::resource('/works','Admin\WorksController');






// 后台路由结束











