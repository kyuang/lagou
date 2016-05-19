<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;
use DB;

class UserController extends Controller
{
	public function user_list()
	{
		$user = DB::table('users')->get();
		return view('admin.user_list',['user'=>$user]);
	}

}


?>