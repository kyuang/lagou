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
		$reci = DB::table('reci')->get();
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
		
			$list = Role_type::type_tree();
			$advert=DB::table("guanggao")->get();		

<<<<<<< HEAD
			$advert=DB::table("guanggao")->get();

		
			return view('index',['type'=>$list,"job"=>$job,'link'=>$link,'city'=>$city,'advert'=>$advert,'reci'=>$reci]);
			
		}
	
=======
		// return view('index',['type'=>$list,"job"=>$job]);


			// var_dump($advert);die;

		// return view('index',['type'=>$list,"job"=>$job]);
		return view('index',['type'=>$list,"job"=>$job,'link'=>$link,'city'=>$city,'advert'=>$advert,'reci'=>$reci]);	
		 
>>>>>>> 53f4870589fce4226e19632703ab4b8df2349f7f
	}
	//首页搜索框
	public function search_input(Request $request){
		$name=$request->input("name");
		$sql="select role_name from role_type where(role_name like '%$name%') ";
		$data=DB::select($sql);
		//print_r($data);die;
		foreach ($data as $value) {
			echo "<a href='javascript:void(0);' onclick='clicks(this)' >".$value->role_name."</a></br>";
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
			// var_dump($re);die;
			$userInfo = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
			// var_dump($username);die;
			// $u_id = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
			$id=$userInfo->u_id;
			// var_dump($id);die;
			$a=$userInfo->username;
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
<<<<<<< HEAD
					// $as=$_COOKIE['id'];

					// Session::put('username',$username);
					// $a = Session::get('username');



			



					// var_dump($as);die;
					return "<script>alert('登陆成功');location.href='index?id=1';</script>";


					// Session::put('username',$username);
					// $a = Session::get('username');
			

=======

					setcookie('u_id',$id);
					// $as=$_COOKIE['u_id'];
					// var_dump($as);die;
					return "<script>alert('登陆成功');location.href='index';</script>";
>>>>>>> 53f4870589fce4226e19632703ab4b8df2349f7f
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
		Session::destroy();
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