<!DOCTYPE html>
<!-- saved from url=(0021)http://www.lagou.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" charset="utf-8" async="" src="<?php echo e(URL::asset('files')); ?>/contains.js"></script><script type="text/javascript" charset="utf-8" async="" src="<?php echo e(URL::asset('files')); ?>/taskMgr.js"></script><script type="text/javascript" charset="utf-8" async="" src="<?php echo e(URL::asset('files')); ?>/views.js"></script>
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

<script charset="utf-8" src="<?php echo e(URL::asset('files')); ?>/v.js"></script><script async="" src="<?php echo e(URL::asset('files')); ?>/analytics.js"></script><script async="" src="<?php echo e(URL::asset('files')); ?>/a.js"></script><script type="text/javascript">
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

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('files')); ?>/mCustomScrollbar_ac2fb8b.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('files')); ?>/layout_8da9288.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('files')); ?>/main.html_aio_2ff5795.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('files')); ?>/widgets_cd857e8.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('files')); ?>/main.html_aio_2_bc9c0ac.css">
<script src="<?php echo e(URL::asset('files')); ?>/jquery.validate.min_f66db7c.js" class="lazyload" charset="utf-8"></script><link href="<?php echo e(URL::asset('files')); ?>/loginpop_8eb0b34.css" rel="stylesheet" class="lazyload" charset="utf-8"><script src="<?php echo e(URL::asset('files')); ?>/lagou_5427c0e.js" class="lazyload" charset="utf-8"></script><script charset="utf-8" async="" src="<?php echo e(URL::asset('files')); ?>/i.js" id="_da"></script></head>
<body><iframe style="display: none;"></iframe>

<!-- 公共html -->
<!-- 页面公用结构、velocity变量 --><input type="hidden" value="" name="userid" id="userid">
<input type="hidden" id="serverTime" value="1463022660995">

<!-- 城市分站 -->


<!-- header -->

<!--C端头部通栏广告位-->


<!--验证注册邮箱-->
<!--
@require  "common/widgets/header_c/modules/emailvalid/main.less"
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
<a href="<?php echo e(url('Index/login')); ?>" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
</li>
<li>
<a href="<?php echo e(url('Index/register')); ?>" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
</li>
<?php }else{?>
<li>
<a href="" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">欢迎<?php echo $_COOKIE['username'];?>登录</a>
</li>
<li>
<a href="<?php echo e(url('Index/loginout')); ?>" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
</li>
<?php }?>
</ul>
	


</div>

</div><!--end #lg_tbar-->


<!--C端头部白色导航-->
<div id="lg_tnav">

<div class="inner">
<div class="lg_tnav_l">
<a href="<?php echo e(URL::asset('files')); ?>/拉勾网-最专业的互联网招聘平台.html" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
<h1>拉勾网</h1>
</a>
<div class="suggestCity"><strong>北京站</strong><em id="changeCity_btn">[切换城市]</em></div>
</div>
<ul class="lg_tnav_wrap">
<li>
<a href="<?php echo e(URL::asset('files')); ?>/拉勾网-最专业的互联网招聘平台.html" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
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


<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
技术
<!-- 跳槽月 -->
<span></span>
</h2>

<a href="http://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4A00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">Java</a>

<a href="http://www.lagou.com/zhaopin/PHP/" data-lg-tj-id="4A00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">PHP</a>

<a href="http://www.lagou.com/zhaopin/C/" data-lg-tj-id="4A00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">C</a>

<a href="http://www.lagou.com/zhaopin/C++/" data-lg-tj-id="4A00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">C++</a>

<a href="http://www.lagou.com/zhaopin/Android/" data-lg-tj-id="4A00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">Android</a>

<a href="http://www.lagou.com/zhaopin/iOS/" data-lg-tj-id="4A00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">iOS</a>

<a href="http://www.lagou.com/zhaopin/ceshi/" data-lg-tj-id="4A00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">测试</a>

<a href="http://www.lagou.com/zhaopin/qianduankaifa/" data-lg-tj-id="4A00" data-lg-tj-no="0008" data-lg-tj-cid="idnull">前端开发</a>

<a href="http://www.lagou.com/zhaopin/jishujingli/" data-lg-tj-id="4A00" data-lg-tj-no="0009" data-lg-tj-cid="idnull">技术经理</a>

<a href="http://www.lagou.com/zhaopin/jishuzongjian/" data-lg-tj-id="4A00" data-lg-tj-no="0010" data-lg-tj-cid="idnull">技术总监</a>

<a href="http://www.lagou.com/zhaopin/jiagoushi/" data-lg-tj-id="4A00" data-lg-tj-no="0011" data-lg-tj-cid="idnull">架构师</a>


<a href="http://www.lagou.com/zhaopin/CTO/" data-lg-tj-id="4A00" data-lg-tj-no="0012" data-lg-tj-cid="idnull">CTO</a>
</div>
<div class="menu_sub dn" style="top: 0px;">
<dl>
<dt>                                                                                                                                                                                                                                                                                                                                                                                               
<a href="http://www.lagou.com/zhaopin/houduankaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">后端开发</a>
</dt>
<dd>    
<a href="http://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4O00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">Java</a>

<a href="http://www.lagou.com/zhaopin/Python/" data-lg-tj-id="4O00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">Python</a>                                                      

<a href="http://www.lagou.com/zhaopin/PHP/" data-lg-tj-id="4O00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="curr">PHP</a>

<a href="http://www.lagou.com/zhaopin/.NET/" data-lg-tj-id="4O00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">.NET</a>

<a href="http://www.lagou.com/zhaopin/C%23/" data-lg-tj-id="4O00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">C#</a>

<a href="http://www.lagou.com/zhaopin/C%2B%2B/" data-lg-tj-id="4O00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="curr">C++</a>

<a href="http://www.lagou.com/zhaopin/C/" data-lg-tj-id="4O00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="curr">C</a>

<a href="http://www.lagou.com/zhaopin/VB/" data-lg-tj-id="4O00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">VB</a>

<a href="http://www.lagou.com/zhaopin/Delphi/" data-lg-tj-id="4O00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">Delphi</a>

<a href="http://www.lagou.com/zhaopin/Perl/" data-lg-tj-id="4O00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">Perl</a>

<a href="http://www.lagou.com/zhaopin/Ruby/" data-lg-tj-id="4O00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">Ruby</a>

<a href="http://www.lagou.com/zhaopin/Hadoop/" data-lg-tj-id="4O00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="">Hadoop</a>

<a href="http://www.lagou.com/zhaopin/Node.js/" data-lg-tj-id="4O00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">Node.js</a>

<a href="http://www.lagou.com/zhaopin/shujuwajue/" data-lg-tj-id="4O00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="">数据挖掘</a>

<a href="http://www.lagou.com/zhaopin/ziranyuyanchuli/" data-lg-tj-id="4O00" data-lg-tj-no="0115" data-lg-tj-cid="idnull" class="">自然语言处理</a>

<a href="http://www.lagou.com/zhaopin/sousuosuanfa/" data-lg-tj-id="4O00" data-lg-tj-no="0116" data-lg-tj-cid="idnull" class="">搜索算法</a>

<a href="http://www.lagou.com/zhaopin/jingzhuntuijian/" data-lg-tj-id="4O00" data-lg-tj-no="0117" data-lg-tj-cid="idnull" class="">精准推荐</a>

<a href="http://www.lagou.com/zhaopin/quanzhangongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0118" data-lg-tj-cid="idnull" class="">全栈工程师</a>

<a href="http://www.lagou.com/zhaopin/go/" data-lg-tj-id="4O00" data-lg-tj-no="0119" data-lg-tj-cid="idnull" class="">Go</a>

<a href="http://www.lagou.com/zhaopin/asp/" data-lg-tj-id="4O00" data-lg-tj-no="0120" data-lg-tj-cid="idnull" class="">ASP</a>

<a href="http://www.lagou.com/zhaopin/shell/" data-lg-tj-id="4O00" data-lg-tj-no="0121" data-lg-tj-cid="idnull" class="">Shell</a>


</dd>
</dl>
<dl>
<dt>

<a href="http://www.lagou.com/zhaopin/yidongkaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">移动开发</a>

</dt>
<dd>

<a href="http://www.lagou.com/zhaopin/HTML5/" data-lg-tj-id="4O00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">HTML5</a>


<a href="http://www.lagou.com/zhaopin/Android/" data-lg-tj-id="4O00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="curr">Android</a>

<a href="http://www.lagou.com/zhaopin/iOS/" data-lg-tj-id="4O00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="curr">iOS</a>

<a href="http://www.lagou.com/zhaopin/WP/" data-lg-tj-id="4O00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">WP</a>

<a href="http://www.lagou.com/zhaopin/yidongkaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0205" data-lg-tj-cid="idnull" class="">移动开发其它</a>
</dd>
</dl>
<dl>
<dt>

<a href="http://www.lagou.com/zhaopin/qianduankaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">前端开发</a>

</dt>
<dd>

<a href="http://www.lagou.com/zhaopin/webqianduan/" data-lg-tj-id="4O00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">web前端</a>

<a href="http://www.lagou.com/zhaopin/Flash/" data-lg-tj-id="4O00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">Flash</a>

<a href="http://www.lagou.com/zhaopin/html51/" data-lg-tj-id="4O00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">html5</a>

<a href="http://www.lagou.com/zhaopin/JavaScript/" data-lg-tj-id="4O00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">JavaScript</a>

<a href="http://www.lagou.com/zhaopin/U3D/" data-lg-tj-id="4O00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">U3D</a>

<a href="http://www.lagou.com/zhaopin/COCOS2D-X/" data-lg-tj-id="4O00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">COCOS2D-X</a>

<a href="http://www.lagou.com/zhaopin/qianduankaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">前端开发其它</a>
</dd>
</dl>
<dl>
<dt>

<a href="http://www.lagou.com/zhaopin/ceshi/" data-lg-tj-id="4H00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">测试</a>
</dt>
<dd>


<a href="http://www.lagou.com/zhaopin/ceshigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">测试工程师</a>




<a href="http://www.lagou.com/zhaopin/zidonghuaceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">自动化测试</a>



<a href="http://www.lagou.com/zhaopin/gongnengceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">功能测试</a>



<a href="http://www.lagou.com/zhaopin/xingnengceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">性能测试</a>



<a href="http://www.lagou.com/zhaopin/ceshikaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">测试开发</a>



<a href="http://www.lagou.com/zhaopin/youxiceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0406" data-lg-tj-cid="idnull" class="">游戏测试</a>



<a href="http://www.lagou.com/zhaopin/baiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0407" data-lg-tj-cid="idnull" class="">白盒测试</a>



<a href="http://www.lagou.com/zhaopin/huiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0408" data-lg-tj-cid="idnull" class="">灰盒测试</a>



<a href="http://www.lagou.com/zhaopin/heiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0409" data-lg-tj-cid="idnull" class="">黑盒测试</a>



<a href="http://www.lagou.com/zhaopin/shoujiceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0410" data-lg-tj-cid="idnull" class="">手机测试</a>



<a href="http://www.lagou.com/zhaopin/yingjianceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0411" data-lg-tj-cid="idnull" class="">硬件测试</a>



<a href="http://www.lagou.com/zhaopin/ceshijingli2/" data-lg-tj-id="4O00" data-lg-tj-no="0412" data-lg-tj-cid="idnull" class="">测试经理</a>



<a href="http://www.lagou.com/zhaopin/ceshiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0413" data-lg-tj-cid="idnull" class="">测试其它</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/yunwei/" data-lg-tj-id="4H00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">运维</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/yunweigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">运维工程师</a>



<a href="http://www.lagou.com/zhaopin/yunweikaifagongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">运维开发工程师</a>



<a href="http://www.lagou.com/zhaopin/wangluogongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0503" data-lg-tj-cid="idnull" class="">网络工程师</a>



<a href="http://www.lagou.com/zhaopin/xitonggongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0504" data-lg-tj-cid="idnull" class="">系统工程师</a>



<a href="http://www.lagou.com/zhaopin/ITzhichi/" data-lg-tj-id="4O00" data-lg-tj-no="0505" data-lg-tj-cid="idnull" class="">IT支持</a>



<a href="http://www.lagou.com/zhaopin/idc/" data-lg-tj-id="4O00" data-lg-tj-no="0506" data-lg-tj-cid="idnull" class="">IDC</a>



<a href="http://www.lagou.com/zhaopin/cdn/" data-lg-tj-id="4O00" data-lg-tj-no="0507" data-lg-tj-cid="idnull" class="">CDN</a>



<a href="http://www.lagou.com/zhaopin/f5/" data-lg-tj-id="4O00" data-lg-tj-no="0508" data-lg-tj-cid="idnull" class="">F5</a>



<a href="http://www.lagou.com/zhaopin/xitongguanliyuan/" data-lg-tj-id="4O00" data-lg-tj-no="0509" data-lg-tj-cid="idnull" class="">系统管理员</a>



<a href="http://www.lagou.com/zhaopin/bingdufenxi/" data-lg-tj-id="4O00" data-lg-tj-no="0510" data-lg-tj-cid="idnull" class="">病毒分析</a>



<a href="http://www.lagou.com/zhaopin/webanquan/" data-lg-tj-id="4O00" data-lg-tj-no="0511" data-lg-tj-cid="idnull" class="">WEB安全</a>



<a href="http://www.lagou.com/zhaopin/wangluoanquan/" data-lg-tj-id="4O00" data-lg-tj-no="0512" data-lg-tj-cid="idnull" class="">网络安全</a>



<a href="http://www.lagou.com/zhaopin/xitonganquan/" data-lg-tj-id="4O00" data-lg-tj-no="0513" data-lg-tj-cid="idnull" class="">系统安全</a>



<a href="http://www.lagou.com/zhaopin/yunweijingli/" data-lg-tj-id="4O00" data-lg-tj-no="0514" data-lg-tj-cid="idnull" class="">运维经理</a>



<a href="http://www.lagou.com/zhaopin/yunweiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0515" data-lg-tj-cid="idnull" class="">运维其它</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/DBA/" data-lg-tj-id="4H00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">DBA</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/MySQL/" data-lg-tj-id="4O00" data-lg-tj-no="0601" data-lg-tj-cid="idnull" class="">MySQL</a>



<a href="http://www.lagou.com/zhaopin/SQLServer/" data-lg-tj-id="4O00" data-lg-tj-no="0602" data-lg-tj-cid="idnull" class="">SQLServer</a>



<a href="http://www.lagou.com/zhaopin/Oracle/" data-lg-tj-id="4O00" data-lg-tj-no="0603" data-lg-tj-cid="idnull" class="">Oracle</a>



<a href="http://www.lagou.com/zhaopin/DB2/" data-lg-tj-id="4O00" data-lg-tj-no="0604" data-lg-tj-cid="idnull" class="">DB2</a>



<a href="http://www.lagou.com/zhaopin/MongoDB/" data-lg-tj-id="4O00" data-lg-tj-no="0605" data-lg-tj-cid="idnull" class="">MongoDB</a>



<a href="http://www.lagou.com/zhaopin/etl/" data-lg-tj-id="4O00" data-lg-tj-no="0606" data-lg-tj-cid="idnull" class="">ETL</a>



<a href="http://www.lagou.com/zhaopin/hive/" data-lg-tj-id="4O00" data-lg-tj-no="0607" data-lg-tj-cid="idnull" class="">Hive</a>



<a href="http://www.lagou.com/zhaopin/shujucangku/" data-lg-tj-id="4O00" data-lg-tj-no="0608" data-lg-tj-cid="idnull" class="">数据仓库</a>



<a href="http://www.lagou.com/zhaopin/dbaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0609" data-lg-tj-cid="idnull" class="">DBA其它</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanjishuzhiwei/" data-lg-tj-id="4H00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/jishujingli/" data-lg-tj-id="4O00" data-lg-tj-no="0701" data-lg-tj-cid="idnull" class="curr">技术经理</a>



<a href="http://www.lagou.com/zhaopin/jishuzongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0702" data-lg-tj-cid="idnull" class="curr">技术总监</a>



<a href="http://www.lagou.com/zhaopin/jiagoushi/" data-lg-tj-id="4O00" data-lg-tj-no="0703" data-lg-tj-cid="idnull" class="curr">架构师</a>



<a href="http://www.lagou.com/zhaopin/CTO/" data-lg-tj-id="4O00" data-lg-tj-no="0704" data-lg-tj-cid="idnull" class="curr">CTO</a>



<a href="http://www.lagou.com/zhaopin/yunweizongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0705" data-lg-tj-cid="idnull" class="">运维总监</a>



<a href="http://www.lagou.com/zhaopin/jishuhehuoren/" data-lg-tj-id="4O00" data-lg-tj-no="0706" data-lg-tj-cid="idnull" class="">技术合伙人</a>



<a href="http://www.lagou.com/zhaopin/xiangmuzongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0707" data-lg-tj-cid="idnull" class="">项目总监</a>



<a href="http://www.lagou.com/zhaopin/ceshizongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0708" data-lg-tj-cid="idnull" class="">测试总监</a>



<a href="http://www.lagou.com/zhaopin/anquanzhuanjia/" data-lg-tj-id="4O00" data-lg-tj-no="0709" data-lg-tj-cid="idnull" class="">安全专家</a>



<a href="http://www.lagou.com/zhaopin/gaoduanjishuzhiweiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0710" data-lg-tj-cid="idnull" class="">高端技术职位其它</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/xiangmuguanli/" data-lg-tj-id="4H00" data-lg-tj-no="0008" data-lg-tj-cid="idnull">项目管理</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/xiangmujingli/" data-lg-tj-id="4O00" data-lg-tj-no="0801" data-lg-tj-cid="idnull" class="">项目经理</a>



<a href="http://www.lagou.com/zhaopin/xiangmuzhuli/" data-lg-tj-id="4O00" data-lg-tj-no="0802" data-lg-tj-cid="idnull" class="">项目助理</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/yingjiankaifa2/" data-lg-tj-id="4H00" data-lg-tj-no="0009" data-lg-tj-cid="idnull">硬件开发</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/yingjian/" data-lg-tj-id="4O00" data-lg-tj-no="0901" data-lg-tj-cid="idnull" class="">硬件</a>



<a href="http://www.lagou.com/zhaopin/qianrushi/" data-lg-tj-id="4O00" data-lg-tj-no="0902" data-lg-tj-cid="idnull" class="">嵌入式</a>



<a href="http://www.lagou.com/zhaopin/zidonghua/" data-lg-tj-id="4O00" data-lg-tj-no="0903" data-lg-tj-cid="idnull" class="">自动化</a>



<a href="http://www.lagou.com/zhaopin/danpianji/" data-lg-tj-id="4O00" data-lg-tj-no="0904" data-lg-tj-cid="idnull" class="">单片机</a>



<a href="http://www.lagou.com/zhaopin/dianlusheji/" data-lg-tj-id="4O00" data-lg-tj-no="0905" data-lg-tj-cid="idnull" class="">电路设计</a>



<a href="http://www.lagou.com/zhaopin/qudongkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0906" data-lg-tj-cid="idnull" class="">驱动开发</a>



<a href="http://www.lagou.com/zhaopin/xitongjicheng/" data-lg-tj-id="4O00" data-lg-tj-no="0907" data-lg-tj-cid="idnull" class="">系统集成</a>



<a href="http://www.lagou.com/zhaopin/fpgakaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0908" data-lg-tj-cid="idnull" class="">FPGA开发</a>



<a href="http://www.lagou.com/zhaopin/dspkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0909" data-lg-tj-cid="idnull" class="">DSP开发</a>



<a href="http://www.lagou.com/zhaopin/armkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0910" data-lg-tj-cid="idnull" class="">ARM开发</a>



<a href="http://www.lagou.com/zhaopin/pcbgongyi/" data-lg-tj-id="4O00" data-lg-tj-no="0911" data-lg-tj-cid="idnull" class="">PCB工艺</a>



<a href="http://www.lagou.com/zhaopin/mujusheji/" data-lg-tj-id="4O00" data-lg-tj-no="0912" data-lg-tj-cid="idnull" class="">模具设计</a>



<a href="http://www.lagou.com/zhaopin/rechuandao/" data-lg-tj-id="4O00" data-lg-tj-no="0913" data-lg-tj-cid="idnull" class="">热传导</a>



<a href="http://www.lagou.com/zhaopin/cailiaogongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0914" data-lg-tj-cid="idnull" class="">材料工程师</a>



<a href="http://www.lagou.com/zhaopin/jingyigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0915" data-lg-tj-cid="idnull" class="">精益工程师</a>



<a href="http://www.lagou.com/zhaopin/shepingongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0916" data-lg-tj-cid="idnull" class="">射频工程师</a>



<a href="http://www.lagou.com/zhaopin/yingjiankaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0917" data-lg-tj-cid="idnull" class="">硬件开发其它</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/qiyeruanjian/" data-lg-tj-id="4H00" data-lg-tj-no="0010" data-lg-tj-cid="idnull">企业软件</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shishigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1001" data-lg-tj-cid="idnull" class="">实施工程师</a>



<a href="http://www.lagou.com/zhaopin/shouqiangongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1002" data-lg-tj-cid="idnull" class="">售前工程师</a>



<a href="http://www.lagou.com/zhaopin/shouhougongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1003" data-lg-tj-cid="idnull" class="">售后工程师</a>



<a href="http://www.lagou.com/zhaopin/bigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1004" data-lg-tj-cid="idnull" class="">BI工程师</a>



<a href="http://www.lagou.com/zhaopin/qiyeruanjianqita/" data-lg-tj-id="4O00" data-lg-tj-no="1005" data-lg-tj-cid="idnull" class="">企业软件其它</a>
</dd>
</dl>
</div>
</div>

<!-- 单项分类循环结束 -->

<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
产品
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/chanpinzongjian/" data-lg-tj-id="4B00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">产品总监</a>


<a href="http://www.lagou.com/zhaopin/chanpinjingli1/" data-lg-tj-id="4B00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">产品经理</a>


<a href="http://www.lagou.com/zhaopin/yidongchanpinjingli/" data-lg-tj-id="4B00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">移动产品经理</a>


<a href="http://www.lagou.com/zhaopin/youxicehua/" data-lg-tj-id="4B00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">游戏策划</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/chanpinjingli/" data-lg-tj-id="4I00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">产品经理</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/chanpinjingli1/" data-lg-tj-id="4P00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">产品经理</a>



<a href="http://www.lagou.com/zhaopin/wangyechanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">网页产品经理</a>



<a href="http://www.lagou.com/zhaopin/yidongchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="curr">移动产品经理</a>



<a href="http://www.lagou.com/zhaopin/chanpinzhuli/" data-lg-tj-id="4P00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">产品助理</a>



<a href="http://www.lagou.com/zhaopin/shujuchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">数据产品经理</a>



<a href="http://www.lagou.com/zhaopin/dianshangchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">电商产品经理</a>



<a href="http://www.lagou.com/zhaopin/youxicehua/" data-lg-tj-id="4P00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="curr">游戏策划</a>



<a href="http://www.lagou.com/zhaopin/chanpinshixisheng/" data-lg-tj-id="4P00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">产品实习生</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/chanpinshejishi/" data-lg-tj-id="4I00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">产品设计师</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/wangyechanpinshejishi/" data-lg-tj-id="4P00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">网页产品设计师</a>



<a href="http://www.lagou.com/zhaopin/wuxianchanpinshejishi/" data-lg-tj-id="4P00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">无线产品设计师</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanchanpinzhiwei/" data-lg-tj-id="4I00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/chanpinbujingli/" data-lg-tj-id="4P00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">产品部经理</a>



<a href="http://www.lagou.com/zhaopin/chanpinzongjian/" data-lg-tj-id="4P00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="curr">产品总监</a>



<a href="http://www.lagou.com/zhaopin/youxizhizuoren/" data-lg-tj-id="4P00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">游戏制作人</a>
</dd>
</dl>
</div>
</div>






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
<dl class="hotSearch"><dt>热门搜索：</dt><dd><a href="http://www.lagou.com/topic/citychengdu01.html" class="current">成都热招职位</a></dd><dd><a href="http://www.lagou.com/topic/cityshenzhen01.html" class="current">深圳热招职位</a></dd><dd><a href="http://www.lagou.com/topic/javazcb.html" class="current">Java热门职位</a></dd><dd><a href="http://www.lagou.com/topic/ioszcb.html" class="current">iOS职位精选</a></dd><dd><a href="http://www.lagou.com/activity/dist/imageCollection/pc/html/index.html" class="current">拉勾形象征集</a></dd><dd><a href="http://www.lagou.com/app/download.html?source=search_app" class="current">拉勾APP</a></dd></dl>


<div id="home_banner" class="home_banner">
<ul class="banner_bg" style="height: 480px; margin-top: -160px;">


<?php foreach($advert as $v): ?>
<li class="banner_bg_1 current">
<a class="" href="http://www.lagou.com/gongsi/19365.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0001" data-lg-tj-cid="1982"><img src="<?php echo e(URL::asset('/').$v->gimg); ?>" width="612" height="160" alt="货车帮"></a>
</li>
<?php endforeach; ?>


<!-- <li class="banner_bg_2">
<a class="" href="http://www.lagou.com/topic/renrenxingtwo.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0002" data-lg-tj-cid="1975"><img src="<?php echo e(URL::asset('files')); ?>/CgqKkVcE0s-AKW7uAACEYADklOk091.JPG" width="612" height="160" alt="人人行(借贷宝)"></a>
</li>



<li class="banner_bg_3">
<a class="" href="http://www.lagou.com/activity/dist/imageCollection/pc/html/index.html?labelWords=hot" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0003" data-lg-tj-cid="2133"><img src="<?php echo e(URL::asset('files')); ?>/Cgp3O1csR66AF4jIAACp5e8pwGU974.JPG" width="612" height="160" alt="设计专场"></a>
</li> -->
</ul>
<div class="banner_control">
<em style="top: 55px;"></em>
<ul class="thumbs">
<?php foreach($advert as $v): ?>
<li class="thumbs_1">
<i></i>
<img src="<?php echo e(URL::asset('/').$v->gimg); ?>" width="113" height="42">
</li>
<?php endforeach; ?>
<!-- <li class="thumbs_2 current">
<i></i>
<img src="<?php echo e(URL::asset('files')); ?>/CgqKkVcE0tSAdseNAAAokHl4hJg013.JPG" width="113" height="42">
</li>
<li class="thumbs_3">
<i></i>
<img src="<?php echo e(URL::asset('files')); ?>/CgqKkVcsR7iAGzTCAAAOwlwqivw702.JPG" width="113" height="42">
</li> -->
</ul>
</div>
</div>

<ul id="da-thumbs" class="da-thumbs">
<li>



<a class="" href="http://www.lagou.com/gongsi/49187.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0001" data-lg-tj-cid="5111">
<img src="<?php echo e(URL::asset('files')); ?>/Cgp3O1aDe-qAVMgMAAAfkQtKw50248.png" width="113" height="113" alt="惠民网">
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
<img src="<?php echo e(URL::asset('files')); ?>/CgYXBlWLxvOAVgoRAAZGmVXIEvE578.png" width="113" height="113" alt="更美APP">
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
<img src="<?php echo e(URL::asset('files')); ?>/Cgp3O1ax7JWAOSzUAABS3OF0A7w289.jpg" width="113" height="113" alt="和创科技（红圈营销）">
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
<img src="<?php echo e(URL::asset('files')); ?>/Cgo8PFT5fXCAWXgmAAB9s4MsAAU976.jpg" width="113" height="113" alt="自如网">
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
<img src="<?php echo e(URL::asset('files')); ?>/CgqKkVZf9wSAdgoaAABrydFqegA445.png" width="113" height="113" alt="中金支付">
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
<img src="<?php echo e(URL::asset('files')); ?>/CgqKkVci-kaAb4wNAAAWUt8qJLY447.jpg" width="113" height="113" alt="中国金融认证中心">
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
<?php foreach($job as $v): ?>
	<?php if($v->is_hot==1): ?>
<ul class="clearfix">
<li class="position_list_item" data-jobid="1639461" data-positionid="1639461" data-salary="15k-25k" data-company="121体育" data-positionname="HTML5" data-companyid="82528">
<!-- 开始 -->
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">

<h2 class="fl"><a href="http://www.lagou.com/jobs/1639461.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="4m00" data-lg-tj-no="0001" data-lg-tj-cid="1639461"><?php echo e($v->job_name); ?><span><?php echo e($v->region_name); ?></span></a></h2>
<!-- 此处需要和后台确认 -->

<span class="fl"><?php echo e($v->kai_time); ?></span>
</div>
<div>
<span class="salary fl"><?php echo e($v->salary); ?></span>
<span><!-- <i class="experience"></i>&nbsp;  --><?php echo e($v->work_jingyan); ?></span> / <span><?php echo e($v->xueli); ?></span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/82528.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0001" data-lg-tj-cid="82528">公司名称</a>
</div>
<div class="industry wordCut">
<?php foreach($v->company_type as $t): ?>
	<span><?php echo e($t); ?></span><?php endforeach; ?>/<span><?php echo e($v->financing_name); ?></span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
<?php echo e($v->entice); ?>

</div>
<div class="pli_btm_r fl">
<?php foreach($v->material_benefits as $m): ?>
<span><?php echo e($m); ?></span>
<?php endforeach; ?>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1572650" data-positionid="1572650" data-salary="20k-35k" data-company="好好住" data-positionname="Android" data-companyid="84329">
	<?php endif; ?>
<?php endforeach; ?>
<!-- 结束 -->
</li>

</ul>
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>
<!-- 最新职位开始 -->
<div class="new_posHotPosition position_list" style="display:none;">
<ul class="clearfix">
<li class="position_list_item" data-jobid="1194641" data-positionid="1194641" data-salary="15k-20k" data-company="久通网" data-positionname="数据分析师" data-companyid="21570">

<div class="pli_top">

<div class="fl pli_top_l">

<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1194641.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="4q00" data-lg-tj-no="0001" data-lg-tj-cid="1194641">数据分析师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:05发布</span>
</div>
<div>
<span class="salary fl">15k-20k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/21570.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0001" data-lg-tj-cid="21570">久通网</a>
</div>
<div class="industry wordCut">
<span> 移动互联网</span> / <span>成熟型(D轮及以上)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“春假15天 五险一金全额 补充医疗保险 餐补”
</div>
<div class="pli_btm_r fl">
<span>年底双薪</span>
<span>高温福利补贴</span>
<span>节日礼金</span>
</div>
</div>
</li>

</ul>
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>
<!-- 最新职位结束 -->
</div>


<div id="linkbox" class="linkbox">
<dl>
<dt>友情链接</dt>
<dd>
<a href="http://www.liqucn.com/" target="_blank">手机软件</a> <span>|</span>                                <a href="http://www.wangxiao.cn/" target="_blank">中大网校</a> <span>|</span>                                <a href="http://www.woshipm.com/" target="_blank">人人都是产品经理</a> <span>|</span>                                <a href="http://www.job910.com/" target="_blank">教师招聘</a> <span>|</span>                                <a href="http://www.chinairn.com/" target="_blank">研究报告</a> <span>|</span>                                <a href="http://tuanche.com/" target="_blank">汽车团购</a> <span>|</span>                                <a href="http://www.vc.cn/" target="_blank">创投圈</a>                                                             <a href="http://www.ctoutiao.com/" target="_blank">创头条</a> <span>|</span>                                <a href="http://www.eoeandroid.com/" target="_blank">安卓开发论坛</a> <span>|</span>                                <a href="http://www.xjhr.com/" target="_blank">新疆人才网</a> <span>|</span>                                <a href="http://www.yixieshi.com/" target="_blank">互联网的一些事</a>                                                             <a href="http://www.24en.com/" target="_blank">爱思英语网</a> <span>|</span>                                <a href="http://www.xuzhoujob.com/" target="_blank">徐州英才网</a> <span>|</span>                                <a href="http://www.thinkphp.cn/" target="_blank">thinkphp</a> <span>|</span>                                <a href="http://www.kuakao.com/" target="_blank">考研网</a> <span>|</span>                                <a href="http://www.0755rc.com/" target="_blank">深圳人才网</a> <span>|</span>                                <a href="http://www.yinhangzhaopin.com/" target="_blank">银行招聘网</a>                                                             <a href="http://www.64365.com/" target="_blank">法律咨询网</a> <span>|</span>                                <a href="http://www.jianzhi8.com/" target="_blank">兼职吧</a>                                                             <a href="http://www.cfw.cn/" target="_blank">服装人才网</a> <span>|</span>                                <a href="http://www.eoemarket.com/" target="_blank">安卓软件</a> <span>|</span>                                <a href="http://www.yinhu.com/" target="_blank">银湖网</a>                                                             <a href="http://www.zbj.com/" target="_blank">创意服务外包</a> <span>|</span>                                <a href="http://www.xilu.com/" target="_blank">西陆军事</a> <span>|</span>                                <a href="http://www.eoffcn.com/" target="_blank">中公公务员网校</a> <span>|</span>                                <a href="http://www.laoren.com/" target="_blank">老人网</a> <span>|</span>                                <a href="http://www.cjol.com/" target="_blank">找工作</a> <span>|</span>                                <a href="http://www.job5156.com/" target="_blank">招聘网</a> <span>|</span>                                <a href="http://www.qianzhan.com/" target="_blank">前瞻网</a> <span>|</span>                                <a href="http://www.wezgc.com/" target="_blank">中关村创新创业服务平台</a>                                                             <a href="http://www.goodjobs.cn/" target="_blank">安徽招聘网</a> <span>|</span>                                <a href="http://www.tzrl.com/" target="_blank">台州人才网</a> <span>|</span>                                <a href="http://www.job256.com/" target="_blank">苏州人才网&nbsp;</a> <span>|</span>                                <a href="http://www.zgjsks.com/" target="_blank">教师网</a> <span>|</span>                                <a href="http://www.huibo.com/" target="_blank">汇博人才网</a> <span>|</span>                                <a href="http://www.canet.com.cn/" target="_blank">中国会计网</a> <span>|</span>                                <a href="http://www.epwk.com/" target="_blank">一品威客</a> <span>|</span>                                <a href="http://www.tmtpost.com/" target="_blank">钛媒体网</a> <span>|</span>                                <a href="http://www.qlrc.com/" target="_blank">齐鲁人才网</a> <span>|</span>                                <a href="http://www.youbian.com/" target="_blank">邮编生活网</a> <span>|</span>                                <a href="http://www.wlmqrc.cn/" target="_blank">乌鲁木齐人才网</a> <span>|</span>                                <a href="http://www.91job.com/" target="_blank">义乌人才网</a> <span>|</span>                                <a href="http://www.php100.com/" target="_blank">PHP100中文网</a>                                                             <a href="http://www.pxto.com.cn/" target="_blank">培训网</a>                                             <a href="http://www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">更多</a>
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
@require  "common/widgets/footer_c/modules/feedback/feedback.less"
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
<a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span>new</span><img src="<?php echo e(URL::asset('files')); ?>/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" width="256" height="256"></a>
<a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
<a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<img src="<?php echo e(URL::asset('files')); ?>/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" width="242" height="242"></a>
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
@require  "common/widgets/login_toolbar/main.less"
-->

<div id="loginToolBar" class="loginToolBar" style="bottom: 0px;">
<div>
<em></em>
<img src="<?php echo e(URL::asset('files')); ?>/footbar_logo_cccc78d.png" width="138" height="45">
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


<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/vendor_d53d12d.js"></script>
<script type="text/javascript">/*resourcemap*/
require.config({paths:{
"common/components/template-helper/main": "http://pstatic.lagou.com/www/static/common/components/template-helper/main_4b1b867",
"common/widgets/common/msgPopup": "http://pstatic.lagou.com/www/static/common/widgets/common/msgPopup_ccfc337"
}});</script>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/main.html_aio_4787e07.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/widgets_4dd49c9.js"></script><script src="<?php echo e(URL::asset('files')); ?>/h.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/userinfo_7f282e9.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/layout_a28dd79.js"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/main.html_aio_2_f93dde9.js"></script>
<script type="text/javascript">
window.global = window.global || {};
global.userCtx = '';


window.global = window.global || {};
global.isLogin = false;
global.isFirst = true;
global.subSite = '北京';
global.subSites = '全国,上海,杭州,广州,深圳,成都'.split(',');


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
</script><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><div id="cboxOverlay" style="opacity: 0; cursor: pointer; visibility: visible; display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none; visibility: visible; top: 78px; left: 411px; position: absolute; width: 528px; height: 510px; opacity: 0;"><div id="cboxWrapper" style="height: 510px; width: 528px;"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left; width: 502px;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left; height: 484px;"></div><div id="cboxContent" style="float: left; width: 502px; height: 484px;"><div id="cboxTitle" style="float: left; display: block;">切换城市</div><div id="cboxCurrent" style="float: left; display: none;"></div><button type="button" id="cboxPrevious" style="display: none;"></button><button type="button" id="cboxNext" style="display: none;"></button><button id="cboxSlideshow" style="display: none;"></button><div id="cboxLoadingOverlay" style="float: left; display: none;"></div><div id="cboxLoadingGraphic" style="float: left; display: none;"></div><button type="button" id="cboxClose">close</button></div><div id="cboxMiddleRight" style="float: left; height: 484px;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left; width: 502px;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; max-width: none; display: none;"></div></div>
<script type="text/javascript" src="<?php echo e(URL::asset('files')); ?>/ipinyou_2be9977.js"></script>


</body></html>