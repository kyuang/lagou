<!DOCTYPE html>
<html lang="en">
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
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	width: 800px;
	height: 400px;
	text-align:center;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	text-align:center;
	border-width: 1px;
	/*padding: 8px;*/
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	/*padding: 8px;*/
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>

	</head>

	<body>
		<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">后台管理</a>
							</li>
							<li class="active">添加分类</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1 style="float: left;line-height: 60px">
								分类
								<small>
									<i class="icon-double-angle-right"></i>
									Large &amp; Small
								</small>
							</h1>
							<p style="float: right;line-height: 60px;margin-left: 20px;"><a href="<?php echo e(url('Type/add')); ?>">添加分类</a></p>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-6 col-sm-3 pricing-box">
										<div class="widget-box" style="width: 800px;">
											<div class="widget-header header-color-dark">
												<h5 class="bigger lighter">Basic Package</h5>
											</div>

										</div>

<!-- 分类列表 -->
	<div style="width: 800px;">
		<table border="1" class="gridtable">
			<tr>
				<th>id</th>
				<th>分类名称</th>
				<th>父级分类</th>
				<th>是否显示</th>
				<th>操作</th>
			</tr>
			<?php foreach($arr as $v): ?>
			<tr>
				<td><?php echo e($v['r_id']); ?></td>
				<td><?php echo e($v['role_name']); ?></td>
				<td><?php echo e($v['p_id']); ?></td>
				<td><?php if($v['is_show']==0): ?>  不显示 <?php else: ?>  显示  <?php endif; ?></td>
				<td><a href="javascript:;;" onclick="javascript:return confirm('确定要删除?');" >删除</a> | <a href="">修改</a></td>
			</tr>
			<?php endforeach; ?>

		</table>
		<script type="text/javascript">
		function del(a)
		{
			alert(12);
		}
		</script>







	</div>



							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
