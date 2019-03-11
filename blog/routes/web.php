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


// 用户路由开始
 Route::resource('user','Admin\IndexController');






// 用户路由结束








// 后台路由结束



// 前台路由开始






// 后台路由结束



