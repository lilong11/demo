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
Route::get('backgroundExit/{id}','Admin\BackgroundController@exit');
Route::resource('background','Admin\BackgroundController');

 



// 后台路由结束
// lilong 开始    //101行结束
Route::post('login/dologin','Admin\IndexController@dologin'); //处理登入路由
Route::get('login','Admin\IndexController@login'); //后台登入路由

// 后台中间件
Route::group(['middleware' => 'admin'],function(){
Route::get('exit','Admin\IndexController@exit'); //后台退出路由
Route::resource('/uinfo','Admin\UserinfoController'); //后台用户详情
Route::get('/user/delete/{id}','Admin\UserController@delete'); //后台用户删除
Route::resource('/user','Admin\UserController');  //后台用户路由
Route::get('aPassword/{id}','Admin\PasswordController@edit');  //后台用户修改密码
Route::post('doPasswords/{id}','Admin\PasswordController@doPassword');//后台用户修改密码处理
Route::get('show/{status}/{id}','Admin\ShowController@users'); //后台用户是否显示路由
Route::get('Background/{status}/{id}','Admin\ShowController@background'); //后台背景是否显示路由
Route::get('aworks/{status}/{id}','Admin\ShowController@works'); //后台文章是否显示路由
Route::get('aissue/{status}/{id}','Admin\ShowController@issue'); //后台问题是否显示路由
Route::get('/worke/delete/{id}','Admin\WorksController@delete');  //后台文章删除
Route::resource('/works','Admin\WorksController');   //后台文章

Route::post('/doSolve/{id}','Admin\IssueController@doSolve');  //后台解决问题处理
Route::get('/solve/{id}','Admin\IssueController@solve');  //后台解决问题
Route::get('/issue/delete/{id}','Admin\IssueController@delete');  //后台问题删除
Route::resource('/issue','Admin\IssueController');   //后台问题
Route::resource('/ticket','Admin\TicketController');   //后台优惠券

 });
// 前台路由 
Route::get('usersexit','Home\UserController@exit');  //前台用户退出
Route::get('users/login','Home\UserController@login');  //前台用户登入
Route::post('users/doLogin','Home\UserController@doLogin');  //前台登入处理
Route::get('doRegister/gain','Home\RegisterController@gain'); //前台用户手机号接收
Route::post('doRegister','Home\RegisterController@doPhone'); //前台用户手机号注册处理
Route::get('register','Home\RegisterController@phone'); //前台用户手机号注册路由
Route::post('addUsers','Home\UserController@addUsers'); //前台用户添加

Route::get('issues/{id}','Home\WorksController@issue');	//问题显示路由
Route::get('hissues','Home\WorksController@index');	//问题列表
Route::get('hworks','Home\WorksController@works');	//文章列表
Route::resource('workss','Home\WorksController'); //前台文章路由 

// 前台中间件
Route::group(['middleware' => 'home'],function(){
// Route::post('img','Home\UserinfoController@img');  
Route::post('/head','Home\UserinfoController@head');  //前台用户头像上传路由
Route::resource('/users','Home\UserController');  //前台用户路由

Route::get('/infoEdit/{id}','Home\UserinfoController@edit'); //前台用户详情修改
Route::post('/infoUpdate/{id}','Home\UserinfoController@update'); //前台用户详情修改处理
Route::get('password','Home\UserinfoController@password'); //前台用户修改密码
Route::post('doPassword/{id}','Home\UserinfoController@doPassword'); //前台用户修改密码处理

Route::get('userIssue/{uname}','Home\WorksController@userIssue');	//前台用户问题显示
Route::post('doIssues','Home\WorksController@doAdd');	//前台问题添加处理
Route::get('issuesAdd','Home\WorksController@add');	//前台问题添加

Route::get('Collections/{gid}','Home\CollectionController@delete'); //前台商品收藏删除 
Route::get('Collectionadd/{gid}','Home\CollectionController@add'); //前台商品收藏添加 
Route::resource('Collection','Home\CollectionController'); //前台商品收藏路由 
 });//前台中间件结束



// lilong 结束
// 杨玉龙 开始  //158 结束
// 后台
 //广告路由
 Route::get('/adv/delete/{id}','Admin\AdvController@delete');
 Route::get('/adv/status/{id}','Admin\AdvController@status');
 Route::resource('/adv','Admin\AdvController');
 //留言路由
  Route::get('/admin/mess/delete/{id}','Admin\MessController@delete');
 Route::resource('/admin/mess','Admin\MessController');   
 //公告路由
 Route::get('/admin/notice/delete/{id}','Admin\NoticeController@delete');
 Route::get('/admin/notice/status/{id}','Admin\NoticeController@status');//公告修改显示状态路由
 Route::resource('/admin/notice','Admin\NoticeController');
 //意见路由
 Route::get('/admin/opinion/delete/{id}','Admin\OpinionController@delete');
 Route::resource('/admin/opinion','Admin\OpinionController');
 //投资人路由
Route::get('/admin/investor/delete/{id}','Admin\InvestorController@delete');
Route::resource('/admin/investor','Admin\InvestorController');
 //商品举报路由
 Route::get('/admin/report/delete/{id}','Admin\ReportController@delete');
 Route::resource('/admin/report','Admin\ReportController');

 //前台
 //前台添加加盟路由
 Route::get('/home/investor/create','Home\InvestorController@create');
 //前台添加意见路由
 Route::get('/home/opinion/create','Home\OpinionController@create');
 //前台添加留言路由
 Route::get('/home/mess/create','Home\MessController@create');
 //前台添加举报内容路由
  Route::get('/home/report/create','Home\ReportController@create');

 




 











































 
// 杨玉龙 结束
// 王佳琦 开始    //215 结束
//友情链接路由
Route::resource('/links','Admin\LinksController');
//友情链接添加
Route::get('/links/create','Admin\LinksController@create'); 
Route::post('/links/store','Admin\LinksController@store'); 

//订单广告路由
Route::resource('/orders/adver','Admin\AdverController'); 
//订单广告添加
Route::get('/orders/adver/create','Admin\AdverController@create'); 
Route::post('/orders/adver/store','Admin\AdverController@store'); 




//商品列表路由
Route::resource('list','Home\ListController');

//购物车路由
Route::resource('/cart','Home\CartController');
//添加购物车路由
Route::post('/cart/store','Home\CartController@store');

//购物车删除路由
Route::get('/cart/destroy/{id}/{size}','Home\CartController@destroy'); 

//购物车商品增加减少路由
Route::get('/cart/jian/{id}/{size}/{num}','Home\CartController@jian'); 
Route::get('/cart/jia/{id}/{size}/{num}','Home\CartController@jia'); 




//收货地址路由
Route::resource('address','Home\AddressController');

//添加收货地址路由
Route::post('/address/create','Home\AddressController@create'); 

//地址确认路由
Route::post('/address/show/','Home\AddressController@show');

//支付路由
Route::post('/address/pay/','Home\PayController@index');
//支付成功路由
Route::get('/orders/pay/{id}','Home\PayController@edit'); 


//后台订单路由
Route::resource('orders','Admin\OrdersController');
//订单详情路由
Route::get('/orders/orderdetail/{id}','Admin\OrdersController@show'); 
//后台订单发货路由
Route::get('/orders/fahuo/{id}','Admin\OrdersController@edit'); 


//个人中心订单路由
Route::get('/index/orders','Home\OrdersController@index'); 
//个人中心确认收货路由路由
Route::get('/orders/show/{id}','Home\OrdersController@show'); 
//个人中心订单取消路由
Route::get('/orders/edit/{id}','Home\OrdersController@edit'); 
//个人中心订单删除路由
Route::get('/orders/destroy/{id}','Home\OrdersController@destroy'); 








































// 王佳琦 结束
// 连柯鑫 开始   272结束
// 后台开始 
//商品列表开始
Route::resource('/goods','Admin\GoodsController');
Route::resource('/goods/status','Admin\GoodsController@status');
Route::post('/goods/store','Admin\GoodsController@store');
Route::post('/goods/edit','Admin\GoodsController@edit');
//商品列表结束

//商品详情开始
Route::resource('/detailsgoods','Admin\DetailsGoodsController');
Route::post('/detailsgoods/store','Admin\DetailsGoodsController@store');
Route::post('/detailsgoods/edit','Admin\DetailsGoodsController@edit');
//商品详情结束

//最新商品详情开始
Route::resource('/newdetailsgoods','Admin\NewDetailsGoodsController');
Route::post('/newdetailsgoods/store','Admin\NewDetailsGoodsController@store');
Route::post('/newdetailsgoods/edit','Admin\NewDetailsGoodsController@edit');
//最新商品详情结束

//服饰颜色详情开始
// Route::resource('/goodscolor','Admin\GoodsColorController');
// Route::post('/goodscolor/store','Admin\GoodsColorController@store');
//服饰颜色详情结束

//服饰尺寸详情开始
Route::resource('/goodssize','Admin\GoodsSizeController');
Route::post('/goodssize/store','Admin\GoodsSizeController@store');
//服饰尺寸详情结束

//分类列表开始
Route::resource('/type','Admin\TypeController');
Route::post('/type/store','Admin\TypeController@store');
//分类列表结束

//轮播图列表开始
Route::resource('/rotationimg','Admin\RotationimgController');
Route::post('/rotationimg/store','Admin\RotationimgController@store');
Route::post('/rotationimg/edit','Admin\RotationimgController@edit');
//轮播图列表结束

//最新商品列表开始
Route::resource('/newgoods','Admin\NewGoodsController');
Route::post('/newgoods/store','Admin\NewGoodsController@store');
Route::post('/newgoods/update','Admin\NewGoodsController@update');
Route::post('/newgoods/edit','Admin\NewGoodsController@edit');
//最新商品列表结束

//后台状态管理开始
Route::get('/status/goods','Admin\StatusController@goods');
Route::get('/status/type','Admin\StatusController@type');
Route::get('/status/rotationimg','Admin\StatusController@rotationimg');
Route::get('/status/newgoods','Admin\StatusController@newgoods');
Route::get('/status/goodscolor','Admin\StatusController@goodscolor');
Route::get('/status/goodssize','Admin\StatusController@goodssize');
Route::get('/status/detailsgoods','Admin\StatusController@detailsgoods');
//后台状态管理开始

//后台结束
//前台开始
//签到管理开始
Route::resource('/fsignin','Home\FsigninController');
//签到管理结束

//商城开始
Route::resource('/homegoods','Home\HomeGoodsController');
// Route::resource('/homegoods','Home\HeadTypesController');
//商城结束

//商品详情开始
Route::resource('/detailgoods','Home\DetailGoodsController');
//商品详情结束
//最新商品详情开始
Route::resource('/newdetailgoods','Home\NewDetailGoodsController');
//最新商品详情结束
// 连柯鑫 272结束