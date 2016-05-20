<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use App\Mail;
use DB;

class YonghuController extends Controller
{
	//展示首页
	public function shou()
	{
		//查询数据库中登录者的信息
		// setcookie('id',1);
		$id=$_COOKIE['id'];
		// var_dump($id);die;
		$data=DB::table('users')->where('u_id',$id)->first();
		return view('yonghu.user',['post'=>$data]);
	}
	//个人资料-----接收用户的完善资料并进行存储
	public function geren_add(Request $request)
	{
		//接收表单提交的值
		$data=$request->input();
		// var_dump($data);die;
		//将接收的值进行入库
		$d=DB::table('ziliao')->insert(array('username'=>$data['username'],'jiankang'=>$data['jiankang'],'address'=>$data['address'],'phone'=>$data['phone'],'jiaoyu'=>$data['jiaoyu'],'gongzuo'=>$data['gongzuo']));
		if($d)
		{
			echo "<script>alert('填写成功');location.href='shou';</script>";
		}
	}
	//展示简历的模块
	public function jianli()
	{
		return view('yonghu.jianli');
	}
	//完善在线简历功能-------首页
	public function wanshan()
	{
		return view('yonghu.gongjing');
	}
}