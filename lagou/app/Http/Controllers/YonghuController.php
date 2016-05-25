<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use App\Mail;
use DB,Session;
use Redirect;

class YonghuController extends Controller
{
	//展示首页
	public function shou()
	{
		//查询数据库中登录者的信息
		// setcookie('id',1);
		$id=Session::get('id');
		$id=1;
		$data=DB::table('users')->where('u_id',$id)->first();
		// var_dump($data);die;
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
	//接收表单提交的值，并且进行入库操作
	public function uplode()
	{
		$u_id=$_GET['u_id'];
		$img_name=$_GET['img_name'];
		var_dump($img_name);

	}
	//将用户修的用户名添加到数据库中
	public function users_add()
	{
		$username=$_GET['zhi'];
		$id=$_GET['id'];
		//修改用户表中的用户名
		$data=DB::table('users')->where('u_id',$id)->update(array('username'=>$username));
		if($data)
		{
			return redirect("Index/login");
		}
	}
	//展示教育经历
	public function jiaoyu()
	{
		return view('yonghu.jiaoyu');
	}
	//一句话总结
	public function zongjie()
	{
		return view('yonghu.zongjie');
	}
	//接收入库
	public function jianli_add(Request $request)
	{
		$data=$request->input();
		// var_dump($data);
		//将接到的值入库
		DB::table('resume')->insert(array('u_id'=>$data['u_id'],'firm'=>$data['ming'],'job'=>$data['zhi']));
	}
	public function jianli_adds(Request $request)
	{
		$data=$request->input();
		$d=DB::table('resume')->where('u_id',$data['u_id'])->update(array('school'=>$data['school'],'major'=>$data['zhuanye']));
			return redirect("Yonghu/jianli");
	}
}