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

 
// 后台路由开始
 Route::get('admin','Admin\IndexController@index');
// 李龙:51~100
// 杨玉龙:101~150
// 王佳琦:151~200
// 连柯鑫:201~250






















//----------------李龙   开始----------------------------





// 用户路由
 Route::get('/user/delete/{id}','Admin\UserController@delete');
 Route::resource('/user','Admin\UserController');

// 用户路由 
 Route::resource('/users','Home\UserController');

// 文章路由
 Route::get('/worke/delete/{id}','Admin\WorksController@delete');
 Route::resource('/works','Admin\WorksController');

































//----------------李龙   结束----------------------------
//----------------杨玉龙   开始----------------------------
















































//----------------杨玉龙   结束----------------------------
//----------------王佳琦   开始----------------------------
























//友情链接路由
Route::resource('admin/links','Admin\LinksController');
























//----------------王佳琦   结束----------------------------
//----------------连柯鑫   开始----------------------------
















































//----------------连柯鑫   结束----------------------------












































// 后台路由结束











