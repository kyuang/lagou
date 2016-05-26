;/*!/common/widgets/plat/poster.js*/
define("common/widgets/plat/poster",["require","exports","module"],function(require,exports){function a(){var a=[];$(".tj_exposure").each(function(c,e){if($(e).attr("data-lg-tj-id")){var g=$(e).attr("data-lg-tj-id")||"idnull",h=$(e).attr("data-lg-tj-no")||"idnull",w=$(e).attr("data-lg-tj-cid")||"idnull";a.push([g,h,w]),$(e).removeClass("tj_exposure")}}),a.length>0&&c(a)}function c(a){for(var c=[],i=0;i<a.length;i++)c.push(g(a[i][0],a[i][1],a[i][2]));var w=new Image,$={lt:"trackshow",a:c.join(","),t:"ad",v:0,dl:encodeURIComponent(window.location.href),dr:encodeURIComponent(window.location.protocol+"//"+window.location.hostname),time:(new Date).getTime()};paramsArr=[];for(var j in $)paramsArr.push(j+"="+$[j]);w.src=h.jsonURL+"?"+paramsArr.join("&")}function g(a,c,g){return[$.trim(a),$.trim(c),0,$.trim(g),Math.round(1e4*Math.random())].join("_")}exports.sendStatistics=a;var h={jsonURL:"http://a.lagou.com/json"};$(".lgad_jsonp").each(function(i,e){var a=$(e).attr("key"),g=$("#keyword").val();$.getJSON("http://ggservice.lagou.com/promotionSpace/data?callback=?",{spaceKey:a,keyword:g},function(a){if(a.success&&a.data.promotionAds.length>0){var g=a.data.promotionAds[0].img1,h=a.data.promotionAds[0].width||a.data.width,w=a.data.promotionAds[0].height||a.data.height,j=a.data.promotionAds[0].link1,v=a.data.tgCode,A=a.data.promotionAds[0].id||"idnull",k=$('<img src="'+g+'" />');if(!g)return;$(e).append(k),h&&k.width(h),w&&k.height(w),j&&(v?(k.wrap('<a href="'+j+'" data-lg-tj-id="'+v+'" data-lg-tj-no="idnull" data-lg-tj-cid="'+A+'" target="_blank" rel="nofollow"></a>'),$(e).hasClass("ad_exposure")&&c([[v,"idnull",A]])):k.wrap('<a href="'+j+'" target="_blank" rel="nofollow"></a>'))}else $(e).remove()})}),$("div[key^=SPACE_KEY_]").size()>0&&$.ajax({url:"http://ggservice.lagou.com/static/main-mix.js",dataType:"script",cache:!0}),a()});
;/*!/common/static/js/analytics.js*/
dataHost="a.lagou.com",function(i,s,o,a,r,c,m){i.LgAnalytics=r,i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date,c=s.createElement(o),m=s.getElementsByTagName(o)[0],c.async=1,c.src=a,m.parentNode.insertBefore(c,m)}(window,document,"script","//a.lagou.com/js/a.js","gatherer"),gatherer("create","UA-41268416-1",{alwaysSendReferrer:!0}),gatherer("send","pageview");var _bdhmProtocol="https:"==document.location.protocol?" https://":" http://";document.write(unescape("%3Cscript src='"+_bdhmProtocol+"hm.baidu.com/h.js%3F4233e74dff0ae5bd0a3d81c6ccf756e6' type='text/javascript'%3E%3C/script%3E")),function(i,s,o,a,r,c,m){i.GoogleAnalyticsObject=r,i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date,c=s.createElement(o),m=s.getElementsByTagName(o)[0],c.async=1,c.src=a,m.parentNode.insertBefore(c,m)}(window,document,"script","//www.google-analytics.com/analytics.js","ga"),ga("create","UA-41268416-1","auto"),ga("require","displayfeatures"),ga("require","linker"),ga("send","pageview");
;/*!/common/static/js/plat_tj_resume.js*/
function initResumeLog(g,a,c,y){var v={};v.logtype=g,v.position=y||GetQueryString("i"),v.orderid=a,v.positionid=c,v.url=location.href,v.fromsite=document.referrer||null,logImgLoader("logImgSet",v)}function logImgLoader(g,a){var c=new Date;a.time=c.getTime();var y="v=1&logtype="+a.logtype+"&position="+a.position+"&orderid="+a.orderid+"&userid="+a.userid+"&positionid="+a.positionid+"&url="+a.url+"&fromsite="+a.fromsite+"&optime="+a.time;$(document.body).append("<img src='http://a.lagou.com/click?"+y+"' id='"+g+"' style='position:fixed;left:-10000px;bottom:0;' />"),$("#"+g).remove()}function GetQueryString(g){var a=new RegExp("(^|&)"+g+"=([^&]*)(&|$)"),r=window.location.search.substr(1).match(a);return null!=r?unescape(r[2]):null}
;/*!/common/static/js/plat_tj.js*/
!function(){function a(e){for(var a=e.target||e.srcElement,A=[];a&&a.getAttribute&&!a.getAttribute("data-lg-tj-id")&&!a.getAttribute("data-lg-gatj-msg");)a=a.parentNode;if(a&&a.getAttribute)try{if(v=(a.getAttribute("data-lg-tj-id")||"idnull").trim(),w=("idnull"==a.getAttribute("data-lg-tj-no")?"idnull":a.getAttribute("data-lg-tj-no")||"idnull").trim(),j=("idnull"==a.getAttribute("data-lg-tj-cid")?"idnull":a.getAttribute("data-lg-tj-cid")||"idnull").trim(),h=c(),_=(a.getAttribute("data-lg-gatj-method")||"send").trim(),C=(a.getAttribute("data-lg-gatj-msgtype")||"event").trim(),E=(a.getAttribute("data-lg-gatj-msg")||"").trim(),M=parseInt(a.getAttribute("data-lg-gatj-val")||0),E&&"function"==typeof ga&&(A.push(_,C),A=A.concat(E.split(",")),!!M&&A.push(M),ga.apply(null,A)),"idnull"==v)return;var D={};D.v=N,D.t=a.tagName.toLocaleLowerCase(),D.dl=encodeURIComponent(R),D.dr=encodeURIComponent(S),D.dt=y,D.aid=[v,w,b,j,h].join("_"),g(D)}catch(e){}}function g(a){var g=new Image;paramsArr=[];for(var c in a)"string"==typeof c&&paramsArr.push(c+"="+a[c]);g.src=A.server+"?"+paramsArr.join("&")}function c(a){function g(){for(var a="",i=0;A>i;i++){var r=Math.floor(10*Math.random());a+=r.toString()}return a.toString()}window._CASH_RANDOM?"":window._CASH_RANDOM={};for(var c=window._CASH_RANDOM||{},A=a||4,v=g();c[v]&&(v=g(),c[v]););return window._CASH_RANDOM[v]=v,v}var A={server:"http://a.lagou.com/track"},v="",w="",b=0,j="",h="",_="",C="",E="",M=0,N=1,R=window.location.href,S=document.referrer,y=document.title,D=document;D.addEventListener?D.addEventListener("click",a,!1):D.attachEvent&&D.attachEvent("onclick",a),window._PTJ=window._PTJ||{postEncodingID:a}}();
;/*!/common/widgets/passport/passport.js*/
define("common/widgets/passport/passport",["require","exports","module","dep/rgrove-lazyload/lazyload","dep/blueimp-md5/js/md5"],function(require){function a(a){var c=top.location,g={protocol:c.protocol.substring(0,c.protocol.length-1),hostname:c.hostname,port:c.port||"80"},F=y.exec(a.url);if(F&&F.length){var v={protocol:F[1],hostname:F[2],port:F[3]||"80"};(g.protocol!=v.protocol||g.hostname!=v.hostname||g.port!=v.port)&&(a.dataType="jsonp",a.jsonp="jsoncallback")}}function c(){P.tinfo("Resource Ready!"),R=!0}function g(a,c){var g=a+"_"+c;$("#"+g).remove(),P.tinfo("Iframe "+g+" removed")}require("dep/rgrove-lazyload/lazyload"),window.md5=require("dep/blueimp-md5/js/md5");var F=!1,v="1.0.2",_=0,h={remote:{}},y=/^(https?):\/\/((?:[\u4E00-\u9FA5a-z0-9.-]|%[0-9A-F]{2}){2,})(?::(\d+))?((?:\/(?:[a-z0-9-._~!$&'()*+,;=:@]|%[0-9A-F]{2})*)*)(?:\?((?:[a-z0-9-._~!$&'()*+,;=:\/?@]|%[0-9A-F]{2})*))?(?:#((?:[a-z0-9-._~!$&'()*+,;=:\/?@]|%[0-9A-F]{2})*))?$/i,b={server:"https://passport.lagou.com",poplogin:"/login/login.json",poptransfer:"/ajaxLogin/frameGrant.html",autologin:"/ajaxLogin/login.html"},w={popup:"http://pstatic.lagou.com/www/static/common/widgets/passport/css/loginpop_8eb0b34.css"},j={jq:"http://pstatic.lagou.com/www/static/common/widgets/passport/dep/jquery.min_7506461.js",jqv:"http://pstatic.lagou.com/www/static/common/widgets/passport/dep/jquery.validate.min_f66db7c.js",lagou:"http://pstatic.lagou.com/www/static/common/widgets/passport/js/lagou_5427c0e.js",cb:"http://pstatic.lagou.com/www/static/common/widgets/passport/dep/jquery.colorbox-min_169e500.js",jsf:"http://pstatic.lagou.com/www/static/common/widgets/passport/dep/json2_f94ab06.js"},P={rpc:function(c){if(c.url){c.type||(c.type="POST"),c.params||(c.params={});var g=arguments.callee;P.tinfo("Start passport.rpc: "+c.url);var F={type:c.type,data:c.params,url:c.url,dataType:"json"};a(F),$.ajax(F).done(function(a,F){return P.tinfo("passport.rpc.succ: "+F),"10001"==a.state?void PASSPORT.remote(a.content.data.crossServiceUrl,function(){P.tinfo("passport.rpc.remote.succ"),g(c)},function(a){P.tinfo("passport.rpc.remote.fail"),c.fail&&c.fail.apply(null,[a])}):void(c.succ&&c.succ.apply(null,arguments))}).fail(function(a,g){P.tinfo("passport.rpc.fail: "+g),c.fail&&c.fail.apply(null,arguments)})}},getTargetUrl:function(a,c){var g={fl:void 0!=c.fl?c.fl:!0,service:c.service,osc:c.osc,ofc:c.ofc,pfurl:P.getCurEncodeUrl()};return a+"?"+$.param(g)},getCurEncodeUrl:function(){return encodeURIComponent(document.URL)},createIframe:function(a,c){var g='<iframe src="'+c+'" id="'+a+"_"+_+'" style="display:none;"></iframe>';$("body").append(g),_++},requester:function(a,c){a.dataType=a.dataType||"json",a.type=a.type||"POST",a.data=a.data||{},$.ajax(a).done(function(a){c&&c(a)})},strFormat:function(a,c){a=String(a);var g=Array.prototype.slice.call(arguments,1),F=Object.prototype.toString;return g.length?(g=1==g.length&&null!==c&&/\[object Array\]|\[object Object\]/.test(F.call(c))?c:g,a.replace(/#\{(.+?)\}/g,function(a,c){var v=g[c];return"[object Function]"==F.call(v)&&(v=v(c)),"undefined"==typeof v?"":v})):a},tipheader:"Lagou Passport v"+v+" -> ",tip:function(){if(F){var a=arguments[0],c=Array.prototype.slice.call(arguments,1);console[a].apply(console,c)}},tinfo:function(a){P.tip("info",P.tipheader+a)}};P.tinfo("Enter passport...");var S=function(){function a(){}var c=a.prototype;return c._getEvents=function(){return this._events||(this._events={}),this._events},c._getMaxListeners=function(){return isNaN(this.maxListeners)&&(this.maxListeners=10),this.maxListeners},c.on=function(a,c){var g=this._getEvents(),F=this._getMaxListeners();g[a]=g[a]||[];var v=g[a].length;if(v>=F&&0!==F)throw new RangeError("Warning: possible Emitter memory leak detected. "+v+" listeners added.");return g[a].push(c),this},c.once=function(a,c){function g(){F.off(a,g),c.apply(this,arguments)}var F=this;return g.listener=c,this.on(a,g),this},c.off=function(a,c){var g=this._getEvents();if(0===arguments.length)return this._events={},this;var F=g[a];if(!F)return this;if(1===arguments.length)return delete g[a],this;for(var v,i=0;i<F.length;i++)if(v=F[i],v===c||v.listener===c){F.splice(i,1);break}return this},c.emit=function(a){var c=this._getEvents(),g=c[a],F=Array.prototype.slice.call(arguments,1);if(g){g=g.slice(0);for(var i=0,v=g.length;v>i;i++)g[i].apply(this,F)}return this},c.listeners=function(a){var c=this._getEvents();return c[a]||[]},c.setMaxListeners=function(a){return this.maxListeners=a,this},a.mixin=function(c){for(var g in a.prototype)c[g]=a.prototype[g];return c},a}(),C=function(){var a=!1;try{a=!(!$||!jQuery)}catch(e){a=!1}return a}(),D=function(){return!(!C||!$("body").validate)}(),A=function(){return!(!C||!$.colorbox)}(),T=function(){return!!JSON.stringify}(),k=function(){return!(!k||!lg)}();P.tinfo("Has$: "+C),P.tinfo("HasValidate: "+D),P.tinfo("HasCb: "+A),P.tinfo("HasLagou: "+k),P.tinfo("HasJsf: "+T);var R=!1;!function(){var a={};!C&&(a[j.jq]=!1),!D&&(a[j.jqv]=!1),!k&&(a[j.lagou]=!1),!A&&(a[j.cb]=!1),!T&&(a[j.jsf]=!1);var g=function(){for(var c in a)if(!a[c])return!1;return!0},F=function(F){P.tinfo("Load "+F+"..."),LazyLoad.js(F,function(){a[F]=!0,P.tinfo("Load "+F+" success!"),g()&&c()})};for(var v in a)F(v)}();var E=new S,z=function(a){return function(){var c=70,g=arguments;R?a.apply(null,g):window.setTimeout(function(){g.callee.apply(null,g)},c)}},L=!1;L||LazyLoad.css(w.popup,function(){L=!0,P.tinfo("Load popup style success!")});var O=function(){var a=P.getCurEncodeUrl(),c=b.server;$.colorbox({html:'<div id="loginPop" class="popup" style="height:240px;"><form id="login_form_popup" action="javascript:;" method="post"  data-view="loginView"><div data-propertyname="username" data-controltype="Phone"><input type="text" id="email" name="email" tabindex="1" placeholder="请输入已验证手机/邮箱"></div><div data-propertyname="password" data-controltype="Password"><input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码"></div><div class="input_item clearfix"  data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display:none;clear: both;"><input type="text" class="input input_white fl" style="width:150px;font-size: 16px;display:block;" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off" ><img src="" alt="" class="yzm"><a href="javascript:;" class="reflash"></a></div><label class="fl" for="remember" style="display:none"><input type="checkbox" id="remember"  value="" checked="checked" name="autoLogin"> 记住我</label><a class="fr" href="'+c+'/accountPwd/toReset.html">忘记密码？</a><div data-propertyname="submit" data-controltype="Botton"><input type="button" id="submitLogin" value="登 &nbsp; &nbsp; 录"></div></form><div class="login_right"><div>还没有拉勾帐号？</div><a href="'+c+'/register/register.html" class="registor_now">立即注册</a><div class="login_others">使用以下帐号直接登录:</div><a href="'+c+"/oauth20/auth_sinaWeiboProvider.html?service="+a+'" target="_blank" id="icon_wb" class="icon_wb" title="使用新浪微博帐号登录"></a><a href="'+c+"/oauth20/auth_qqProvider.html?service="+a+'" class="icon_qq" id="icon_qq" target="_blank" title="使用腾讯QQ帐号登录"></a><a href="'+c+"/oauth20/auth_weixinProvider.html?service="+a+'" class="icon_weixin" id="icon_weixin" target="_blank" title="使用腾讯QQ帐号登录"></a></div></div>',title:"登录"});new lg.Views.BaseView({name:"loginView",fields:[{name:"username",validRules:[{mode:"require",data:"",message:"请输入已验证手机/邮箱",trigger:"blur"},{mode:"pattern",isUse:!0,status:!1,data:{phone:/^(0|86|17951)?((13[0-9]|15[012356789]|17[0135678]|18[0-9]|14[57])[0-9]{8})$/,email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i},message:"请输入有效的手机/邮箱"}],controlType:"Phone"},{name:"password",validRules:[{mode:"require",data:"",message:"请输入密码"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"请输入6-16位密码，字母区分大小写"}],controlType:"Password"},{name:"request_form_verifyCode",isVisible:!1,validRules:[],from:"register",url:"https://passport.lagou.com/vcode/create",controlType:"VerifyCode"},{name:"submit",validRules:[],controlType:"Button",url:"/login/login.json",click:function(e){var a=e,c=a.parent.CollectData(),g="veenike";if(c.isValidate){c.password=md5(c.password),c.password=md5(g+c.password+g);var F=$("#remember",$("body #colorbox #login_form_popup"));F.val(F.prop("checked")?1:null);var v=F.val(),h=void 0==v||null==v?!1:1==v?!0:!1;c.rememberMe=h,$.ajax({url:a.control._option.url,data:c,url:b.server+b.poplogin,dataType:"jsonp",jsonp:"jsoncallback"}).done(function(c){var g={1:{message:"成功",linkFor:"password",level:"info"},210:{message:"请输入有效的手机/邮箱",linkFor:"username",level:"error"},211:{message:"请输入6-16位密码，字母区分大小写",linkFor:"password",level:"error"},220:{message:"请输入有效的手机/邮箱",linkFor:"username",level:"error"},240:{message:"请输入已验证手机/邮箱",linkFor:"username",level:"error"},241:{message:"请输入密码",linkFor:"password",level:"error"},299:{message:"你的操作太过频繁，请稍后再试",linkFor:"password",level:"error"},400:{message:"帐号和密码不匹配",linkFor:"password",level:"error"},500:{message:"登录失败,系统内部异常",linkFor:"password",level:"error"},10010:{message:"验证码不正确",linkFor:"request_form_verifyCode",level:"error"},10011:{message:"操作太频繁",linkFor:"password",level:"error"},10012:{message:"系统错误",linkFor:"password",level:"error"}};if(g[c.state]&&1!=c.state&&a.parent.field[g[c.state].linkFor].showMessage({message:g[c.state].message}),10010!=c.state||a.parent.field.request_form_verifyCode.getIsVisible()||(a.parent.field.request_form_verifyCode.getVerifyCode(),a.parent.field.request_form_verifyCode.setVisible(!0)),"info"==g[c.state].level&&1==c.state){var F=P.getCurEncodeUrl(),v=P.getTargetUrl(b.server+b.poptransfer,{fl:"2",service:F,osc:"PASSPORT._pscb("+_+")",ofc:"PASSPORT._pfcb("+_+")"});P.createIframe("popup_login_iframe",v)}else a.parent.field.request_form_verifyCode.getVerifyCode()})}}}]})};window.PASSPORT=window.PASSPORT||{on:function(){E.on.apply(E,arguments)},auto:z(function(){var a=P.getCurEncodeUrl(),c=P.getTargetUrl(b.server+b.autologin,{fl:"1",service:a,osc:"PASSPORT._ascb("+_+")",ofc:"PASSPORT._afcb("+_+")"});P.createIframe("auto_login_iframe",c)}),_ascb:function(a,c){P.tinfo("Call of PASSPORT._ascb"+a+": "+c),E.emit("autologin:succ",c),g("auto_login_iframe",a)},_afcb:function(a,c){P.tinfo("Call of PASSPORT._afcb"+a+": "+c),E.emit("autologin:fail",c),g("auto_login_iframe",a)},popup:z(function(){O()}),_pscb:function(a,c){P.tinfo("Call of PASSPORT._pscb"+a+": "+c),E.emit("popuplogin:succ",c),g("popup_login_iframe",a)},_pfcb:function(a,c){P.tinfo("Call of PASSPORT._pfcb"+a+": "+c),E.emit("popuplogin:fail",c),g("popup_login_iframe",a)},remote:z(function(a,c,g){P.tinfo("Remote request: "+a+" "+c+" "+g),h.remote[_]={},c&&(h.remote[_].succ=c),g&&(h.remote[_].fail=g),P.tinfo("Remote request put into callbacks: "+JSON.stringify(h.remote));var F=P.getTargetUrl(b.server+b.autologin,{fl:"3",service:a,osc:"PASSPORT._rscb("+_+")",ofc:"PASSPORT._rfcb("+_+")"});P.createIframe("remote_login_iframe",F)}),_rscb:function(a,c){P.tinfo("Call of PASSPORT._rscb"+a+": "+c),E.emit("remotelogin:succ",c),g("remote_login_iframe",a),h.remote[a]&&h.remote[a].succ&&h.remote[a].succ(c)},_rfcb:function(a,c){P.tinfo("Call of PASSPORT._rfcb"+a+": "+c),E.emit("remotelogin:fail",c),g("remote_login_iframe",a),h.remote[a]&&h.remote[a].fail&&h.remote[a].fail(c)},util:{rpc:z(P.rpc),tinfo:z(P.tinfo)}}});