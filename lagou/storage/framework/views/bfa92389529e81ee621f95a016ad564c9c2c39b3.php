<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		<table>
			<tr>
				<td>广告名称</td>
				<td><input type="text" name="gname"></td>
			</tr>
			<tr>
				<td>广告图片</td>
				<td><input type="file" name="gimg"></td>
			</tr>
			<tr>
				<td>广告投放地区</td>
				<td><select name="region_name" >
						<?php foreach($city as $v): ?>
						<option value="<?php echo e($v->region_name); ?>"><?php echo e($v->region_name); ?></option>
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