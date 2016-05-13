<?php
namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class AdminController extends Controller
{
	//设置方法--登录
	public function login()
	{
		return view('admin.login');
	}
	//执行登录--->跳转到后台首页
	public function login_go()
	{
		return view('admin.index');
	}
	//数据添加---->添加职位的类型
	public function zhi_type()
	{
		return view('admin.pricing');
	}
	//数据添加----->职位方向
	public function zhi_fang()
	{
		return view('admin.pricing');
	}
	//数据添加---->具体职位
	public function zhi_juti()
	{
		return view('admin.pricing');
	}
	//数据添加---->添加地区
	public function add_adress()
	{
		return view('admin.pricing');
	}
	//数据添加---->公司描述
	public function content()
	{
		return view('admin.pricing');
	}
}