<?php  
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role_type extends Model 
{
	protected $table = "role_type";
	protected function get_type()
	{
		$user = Role_type::where(['p_id'=>0])->get();
		foreach($user as $key=>$v)
		{
			$user[$key]['child'] = Role_type::where(['p_id'=>$v->attributes['r_id']])->get();
		}

		return $user;
	}

	protected function type_list()
	{
		$user = Role_type::all();
		foreach($user as $v){
			$arr[] = $v->attributes;
		} 
		return $arr;
	}
}









?>