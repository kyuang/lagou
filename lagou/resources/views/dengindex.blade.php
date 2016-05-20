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
				<!-- if has unread message, add class unreaded -->
				<li class="msg_dropdown">
					<a class="msg_group" href="javascript:%20void%200;" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">
						消息
						<em class="msg_amount hide" id="headMsgAmount"></em>
					</a>
					<div class="lg_msg_popup">
						<div class="lg_msg_pu_body" id="lgPopupMsgBody"><div class="no_body"><p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p></div></div>
						<div class="lg_msg_pu_footer">
							<a href="http://www.lagou.com/message/settingsdetail.html" target="_blank" class="lg_msg_setting fl"><i class="lg_msg_avatar setting_i"></i>&nbsp;</a>
							<a href="http://www.lagou.com/message/msgdetail.html" class="lg_msg_more fr">查看更多</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{url('Yonghu/jianli')}}" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
				</li>
				<li>
					<a href="http://www.lagou.com/mycenter/delivery.html" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
					<em class="noticeDot dn" id="noticeDot_delivery"></em>
				</li>
				<li>
					<a href="http://www.lagou.com/mycenter/collections.html" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a>
				</li>
				<li class="user_dpdown">
					<span class="unick bl">张胜男</span>
					<em class="noticeDot dn" id="noticeDot_name"></em>
					<i></i>
					<ul>
						<li>
							<a href="http://www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
						</li>
						<li>
							<a href="http://www.lagou.com/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
							<em class="noticeDot dn" id="noticeDot_invitation"></em>
						</li>
				        <li>
							<a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
						</li>
						 <li>
							<a href="{{url('Yonghu/shou')}}" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">个人资料</a>
						</li>
						<li>
							<a href="http://hr.lagou.com/dashboard/" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
						</li>
						<li>
							<a href="http://www.lagou.com/frontLogout.do" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
						</li>
					</ul>
				</li>
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
<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
设计
<i class="design">拉勾形象征集</i>
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/shejizongjian/" data-lg-tj-id="4C00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">设计总监</a>


<a href="http://www.lagou.com/zhaopin/UI/" data-lg-tj-id="4C00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">UI</a>


<a href="http://www.lagou.com/zhaopin/UE/" data-lg-tj-id="4C00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">UE</a>


<a href="http://www.lagou.com/zhaopin/jiaohusheji/" data-lg-tj-id="4C00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">交互设计</a>


<a href="http://www.lagou.com/zhaopin/shujufenxi/" data-lg-tj-id="4C00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">数据分析</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/shijuesheji/" data-lg-tj-id="4J00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">视觉设计</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/wangyeshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">网页设计师</a>



<a href="http://www.lagou.com/zhaopin/Flashshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">Flash设计师</a>



<a href="http://www.lagou.com/zhaopin/APPshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">APP设计师</a>



<a href="http://www.lagou.com/zhaopin/UIshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">UI设计师</a>



<a href="http://www.lagou.com/zhaopin/pingmianshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">平面设计师</a>



<a href="http://www.lagou.com/zhaopin/meishushejishi%EF%BC%882D3D%EF%BC%89/" data-lg-tj-id="4Q00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">美术设计师（2D/3D）</a>



<a href="http://www.lagou.com/zhaopin/guanggaoshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">广告设计师</a>



<a href="http://www.lagou.com/zhaopin/duomeitishejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">多媒体设计师</a>



<a href="http://www.lagou.com/zhaopin/yuanhuashi/" data-lg-tj-id="4Q00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">原画师</a>



<a href="http://www.lagou.com/zhaopin/youxitexiao/" data-lg-tj-id="4Q00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">游戏特效</a>



<a href="http://www.lagou.com/zhaopin/youxijiemianshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">游戏界面设计师</a>



<a href="http://www.lagou.com/zhaopin/shijueshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="">视觉设计师</a>



<a href="http://www.lagou.com/zhaopin/youxichangjing/" data-lg-tj-id="4Q00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">游戏场景</a>



<a href="http://www.lagou.com/zhaopin/youxijiaose/" data-lg-tj-id="4Q00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="">游戏角色</a>



<a href="http://www.lagou.com/zhaopin/youxidongzuo/" data-lg-tj-id="4Q00" data-lg-tj-no="0115" data-lg-tj-cid="idnull" class="">游戏动作</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/yonghuyanjiu/" data-lg-tj-id="4J00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">用户研究</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shujufenxishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">数据分析师</a>



<a href="http://www.lagou.com/zhaopin/yonghuyanjiuyuan/" data-lg-tj-id="4Q00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">用户研究员</a>



<a href="http://www.lagou.com/zhaopin/youxishuzhicehua/" data-lg-tj-id="4Q00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">游戏数值策划</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanshejizhiwei/" data-lg-tj-id="4J00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">设计经理/主管</a>



<a href="http://www.lagou.com/zhaopin/shejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="curr">设计总监</a>



<a href="http://www.lagou.com/zhaopin/shijueshejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">视觉设计经理/主管</a>



<a href="http://www.lagou.com/zhaopin/shijueshejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">视觉设计总监</a>



<a href="http://www.lagou.com/zhaopin/jiaohushejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">交互设计经理/主管</a>



<a href="http://www.lagou.com/zhaopin/jiaohushejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">交互设计总监</a>



<a href="http://www.lagou.com/zhaopin/yonghuyanjiujinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">用户研究经理/主管</a>



<a href="http://www.lagou.com/zhaopin/yonghuyanjiuzongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0308" data-lg-tj-cid="idnull" class="">用户研究总监</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/jiaohusheji/" data-lg-tj-id="4J00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">交互设计</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/wangyejiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">网页交互设计师</a>



<a href="http://www.lagou.com/zhaopin/jiaohushejishi1/" data-lg-tj-id="4Q00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">交互设计师</a>



<a href="http://www.lagou.com/zhaopin/wuxianjiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">无线交互设计师</a>



<a href="http://www.lagou.com/zhaopin/yingjianjiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">硬件交互设计师</a>
</dd>
</dl>
</div>
</div>
<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
运营
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/xinmeitiyunying/" data-lg-tj-id="4D00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">新媒体运营</a>


<a href="http://www.lagou.com/zhaopin/shujuyunying/" data-lg-tj-id="4D00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">数据运营</a>


<a href="http://www.lagou.com/zhaopin/yunyingzongjian/" data-lg-tj-id="4D00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">运营总监</a>


<a href="http://www.lagou.com/zhaopin/COO/" data-lg-tj-id="4D00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">COO</a>


<a href="http://www.lagou.com/zhaopin/bianji/" data-lg-tj-id="4D00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">编辑</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/yunying1/" data-lg-tj-id="4K00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">运营</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/neirongyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">内容运营</a>



<a href="http://www.lagou.com/zhaopin/chanpinyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">产品运营</a>



<a href="http://www.lagou.com/zhaopin/shujuyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="curr">数据运营</a>



<a href="http://www.lagou.com/zhaopin/yonghuyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">用户运营</a>



<a href="http://www.lagou.com/zhaopin/huodongyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">活动运营</a>



<a href="http://www.lagou.com/zhaopin/shangjiayunying/" data-lg-tj-id="4R00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">商家运营</a>



<a href="http://www.lagou.com/zhaopin/pinleiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">品类运营</a>



<a href="http://www.lagou.com/zhaopin/youxiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">游戏运营</a>



<a href="http://www.lagou.com/zhaopin/wangluotuiguang/" data-lg-tj-id="4R00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">网络推广</a>



<a href="http://www.lagou.com/zhaopin/yunyingzhuanyuan/" data-lg-tj-id="4R00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">运营专员</a>



<a href="http://www.lagou.com/zhaopin/wangdianyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">网店运营</a>



<a href="http://www.lagou.com/zhaopin/xinmeitiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="curr">新媒体运营</a>



<a href="http://www.lagou.com/zhaopin/haiwaiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">海外运营</a>



<a href="http://www.lagou.com/zhaopin/yunyingjingli/" data-lg-tj-id="4R00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="">运营经理</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/bianji/" data-lg-tj-id="4K00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">编辑</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/fuzhubian/" data-lg-tj-id="4R00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">副主编</a>



<a href="http://www.lagou.com/zhaopin/neirongbianji/" data-lg-tj-id="4R00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">内容编辑</a>



<a href="http://www.lagou.com/zhaopin/wenancehua/" data-lg-tj-id="4R00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">文案策划</a>



<a href="http://www.lagou.com/zhaopin/jizhe/" data-lg-tj-id="4R00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">记者</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/kefu/" data-lg-tj-id="4K00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">客服</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shouqianzixun/" data-lg-tj-id="4R00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">售前咨询</a>



<a href="http://www.lagou.com/zhaopin/shouhoukefu/" data-lg-tj-id="4R00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">售后客服</a>



<a href="http://www.lagou.com/zhaopin/taobaokefu/" data-lg-tj-id="4R00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">淘宝客服</a>



<a href="http://www.lagou.com/zhaopin/kefujingli/" data-lg-tj-id="4R00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">客服经理</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanyunyingzhiwei/" data-lg-tj-id="4K00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/zhubian/" data-lg-tj-id="4R00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">主编</a>



<a href="http://www.lagou.com/zhaopin/yunyingzongjian/" data-lg-tj-id="4R00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="curr">运营总监</a>



<a href="http://www.lagou.com/zhaopin/COO/" data-lg-tj-id="4R00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="curr">COO</a>



<a href="http://www.lagou.com/zhaopin/kefuzongjian/" data-lg-tj-id="4R00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">客服总监</a>
</dd>
</dl>
</div>
</div>
<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
市场与销售
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/shichangtuiguang/" data-lg-tj-id="4E00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">市场推广</a>


<a href="http://www.lagou.com/zhaopin/shichangzongjian/" data-lg-tj-id="4E00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">市场总监</a>


<a href="http://www.lagou.com/zhaopin/shichangcehua/" data-lg-tj-id="4E00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">市场策划</a>


<a href="http://www.lagou.com/zhaopin/BD/" data-lg-tj-id="4E00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">BD</a>


<a href="http://www.lagou.com/zhaopin/xiaoshouzongjian/" data-lg-tj-id="4E00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">销售总监</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/shichangyingxiao/" data-lg-tj-id="4L00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">市场/营销</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shichangcehua/" data-lg-tj-id="4S00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">市场策划</a>



<a href="http://www.lagou.com/zhaopin/shichangguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">市场顾问</a>



<a href="http://www.lagou.com/zhaopin/shichangyingxiao1/" data-lg-tj-id="4S00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">市场营销</a>



<a href="http://www.lagou.com/zhaopin/shichangtuiguang/" data-lg-tj-id="4S00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="curr">市场推广</a>



<a href="http://www.lagou.com/zhaopin/SEO/" data-lg-tj-id="4S00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">SEO</a>



<a href="http://www.lagou.com/zhaopin/SEM/" data-lg-tj-id="4S00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">SEM</a>



<a href="http://www.lagou.com/zhaopin/shangwuqudao/" data-lg-tj-id="4S00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">商务渠道</a>



<a href="http://www.lagou.com/zhaopin/shangyeshujufenxi/" data-lg-tj-id="4S00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">商业数据分析</a>



<a href="http://www.lagou.com/zhaopin/huodongcehua/" data-lg-tj-id="4S00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">活动策划</a>



<a href="http://www.lagou.com/zhaopin/wangluoyingxiao/" data-lg-tj-id="4S00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">网络营销</a>



<a href="http://www.lagou.com/zhaopin/haiwaishichang/" data-lg-tj-id="4S00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">海外市场</a>



<a href="http://www.lagou.com/zhaopin/zhengfuguanxi/" data-lg-tj-id="4S00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="">政府关系</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gongguan/" data-lg-tj-id="4L00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">公关</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/meijiejingli/" data-lg-tj-id="4S00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">媒介经理</a>



<a href="http://www.lagou.com/zhaopin/guanggaoxiediao/" data-lg-tj-id="4S00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">广告协调</a>



<a href="http://www.lagou.com/zhaopin/pinpaigongguan/" data-lg-tj-id="4S00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">品牌公关</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/xiaoshou/" data-lg-tj-id="4L00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">销售</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/xiaoshouzhuanyuan/" data-lg-tj-id="4S00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">销售专员</a>



<a href="http://www.lagou.com/zhaopin/xiaoshoujingli/" data-lg-tj-id="4S00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">销售经理</a>



<a href="http://www.lagou.com/zhaopin/kehudaibiao/" data-lg-tj-id="4S00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">客户代表</a>



<a href="http://www.lagou.com/zhaopin/dakehudaibiao/" data-lg-tj-id="4S00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">大客户代表</a>



<a href="http://www.lagou.com/zhaopin/BDjingli/" data-lg-tj-id="4S00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">BD经理</a>



<a href="http://www.lagou.com/zhaopin/shangwuqudao1/" data-lg-tj-id="4S00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">商务渠道</a>



<a href="http://www.lagou.com/zhaopin/qudaoxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">渠道销售</a>



<a href="http://www.lagou.com/zhaopin/dailishangxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0308" data-lg-tj-cid="idnull" class="">代理商销售</a>



<a href="http://www.lagou.com/zhaopin/xiaoshouzhuli/" data-lg-tj-id="4S00" data-lg-tj-no="0309" data-lg-tj-cid="idnull" class="">销售助理</a>



<a href="http://www.lagou.com/zhaopin/dianhuaxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0310" data-lg-tj-cid="idnull" class="">电话销售</a>



<a href="http://www.lagou.com/zhaopin/xiaoshouguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0311" data-lg-tj-cid="idnull" class="">销售顾问</a>



<a href="http://www.lagou.com/zhaopin/shangpinzhuli/" data-lg-tj-id="4S00" data-lg-tj-no="0312" data-lg-tj-cid="idnull" class="">商品经理</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanshichangzhiwei/" data-lg-tj-id="4L00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/shichangzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="curr">市场总监</a>



<a href="http://www.lagou.com/zhaopin/xiaoshouzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="curr">销售总监</a>



<a href="http://www.lagou.com/zhaopin/shangwuzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">商务总监</a>



<a href="http://www.lagou.com/zhaopin/CMO/" data-lg-tj-id="4S00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">CMO</a>



<a href="http://www.lagou.com/zhaopin/gongguanzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">公关总监</a>



<a href="http://www.lagou.com/zhaopin/caigouzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0406" data-lg-tj-cid="idnull" class="">采购总监</a>



<a href="http://www.lagou.com/zhaopin/touzizongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0407" data-lg-tj-cid="idnull" class="">投资总监</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gongyinglian/" data-lg-tj-id="4L00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">供应链</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/wuliu/" data-lg-tj-id="4S00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">物流</a>



<a href="http://www.lagou.com/zhaopin/cangchu/" data-lg-tj-id="4S00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">仓储</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/caigou/" data-lg-tj-id="4L00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">采购</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/caigouzhuanyuan/" data-lg-tj-id="4S00" data-lg-tj-no="0601" data-lg-tj-cid="idnull" class="">采购专员</a>



<a href="http://www.lagou.com/zhaopin/caigoujingli/" data-lg-tj-id="4S00" data-lg-tj-no="0602" data-lg-tj-cid="idnull" class="">采购经理</a>



<a href="http://www.lagou.com/zhaopin/shangpinjingli/" data-lg-tj-id="4S00" data-lg-tj-no="0603" data-lg-tj-cid="idnull" class="">商品经理</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/touzi/" data-lg-tj-id="4L00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">投资</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/fenxishi/" data-lg-tj-id="4S00" data-lg-tj-no="0701" data-lg-tj-cid="idnull" class="">分析师</a>



<a href="http://www.lagou.com/zhaopin/touziguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0702" data-lg-tj-cid="idnull" class="">投资顾问</a>



<a href="http://www.lagou.com/zhaopin/touzijingli/" data-lg-tj-id="4S00" data-lg-tj-no="0703" data-lg-tj-cid="idnull" class="">投资经理</a>
</dd>
</dl>
</div>
</div>
<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
职能
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/HR/" data-lg-tj-id="4F00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">HR</a>


<a href="http://www.lagou.com/zhaopin/xingzheng1/" data-lg-tj-id="4F00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">行政</a>


<a href="http://www.lagou.com/zhaopin/jinrongkuaiji/" data-lg-tj-id="4F00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">会计</a>


<a href="http://www.lagou.com/zhaopin/chuna/" data-lg-tj-id="4F00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">出纳</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/renliziyuan/" data-lg-tj-id="4M00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">人力资源</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/renshiHR/" data-lg-tj-id="4T00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">人事/HR</a>



<a href="http://www.lagou.com/zhaopin/peixunjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">培训经理</a>



<a href="http://www.lagou.com/zhaopin/xinzifulijingli/" data-lg-tj-id="4T00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">薪资福利经理</a>



<a href="http://www.lagou.com/zhaopin/jixiaokaohejingli/" data-lg-tj-id="4T00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">绩效考核经理</a>



<a href="http://www.lagou.com/zhaopin/renliziyuan1/" data-lg-tj-id="4T00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">人力资源</a>



<a href="http://www.lagou.com/zhaopin/zhaopin/" data-lg-tj-id="4T00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">招聘</a>



<a href="http://www.lagou.com/zhaopin/HRBP/" data-lg-tj-id="4T00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">HRBP</a>



<a href="http://www.lagou.com/zhaopin/yuangongguanxi/" data-lg-tj-id="4T00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">员工关系</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/xingzheng/" data-lg-tj-id="4M00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">行政</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/zhuli/" data-lg-tj-id="4T00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">助理</a>



<a href="http://www.lagou.com/zhaopin/qiantai/" data-lg-tj-id="4T00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">前台</a>



<a href="http://www.lagou.com/zhaopin/xingzheng1/" data-lg-tj-id="4T00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="curr">行政</a>



<a href="http://www.lagou.com/zhaopin/zongzhu/" data-lg-tj-id="4T00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">总助</a>



<a href="http://www.lagou.com/zhaopin/wenmi/" data-lg-tj-id="4T00" data-lg-tj-no="0205" data-lg-tj-cid="idnull" class="">文秘</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/caiwu/" data-lg-tj-id="4M00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">财务</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/kuaiji/" data-lg-tj-id="4T00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="curr">会计</a>



<a href="http://www.lagou.com/zhaopin/chuna/" data-lg-tj-id="4T00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="curr">出纳</a>



<a href="http://www.lagou.com/zhaopin/caiwu1/" data-lg-tj-id="4T00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">财务</a>



<a href="http://www.lagou.com/zhaopin/jiesuan/" data-lg-tj-id="4T00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">结算</a>



<a href="http://www.lagou.com/zhaopin/shuiwu/" data-lg-tj-id="4T00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">税务</a>



<a href="http://www.lagou.com/zhaopin/shenji/" data-lg-tj-id="4T00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">审计</a>



<a href="http://www.lagou.com/zhaopin/fengkong/" data-lg-tj-id="4T00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">风控</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanzhinengzhiwei/" data-lg-tj-id="4M00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/xingzhengzongjianjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">行政总监/经理</a>



<a href="http://www.lagou.com/zhaopin/caiwuzongjianjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">财务总监/经理</a>



<a href="http://www.lagou.com/zhaopin/HRDHRM/" data-lg-tj-id="4T00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">HRD/HRM</a>



<a href="http://www.lagou.com/zhaopin/CFO/" data-lg-tj-id="4T00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">CFO</a>



<a href="http://www.lagou.com/zhaopin/ceo/" data-lg-tj-id="4T00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">CEO</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/fawu/" data-lg-tj-id="4M00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">法务</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/fawu2/" data-lg-tj-id="4T00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">法务</a>



<a href="http://www.lagou.com/zhaopin/lvshi/" data-lg-tj-id="4T00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">律师</a>



<a href="http://www.lagou.com/zhaopin/zhuanli/" data-lg-tj-id="4T00" data-lg-tj-no="0503" data-lg-tj-cid="idnull" class="">专利</a>
</dd>
</dl>
</div>
</div>
<div class="menu_box">
<div class="menu_main job_hopping">
<h2>
金融
<i class="fina"></i>
<!-- 跳槽月 -->
<span></span>
</h2>



<a href="http://www.lagou.com/zhaopin/touzi/" data-lg-tj-id="4G00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">投资</a>


<a href="http://www.lagou.com/zhaopin/rongzi/" data-lg-tj-id="4G00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">融资</a>


<a href="http://www.lagou.com/zhaopin/binggou/" data-lg-tj-id="4G00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">并购</a>


<a href="http://www.lagou.com/zhaopin/jinrong3fengkong/" data-lg-tj-id="4G00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">风控</a>
</div>
<div class="menu_sub dn">
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/tourongzi/" data-lg-tj-id="4N00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">投融资</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/jinrongtouzijingli/" data-lg-tj-id="4U00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">投资经理</a>



<a href="http://www.lagou.com/zhaopin/jinrongfenxishi/" data-lg-tj-id="4U00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">分析师</a>



<a href="http://www.lagou.com/zhaopin/touzizhuli/" data-lg-tj-id="4U00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">投资助理</a>



<a href="http://www.lagou.com/zhaopin/rongzi/" data-lg-tj-id="4U00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="curr">融资</a>



<a href="http://www.lagou.com/zhaopin/binggou/" data-lg-tj-id="4U00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="curr">并购</a>



<a href="http://www.lagou.com/zhaopin/hangyeyanjiu/" data-lg-tj-id="4U00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">行业研究</a>



<a href="http://www.lagou.com/zhaopin/touzizheguanxi/" data-lg-tj-id="4U00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">投资者关系</a>



<a href="http://www.lagou.com/zhaopin/zichanguanli/" data-lg-tj-id="4U00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">资产管理</a>



<a href="http://www.lagou.com/zhaopin/licaiguwen/" data-lg-tj-id="4U00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">理财顾问</a>



<a href="http://www.lagou.com/zhaopin/jiaoyiyuan/" data-lg-tj-id="4U00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">交易员</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/jinrongfengkong/" data-lg-tj-id="4N00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">风控</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/jinrong3fengkong/" data-lg-tj-id="4U00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="curr">风控</a>



<a href="http://www.lagou.com/zhaopin/zixinpinggu/" data-lg-tj-id="4U00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">资信评估</a>



<a href="http://www.lagou.com/zhaopin/heguijicha/" data-lg-tj-id="4U00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">合规稽查</a>



<a href="http://www.lagou.com/zhaopin/jinronglvshi/" data-lg-tj-id="4U00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">律师</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/shuiwushenji/" data-lg-tj-id="4N00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">审计税务</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/jinrongshenji/" data-lg-tj-id="4U00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">审计</a>



<a href="http://www.lagou.com/zhaopin/jinrongfawu/" data-lg-tj-id="4U00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">法务</a>



<a href="http://www.lagou.com/zhaopin/jinrongkuaiji/" data-lg-tj-id="4U00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">会计</a>



<a href="http://www.lagou.com/zhaopin/jinrongqingsuan/" data-lg-tj-id="4U00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">清算</a>
</dd>
</dl>
<dl>
<dt>



<a href="http://www.lagou.com/zhaopin/gaoduanjinrongzhiwei/" data-lg-tj-id="4N00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
</dt>
<dd>



<a href="http://www.lagou.com/zhaopin/jinrongtouzizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">投资总监</a>



<a href="http://www.lagou.com/zhaopin/rongzizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">融资总监</a>



<a href="http://www.lagou.com/zhaopin/binggouzongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">并购总监</a>



<a href="http://www.lagou.com/zhaopin/fengxiankongzhizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">风控总监</a>



<a href="http://www.lagou.com/zhaopin/zongcaifuzongcai/" data-lg-tj-id="4U00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">副总裁</a>
</dd>
</dl>
</div>
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
<li class="banner_bg_1 current">



<a class="" href="http://www.lagou.com/gongsi/19365.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0001" data-lg-tj-cid="1982"><img src="{{URL::asset('files')}}/Cgp3O1csCW2AXOYXAAHE9GZUzok034.JPG" width="612" height="160" alt="货车帮"></a>
</li>
<li class="banner_bg_2">



<a class="" href="http://www.lagou.com/topic/renrenxingtwo.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0002" data-lg-tj-cid="1975"><img src="{{URL::asset('files')}}/CgqKkVcE0s-AKW7uAACEYADklOk091.JPG" width="612" height="160" alt="人人行(借贷宝)"></a>
</li>
<li class="banner_bg_3">



<a class="" href="http://www.lagou.com/activity/dist/imageCollection/pc/html/index.html?labelWords=hot" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0003" data-lg-tj-cid="2133"><img src="{{URL::asset('files')}}/Cgp3O1csR66AF4jIAACp5e8pwGU974.JPG" width="612" height="160" alt="设计专场"></a>
</li>
</ul>
<div class="banner_control">
<em style="top: 55px;"></em>
<ul class="thumbs">
<li class="thumbs_1">
<i></i>
<img src="{{URL::asset('files')}}/Cgp3O1csCXCARQOAAAAZooX853U320.JPG" width="113" height="42">
</li>
<li class="thumbs_2 current">
<i></i>
<img src="{{URL::asset('files')}}/CgqKkVcE0tSAdseNAAAokHl4hJg013.JPG" width="113" height="42">
</li>
<li class="thumbs_3">
<i></i>
<img src="{{URL::asset('files')}}/CgqKkVcsR7iAGzTCAAAOwlwqivw702.JPG" width="113" height="42">
</li>
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
<ul class="clearfix">
<li class="position_list_item" data-jobid="1639461" data-positionid="1639461" data-salary="15k-25k" data-company="121体育" data-positionname="HTML5" data-companyid="82528">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1639461.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="4m00" data-lg-tj-no="0001" data-lg-tj-cid="1639461">HTML5<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">1天前发布</span>
</div>
<div>
<span class="salary fl">15k-25k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>学历不限</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/82528.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0001" data-lg-tj-cid="82528">121体育</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · O2O</span> / <span>初创型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“地铁直达 建设骨干”
</div>
<div class="pli_btm_r fl">
<span>节日礼物</span>
<span>带薪年假</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1572650" data-positionid="1572650" data-salary="20k-35k" data-company="好好住" data-positionname="Android" data-companyid="84329">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1572650.html" target="_blank" class="position_link fl wordCut" data-index="1" data-lg-tj-id="4m00" data-lg-tj-no="0002" data-lg-tj-cid="1572650">Android<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-05</span>
</div>
<div>
<span class="salary fl">20k-35k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/84329.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0002" data-lg-tj-cid="84329">好好住</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 电子商务</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“创造中国最有趣创新受欢迎的家居APP”
</div>
<div class="pli_btm_r fl">
<span>技能培训</span>
<span>股票期权</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="627426" data-positionid="627426" data-salary="18k-25k" data-company="拉勾网" data-positionname="数据产品经理" data-companyid="147">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/627426.html" target="_blank" class="position_link fl wordCut" data-index="2" data-lg-tj-id="4m00" data-lg-tj-no="0003" data-lg-tj-cid="627426">数据产品经理<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-04</span>
</div>
<div>
<span class="salary fl">18k-25k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/147.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0003" data-lg-tj-cid="147">拉勾网</a>
</div>
<div class="industry wordCut">
<span> 企业服务 · 招聘</span> / <span>成熟型(C轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“推动数据系统化，结束被临时需求拖死的时代”
</div>
<div class="pli_btm_r fl">
<span>节日礼物</span>
<span>年底双薪</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1694539" data-positionid="1694539" data-salary="10k-15k" data-company="北大软件" data-positionname=".NET开发" data-companyid="80815">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1694539.html" target="_blank" class="position_link fl wordCut" data-index="3" data-lg-tj-id="4m00" data-lg-tj-no="0004" data-lg-tj-cid="1694539">.NET开发<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-04</span>
</div>
<div>
<span class="salary fl">10k-15k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/80815.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0004" data-lg-tj-cid="80815">北大软件</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 电子商务</span> / <span>初创型(未融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“五险一金、国企、发展平台大、稳定”
</div>
<div class="pli_btm_r fl">
<span>节日礼物</span>
<span>带薪年假</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="616216" data-positionid="616216" data-salary="15k-30k" data-company="人人行(借贷宝)" data-positionname="PHP" data-companyid="61921">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/616216.html" target="_blank" class="position_link fl wordCut" data-index="4" data-lg-tj-id="4m00" data-lg-tj-no="0005" data-lg-tj-cid="616216">PHP<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-06</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/61921.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0005" data-lg-tj-cid="61921">人人行(借贷宝)</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 金融</span> / <span>成熟型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“九鼎出品；六险一金；帅哥美女多；”
</div>
<div class="pli_btm_r fl">
<span>年底双薪</span>
<span>节日礼物</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="583893" data-positionid="583893" data-salary="6k-12k" data-company="趣乐科技（百万琴友家园）" data-positionname="产品运营" data-companyid="21027">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/583893.html" target="_blank" class="position_link fl wordCut" data-index="5" data-lg-tj-id="4m00" data-lg-tj-no="0006" data-lg-tj-cid="583893">产品运营<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">1天前发布</span>
</div>
<div>
<span class="salary fl">6k-12k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/21027.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0006" data-lg-tj-cid="21027">趣乐科技（百万琴友家园）</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 硬件</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“五险一金、颜值高、教你弹钢琴、玩吉他~”
</div>
<div class="pli_btm_r fl">
<span>行业前景好</span>
<span>股票期权</span>
<span>扁平管理</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="212805" data-positionid="212805" data-salary="15k-30k" data-company="货车帮" data-positionname="高级Java" data-companyid="19365">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/212805.html" target="_blank" class="position_link fl wordCut" data-index="6" data-lg-tj-id="4m00" data-lg-tj-no="0007" data-lg-tj-cid="212805">高级Java<span>[成都]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-06</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/19365.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0007" data-lg-tj-cid="19365">货车帮</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 电子商务</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“优厚薪酬 期权计划 下午茶晚餐 滴滴打车”
</div>
<div class="pli_btm_r fl">
<span>快速成长型</span>
<span>薪酬优厚</span>
<span>股票期权</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1546095" data-positionid="1546095" data-salary="5k-8k" data-company="虫洞翻翻" data-positionname="网站运营" data-companyid="115170">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1546095.html" target="_blank" class="position_link fl wordCut" data-index="7" data-lg-tj-id="4m00" data-lg-tj-no="0008" data-lg-tj-cid="1546095">网站运营<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-07</span>
</div>
<div>
<span class="salary fl">5k-8k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>学历不限</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/115170.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0008" data-lg-tj-cid="115170">虫洞翻翻</a>
</div>
<div class="industry wordCut">
<span> 电子商务 · 文化娱乐</span> / <span>初创型(天使轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“创业大街，期权，核心员工分得代持股份”
</div>
<div class="pli_btm_r fl">
<span>股票期权</span>
<span>扁平管理</span>
<span>帅哥多</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1164929" data-positionid="1164929" data-salary="20k-35k" data-company="和创科技（红圈营销）" data-positionname="iOS" data-companyid="50889">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1164929.html" target="_blank" class="position_link fl wordCut" data-index="8" data-lg-tj-id="4m00" data-lg-tj-no="0009" data-lg-tj-cid="1164929">iOS<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">2016-05-03</span>
</div>
<div>
<span class="salary fl">20k-35k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/50889.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0009" data-lg-tj-cid="50889">和创科技（红圈营销）</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 企业服务</span> / <span>上市公司</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“上市公司，持续股权激励，技术极客云集！”
</div>
<div class="pli_btm_r fl">
<span>弹性工作</span>
<span>敏捷研发</span>
<span>股票期权</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1608540" data-positionid="1608540" data-salary="15k-30k" data-company="汽车之家" data-positionname="品牌经理" data-companyid="8103">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1608540.html" target="_blank" class="position_link fl wordCut" data-index="9" data-lg-tj-id="4m00" data-lg-tj-no="0010" data-lg-tj-cid="1608540">品牌经理<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:05发布</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验5-10年</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/8103.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0010" data-lg-tj-cid="8103">汽车之家</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 文化娱乐</span> / <span>上市公司</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“美股上市公司，核心业务板块，空间大”
</div>
<div class="pli_btm_r fl">
<span>技能培训</span>
<span>节日礼物</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1352956" data-positionid="1352956" data-salary="15k-30k" data-company="闪银奇异" data-positionname="Java高级" data-companyid="29496">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1352956.html" target="_blank" class="position_link fl wordCut" data-index="10" data-lg-tj-id="4m00" data-lg-tj-no="0011" data-lg-tj-cid="1352956">Java高级<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:05发布</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/29496.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0011" data-lg-tj-cid="29496">闪银奇异</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 金融</span> / <span>成长型(B轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“高素质团队 扁平管理 氛围轻松 福利好”
</div>
<div class="pli_btm_r fl">
<span>13~15薪</span>
<span>晋升空间大</span>
<span>定期体检</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="605012" data-positionid="605012" data-salary="15k-30k" data-company="之间网（远景投资集团旗下）" data-positionname="高级UI设计师" data-companyid="64050">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/605012.html" target="_blank" class="position_link fl wordCut" data-index="11" data-lg-tj-id="4m00" data-lg-tj-no="0012" data-lg-tj-cid="605012">高级UI设计师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:04发布</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验5-10年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/64050.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0012" data-lg-tj-cid="64050">之间网（远景投资集团旗下）</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 数据服务</span> / <span>成长型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“六险一金 带薪年假 节日福利 各种津贴”
</div>
<div class="pli_btm_r fl">
<span>五险一金</span>
<span>带薪年假</span>
<span>节日礼物</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1681656" data-positionid="1681656" data-salary="20k-40k" data-company="浩东律所" data-positionname="服务型智能机器人算法工程师" data-companyid="67214">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1681656.html" target="_blank" class="position_link fl wordCut" data-index="12" data-lg-tj-id="4m00" data-lg-tj-no="0013" data-lg-tj-cid="1681656">服务型智能机器人算法工程师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:04发布</span>
</div>
<div>
<span class="salary fl">20k-40k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>硕士</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/67214.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0013" data-lg-tj-cid="67214">浩东律所</a>
</div>
<div class="industry wordCut">
<span> 其他</span> / <span>上市公司</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“福利待遇优厚 工作地点深圳包住宿”
</div>
<div class="pli_btm_r fl">
<span>绩效奖金</span>
<span>百人双证律所</span>
<span>岗位晋升</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1487957" data-positionid="1487957" data-salary="15k-20k" data-company="蚁匠家修" data-positionname="iOS" data-companyid="26180">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1487957.html" target="_blank" class="position_link fl wordCut" data-index="13" data-lg-tj-id="4m00" data-lg-tj-no="0014" data-lg-tj-cid="1487957">iOS<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:04发布</span>
</div>
<div>
<span class="salary fl">15k-20k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>学历不限</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/26180.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0014" data-lg-tj-cid="26180">蚁匠家修</a>
</div>
<div class="industry wordCut">
<span> 电子商务 · O2O</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“13薪 年度涨薪 技术大牛带队”
</div>
<div class="pli_btm_r fl">
<span>岗位晋升</span>
<span>扁平管理</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1812492" data-positionid="1812492" data-salary="10k-16k" data-company="小马科技" data-positionname="功能测试" data-companyid="44598">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<!--  -->


<h2 class="fl"><a href="http://www.lagou.com/jobs/1812492.html" target="_blank" class="position_link fl wordCut" data-index="14" data-lg-tj-id="4m00" data-lg-tj-no="0015" data-lg-tj-cid="1812492">功能测试<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">10:04发布</span>
</div>
<div>
<span class="salary fl">10k-16k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验不限</span> / <span>学历不限</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/44598.html" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0015" data-lg-tj-cid="44598">小马科技</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 教育</span> / <span>成长型(B轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“带薪年假等”
</div>
<div class="pli_btm_r fl">
<span>带薪年假</span>
<span>管理规范</span>
<span>岗位晋升</span>
</div>
</div>
</li>
</ul>
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4p00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>

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
<li class="position_list_item" data-jobid="1185521" data-positionid="1185521" data-salary="8k-15k" data-company="小马金融" data-positionname="用户运营" data-companyid="60215">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1185521.html" target="_blank" class="position_link fl wordCut" data-index="1" data-lg-tj-id="4q00" data-lg-tj-no="0002" data-lg-tj-cid="1185521">用户运营<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">8k-15k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/60215.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0002" data-lg-tj-cid="60215">小马金融</a>
</div>
<div class="industry wordCut">
<span> 金融</span> / <span>初创型(未融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“公司发展前景广阔”
</div>
<div class="pli_btm_r fl">
<span>节日礼物</span>
<span>专项奖金</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813061" data-positionid="1813061" data-salary="20k-40k" data-company="数美时代" data-positionname="金融分析师" data-companyid="82991">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813061.html" target="_blank" class="position_link fl wordCut" data-index="2" data-lg-tj-id="4q00" data-lg-tj-no="0003" data-lg-tj-cid="1813061">金融分析师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">20k-40k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/82991.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0003" data-lg-tj-cid="82991">数美时代</a>
</div>
<div class="industry wordCut">
<span> 企业服务 · 数据服务</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“快速成长型公司，福利待遇好，团队氛围好”
</div>
<div class="pli_btm_r fl">
<span>年底双薪</span>
<span>大数据</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813060" data-positionid="1813060" data-salary="6k-8k" data-company="学大教育" data-positionname="初高中地理" data-companyid="99012">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813060.html" target="_blank" class="position_link fl wordCut" data-index="3" data-lg-tj-id="4q00" data-lg-tj-no="0004" data-lg-tj-cid="1813060">初高中地理<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">6k-8k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验不限</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/99012.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0004" data-lg-tj-cid="99012">学大教育</a>
</div>
<div class="industry wordCut">
<span> 教育</span> / <span>成熟型(C轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“五险一金、补助、礼物、旅游”
</div>
<div class="pli_btm_r fl">
<span>技能培训</span>
<span>节日礼物</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1567342" data-positionid="1567342" data-salary="20k-40k" data-company="滴滴出行" data-positionname="web前端工程师" data-companyid="2474">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1567342.html" target="_blank" class="position_link fl wordCut" data-index="4" data-lg-tj-id="4q00" data-lg-tj-no="0005" data-lg-tj-cid="1567342">web前端工程师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">20k-40k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/2474.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0005" data-lg-tj-cid="2474">滴滴出行</a>
</div>
<div class="industry wordCut">
<span> 移动互联网</span> / <span>成熟型(D轮及以上)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“期权激励，六险一金，BAT团队，福利最全”
</div>
<div class="pli_btm_r fl">
<span>弹性工作</span>
<span>节日礼物</span>
<span>岗位晋升</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1567213" data-positionid="1567213" data-salary="20k-40k" data-company="滴滴出行" data-positionname="前端开发工程师" data-companyid="2474">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1567213.html" target="_blank" class="position_link fl wordCut" data-index="5" data-lg-tj-id="4q00" data-lg-tj-no="0006" data-lg-tj-cid="1567213">前端开发工程师<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">20k-40k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/2474.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0006" data-lg-tj-cid="2474">滴滴出行</a>
</div>
<div class="industry wordCut">
<span> 移动互联网</span> / <span>成熟型(D轮及以上)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“期权激励，六险一金，BAT团队，福利最全”
</div>
<div class="pli_btm_r fl">
<span>弹性工作</span>
<span>节日礼物</span>
<span>岗位晋升</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813056" data-positionid="1813056" data-salary="5k-8k" data-company="北京搜房科技发展有限公司" data-positionname="招聘专员" data-companyid="6110">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813056.html" target="_blank" class="position_link fl wordCut" data-index="6" data-lg-tj-id="4q00" data-lg-tj-no="0007" data-lg-tj-cid="1813056">招聘专员<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">5k-8k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1年以下</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/6110.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0007" data-lg-tj-cid="6110">北京搜房科技发展有限公司</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 金融</span> / <span>上市公司</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“双休、法定假日、带薪年假、餐补、体检”
</div>
<div class="pli_btm_r fl">
<span>岗位晋升</span>
<span>扁平管理</span>
<span>管理规范</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1809938" data-positionid="1809938" data-salary="15k-30k" data-company="石墨" data-positionname="Node.js 开发" data-companyid="75863">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1809938.html" target="_blank" class="position_link fl wordCut" data-index="7" data-lg-tj-id="4q00" data-lg-tj-no="0008" data-lg-tj-cid="1809938">Node.js 开发<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">15k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/75863.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0008" data-lg-tj-cid="75863">石墨</a>
</div>
<div class="industry wordCut">
<span> 移动互联网</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“高速成长、薪资高、时间自由、福利、零食”
</div>
<div class="pli_btm_r fl">
<span>股票期权</span>
<span>带薪年假</span>
<span>绩效奖金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813055" data-positionid="1813055" data-salary="5k-10k" data-company="银匣子" data-positionname="招聘主管" data-companyid="114875">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813055.html" target="_blank" class="position_link fl wordCut" data-index="8" data-lg-tj-id="4q00" data-lg-tj-no="0009" data-lg-tj-cid="1813055">招聘主管<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:04发布</span>
</div>
<div>
<span class="salary fl">5k-10k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/114875.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0009" data-lg-tj-cid="114875">银匣子</a>
</div>
<div class="industry wordCut">
<span> 金融 · 移动互联网</span> / <span>初创型(天使轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“日工作7小时 五险一金 双休 晋升空间大”
</div>
<div class="pli_btm_r fl">
<span>专项奖金</span>
<span>绩效奖金</span>
<span>股票期权</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813053" data-positionid="1813053" data-salary="20k-30k" data-company="猎豹移动" data-positionname="内容运营" data-companyid="133">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813053.html" target="_blank" class="position_link fl wordCut" data-index="9" data-lg-tj-id="4q00" data-lg-tj-no="0010" data-lg-tj-cid="1813053">内容运营<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">20k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>学历不限</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/133.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0010" data-lg-tj-cid="133">猎豹移动</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 信息安全</span> / <span>上市公司</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“福利待遇，发展前景”
</div>
<div class="pli_btm_r fl">
<span>带薪年假</span>
<span>美女前台</span>
<span>超赞年终奖</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813051" data-positionid="1813051" data-salary="4k-5k" data-company="零用钱" data-positionname="产品助理（实习生）" data-companyid="25652">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813051.html" target="_blank" class="position_link fl wordCut" data-index="10" data-lg-tj-id="4q00" data-lg-tj-no="0011" data-lg-tj-cid="1813051">产品助理（实习生）<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">4k-5k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验应届毕业生</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/25652.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0011" data-lg-tj-cid="25652">零用钱</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 广告营销</span> / <span>初创型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“一年后，希望你能做子公司的产品合伙人”
</div>
<div class="pli_btm_r fl">
<span>年终分红</span>
<span>股票期权</span>
<span>五险一金</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1767639" data-positionid="1767639" data-salary="15k-20k" data-company="玖富网" data-positionname="产品经理（互联网金融）" data-companyid="14027">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1767639.html" target="_blank" class="position_link fl wordCut" data-index="11" data-lg-tj-id="4q00" data-lg-tj-no="0012" data-lg-tj-cid="1767639">产品经理（互联网金融）<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">15k-20k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/14027.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0012" data-lg-tj-cid="14027">玖富网</a>
</div>
<div class="industry wordCut">
<span> 金融</span> / <span>成熟型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“有钱途 有班车 领导nice”
</div>
<div class="pli_btm_r fl">
<span>五险一金</span>
<span>带薪年假</span>
<span>年度旅游</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1813050" data-positionid="1813050" data-salary="8k-15k" data-company="钓鱼之家" data-positionname="电商运营" data-companyid="86292">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1813050.html" target="_blank" class="position_link fl wordCut" data-index="12" data-lg-tj-id="4q00" data-lg-tj-no="0013" data-lg-tj-cid="1813050">电商运营<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">8k-15k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/86292.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0013" data-lg-tj-cid="86292">钓鱼之家</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 电子商务</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“钓鱼界No.1的行业地位、成熟商城体系”
</div>
<div class="pli_btm_r fl">
<span>节日礼物</span>
<span>年底双薪</span>
<span>带薪年假</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1767661" data-positionid="1767661" data-salary="20k-30k" data-company="玖富网" data-positionname="技术经理-java" data-companyid="14027">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1767661.html" target="_blank" class="position_link fl wordCut" data-index="13" data-lg-tj-id="4q00" data-lg-tj-no="0014" data-lg-tj-cid="1767661">技术经理-java<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">20k-30k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验5-10年</span> / <span>本科</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/14027.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0014" data-lg-tj-cid="14027">玖富网</a>
</div>
<div class="industry wordCut">
<span> 金融</span> / <span>成熟型(不需要融资)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“有钱途 有班车 领导nice”
</div>
<div class="pli_btm_r fl">
<span>五险一金</span>
<span>带薪年假</span>
<span>年度旅游</span>
</div>
</div>
</li>
<li class="position_list_item" data-jobid="1109688" data-positionid="1109688" data-salary="15k-25k" data-company="人民幼禾" data-positionname="PHP" data-companyid="57963">
<div class="pli_top">
<div class="fl pli_top_l">
<div class="position_name">
<h2 class="fl">

<a href="http://www.lagou.com/jobs/1109688.html" target="_blank" class="position_link fl wordCut" data-index="14" data-lg-tj-id="4q00" data-lg-tj-no="0015" data-lg-tj-cid="1109688">PHP<span>[北京]</span></a></h2>
<!-- 此处需要和后台确认 -->
<span class="fl">11:03发布</span>
</div>
<div>
<span class="salary fl">15k-25k</span>
<span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>大专</span>
</div>
</div>
<div class="fr pli_top_r">
<div class="company_name wordCut">
<a href="http://www.lagou.com/gongsi/57963.html" target="_blank" data-lg-tj-id="4r00" data-lg-tj-no="0015" data-lg-tj-cid="57963">人民幼禾</a>
</div>
<div class="industry wordCut">
<span> 移动互联网 · 教育</span> / <span>成长型(A轮)</span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">
“五险一金，周末双休，工作气氛轻松”
</div>
<div class="pli_btm_r fl">
<span>带薪年假</span>
<span>绩效奖金</span>
<span>五险一金</span>
</div>
</div>
</li>
</ul>
<a href="http://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</div>
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
<script type="text/javascript" src="{{URL::asset('files')}}/ipinyou_2be9977.js"></script>


</body></html>