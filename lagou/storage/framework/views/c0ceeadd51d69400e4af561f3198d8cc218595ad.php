<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
		<meta charset="utf-8" />
		<title>价格面板 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="<?php echo e(URL::asset('/')); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo e(URL::asset('/')); ?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo e(URL::asset('/')); ?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo e(URL::asset('/')); ?>/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<table>
		<tr>
			<th>序号</th>
			<th>名称</th>
			<th>url</th>
			<th>内容</th>
		</tr>

		<?php foreach($data as $v): ?>
		<tr>
			<td><input type="text" tid='<?php echo e($v->id); ?>' name="sort" value="<?php echo e($v->sort); ?>" onblur="cuncun(this)" /></td>
			<td><input type="text" tid='<?php echo e($v->id); ?>' name="link_name" value="<?php echo e($v->link_name); ?>" onblur="cuncun(this)" /></td>
			<td><input type="text" tid='<?php echo e($v->id); ?>' name="link_href" value="<?php echo e($v->link_href); ?>" onblur="cuncun(this)" /></td>
			<td><input type="text" tid='<?php echo e($v->id); ?>' name="link_title" value="<?php echo e($v->link_title); ?>" onblur="cuncun(this)" /></td>
		</tr>
		<?php endforeach; ?>
		
	</table>
	<form action="<?php echo e(url('Admin/link_add')); ?>" method="post" name="form">
		<table>
	
		<tr>
			<td>
				<input type="button" value="+" id='bt'/>
			</td>
		</tr>
	
		</table>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<input type="submit" value="保存" />
	</form>


<div>
	<h2>前台展示</h2>
	<?php foreach($data as $v): ?>
		<p><?php echo e($v->link_name); ?></p>
	<?php endforeach; ?>

</div>
<?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<script type="text/javascript" src='../../public/js/jquery.js'></script>
<script type="text/javascript">
function cuncun(ts)
{
	var id = $(ts).attr('tid');
	var name = $(ts).attr('name');
	var val = $(ts).val();
	$.get("<?php echo e(url('Admin/link_update')); ?>",{id:id,name:name,val:val});
}
$('#bt').click(function(){
	str = "<tr>";
	str += "<td><input type='button' value='-' onclick='jianjian(this)'/><input type='text' name='sort[]' /></td>";
	str += "<td><input type='text' name='link_name[]'  /></td>";
	str += "<td><input type='text' name='link_href[]' value='http://'/></td>";
	str += "<td><input type='text' name='link_title[]'/></td>";
	str += "</tr>";
	$(this).parent().parent().parent().append(str);
});

function jianjian(ts)
{
	$(ts).parent().parent().remove();
}

</script>
</html>