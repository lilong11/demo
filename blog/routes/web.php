<?php
// 李龙:31~80
// 杨玉龙:81~130
// 王佳琦:131~180
// 连柯鑫:181~230
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
 Route::resource('/users','Home\UserController');
// 前台路由结束
//
//
// 后台路由开始
 Route::get('admin','Admin\IndexController@index');
// 用户路由
 Route::get('/user/delete/{id}','Admin\UserController@delete');
 Route::resource('/user','Admin\UserController');
// 文章路由
 Route::get('/worke/delete/{id}','Admin\WorksController@delete');
 Route::resource('/works','Admin\WorksController');











































//杨玉龙
 //广告路由
 Route::get('/adv/delete/{id}','Admin\AdvController@delete');
 Route::resource('/adv','Admin\AdvController');







