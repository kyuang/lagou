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




Route::get('/',"IndexController@index");


Route::get('/', "IndexController@index");

Route::get('/',"IndexController@index");


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
	//前台首页
	Route::any('/Index/index',"IndexController@index");
	Route::any('/Index/login',"IndexController@login");
	Route::any('/login/login.json',"IndexController@login.json");
	Route::any('/Index/register',"IndexController@register");
	Route::any('/Index/loginout',"IndexController@loginout");


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

	Route::any('/Type/show',"Admin\TypeController@show");

	//公司发布职位
	Route::any('/Admin/Company_position',"Admin\CompanyController@Company_position");
	//添加入库
	Route::any('/Admin/Add_position',"Admin\CompanyController@Add_position");
	//职位列表
	Route::any('/Admin/Job_lists',"Admin\CompanyController@Job_lists");

	//------------------------------------------------------------------------
	//用户中心-------个人资料
	Route::any('Yonghu/shou',"YonghuController@shou");
	//接收完善的资料并进行入库
	Route::any('Yonghu/geren_add',"YonghuController@geren_add");
	//简历模块----模块首页展示
	Route::any('Yonghu/jianli',"YonghuController@jianli");
	Route::any('Yonghu/wanshan',"YonghuController@wanshan");
	//用户名的修改
	Route::any('Yonghu/users_add',"YonghuController@users_add");
	//用户中心中的个人资料===教育经历
	Route::any('Yonghu/jiaoyu',"YonghuController@jiaoyu");
	//总结
	Route::any('Yonghu/zongjie',"YonghuController@zongjie");
	//完善简历
	Route::any('Yonghu/jianli_add',"YonghuController@jianli_add");
	Route::any('Yonghu/jianli_adds',"YonghuController@jianli_adds");

	//用户列表
	Route::any('/User/user_list',"UserController@user_list");

	//城市站管理
	Route::any('/City/elements',"Admin\CityController@elements");
	Route::any('/City/add_city',"Admin\CityController@add_city");
});



//前台首页
Route::any('/Index/index',"IndexController@index");
//首页搜索框
Route::any('/Index/search_input',"IndexController@search_input");
Route::any('/Index/login',"IndexController@login");
Route::any('/login/login.json',"IndexController@login.json");
Route::any('/Index/register',"IndexController@register");
Route::any('/Index/loginout',"IndexController@loginout");


// --------------------------------------------------------------------
//后台
Route::any('/Admin/login',"Admin\AdminController@login");
Route::any('/Admin/login_go',"Admin\AdminController@login_go");
Route::any('/Admin/zhi_type',"Admin\AdminController@zhi_type");
Route::any('/Admin/zhi_fang',"Admin\AdminController@zhi_fang");
Route::any('/Admin/zhi_juti',"Admin\AdminController@zhi_juti");
Route::any('/Admin/add_adress',"Admin\AdminController@add_adress");
Route::any('/Admin/content',"Admin\AdminController@content");
Route::any('/Admin/youqing',"Admin\AdminController@youqing");
Route::any('/Admin/link_add',"Admin\AdminController@link_add");
Route::any('/Admin/link_update',"Admin\AdminController@link_update");

Route::any('/Type/add',"Admin\TypeController@add");
Route::any('/Type/lists',"Admin\TypeController@lists");


// ------------------------------------------------------------------------
//注册
Route::any('/Zhuce/zhuce',"ZhuceController@zhuce");
Route::any('/Zhuce/yanzheng',"ZhuceController@yanzheng");


Route::any('/Type/show',"Admin\TypeController@show");

//公司发布职位
Route::any('/Admin/Company_position',"Admin\CompanyController@Company_position");
//添加入库
Route::any('/Admin/Add_position',"Admin\CompanyController@Add_position");
//职位列表
Route::any('/Admin/Job_lists',"Admin\CompanyController@Job_lists");


//------------------------------------------------------------------------
//用户中心-------个人资料
Route::any('Yonghu/shou',"YonghuController@shou");
//接收完善的资料并进行入库
Route::any('Yonghu/geren_add',"YonghuController@geren_add");
//简历模块----模块首页展示
Route::any('Yonghu/jianli',"YonghuController@jianli");
Route::any('Yonghu/wanshan',"YonghuController@wanshan");



//用户列表
Route::any('/User/user_list',"UserController@user_list");

//城市站管理
Route::any('/City/elements',"Admin\CityController@elements");
Route::any('/City/add_city',"Admin\CityController@add_city");

//前台链接对应的详情页
Route::any('Job/details',"JobController@details");



