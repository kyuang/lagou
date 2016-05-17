<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

//前台首页
Route::any('/Index/index',"IndexController@index");
Route::any('/Index/login',"IndexController@login");
Route::any('/Index/register',"IndexController@register");


// --------------------------------------------------------------------
//后台
Route::any('/Admin/login',"Admin\AdminController@login");
Route::any('/Admin/login_go',"Admin\AdminController@login_go");
Route::any('/Admin/zhi_type',"Admin\AdminController@zhi_type");
Route::any('/Admin/zhi_fang',"Admin\AdminController@zhi_fang");
Route::any('/Admin/zhi_juti',"Admin\AdminController@zhi_juti");
Route::any('/Admin/add_adress',"Admin\AdminController@add_adress");
Route::any('/Admin/content',"Admin\AdminController@content");

Route::any('/Type/add',"Admin\TypeController@add");
Route::any('/Type/lists',"Admin\TypeController@lists");

// ------------------------------------------------------------------------
//注册
Route::any('/Zhuce/zhuce',"ZhuceController@zhuce");
Route::any('/Zhuce/yanzheng',"ZhuceController@yanzheng");