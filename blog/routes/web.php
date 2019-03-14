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
Route::resource('/','Home\IndexController');//31行结束










// 前台路由结束
// 后台路由开始
 Route::get('admin','Admin\IndexController@index'); //43行结束
 



 




// 后台路由结束
// lilong 开始    //101行结束
// 文章开始
Route::get('/worke/delete/{id}','Admin\WorksController@delete');
Route::resource('/works','Admin\WorksController');
// 用户路由
Route::get('/user/delete/{id}','Admin\UserController@delete');
Route::resource('/user','Admin\UserController');

  // 用户路由 
 Route::resource('/users','Home\UserController');
  //登入路由
 Route::get('home/login','Home\IndexController@login');













































// lilong 结束
// 杨玉龙 开始  //158 结束























































// 杨玉龙 结束
// 王佳琦 开始    //215 结束























































// 王佳琦 结束
// 连柯鑫 开始   272结束























































// 连柯鑫 结束