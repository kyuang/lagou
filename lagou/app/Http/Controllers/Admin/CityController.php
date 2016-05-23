<?php
namespace App\Http\Controllers\Admin;

use Validator,DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Role_type;

header("Content-type: text/html; charset=utf-8");
class CityController extends Controller
{

	public function elements()
	{
		$region = DB::table('region')->where('parent_id',1)->get();
		$city = DB::table('region')->join('lagou_region',"lagou_region.lgid",'=','region.region_id')->get();
		// var_dump($city);die;
		return view('admin.elements',['region'=>$region,'city'=>$city]);
		
	}
	/**
	 * 添加城市站
	 */
	public function add_city(Request $request)
	{
		$zhan = $request->input('zhan');
		$re = DB::table('lagou_region')->where('zhan',$zhan)->get();
		if($re)
		{
			echo "此城市已经添加";die;
		}
		DB::table('lagou_region')->insert(['zhan'=>$zhan]);
	}



}

?>