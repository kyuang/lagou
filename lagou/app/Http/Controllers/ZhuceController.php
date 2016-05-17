<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use App\Mail;
use DB;

class ZhuceController extends Controller
{
	
	//验证码
	public function yanzheng()
	{
		//接收表单提交的值
		$zhi=$_GET['zhi'];
		if(!empty($zhi))
		{
			//生成验证码
			$yan=rand(111111,999999);
			//调用邮箱的类
			// include "Mail.php";
			//定义邮件的内容
			$title="获取验证码";
			$content="您好,您的验证码是".$yan."请尽快前往注册，验证码有效时间为一分钟";
			$user="拉钩官方";
			$address=$zhi;
			if(Mail::send($title,$content,$user,$address))
		{
			echo "<script>alert('邮件已成功发送')</script>";
		}
			setcookie('yan',$yan,time()+1800);
		}
	}
	//定义方法------注册
	public function zhuce(Request $request)
	{
		//接收用户注册的值
		$data=$request->input();
		// var_dump($data);die;
		$yan=$data['numss'];
		//取出session中的验证码
		 $yan1 = $_COOKIE['yan'];
		// var_dump($yan1);die;
		if($yan!=$yan1)
		{
			echo "验证码不正确";
			die;
		}else
		{
			//判断是否勾选协议
			$xieyi=$data['xieyi'];
			if($xieyi==1)
			{
				if($data['zhao']==0)
				{
					//将用户的注册的信息添加入库
					$d=DB::table('users')->insert(array('username'=>$data['username'],'password'=>$data['pwd'],'email'=>$data['email'],'is_sele'=>$data['zhao']));
					if($d)
					{
						return redirect('Index/login');
					}
				}
				 else if($data['zhaoren']==1)
				{
					//将用户的注册的信息添加入库
					$d=DB::table('users')->insert(array('username'=>$data['username'],'password'=>$data['pwd'],'email'=>$data['email'],'is_sele'=>$data['zhaoren']));
					if($d)
					{
						return redirect('Index/login');
					}
				}
			}
		}

	}
}