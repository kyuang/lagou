!function(a,c,g){function y(){(new Image).src=p}var v=function(){var a=location.hostname,c=/^\d{1,3}.\d{1,3}.\d{1,3}.\d{1,3}$/,g=a.split("."),e=g.length-2;if(c.test(a)||2===g.length)return a;for(;e>=0;--e){if("www"===g[e])return g.slice(e+1).join(".");if(-1===",com,net,org,gov,edu,info,name,int,mil,arpa,asia,biz,pro,coop,aero,museum,ac,ad,ae,af,ag,ai,al,am,an,ao,aq,ar,as,at,au,aw,az,ba,bb,bd,be,bf,bg,bh,bi,bj,bm,bn,bo,br,bs,bt,bv,bw,by,bz,ca,cc,cf,cg,ch,ci,ck,cl,cm,cn,co,cq,cr,cu,cv,cx,cy,cz,de,dj,dk,dm,do,dz,ec,ee,eg,eh,es,et,ev,fi,fj,fk,fm,fo,fr,ga,gb,gd,ge,gf,gh,gi,gl,gm,gn,gp,gr,gt,gu,gw,gy,hk,hm,hn,hr,ht,hu,id,ie,il,in,io,iq,ir,is,it,jm,jo,jp,ke,kg,kh,ki,km,kn,kp,kr,kw,ky,kz,la,lb,lc,li,lk,lr,ls,lt,lu,lv,ly,ma,mc,md,me,mg,mh,ml,mm,mn,mo,mp,mq,mr,ms,mt,mv,mw,mx,my,mz,na,nc,ne,nf,ng,ni,nl,no,np,nr,nt,nu,nz,om,pa,pe,pf,pg,ph,pk,pl,pm,pn,pr,pt,pw,py,qa,re,ro,ru,rw,sa,sb,sc,sd,se,sg,sh,si,sj,sk,sl,sm,sn,so,sr,st,su,sy,sz,tc,td,tf,tg,th,tj,tk,tm,tn,to,tp,tr,tt,tv,tw,tz,ua,ug,uk,us,uy,va,vc,ve,vg,vn,vu,wf,ws,ye,yu,za,zm,zr,zw,".indexOf(","+g[e]+","))return g.slice(e).join(".")}return a};if(_py.getLast=function(e){for(var a=this.length-1;a>=0;a--)if(this[a][0]==e)return this[a][1]},_py.serialize=function(){function t(a,e){for(var u=0;u<a.length;u++)if(a[u]===e)return u;return-1}for(var a,i=["domain","urlParam","pi","e","p","mapping"],m=[],c=[],n=[],l=0;l<this.length;l++)a=this[l][0],-1===t(i,a)&&(c[a]=c[a]||[],0<c[a].length?-1===t(c[a],this[l][1])&&c[a].push(this[l][1]):(c[a].push(this[l][1]),m.push([a,c[a]])));for(l=0;l<m.length;l++)n.push(m[l][0]+"="+g(m[l][1].join(",")));return n.join("&")},a.ipy={r:/(^|&)jump=(\d*)/i,cookie:{set:function(n,a,y,m,l){z=new Date,z.setTime(z.getTime()+(y||0)),c.cookie=n+"="+g(a||"")+(y?"; expires="+z.toGMTString():"")+";path=/; domain="+(m||location.host)+(l?"; secure":"")},get:function(a){return(a=c.cookie.match(RegExp("(^|;)\\s*"+a+"=([^;]*)","i")))?decodeURIComponent(a[2]):""}},setCookie:function(e,a){ipy.cookie.set(e,a,31536e6,v())},setSession:function(e,a){ipy.cookie.set(e,a,0,v())},getJump:function(){var a=ipy.cookie.get("ipysession");return a&&(a=a.match(ipy.r))?parseInt(a[2]):0},setJump:function(i){var e=ipy.cookie.get("ipysession");e?e.match(ipy.r)?ipy.setSession("ipysession",e.replace(/jump=(\d*)/,"jump="+i)):ipy.setSession("ipysession",e+"&jump="+i):ipy.setSession("ipysession","jump="+i)},getInfo:function(n){var c=ipy.cookie.get(n);if(c)return c;try{if(a.localStorage&&localStorage.getItem(n))return localStorage.getItem(n)}catch(e){}return""},setInfo:function(n,c){if(null!=c&&""!=c){ipy.setCookie(n,c);try{a.localStorage&&localStorage.setItem(n,c)}catch(e){}}},getQueryString:function(c){if(""!=c&&null!=c){var g=a.location.href,y=g.split(c),h="";if(y.length>1)return g=y[1],h=g.split("&")[0].replace("=","");var v=new RegExp("(^|&)"+c+"=([^&]*)(&|$)"),r=a.location.search.substr(1).match(v);if(null!=r&&r)return r[2];var k=a.location.hash.substr(1).match(v);return null!=k&&k?k[2]:""}},setExendParam:function(p,a,e){var c=p||"",g=a||"",y=e||"";ipy.getExtendParam(c,g,y)},getExtendParam:function(i,a,c){var e="";null!=i&&i&&(e="p="+i),null!=a&&a&&_py.push(["pv",a]),null!=c&&c&&(e+="&ext="+c),ipy.extendSend(e)},itemInfo:function(a){var c,y=[];switch(typeof a){case"string":c=a;break;case"object":for(var h=["id","name","origPrice","price","brand","imgUrl","productUrl","categoryId","category","promotion","discount","soldOut","domain"],i=0;i<h.length;i++){var v=void 0==a[h[i]]?"":a[h[i]];v=v.toString(),y.push(g(v))}ipy.id=a.id||"",c=y.join(",");break;default:return c=""}return c},extendSend:function(ex){var e="";_py.getLast("e")&&(e="e="+_py.getLast("e")+"&"),e+=ex,s=_py.getLast("domain"),p=("https:"==location.protocol?"https":"http")+"://"+s+"/adv?"+_py.serialize()+ipy.getSession()+"&e="+h(e)+"&rd="+(new Date).getTime(),(new Image).src=p},getSession:function(){var a=_py.getLast("c");if(a&&null!=a){var c=ipy.getJump();return isNaN(c)||0!=c?(c++,ipy.setJump(c),"&s="+c):(ipy.setJump(c+1),"")}return""},getP:function(){var p=_py.getLast("p"),a=ipy.id?ipy.id:"";return p=p?p:a}},!_py.getLast("mapping")){"setTimeout(function() {var f=document;e = f.createElement('iframe');e.src='"+("http:"!=location.protocol?"https://cm.ipinyou.com/cmas.html":"http://cm.ipinyou.com/cma.html")+"';f.body.insertBefore(e,f.body.firstChild);e.style.display='none';}, 5000)"}var e,k,p=location.href,q=c.referrer;a.parent!=a&&(p=q,q=""),p&&_py.push(["u",p]),q&&_py.push(["r",q]);var u=_py.getLast("urlParam")||"pyck",d=ipy.getQueryString(u);d=d?d:ipy.getInfo("ipycookie"),ipy.setInfo("ipycookie",d),d&&_py.push(["c",d]),s=_py.getLast("domain"),e=_py.getLast("e"),e=""!=e&&e?"e="+_py.getLast("e"):"",k=ipy.itemInfo(_py.getLast("pi")),p=("https:"==location.protocol?"https":"http")+"://"+s+"/adv?"+_py.serialize()+ipy.getSession()+"&pi="+g(k)+"&p="+g(ipy.getP())+"&e="+g(e)+"&rd="+(new Date).getTime(),q=c.createElement("iframe"),q.src="javascript:false;",q.style.display="none",setTimeout(y,10)}(window,document,encodeURIComponent);