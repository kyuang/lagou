<?php
	namespace App\Http\Controllers\Admin;

	use Validator,DB,redirect;

	use Illuminate\Http\Request;

	use App\Http\Controllers\Controller;

	use App\Http\Models\Role_type;

	use Illuminate\Support\Facades\Input;

 	header("Content-type: text/html; charset=utf-8");

class CompanyController extends Controller
{
	//公司添加 职位发布 
	public function Company_position(){
		//城市地区名称
		$city=DB::table("region")->where("parent_id",1)->select('region_id','region_name')->get();
		//print_r($city);
		//工作类型
		$type=DB::table("company_type")->select()->get();
		//print_r($type);die;
		//公司福利
		$financing=DB::table("financing_name")->select()->get();
		//工作经验
		$jingyan=Db::table("work_jingyan")->select()->get();
		//要求学历
		$xueli=Db::table("xueli")->select()->get();

		return view('Company.Company_position',["type"=>$type,"financing"=>$financing,"jingyan"=>$jingyan,"xueli"=>$xueli,"city"=>$city]);
	}
	//公司发布招聘
	public function Add_position(Request $request){
		/*
		$job_name=Input::get("job_name");

		$compary_name=Input::get("compary_name");

		$financing_id=Input::get("financing_id");

		$compant_type_id=$request->input("compant_type_id");
		print_r($compant_type_id);
		print_r($_POST);die;

		$salary=Input::get("salary");

		$material_benefits=Input::get("material_benefits[]");

		$Briefly_describe=Input::get("Briefly_describe");

		$work_id=Input::get("work_id");

		$x_id=Input::get("x_id");

		$entice=Input::get("entice");

		$duty=Input::get("duty[]");

		$ask=Input::get("ask[]");

		$gain=Input::get("gain[]");

		$region_name=Input::get("region_name");
	*/	
		$data = $request->input();
		//print_r($data);
		$data['company_type']=serialize($data['company_type']);
		$data['material_benefits']=serialize($data['material_benefits']);
		$data['duty']=serialize($data['duty']);
		$data['ask']=serialize($data['ask']);
		$data['gain']=serialize($data['gain']);
		$data['kai_time']=date('Y-m-d',time());
		$data['is_hot']=0;
		$data['is_new']=0;
		//print_r($data);die;
		$re=DB::table("job")->insert($data);
		if($re){
			return redirect('/Admin/Job_lists');
		}

	}
	//职位详情页
		public function Job_lists(){
			$data=DB::table("job")->select()->get();
			//print_r($data);die;

			foreach ($data as $k => $v) {
				$data[$k]->company_type=unserialize($v->company_type);
				$data[$k]->material_benefits=unserialize($v->material_benefits);
				$data[$k]->duty=unserialize($v->duty);

				$data[$k]->ask=unserialize($v->ask);
				

				$data[$k]->gain=unserialize($v->gain);
			}
			print_r($data);die;
		return view("Company.company_lists",["data"=>$data]);

		}
}?>