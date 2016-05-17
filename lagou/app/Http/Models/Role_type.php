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

	protected function type_go()
	{
		$data = Role_type::all();
		// return $data;
		return $this->noLimitCate($data,$parent_id=0,$level=0);
	}

	protected  function type_tree()
	{
		$data = Role_type::all();
		return $this->nodetree($data,$parent_id=0);
	}

	//无限极分类1
	 public function noLimitCate($data,$parent_id=0,$level=0)
	 {
  	 	static $lists=array();
  	 	foreach ($data as $key => $v) {
  	 		if($v->attributes['p_id'] == $parent_id){
  	 			$v->attributes['level']=$level;
  	 			$lists[]=$v->attributes;
  	 			$this->noLimitCate($data,$v->attributes['r_id'],$level+1);
  	 		}
  	 	}
  	 	return $lists;
  	 }

  	 //无限极分类2
  	 public function nodetree($data,$parent_id=0)
  	 {
  	 	$lists = array();
  	 	foreach ($data as  $v) 
  	 	{
  	 		if($v->attributes['p_id'] == $parent_id){ 	 		
  	 			$lists[]=$v->attributes;
  	 		}
  	 	}
// return $lists;
  	 	foreach($lists as $key=>$val)
  	 	{
  	 		$lists[$key]['child'] = $this->nodetree($data,$val['r_id']);
  	 	}

  	 	return $lists;
  	 }


}









?>