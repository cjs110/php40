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


//路由组设置
//后台

	Route::get('/admin/index','Admin\IndexController@index');














//前台
// Route::group([],function(){

// });


//前台首页
Route::get('/',function(){
	return view('Home/index');
});















