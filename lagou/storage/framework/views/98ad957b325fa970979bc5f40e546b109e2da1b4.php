<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="23635710066417756375">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
<meta charset="UTF-8">

<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

<title>找工作-互联网招聘求职网-拉勾网</title>

<link rel="Shortcut Icon" href="https://www.lgstatic.com/passport/static/common/static/favicon_faed927.ico">


<!-- header/global_domain FE_base.. -->

<script src="login/v.htm" charset="utf-8"></script><script src="<?php echo e(URL::asset('/')); ?>login/analytics.js" async=""></script><script src="<?php echo e(URL::asset('/')); ?>login/a.js" async=""></script><script type="text/javascript">
var GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
	ctx : "http://www.lagou.com",
	rctx : "http://hr.lagou.com",
    crctx : "http://c.hr.lagou.com",
	pctx : "https://passport.lagou.com",
	actx : "http://account.lagou.com",
	paictx : "http://pai.lagou.com",
	sctx : "http://suggest.lagou.com"
};
</script>

<!-- 页面样式 --><!-- H5	 -->
<!--[if lt IE 9]>
  	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>login/main.css">
</head>
<body>

<!-- 页面主体START -->
<header class="sso_header">
	<a href="http://www.lagou.com/" class="logo">
	</a>
</header>
<section class="content_box cleafix">
	<div class="left_area fl">
		<form action="<?php echo e(url('Index/login')); ?>" method="post" id="from">
			<div class="form_body" data-view="loginView">
				<div style="display: block;" class="input_item clearfix" data-propertyname="username" data-controltype="Phone">
					<input class="input input_white" id="" name="email" placeholder="请输入已验证手机/邮箱" data-required="required" autocomplete="off" type="text">
				</div>
				<div style="display: block;" class="input_item clearfix" data-propertyname="password" data-controltype="Password">
					<input class="input input_white" id="" name="password" placeholder="请输入密码" data-required="required" autocomplete="off" type="password">
				</div>
				<div class="input_item clearfix" data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display: block;">
					<input class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off" type="text"><img src="<?php echo e(URL::asset('/')); ?>login/create.jpg" class="yzm">
					
					<a href="javascript:;" class="reflash"></a>
				</div>
				<div class="input_item clearfix">
					<a href="https://passport.lagou.com/accountPwd/toReset.html" class="forgot_pwd">忘记密码？</a>
				</div>
				<div style="display: block;" class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
					<input class="btn btn_green btn_active btn_block btn_lg" value="登&nbsp;录" type="submit">
				</div>
				<div class="input_item clearfix">
					<h5 class="reg_now">还没有拉勾帐号？<a href="<?php echo e(URL::asset('Index/register')); ?>">立即注册</a></h5>
				</div>
				<input value="true" id="isVisiable_request_form_verifyCode" type="hidden">
			</div>
		</form>
	</div>

	<div class="divider fl">
		<img src="<?php echo e(URL::asset('/')); ?>login/divider-login_3362138.jpg" alt="分割线">
	</div>
	<div class="right_area fl">
		<h5>使用以下帐号直接登录:</h5>
		<ul class="vender_login clearfix">
			<li><a href="https://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank"></a></li>
			<li><a href="https://passport.lagou.com/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank"></a></li>
			<li class="last_child"><a href="https://passport.lagou.com/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank"></a></li>
		</ul>
		<div class="qrcode">
			<img src="<?php echo e(URL::asset('/')); ?>login/qrcode_0ec6bff.jpg" alt="二维码">
			<p>[ 扫码下载拉勾APP ]</p>
		</div>
	</div>
</section>

<footer>
	<h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib -->
<!--拉勾UI框架 -->
<!-- analytics js file --><!-- plat analytics js file -->
<script type="text/javascript" src="<?php echo e(URL::asset('/')); ?>login/vendor_b53750a.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('/')); ?>login/jquery.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('/')); ?>login/static_07dbb47.js"></script><script src="<?php echo e(URL::asset('/')); ?>login/h.js" type="text/javascript"></script>
<script type="text/javascript">
    //login page
    require(['pc/page/login/main']);
</script>
<script>
$("#from").submit(function(){
	var url="<?php echo e(url('Index/login')); ?>";
});
</script>


</body></html>