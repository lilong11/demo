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






 

// 前台路由开始 //31行结束 
Route::resource('/','Home\IndexController'); 









// 前台路由结束
 // 后台路由开始 //43行结束
 Route::group(['middleware' => 'admin'],function(){
 Route::get('admin','Admin\IndexController@index'); 
 });


 




// 后台路由结束
// lilong 开始    //101行结束
Route::post('login/dologin','Admin\IndexController@dologin'); //处理登入路由
Route::get('login','Admin\IndexController@login'); //后台登入路由

Route::group(['middleware' => 'admin'],function(){

Route::get('exit','Admin\IndexController@exit'); //后台退出路由

Route::resource('/uinfo','Admin\UserinfoController'); //后台用户详情
Route::get('/user/delete/{id}','Admin\UserController@delete'); //后台用户删除
Route::resource('/user','Admin\UserController');  //后台用户路由
Route::get('aPassword/{id}','Admin\PasswordController@edit');  //后台用户修改密码
Route::post('doPasswords/{id}','Admin\PasswordController@doPassword');//后台用户修改密码处理

Route::get('show/{status}/{id}','Admin\ShowController@users'); //后台用户是否显示路由

Route::get('/worke/delete/{id}','Admin\WorksController@delete');  //后台文章删除
Route::resource('/works','Admin\WorksController');   //后台文章

Route::get('/issue/delete/{id}','Admin\IssueController@delete');  //后台问题删除
Route::resource('/issue','Admin\IssueController');   //后台问题

 });


// 前台路由 
Route::get('usersexit','Home\UserController@exit');  //前台用户退出
Route::get('users/login','Home\UserController@login');  //前台用户登入
Route::post('users/doLogin','Home\UserController@doLogin');  //前台登入处理

 
Route::resource('/users','Home\UserController');  //前台用户路由
Route::get('doRegister/gain','Home\RegisterController@gain'); //前台用户手机号接收
Route::post('doRegister','Home\RegisterController@doPhone'); //前台用户手机号注册处理
Route::get('register','Home\RegisterController@phone'); //前台用户手机号注册路由

Route::get('/infoEdit/{id}','Home\UserinfoController@edit'); //前台用户详情修改
Route::post('/infoUpdate/{id}','Home\UserinfoController@update'); //前台用户详情修改处理
Route::get('password','Home\UserinfoController@password'); //前台用户修改密码
Route::post('doPassword/{id}','Home\UserinfoController@doPassword'); //前台用户修改密码处理


Route::get('love/{id}','Home\WorksController@love');	//文章喜欢+1路由
Route::get('issues/{id}','Home\WorksController@issue');	//问题显示路由
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
Route::resource('/links','Admin\LinksController');





















































// 王佳琦 结束
// 连柯鑫 开始   272结束 
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





















































// 连柯鑫 结束