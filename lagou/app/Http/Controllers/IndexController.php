<?php
namespace App\Http\Controllers;

use Validator,DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Input;

use App\Http\Models\Role_type;

class IndexController extends Controller
{
	/**
	 * 首页显示
	 * @return [type] [description]
	 */
	public function index()
	{
		$id=$_GET['id'];
		if($id!=1)
		{	
			$list = Role_type::type_tree();
			return view('index',['type'=>$list]);
		}else
		{
			$list = Role_type::type_tree();
			return view('dengindex',['type'=>$list]);
		}
	}
	/**
	 * 登陆页面
	 * @return [type] [description]
	 */
	public function login()
	{
		if (empty($_POST)) {
			//显示页面
			return view('login');
		}
		else
		{
//			接值
			$email=$_POST['email'];
			$password=$_POST['password'];
			$re = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
			$username = DB::table('users')->lists('username');
			// var_dump($username);die;
			if($re)
			{
				  //登陆失败 记录登陆失败的次数
				$num = !empty(Session::get('err_num')) ? Session::get('err_num') : 0;
				// echo $num;
				//判断登陆失败次数是否大于3次
				if($num>=3)
				{
					echo "<script>alert('登陆失败次数超过三次,请明日登陆');location.href='login'</script>";
					die;
				}
				else
				{
					
					//登录成功
					Session::put('username',$username);
					// $a = Session::get('username');
					// var_dump($a);die;
					echo "<script>alert('登陆成功');location.href='index?id=1';</script>";
						die;
				}
				  
			}
			else
			{
				//登录失败
				$num = !empty(Session::get('err_num')) ? Session::get('err_num') : 0;
				echo $num;
				Session::put('err_num',$num+1);

				echo "<script>alert('登陆失败');location.href='login'</script>";
			}
		}
		
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