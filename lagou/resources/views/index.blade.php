<!DOCTYPE html>
<!-- saved from url=(0021)http://www.lagou.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" charset="utf-8" async="" src="{{URL::asset('files')}}/contains.js"></script><script type="text/javascript" charset="utf-8" async="" src="{{URL::asset('files')}}/taskMgr.js"></script><script type="text/javascript" charset="utf-8" async="" src="{{URL::asset('files')}}/views.js"></script>
<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="23635710066417756375">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
<meta charset="UTF-8">

<meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">

<meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">

<title>拉勾网-最专业的互联网招聘平台</title>

<link rel="Shortcut Icon" href="http://pstatic.lagou.com/www/static/common/static/favicon_faed927.ico">



<!-- global_domain FE_base... -->

<script charset="utf-8" src="{{URL::asset('files')}}/v.js"></script><script async="" src="{{URL::asset('files')}}/analytics.js"></script><script async="" src="{{URL::asset('files')}}/a.js"></script><script type="text/javascript">
window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
ctx : "http://www.lagou.com",
rctx : "http://hr.lagou.com",
crctx : "http://c.hr.lagou.com",
pctx : "http://passport.lagou.com",
actx : "http://account.lagou.com",
paictx : "http://pai.lagou.com",
sctx : "http://suggest.lagou.com"
};
</script>




<!-- 公共样式 -->
<!-- header样式 -->	<!-- footer样式 -->
<!-- 页面样式 -->

<link rel="stylesheet" type="text/css" href="{{URL::asset('files')}}/mCustomScrollbar_ac2fb8b.css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('files')}}/layout_8da9288.css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('files')}}/main.html_aio_2ff5795.css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('files')}}/widgets_cd857e8.css">
<link rel="stylesheet" type="text/css" href="{{URL::asset('files')}}/main.html_aio_2_bc9c0ac.css">
<script src="{{URL::asset('files')}}/jquery.validate.min_f66db7c.js" class="lazyload" charset="utf-8"></script><link href="{{URL::asset('files')}}/loginpop_8eb0b34.css" rel="stylesheet" class="lazyload" charset="utf-8"><script src="{{URL::asset('files')}}/lagou_5427c0e.js" class="lazyload" charset="utf-8"></script><script charset="utf-8" async="" src="{{URL::asset('files')}}/i.js" id="_da"></script></head>
<body><iframe style="display: none;"></iframe>

<!-- 公共html -->
<!-- 页面公用结构、velocity变量 --><input type="hidden" value="" name="userid" id="userid">
<input type="hidden" id="serverTime" value="1463022660995">

<!-- 城市分站 -->


<!-- header -->

<!--C端头部通栏广告位-->


<!--验证注册邮箱-->
<!--
@require "common/widgets/header_c/modules/emailvalid/main.less"
-->


<div id="lg_header">

<!--C端头部黑色导航-->
<div id="lg_tbar">

<div class="inner">

<div class="lg_tbar_l">
<a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
<a href="http://hr.lagou.com/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
</div>

<ul class="lg_tbar_r">
<?php if(empty($_COOKIE['username'])){?>
<li>
<a href="{{url('Index/login')}}" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
</li>
<li>
<a href="{{url('Index/register')}}" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
</li>
<?php }else{?>
<li>
<a href="" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">欢迎<?php echo $_COOKIE['username'];?>登录</a>
</li>
<li>
<a href="{{url('Index/loginout')}}" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
</li>
<?php }?>
</ul>
	


</div>

</div><!--end #lg_tbar-->


<!--C端头部白色导航-->
<div id="lg_tnav">

<div class="inner">
<div class="lg_tnav_l">
<a href="{{URL::asset('files')}}/拉勾网-最专业的互联网招聘平台.html" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
<h1>拉勾网</h1>
</a>
<div class="suggestCity"><strong>北京站</strong><em id="changeCity_btn">[切换城市]</em></div>
</div>
<ul class="lg_tnav_wrap">
<li>
<a href="{{URL::asset('files')}}/拉勾网-最专业的互联网招聘平台.html" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
</li>
<li>
<a href="http://www.lagou.com/gongsi/" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
</li>
<li>
<a href="http://pai.lagou.com/index.html" data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
</li>
<!-- <li>
<a href="#" rel="nofollow">内容频道</a>
</li> -->
</ul>

</div>

</div><!--end #lg_tnav-->


</div><!--end #header-->


<!-- 页面主体START -->
<div class="container clearfix" id="container" style="min-height: 844px;">

<div id="sidebar" class="sidebar">
<div class="mainNavs">


<!-- 单项分类开始 -->
@foreach($type as $k=>$val)
<div class="menu_box">
		<div class="menu_main job_hopping">
		<h2>
		{{$val['role_name']}}
		<!-- 跳槽月 -->
		<span></span>
		</h2>
			@foreach($val['child'] as $aa)
				@foreach($aa['child'] as $bb)
				<a href="http://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4A00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">{{$bb['role_name']}}</a>
				@endforeach
			@endforeach
		</div>

<div class="menu_sub dn" style="top: 0px;">
	@foreach($val['child'] as $va)
	<dl>
		<dt>

			<a href="http://www.lagou.com/zhaopin/houduankaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">{{$va['role_name']}}</a>
		</dt>
		<dd> 
			@foreach($va['child'] as $v)   
			<a href="http://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4O00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">{{$v['role_name']}}</a>
			@endforeach
		</dd>	
	</dl>
	@endforeach
	
</div>
</div>
@endforeach
<!-- 单项分类循环结束 -->


<!-- <a class="subscribe" href="http://www.lagou.com/s/subscribe.html" target="_blank">订阅职位</a> -->
<div class="subscribe">
<a href="http://www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow" data-lg-tj-id="4g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
<span>订阅职位</span>
<i id="n_rss" href="http://www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow">&nbsp;</i>
</a>
</div>
<!-- <div class="suggestCity"><strong>北京站</strong><span id="changeCity_btn">[切换城市]</span></div> -->
</div>
</div>

<div class="content">



<div id="search_box" class="search_box">
<form id="searchForm" class="searchForm" name="searchForm" action="http://www.lagou.com/jobs/list_" method="get">
<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" id="search_input" class="search_input ui-autocomplete-input" tabindex="1" maxlength="64" autocomplete="off" value="" placeholder="搜索职位、公司或地点" style="color: rgb(153, 153, 153);">
<input type="hidden" name="labelWords" id="labelWords" value="">
<input type="hidden" name="fromSearch" id="fromSearch" value="true">
<input type="hidden" name="suginput" id="suginput">

<input type="submit" id="search_button" class="search_button" value="搜索" data-lg-tj-id="4V00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
</form>
<input type="hidden" id="search_py" value="">
<input type="hidden" id="isIndex" value="true">
</div>
<div class="guess_wrapper dn">
<span>猜你要搜</span>
<ul></ul>
</div>
<dl class="hotSearch">
	<dt>热门搜索：</dt>
		@foreach($reci as $v)
		<dd><a href="http://www.lagou.com/topic/citychengdu01.html" class="current">{{$v->reci}}</a></dd>
		@endforeach
		<dd><a href="http://www.lagou.com/activity/dist/imageCollection/pc/html/index.html" class="current">拉勾形象征集</a></dd>
		<dd><a href="http://www.lagou.com/app/download.html?source=search_app" class="current">拉勾APP</a></dd>
</dl>


<div id="home_banner" class="home_banner">
<ul class="banner_bg" style="height: 480px; margin-top: -160px;">


@foreach($advert as $v)
<li class="banner_bg_1 current">
<a class="" href="http://www.lagou.com/gongsi/19365.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0001" data-lg-tj-cid="1982"><img src="{{URL::asset('/').$v->gimg}}" width="612" height="160" alt="货车帮"></a>
</li>
@endforeach


<!-- <li class="banner_bg_2">
<a class="" href="http://www.lagou.com/topic/renrenxingtwo.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0002" data-lg-tj-cid="1975"><img src="{{URL::asset('files')}}/CgqKkVcE0s-AKW7uAACEYADklOk091.JPG" width="612" height="160" alt="人人行(借贷宝)"></a>
</li>



<li class="banner_bg_3">
<a class="" href="http://www.lagou.com/activity/dist/imageCollection/pc/html/index.html?labelWords=hot" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0003" data-lg-tj-cid="2133"><img src="{{URL::asset('files')}}/Cgp3O1csR66AF4jIAACp5e8pwGU974.JPG" width="612" height="160" alt="设计专场"></a>
</li> -->
</ul>
<div class="banner_control">
<em style="top: 55px;"></em>
<ul class="thumbs">
@foreach($advert as $v)
<li class="thumbs_1">
<i></i>
<img src="{{URL::asset('/').$v->gimg}}" width="113" height="42">
</li>
@endforeach
<!-- <li class="thumbs_2 current">
<i></i>
<img src="{{URL::asset('files')}}/CgqKkVcE0tSAdseNAAAokHl4hJg013.JPG" width="113" height="42">
</li>
<li class="thumbs_3">
<i></i>
<img src="{{URL::asset('files')}}/CgqKkVcsR7iAGzTCAAAOwlwqivw702.JPG" width="113" height="42">
</li> -->
</ul>
</div>
</div>

<ul id="da-thumbs" class="da-thumbs">
<li>



<a class="" href="http://www.lagou.com/gongsi/49187.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0001" data-lg-tj-cid="5111">
<img src="{{URL::asset('files')}}/Cgp3O1aDe-qAVMgMAAAfkQtKw50248.png" width="113" height="113" alt="惠民网">
<div class="hot_info">
<h2 title="惠民网">惠民网</h2>
<em></em>
<p title="惠生活 益民生">
惠生活 益民生
</p>
</div>
</a>
</li>
<li>



<a class="" href="http://www.lagou.com/gongsi/766.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0002" data-lg-tj-cid="4792">
<img src="{{URL::asset('files')}}/CgYXBlWLxvOAVgoRAAZGmVXIEvE578.png" width="113" height="113" alt="更美APP">
<div class="hot_info">
<h2 title="更美APP">更美APP</h2>
<em></em>
<p title="我们给最优秀的互联网人才最好的回报">
我们给最优秀的互联网人才最好的回报
</p>
</div>
</a>
</li>
<li>



<a class="" href="http://www.lagou.com/gongsi/50889.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0003" data-lg-tj-cid="4778">
<img src="{{URL::asset('files')}}/Cgp3O1ax7JWAOSzUAABS3OF0A7w289.jpg" width="113" height="113" alt="和创科技（红圈营销）">
<div class="hot_info">
<h2 title="和创科技（红圈营销）">和创科技（红圈营销）</h2>
<em></em>
<p title="中国企业级移动互联网营销管理领域绝对领导者">
中国企业级移动互联网营销管理领域绝对领导者
</p>
</div>
</a>
</li>
<li>



<a class="" href="http://www.lagou.com/gongsi/44091.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0004" data-lg-tj-cid="4771">
<img src="{{URL::asset('files')}}/Cgo8PFT5fXCAWXgmAAB9s4MsAAU976.jpg" width="113" height="113" alt="自如网">
<div class="hot_info">
<h2 title="自如网">自如网</h2>
<em></em>
<p title="加入自如，让世界变得不一样~">
加入自如，让世界变得不一样~
</p>
</div>
</a>
</li>
<li>



<a class="" href="http://www.lagou.com/gongsi/51158.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0005" data-lg-tj-cid="4705">
<img src="{{URL::asset('files')}}/CgqKkVZf9wSAdgoaAABrydFqegA445.png" width="113" height="113" alt="中金支付">
<div class="hot_info">
<h2 title="中金支付">中金支付</h2>
<em></em>
<p title="中国人民银行指导下运营的第三方支付机构">
中国人民银行指导下运营的第三方支付机构
</p>
</div>
</a>
</li>
<li class="last">



<a class="" href="http://www.lagou.com/gongsi/31317.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0006" data-lg-tj-cid="4799">
<img src="{{URL::asset('files')}}/CgqKkVci-kaAb4wNAAAWUt8qJLY447.jpg" width="113" height="113" alt="中国金融认证中心">
<div class="hot_info">
<h2 title="中国金融认证中心">中国金融认证中心</h2>
<em></em>
<p title="网络信息安全守护神，保障实时金融交易安全NO.">
网络信息安全守护神，保障实时金融交易安全NO.
</p>
</div>
</a>
</li>
</ul>


<ul class="job_tab">
<li class="current" data-lg-tj-id="4X00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">热门职位</li>
<li data-lg-tj-id="gD00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">最新职位</li>
</ul>
<div id="hotList" class="clearfix">

<div class="hot_posHotPosition position_list init_joblist">
@foreach($job as $v)
	@if($v->is_hot==1)
<ul class="clearfix">
<li class="position_list_item" data-jobid="1639461" data-positionid="1639461" data-salary="15k-25k" data-company="121体育" data-positionname="HTML5" data-companyid="82528">
<!-- 开始 -->
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">

<h2 class="fl"><a href="http://www.lagou.com/jobs/1639461.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="4m00" data-lg-tj-no="0001" data-lg-tj-cid="1639461">{{$v->job_name}}<span>{{$v->region_name}}</span></a></h2>
<!-- 此处需要和后台确认 -->

<span class="fl">{{$v->kai_time}}</span>
</div>
<div>
<span class="salary fl">{{$v->salary}}</span>
<span><!-- <i class="experience"></i>&nbsp;  -->{{$v->work_jingyan}}</span> / <span>{{$v->xueli}}</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/82528.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0001" data-lg-tj-cid="82528">{{$v->company_name}}</a>
</div>
<div class="industry wordCut">
@foreach($v->company_type as $t)
	<span>{{$t}}</span>@endforeach/<span>{{$v->financing_name}}</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
{{$v->entice}}
</div>
<div class="pli_btm_r fl">
@foreach($v->material_benefits as $m)
<span>{{$m}}</span>
@endforeach
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1572650" data-positionid="1572650" data-salary="20k-35k" data-company="好好住" data-positionname="Android" data-companyid="84329">
	@endif
@endforeach
<!-- 结束 -->
</li>

</ul>
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>
<!-- 最新职位开始 -->
<div class="new_posHotPosition position_list" style="display:none;">
	@foreach($job as $v)
		@if($v->is_new==1)
<ul class="clearfix">
<li class="position_list_item" data-jobid="1194641" data-positionid="1194641" data-salary="15k-20k" data-company="久通网" data-positionname="数据分析师" data-companyid="21570">

<div class="pli_top">

<div class="fl pli_top_l">

<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1194641.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="4q00" data-lg-tj-no="0001" data-lg-tj-cid="1194641">{{$v->job_name}}<span>{{$v->region_name}}</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">{{$v->kai_time}}</span>
</div>
<div>
<span class="salary fl">{{$v->salary}}</span>
<span><!-- <i class="experience"></i>&nbsp;  -->{{$v->work_jingyan}}</span> / <span>{{$v->xueli}}</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/21570.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0001" data-lg-tj-cid="21570">{{$v->company_name}}</a>
</div>
<div class="industry wordCut">
@foreach($v->company_type as $t)
	<span>{{$t}}</span>@endforeach/ <span>{{$v->financing_name}}</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
{{$v->entice}}
</div>
<div class="pli_btm_r fl">
@foreach($v->material_benefits as $m)
<span>{{$m}}</span>
@endforeach
</div>
</div>
</li>
</ul>
		@endif
	@endforeach
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>
<!-- 最新职位结束 -->
</div>


<div id="linkbox" class="linkbox">
<dl>
<dt>友情链接</dt>
<dd>
@foreach($link as $v)
<a href="{{$v->link_href}}" target="_blank">{{$v->link_name}}</a> <span>|</span>
@endforeach
<a href="http://www.liqucn.com/" target="_blank">手机软件</a> <span>|</span>
<a href="http://www.wangxiao.cn/" target="_blank">中大网校</a> <span>|</span> 
<a href="http://www.woshipm.com/" target="_blank">人人都是产品经理</a> <span>|</span>
<a href="http://www.job910.com/" target="_blank">教师招聘</a> <span>|</span>
<a href="http://www.chinairn.com/" target="_blank">研究报告</a> <span>|</span>
<a href="http://www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">更多</a>
</dd>
</dl>
</div>


</div>

</div>
<!-- 页面主体END -->

<!-- footer <-->
<a id="backtop" title="回到顶部" rel="nofollow" style="bottom: 140px;"></a>
<!-- feedback -->
<!--
@require "common/widgets/footer_c/modules/feedback/feedback.less"
-->

<!--我要反馈按钮-->
<div id="product-fk" style="bottom: 80px;">
<div id="feedback-icon">
<div class="fb-icon"></div>
<span>我要反馈</span>
<em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~<i></i></em>
<em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

<div id="feedback-con" style="bottom: 80px;">
<div class="pfb-pho-close">
<div class="pfb-pho"></div>
<div class="pfb-close"></div>
</div>
<em class="error dn"><span>你还没填任何反馈呢</span><i></i></em>
<form id="product-fb">
<div class="pfb-txt">
<textarea placeholder="我是拉勾的产品经理哈丁，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" maxlength="200"></textarea>
</div>
<div class="pfb-email" style="height:60px;">
<input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）">
<span class="ensure">确定</span>
</div>
</form>
</div>

<div id="footer">
<div class="wrapper">
<i class="footer_lagou_icon"></i>
<div class="inner_wrapper">
<a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span>new</span><img src="{{URL::asset('files')}}/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" width="256" height="256"></a>
<a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
<a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<img src="{{URL::asset('files')}}/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" width="242" height="242"></a>
<a href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
<a href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
<a href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
<a id="onlineService" href="javascript:void(0);" rel="nofollow">在线交流</a>
<span class="tel">服务热线：<em>400-605-9900 (9:00 -18:00)</em></span>
</div>
<div class="copyright">
<span><em>©</em>2016 Lagou </span>
<a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
<span>京公网安备11010802017116号</span>
</div>
</div>
</div>

<!-- 底部登陆条 -->
<!--
@require "common/widgets/login_toolbar/main.less"
-->

<div id="loginToolBar" class="loginToolBar" style="bottom: 0px;">
<div>
<em></em>
<img src="{{URL::asset('files')}}/footbar_logo_cccc78d.png" width="138" height="45">
<span class="companycount"><i style="background-position-y: -30px;"></i><i style="background-position-y: -30px;"></i><i style="background-position-y: -270px;"></i><b></b><i style="background-position-y: -90px;"></i><i style="background-position-y: -240px;"></i><i style="background-position-y: -270px;"></i></span>
<span class="positioncount"><i style="background-position-y: -30px;"></i><b></b><i style="background-position-y: -210px;"></i><i style="background-position-y: -150px;"></i><i style="background-position-y: -270px;"></i><b></b><i style="background-position-y: -120px;"></i><i style="background-position-y: -120px;"></i><i style="background-position-y: -270px;"></i></span>
<a class="bar_login passport_login_pop" href="javascript:;"><i></i></a>
<div class="right">
<a href="http://www.lagou.com/frontRegister.do?from=index_footerbar" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;button&#39;, &#39;click&#39;, &#39;register&#39;])" class="bar_register" id="bar_register" target="_blank" data-lg-tj-id="4t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><i></i></a>
</div>
<input type="hidden" id="cc" value="119389">
<input type="hidden" id="cp" value="1759449">
</div>
</div>


<!-- jquery lib -->
<!-- analytics js file -->	<!-- plat analytics js file -->	<!-- plat ipinyou tj -->
<noscript>&lt;img src="//stats.ipinyou.com/adv.gif?a=ga..n3f5DPSWZXFMcbQa2-GxjX&amp;e=" style="display:none;" /&gt;</noscript>


<script type="text/javascript" src="{{URL::asset('files')}}/vendor_d53d12d.js"></script>
<script type="text/javascript">/*resourcemap*/
require.config({paths:{
"common/components/template-helper/main": "http://pstatic.lagou.com/www/static/common/components/template-helper/main_4b1b867",
"common/widgets/common/msgPopup": "http://pstatic.lagou.com/www/static/common/widgets/common/msgPopup_ccfc337"
}});</script>
<script type="text/javascript" src="{{URL::asset('files')}}/main.html_aio_4787e07.js"></script>
<script type="text/javascript" src="{{URL::asset('files')}}/widgets_4dd49c9.js"></script><script src="{{URL::asset('files')}}/h.js" type="text/javascript"></script>
<script type="text/javascript" src="{{URL::asset('files')}}/userinfo_7f282e9.js"></script>
<script type="text/javascript" src="{{URL::asset('files')}}/layout_a28dd79.js"></script>
<script type="text/javascript" src="{{URL::asset('files')}}/main.html_aio_2_f93dde9.js"></script>
<script type="text/javascript">
window.global = window.global || {};
global.userCtx = '';


window.global = window.global || {};
global.isLogin = false;
global.isFirst = true;
global.subSite = '北京';
global.subSites = '{{$city}}'.split(',');


require(['common/widgets/header_c/modules/emailvalid/main']);


require(['common/widgets/passport/passport'], function() {


/* 设置自动登录监听器 */
PASSPORT.on('autologin:succ', function() {
PASSPORT.util.tinfo('autologin:succ');
window.location.reload();
});
PASSPORT.on('autologin:fail', function() {
PASSPORT.util.tinfo('autologin:fail');
});
// 触发自动登录
PASSPORT.auto();

/* 设置弹窗登录监听器 */
PASSPORT.on('popuplogin:succ', function() {
PASSPORT.util.tinfo('popuplogin:succ');
window.location.reload();
});
PASSPORT.on('popuplogin:fail', function() {
PASSPORT.util.tinfo('popuplogin:fail');
});
// 触发弹窗登录
//PASSPORT.popup();
jQuery('.passport_login_pop').each(function(){
jQuery(this).click(function(){
PASSPORT.popup();
});
});


});


require(['common/widgets/footer_c/modules/feedback/feedback']);


require(['common/widgets/footer_c/layout/main']);

jQuery.ajax({
url: 'http://wpa.b.qq.com/cgi/wpa.php',
dataType: 'script',
cache: true
}).done(function() {
BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'onlineService'});
});


require(['common/widgets/login_toolbar/main'])


//业务主模块入口
require(['index/page/index/main']);
</script>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><div id="cboxOverlay" style="opacity: 0; cursor: pointer; visibility: visible; display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none; visibility: visible; top: 78px; left: 411px; position: absolute; width: 528px; height: 510px; opacity: 0;"><div id="cboxWrapper" style="height: 510px; width: 528px;"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left; width: 502px;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left; height: 484px;"></div><div id="cboxContent" style="float: left; width: 502px; height: 484px;"><div id="cboxTitle" style="float: left; display: block;">切换城市</div><div id="cboxCurrent" style="float: left; display: none;"></div><button type="button" id="cboxPrevious" style="display: none;"></button><button type="button" id="cboxNext" style="display: none;"></button><button id="cboxSlideshow" style="display: none;"></button><div id="cboxLoadingOverlay" style="float: left; display: none;"></div><div id="cboxLoadingGraphic" style="float: left; display: none;"></div><button type="button" id="cboxClose">close</button></div><div id="cboxMiddleRight" style="float: left; height: 484px;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left; width: 502px;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; max-width: none; display: none;"></div></div>
<script type="text/javascript" src="{{URL::asset('files')}}/ipinyou_2be9977.js"></script>


</body></html>