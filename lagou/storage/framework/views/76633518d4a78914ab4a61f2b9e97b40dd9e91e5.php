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
							<p style="float: right;line-height: 60px;margin-left: 20px;"><a href="<?php echo e(url('Type/lists')); ?>">分类列表</a></p>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

					<div class="row">
						<div class="col-xs-6 col-sm-3 pricing-box">
							<div class="widget-box">
								<!-- 添加分类表单 -->
								<div class="widget-header header-color-dark">
									<form action="<?php echo e(url('Type/add')); ?>" method="post" >
										<table>
											<tr>
												<td>分类名称</td>
												<td><input type="text" name="role_name" id=""></td>
											</tr>
											<tr>
												<td>父级分类</td>
												<td><select name="p_id" id="">
													<option value="0">顶级分类</option>
													<?php foreach($arr as $v) { ?>
														<option value="<?php echo $v['r_id'] ?>"><?php echo $v['role_name'] ?></option>
														<?php foreach($v['child'] as $val): ?>
															<option value="<?php echo e($val->r_id); ?>"> &nbsp; &nbsp;|--<?php echo e($val->role_name); ?></option>
														<?php endforeach; ?>
													<?php } ?>

												</select></td>
											</tr>
											<tr>
												<td>是否显示</td>
												<td><input type="radio" name="is_show"  value="0" />不显示
												<input type="radio" name="is_show" value="1" checked/>显示</td>
											</tr>
											<tr>
												<td><input type="reset" value="重置" /></td>
												<td><input type="submit" value="提交" /></td>
											</tr>
										</table>
									</form>
								</div>

							</div>
						</div>
					</div>

		<?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>				
</body>
</html>