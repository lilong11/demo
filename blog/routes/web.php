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






<<<<<<< HEAD

// 前台路由开始 //31行结束 
Route::resource('/','Home\IndexController'); 









// 前台路由结束
 // 后台路由开始 //43行结束
 Route::get('admin','Admin\IndexController@index'); 
 



 




// 后台路由结束
// lilong 开始    //101行结束

Route::post('login/dologin','Admin\IndexController@dologin'); //处理登入路由
Route::get('login','Admin\IndexController@login'); //后台登入路由
Route::get('/user/delete/{id}','Admin\UserController@delete'); //后台用户删除路由
Route::resource('/user','Admin\UserController');  //后台用户路由
// 后台文章路由
Route::get('/worke/delete/{id}','Admin\WorksController@delete');  //后台文章删除
Route::resource('/works','Admin\WorksController');   //后台文章
// 后台问题路由
Route::get('/issue/delete/{id}','Admin\IssueController@delete');  //后台问题删除
Route::resource('/issue','Admin\IssueController');   //后台问题
// 前台用户路由 
Route::get('users/login','Home\UserController@login');  //前台用户登入
Route::post('users/doLogin','Home\UserController@doLogin');  //前台登入处理
Route::resource('/users','Home\UserController');  //前台用户路由
Route::resource('workss','Home\WorksController'); //前台文章路由







































 
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