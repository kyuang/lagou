<?php
namespace App\Http\Controllers;

use Validator,DB,Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Input;
use Session;
use App\Http\Models\Role_type;

header("content-type:text/html;charset=utf-8");

class IndexController extends Controller
{
	/**
	 * 首页显示
	 * @return [type] [description]
	 */
	public function index()
	{
		$list = Role_type::type_tree();
		$link = DB::table('links')->orderBy('sort', 'desc')->get();
		$city = DB::table('lagou_region')->join('region','lagou_region.zhan','=','region.region_id')->get();
		foreach ($city as $key => $val) 
		{
			$a[] = $val->region_name;
		}
		$city = implode(',', $a);

		//首页职位招聘热门职位
		$job=DB::table("job")->get();
		//print_r($job);die;
		foreach ($job as $k => $v) {
			$job[$k]->company_type=unserialize($v->company_type);
			$job[$k]->material_benefits=unserialize($v->material_benefits);
		}
		if(!empty($_GET['id']) && $_GET['id']==1)
		{	
		// echo "sdfasdfgasd";die;
			$list = Role_type::type_tree();
			return view('dengindex',['type'=>$list,"job"=>$job,'link'=>$link]);
		}else
		{
			$list = Role_type::type_tree();
<<<<<<< HEAD
			$advert=DB::table("guanggao")->get();
			// var_dump($advert);die;
			return view('index',['type'=>$list,"job"=>$job,'advert'=>$advert]);
=======
			return view('index',['type'=>$list,"job"=>$job,'link'=>$link,'city'=>$city]);
>>>>>>> e018addb2c043641c223191625bfe5d01c4a447f
			
		}

	

<<<<<<< HEAD
		return view('index',['type'=>$list,"job"=>$job]);
=======
		// return view('index',['type'=>$list,"job"=>$job,"jobn"=>$job]);
>>>>>>> b56bffebc5cf26a68a31d133bde359a0d4ca703c

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
			// var_dump($re);die;
			$userInfo = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
			// var_dump($username);die;
			// $u_id = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
			$id=$userInfo->u_id;
			$a=$userInfo->username;

			// var_dump($id);die;
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
					Session::put('username',$a);
					Session::put('id',$id);
					Session::save();
					// $as=$_COOKIE['id'];
<<<<<<< HEAD
					// var_dump($as);die;
					return "<script>alert('登陆成功');location.href='index?id=1';</script>";
=======
					// Session::put('username',$username);
					// $a = Session::get('username');
<<<<<<< HEAD

=======
<<<<<<< HEAD

					// var_dump($as);die;
					echo "<script>alert('登陆成功');location.href='index';</script>";
						
=======
					// var_dump($as);die;
>>>>>>> e018addb2c043641c223191625bfe5d01c4a447f
>>>>>>> b56bffebc5cf26a68a31d133bde359a0d4ca703c
					// var_dump($a);die;

					echo "<script>alert('登陆成功');location.href='index?id=1';</script>";
						die;
<<<<<<< HEAD

					echo "<script>alert('登陆成功');location.href='index';</script>";				

<<<<<<< HEAD
=======
=======
>>>>>>> e018addb2c043641c223191625bfe5d01c4a447f
>>>>>>> b56bffebc5cf26a68a31d133bde359a0d4ca703c
>>>>>>> c661b8df52b9e4806bca3a7c0408c568e6dd4e1a
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
	 * 退出页面
	 */
	public function loginout()
	{
		setcookie('username','',time()-1);
		return Redirect::to('Index/index');
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