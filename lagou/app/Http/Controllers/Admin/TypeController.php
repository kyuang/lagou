<?php
namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Role_type;
use Input;

 header("Content-type: text/html; charset=utf-8");
class TypeController extends Controller
{
	public function lists()
	{
		$user = Role_type::get_type();
		var_dump($user);die;
		return view('admin.pricing',['arr'=>$user]);
	}

	public function add()
	{
		$user = Role_type::get_type();
		// var_dump($user);die;
		return view('admin.add_type',['arr'=>$user]);
	}



}

?>