<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo e(url('Admin/content')); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<table>
			<tr>
				<td>广告名称</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>广告图片</td>
				<td><input type="file" name="gimg"></td>
			</tr>
			<tr>
				<td>广告投放地区</td>
				<td><select name="area" >
					<option value="0">全国站</option>
						<?php foreach($city as $v): ?>
						<option value="<?php echo e($v->region_id); ?>"><?php echo e($v->region_name); ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="添加"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
</body>
</html>