<?php  
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role_type extends Model 
{
	protected $table = "role_type";
	protected function get_type()
	{
		$user = Role_type::all();
		foreach ($user as $key => $v) 
		{
			// $arr[] = $v->attributes;
			// static $arr = array();
			if($v->attributes['p_id']==0)
			{
				$arr[$v->attributes['r_id']] = $v->attributes;
			}
		}
		foreach($arr as $k=>$val)
		{			
				$arr[$k][] = '';			
		} 
		return $arr;
	}
}









?>