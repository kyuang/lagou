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
		//查询数据
		// $id=$_GET['id'];
		$data=DB::table('job')->where('j_id',17)->first();
		//职位名称
		// var_dump($data);die;
		$job_name=$data->job_name;
		//职位描述
		$duty=unserialize($data->duty);
		// foreach($duty as $k => $v)
		// {
		// 	$zhiwei[$k]['duty']=$v;
		// }
		// var_dump($zhiwei);die;
		//诱惑
		$entice=$data->entice;
		//优势
		$gain=unserialize($data->gain);
		//职业要求
		$ask=unserialize($data->ask);
		// foreach($ask as $k => $val)
		// {
		// 	$yaoqiu[$k]['ask']=$val;
		// }
		// var_dump($zhiwei);die;
		//展示首页
		return view('details.jobdetails',['job_name'=>$job_name,'entice'=>$entice,'duty'=>$duty,'ask'=>$ask,'gain'=>$gain]);
	}
}