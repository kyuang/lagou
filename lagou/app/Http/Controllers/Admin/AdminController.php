<?php
namespace App\Http\Controllers\Admin;

use Validator,DB,Redirect;
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
			$title=$_POST['title'];
			$gimg="images/".$_FILES['gimg']['name'];
			$area=$_POST['area'];
    		// var_dump($_FILES);die;
			if(move_uploaded_file($_FILES['gimg']['tmp_name'],$gimg))
			{
				$sql="insert into guanggao (title,gimg,area) values ('$title','$gimg','$area')";
				$asd=DB::insert($sql);

				return Redirect::to('Admin/content');
			}
		}
	}


	/**
	 * 友情链接
	 */
	public function youqing()
	{
		$sql = "select * from links order by sort desc";
		$re = DB::select($sql);
		// var_dump($re);die;
		return view('admin.youqing',['data'=>$re]);
	}

	public function link_add()
	{
		
		$sort = $_POST['sort'];
		$name = $_POST['link_name'];
		$url = $_POST['link_href'];
		$content = $_POST['link_title'];

		foreach($sort as $k=>$v)
		{
			$name = $name[$k];
			$url = $url[$k];
			$content = $content[$k];
			$sql = "insert into links  values(null,'$name','$url','$content','$v')";
			DB::insert($sql);
		}
		return redirect('Admin/youqing');

	}

	public function link_update()
	{
		$id = $_GET['id'];
		$name = $_GET['name'];
		$val = $_GET['val'];
		$sql = "update links set $name = '$val' where id=$id";
		$re = DB::update($sql);
	}
	
}