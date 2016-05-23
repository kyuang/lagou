<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>招聘信息添加</title>
</head>
	<body>
		<center>
		<h2>发布职位招聘信息</h2>
			<form action="<?php echo e(url('/Admin/Add_position')); ?>" method="post">
				<table>
					<tr>
						<td>职位名称</td>
						<td><input type="text" name="job_name" /></td>
					</tr>
					<tr>
						<td>公司名称</td>
						<td><input type="text" name="company_name" /></td>
					</tr>
					<tr>
						<td>融资情况</td>
						<td>
							<select name="financing_name" id="">
								<?php foreach($financing as $v): ?>
									<option value="<?php echo e($v->financing_name); ?>"><?php echo e($v->financing_name); ?></option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
					<tr>
					<tr>
						<td>公司类型</td>
						
						<td>
							<?php foreach($type as $v): ?>
				<input type="checkbox" name="company_type[]" value="<?php echo e($v->company_type); ?>" /><?php echo e($v->company_type); ?>

							<?php endforeach; ?>
						</td>
						
					</tr>
					<tr>
						<td>招聘薪资</td>
						<td><input type="text" name="salary" /></td>
					</tr>
					
						<td>公司福利</td>
						<td>
							<p><a href="javascript:void(0)" onclick="fun(this)">+</a><input type="text" name="material_benefits[]" />&nbsp;&nbsp;<span>简要描述，最多四字一项</span></p>
						</td>
					</tr>
					<tr>
						<td>简要描述</td>
						<td><input type="text" name="Briefly_describe" /></td>
					</tr>
					<tr>
						<td>工作经验要求</td>
						<td>
							<select name="work_jingyan" >
								<?php foreach($jingyan as $v): ?>
									<option value="<?php echo e($v->work_jingyan); ?>"><?php echo e($v->work_jingyan); ?></option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>学历要求</td>
						<td>
						<select name="xueli" >
							<?php foreach($xueli as $v): ?>
							<option value="<?php echo e($v->xueli); ?>"><?php echo e($v->xueli); ?></option>
							<?php endforeach; ?>
						</select>
						</td>
					</tr>
					<tr>
						<td>职位诱惑:</td>
						<td><input type="text" name="entice" /></td>
					</tr>
					<tr>
						<td>岗位职责:</td>
						<td><p>
							<a href="javascript:void(0)" onclick="fun(this)">+</a>
							<input type="text" name="duty[]" />
						</p></td>
					</tr>
					<tr>
						<td>职位要求:</td>
						<td>
							<p><a href="javascript:void(0)" onclick="fun(this)">+</a>
							<input type="text" name="ask[]" />
							</p>
						</td>
					</tr>
					<tr>
						<td>你可以得到:</td>
						<td>
							<p>
							<a href="javascript:void(0)" onclick="fun(this)">+</a>
							<input type="text" name="gain[]" />
							</p>
						</td>
					</tr>
					<tr>
						<td>工作地点</td>
						<td>
							<select name="region_name" >
							<?php foreach($city as $v): ?>
							<option value="<?php echo e($v->region_name); ?>"><?php echo e($v->region_name); ?></option>
							<?php endforeach; ?>
						</select>
						</td>
					</tr>
					<tr>
						<td><input type="reset" value="重置" /></td>
						<td><input type="submit" value="提交" /></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
<script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>
<script>
	function fun(ths){
		//alert(tr);
		var a=$(ths).html();
		if(a=="+"){
			var obj =$(ths).parent().clone();
			obj.find('a').html('-');
			$(ths).parent().parent().append(obj);
		}else{
			$(ths).parent().remove();
		}
	}
</script>