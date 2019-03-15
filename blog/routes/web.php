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
	// 后台用户路由
	Route::post('login/dologin','Admin\IndexController@dologin');
	Route::get('login','Admin\IndexController@login');
	Route::get('/user/delete/{id}','Admin\UserController@delete');
	Route::resource('/user','Admin\UserController');




	// 前台用户路由 
	Route::get('users/login','Home\UserController@login');
	Route::post('users/doLogin','Home\UserController@doLogin');
	Route::resource('/users','Home\UserController');








































// lilong 结束
// 杨玉龙 开始  //158 结束
 //广告路由
 Route::get('/adv/delete/{id}','Admin\AdvController@delete');
 Route::resource('/adv','Admin\AdvController');
 //留言路由
 Route::resource('/mess','Admin\MessController');


















































// 杨玉龙 结束
// 王佳琦 开始    //215 结束
//友情链接路由
Route::resource('admin/links','Admin\LinksController');





















































// 王佳琦 结束
// 连柯鑫 开始   272结束























































// 连柯鑫 结束