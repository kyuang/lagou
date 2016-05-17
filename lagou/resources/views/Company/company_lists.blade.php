<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>招聘信息管理界面</title>
</head>
	<body>
		<center>
			<table>
				<tr>
					<th><input type="checkbox" id="box[]" />全选</th>
					<th>职位名称</th>
					<th>公司名称</th>
					<th>融资情况</th>
					<th>公司主打</th>
					<th>招聘薪资</th>
					<th>公司福利</th>
					<th>简述福利</th>
					<th>要求学历</th>
					<th>要求经验</th>
					<th>公司诱惑</th>
					<th>岗位职责</th>
					<th>岗位要求</th>
					<th>你将得到</th>
					<th>开始时间</th>
					<th>是否最新</th>
					<th>是否最热</th>
					<th>操作</th>
				</tr>
			@foreach($data as $v)
				<tr>
					<td><input type="checkbox" id="box" /></td>
					<td>{{$v->job_name}}</td>
					<td>{{$v->company_name}}</td>
					<td>{{$v->financing_name}}</td>
					<td>
						@foreach($v->company_type as $a)
							{{$a}}、
						@endforeach
					</td>
					<td>
						@foreach($v->material_benefits as $b)
							{{$b}}、
						@endforeach
					</td>
					<td>{{$v->Briefly_describe}}</td>
					<td>{{$v->work_jingyan}}</td>
					<td>{{$v->xueli}}</td>
					<td>{{$v->entice}}</td>
					<td>
						@foreach($v->duty as $c)
							{{$c}}
						@endforeach
					</td>
					<td>@foreach($v->ask as $d)
							{{$d}}
						@endforeach</td>
					<td>@foreach($v->gain as $e)
							{{$e}}
						@endforeach</td>
					<td>{{$v->region_name}}</td>
					<td>{{$v->kai_time}}</td>
					<td>{{$v->is_hot}}</td>
					<td>{{$v->is_new}}</td>
					<td><a href="">删除</a><a href="">修改</a></td>
				</tr>
			@endforeach
			</table>
		</center>
	</body>
</html>