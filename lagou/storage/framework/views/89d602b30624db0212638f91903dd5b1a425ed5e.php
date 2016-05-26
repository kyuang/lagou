<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10;IE=9;IE=8;IE=7;IE=EDGE">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="alternate" media="handheld" href="#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>找工作-互联网招聘求职网-拉勾网</title>
<meta property="qc:admins" content="23635710066417756375">
<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">
<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script src="<?php echo e(URL::asset('/')); ?>gongji_files/v.htm" charset="utf-8"></script><script src="<?php echo e(URL::asset('/')); ?>gongji_files/analytics_002.js" async=""></script><script src="<?php echo e(URL::asset('/')); ?>gongji_files/a.js" async=""></script><script type="text/javascript">
var ctx = "http://www.lagou.com";
var rctx = "http://hr.lagou.com";
var pctx = "http://passport.lagou.com";
var crctx = "http://www.lagou.com";
var sctx = "http://suggest.lagou.com";
var chrctx = "http://c.hr.lagou.com";
var paictx = "http://pai.lagou.com";

var frontLogin = "http://www.lagou.com/frontLogin.do";
var frontLogout = "http://www.lagou.com/frontLogout.do";
var frontRegister = "http://www.lagou.com/frontRegister.do";

</script>
<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>gongji_files/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>gongji_files/myresume.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>gongji_files/tailoring.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>gongji_files/external.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('/')); ?>gongji_files/popup.css">
<script src="<?php echo e(URL::asset('/')); ?>gongji_files/jquery_002.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('/')); ?>gongji_files/jquery_003.js"></script>
<script src="<?php echo e(URL::asset('/')); ?>gongji_files/ajaxfileupload.js" type="text/javascript"></script>

<!-- <script type="text/javascript" src="<?php echo e(URL::asset('/')); ?>gongji_files/additional-methods.js"></script> -->
<script src="<?php echo e(URL::asset('/')); ?>jquery/jquery-2.1.4.min.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2016051217"></script>
<![endif]-->


</head>
<body id="" style="background:#00b38a"> 

<div id="mr_wrapper">
	<div id="mrHeader">
		<dl class="collapsible_menu">
		   	<dt>
		  		<span id="nowrap"><?php echo Session::get('username'); ?></span> 
		   		<i></i>
		   	</dt>                
		    <dd class="logout dn"><a href="http://www.lagou.com/frontLogout.do" rel="nofollow">退出</a></dd>
	   </dl> 
	</div>
</div>
<div class="mr_container mr_t threestep_main">
	<div style="height: 444px;" class="mr_threeBasic">
		<!-- 需要抽出来作为公共样式 -->
		<div class="mr_enoughWidth">
			<div class="mr_workexp">
				<div class="hei104">
					<dl class="mr_head mr_thead">
			            <!--alt="头像"改为昵称,头像需要判断是否使用默认头像-->          
			            <dt>
			            	<img src="<?php echo e(URL::asset('/')); ?>gongji_files/default_headpic.png" alt="头像" class="mr_headimg" height="117" width="117">
			                <img src="<?php echo e(URL::asset('/')); ?>gongji_files/mr_head.png" alt="头像" class="mr_headbg" height="140" width="137">
			                <img src="<?php echo e(URL::asset('/')); ?>gongji_files/mr_headhover.png" class="mr_headhover" height="118" width="119">
			                <input class="mr_headfile" id="headPic" name="headPic" onchange="myresumeCommon.utils.imageUpload(this,myresumeCommon.requestTargets.photoUpload,uploadPhoto.upSucc,uploadPhoto.upFail);" title="支持jpg、jpeg、gif、png格式，文件小于10M" type="file">
			            </dt>
			            			            <dd><h2></h2></dd>
			            			        </dl> 
		        </div>
        	        	<div class="work">
    					<form class="mr_introduceSelf" id="mr_introduceSelf" action="javascript:;">
		        	<div class="selfCon">
		        				        		<textarea style="transition: border 0s ease-in 0s;" name="self" placeholder="一句话介绍自己，告诉我为什么选择你而不是别人"></textarea>
		        				        		<span class="mroneError dn"></span>
		        		<div class="mr_wordcount">还可输入<span class="word_count">58</span>字</div>
		        		<div class="mr_example">
		        			<div class="mr_exampleicon"><em></em><span>查看示例</span></div>
		        			<div class="mr_exampleCon dn"><i></i>
		        				<dl>
		        					<dt>[示例一]</dt>
		        					<dd>3年JAVA开发经验，负责过大型项目，重度极客，学习能力强</dd>
		        				</dl>
		        				<dl class="mt10">
		        					<dt>[示例二]</dt>
		        					<dd>前腾讯视频市场部负责人，有30人团队管理经验，人脉广</dd>
		        				</dl>
		        			</div>
		        		</div>
		        	</div>
	            	<div class="mr_button"><a href="javascript:;">上一步</a><input value="创建完成！" type="submit"></div>
					<input value="c1fc1830804c4397a91077e66c69454d" id="resubmitToken" type="hidden">
					<input value="4159727" id="resumeId" type="hidden">
            	</form>
			</div>
		</div>
	</div>