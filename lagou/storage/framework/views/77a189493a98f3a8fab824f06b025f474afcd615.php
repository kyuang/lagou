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
<body id="jiaoyu" style="background:#00b38a"> 

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
			            			            <dd><h2>工作经历</h2></dd>
			            			        </dl> 
		        </div>
        	        	<div class="work">
    					 <form class="mr_workexpForm workform" action="jianli_add">
		        	 	<div class="mr_workexpFormTop">
		        	 	<input class="workHidden" value="" type="hidden">
	        				<label>
		        				<input type="hidden" id="u_id" value="<?php echo Session::get('id') ?>">
		        				<input id="ming" name="companyName" placeholder="公司名称" class="companyName" tabindex="-1" data-focus="0" type="text">
	        				</label>
		        			<label><input id="zhi" name="yourPosition" placeholder="你的职位" class="yourPosition" tabindex="-1" data-focus="1" type="text"></label>
		        			<div class="clearfix workDate">
			        			<div class="mr_workcity mr20 mrWork">
					                 <input name="startTime" type="hidden">
					                 <label class="mrStartTimeLabel"><input value="起始时间" tabindex="-1" data-focus="2" type="button">
					                 <em></em></label>
					                 	<div style="display: none;" class="mr_calendar_ym start clearfixs dn">
				 								<ul class="mr_year reset">
				 									<!-- <li>至今</li> -->
				 													 									<li class="today">2016</li>
				 													 									<li>2015</li>
				 													 									<li>2014</li>
				 													 									<li>2013</li>
				 													 									<li>2012</li>
				 													 									<li>2011</li>
				 													 									<li>2010</li>
				 													 									<li>2009</li>
				 													 									<li>2008</li>
				 													 									<li>2007</li>
				 													 									<li>2006</li>
				 													 									<li>2005</li>
				 													 									<li>2004</li>
				 													 									<li>2003</li>
				 													 									<li>2002</li>
				 													 									<li>2001</li>
				 													 									<li>2000</li>
				 													 									<li>1999</li>
				 													 									<li>1998</li>
				 													 									<li>1997</li>
				 													 									<li>1996</li>
				 													 									<li>1995</li>
				 													 									<li>1994</li>
				 													 									<li>1993</li>
				 													 									<li>1992</li>
				 													 									<li>1991</li>
				 													 									<li>1990</li>
				 													 								</ul>
				 								<ul class="mr_month clearfixs reset">
				 									<li><span>1月</span></li>
				 									<li><span>2月</span></li>
				 									<li class="mr0"><span>3月</span></li>
				 									<li><span>4月</span></li>
				 									<li><span class="today">5月</span></li>
				 									<li class="mr0"><span>6月</span></li>
				 									<li><span>7月</span></li>
				 									<li><span>8月</span></li>
				 									<li class="mr0"><span>9月</span></li>
				 									<li class="mb0"><span>10月</span></li>
				 									<li class="mb0"><span>11月</span></li>
				 									<li class="mr0 mb0"><span>12月</span></li>
				 								</ul>
				 							</div>
					                         
					            </div>
					            <div class="mr_workcity mrWork">
					                 <input name="endTime" type="hidden">
					                 <label class="mrEndTimeLabel"><input value="结束时间" tabindex="-1" data-focus="3" type="button">
					                 <em></em></label>
					                 <div style="display: none;" class="mr_calendar_ym end clearfixs dn ">
										<ul class="mr_year reset"><li>至今</li>
													 									<li class="today">2016</li>
		 											 									<li>2015</li>
		 											 									<li>2014</li>
		 											 									<li>2013</li>
		 											 									<li>2012</li>
		 											 									<li>2011</li>
		 											 									<li>2010</li>
		 											 									<li>2009</li>
		 											 									<li>2008</li>
		 											 									<li>2007</li>
		 											 									<li>2006</li>
		 											 									<li>2005</li>
		 											 									<li>2004</li>
		 											 									<li>2003</li>
		 											 									<li>2002</li>
		 											 									<li>2001</li>
		 											 									<li>2000</li>
		 											 									<li>1999</li>
		 											 									<li>1998</li>
		 											 									<li>1997</li>
		 											 									<li>1996</li>
		 											 									<li>1995</li>
		 											 									<li>1994</li>
		 											 									<li>1993</li>
		 											 									<li>1992</li>
		 											 									<li>1991</li>
		 											 									<li>1990</li>
		 																			</ul>
										<ul class="mr_month clearfixs reset">
											<li><span>1月</span></li>
											<li><span>2月</span></li>
											<li class="mr0"><span>3月</span></li>
											<li><span>4月</span></li>
											<li><span class="today">5月</span></li>
											<li class="mr0"><span>6月</span></li>
											<li><span>7月</span></li>
											<li><span>8月</span></li>
											<li class="mr0"><span>9月</span></li>
											<li class="mb0"><span>10月</span></li>
											<li class="mb0"><span>11月</span></li>
											<li class="mr0 mb0"><span>12月</span></li>
										</ul>
									</div>
				            	</div>
				        	</div>
		        		</div>
			        </form> 
			        			       
			        <!-- <div id="mradd"></div>  -->
			        	<div class="adddel clearfixs">
			        	<div class="addworkExp add"><em></em>添加更多工作经历</div>
			        	<em class="mrworkdel dn" title="删除本条">&nbsp;</em>
		        	</div>
		        			        	 <input class="num" value="0" type="hidden">
		        	
		        				        		<a href="">返回</a>
		        				        		<button>下一步:继续完善</button>
		        </div>	
		      </div>
		        <script>
		        	$('button').click(function(){
		        		var u_id = $("#u_id").val();
		        		var ming = $("#ming").val();
		        		var zhi = $("#zhi").val();
		        		//传输到后台
		        		var url ="jianli_add";
		        		var data ={'u_id':u_id,'ming':ming,'zhi':zhi};
		        		$.get(url,data,function(ms){
		        			
		        		});
		        		//与后台交互
		        		var url = "jiaoyu";
		        		$.get(url,function(msg){
		        			$("#jiaoyu").html(msg);
		        		})

		        	});
		        </script>
