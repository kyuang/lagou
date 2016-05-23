<?php
namespace App\Http\Controllers\Admin;

use Validator,DB,redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
header("Content-type: text/html; charset=utf-8");
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
	
		// echo count('abc');die;
		// var_dump($list);die;
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
	//数据添加---->广告管理
	public function content()
	{
		if(empty($_POST))
		{
			//城市地区名称
			$city=DB::table("region")->where("parent_id",1)->select('region_id','region_name')->get();
			return view('admin.guanggao',['city'=>$city]);	
		}
		else
		{
			$gname=$_POST['gname'];
			$gimg="images/".$_FILES['gimg']['name'];
			$area=$_POST['area'];
    		// var_dump($_FILES);die;
			if(move_uploaded_file($_FILES['gimg']['tmp_name'],$gimg))
			{
				$sql="insert into guanggao (gname,gimg,area) values ('$gname','$gimg','$area')";
				$asd=DB::insert($sql);
			}
		}
	}

	
}