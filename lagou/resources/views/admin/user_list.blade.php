<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>用户管理</title>
</head>
<body>
@include('admin.header')
	<table>
		<tr>
			<th>id</th>
			<th>用户名</th>
			<th>密码</th>
			<th>邮箱</th>
			<th>手机</th>
			<th>管理</th>
		</tr>
		@foreach($user as $v)
		<tr>
			<td>{{$v->u_id}}</td>
			<td>{{$v->username}}</td>
			<td>{{$v->password}}</td>
			<td>{{$v->email}}</td>
			<td>{{$v->phone}}</td>
			<td><a href="">删除</a></td>
		</tr>
		@endforeach
	</table>
	@include('admin.header')
</body>
</html>