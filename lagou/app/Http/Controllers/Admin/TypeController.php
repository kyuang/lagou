<?php
namespace App\Http\Controllers\Admin;

use Validator,DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Role_type;
use Input;

 header("Content-type: text/html; charset=utf-8");
class TypeController extends Controller
{
	public function lists()
	{
		$user = Role_type::type_list();
		
		return view('admin.pricing',['arr'=>$user]);
	}

	public function add()
	{
		if(!isset($_POST['role_name']))
		{
			$user = Role_type::get_type();
		// var_dump($user);die;
		return view('admin.add_type',['arr'=>$user]);
		}
		else
		{
			$data = $_POST;
			$re = DB::table('role_type')->insert($data);
			if($re)
			{
				echo "<a href='javascript:history.go(-1)'>返回继续添加</a><br><a href='lists'>去列表</a>";
			}
		}	
	}

	public function show()
	{
		$list = Role_type::type_go();
		var_dump($list);die;
	}



}

?>