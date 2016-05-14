<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class IndexController extends Controller
{
	/**
	 * 首页显示
	 * @return [type] [description]
	 */
	public function index()
	{
		return view('index');
	}
	/**
	 * 登陆页面
	 * @return [type] [description]
	 */
	public function login()
	{
		return view('login');
	}

	/**
	 * 注册页面
	 */
	public function register()
	{
		return view('register');
	}
}

?>