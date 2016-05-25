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

class JobController extends Controller
{
	public function details()
	{
		//展示首页
		return view('details.jobdetails');
	}
}