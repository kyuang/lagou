<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>UI组件 - Bootstrap后台管理系统模版Ace下载</title>
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

		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo e(URL::asset('/')); ?>/assets/css/jquery.gritter.css" />

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

		<style>
			.spinner-preview {
				width:100px;
				height:100px;
				text-align:center;
				margin-top:60px;
			}
			
			.dropdown-preview {
				margin:0 5px;
				display:inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
		</style>

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
								<a href="#">系统设置</a>
							</li>
							<li class="active">城市站管理</li>
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
							<h1>
								城市站管理
								<small>
									<i class="icon-double-angle-right"></i>
									城市站管理
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div>
							<h2>已开通城市站</h2>
							<table>
								<tr>
									<th>ID</th>
									<th>城市名称</th>
									<th>排序</th>
									<th>操作</th>
								</tr>
								<?php foreach($city as $v): ?>
								<tr>
									<td><?php echo e($v->lgid); ?></td>
									<td><?php echo e($v->zhan); ?></td>
									<td><?php echo e($v->region_name); ?></td>
									<td><a href="">删除</a></td>
								</tr>
								<?php endforeach; ?>
							</table>

						</div>


						<div id="add_city" style="">
							<h2>添加开通城市</h2>
							<form action="<?php echo e(url('City/add_city')); ?>" method="post">
								<table>
									<tr>
										<td>城市</td>
										<td><select name="zhan" id="">
											<option value="">请选择...</option>
											<?php foreach($region as $v): ?>
											<option value="<?php echo e($v->region_id); ?>"><?php echo e($v->region_name); ?></option>
											<?php endforeach; ?>
										</select></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" value="添加"></td>
									</tr>
								</table>
							</form>
		
						</div>



					</div>

		<?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>				
</body>
</html>
