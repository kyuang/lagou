/************************************
 * jquery.validate.js加验证方法
 * added by vee
 * for all forms on site
 ************************************/ 
$(function(){
	/*** check基本信息页面的姓名 ***********************/
	jQuery.validator.addMethod("truename", function(value, element) {
		var reg = /^([a-zA-Z ]+|[\u4e00-\u9fa5]+)$/;
		return this.optional(element) || reg.test(value);
		}, "请输入有效的公司简称");
	/*** check特殊字符 ***********************/
	jQuery.validator.addMethod("specialchar", function(value, element) {
		//var reg = /^([\u4e00-\u9fa5]+|[a-zA-Z0-9]+)/;
		value = $.trim(value);
		var reg = /^([#·`~!@$^&':;,?~！……&；：。，、？=])/;
		return this.optional(element) || !reg.test(value);
		}, "请输入有效的公司简称");
	/*** check特殊字符(新版我的简历) *********jason**************/
	jQuery.validator.addMethod("newSpecialChar", function(value, element) {
		var reg = new RegExp("[`~!@$^&*()=|{}'·:;',\\[\\]<>/?~！@￥……&*（）——|{}【】‘；：”“'。，、？]"); 
		return this.optional(element) || !reg.test(value);
		}, "请输入有效的公司简称");
	/*** remove spaces at start and end ,then caculate word num**********************/
	$.validator.addMethod("maxLen", function(value, element, params) {
        	var txt = $.trim($(element).val());
        	return this.optional(element) || txt.length <= params;
    	});	
	/*** 验证元素内部text字数**********************/
	$.validator.addMethod("txtMaxLength", function(value, element, params) {
        var $temp = $("<div></div>").html($(element).val());
        var txt = $temp.text();
        return this.optional(element) || txt.length <= params;
    });
	/*** 职位名称check特殊字符 ***********************/
	jQuery.validator.addMethod("positionspecialchar", function(value, element) {
		//var reg = /^([\u4e00-\u9fa5]+|[a-zA-Z0-9]+)/;
		var reg = /^([·`~!@$^&':;,?~！……&；：。，、？=])/;
		return this.optional(element) || !reg.test(value);
		}, "请输入有效的公司简称");
	/*** IE7兼容 input的value值检测 ***********************/	
		jQuery.validator.addMethod("ievaluean", function(value, element) {
			var reg = new RegExp("15字以内对面试的简单描述哦");
			return this.optional(element) || !reg.test(value);
			}, "请填写短评");
	/*** check city**********************/
		jQuery.validator.addMethod("checkCity",function(value, element) {
			var reg =  /^[\u4e00-\u9fa5]{0,}$/;//只能输入汉字
			return this.optional(element) || reg.test(value);
			}, "请输入有效的公司所在城市，如：北京"); 
		
	/*** 不能全部输入数字**********************/
		jQuery.validator.addMethod("checkNum",function(value, element) {
			var reg = /^[0-9]*$/;//只能输入数字
			return this.optional(element) || !reg.test(value);
			}, "请输入有效的一句话介绍"); 
	
	/*** check 必填 url ***********************/ 
		jQuery.validator.addMethod("checkUrl", function(value, element) {
			value = $.trim(value);
			var reg = /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
			if(value != $(element).attr('placeholder')){
				if(value.substring(0,7) != 'http://' && value.substring(0,8) != 'https://'){
					value = 'http://' + value;
				}
				return this.optional(element) || reg.test(value);
			}else{
				return false;
			}
		}, "请输入有效的公司网址");
	
	/*** check 不必填 url ***********************/ 
		jQuery.validator.addMethod("checkUrlNot", function(value, element) {
			value = $.trim(value);
			var reg = /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
			if(value != $(element).attr('placeholder')){
				if(value.substring(0,7) != 'http://' && value.substring(0,8) != 'https://'){
					value = 'http://' + value;
				}
				return this.optional(element) || reg.test(value);
			}else{
				return true;
			}
		}, "请输入有效的公司网址");
	
	/*** 新check 不必填 url ***********************/ 
		/*** 新check 不必填 url ***********************/ 
		jQuery.validator.addMethod("checkUrlNew", function(value, element) {
			value = $.trim(value);
			var reg = /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
        
            //var reg = new RegExp(reg);        
            var reg1 = /\.[\w]+[\u4e00-\u9fa5]+/i;

			
			if(value != $(element).attr('placeholder')){
				if(value.substring(0,7) != 'http://' && value.substring(0,8) != 'https://'){
					value = 'http://' + value;
				}
				return this.optional(element) || !reg1.test(value) && reg.test(value);
			}else{
				return true;
			}
		}, "请输入有效的公司网址");

	/*** check rangeLength ***********************/ 
		jQuery.validator.addMethod("rangeLen", function(value, element,param) {
			if(value != $(element).attr('placeholder')){
				var length = $.isArray( value ) ? value.length : this.getLength($.trim(value), element);
				return this.optional(element) || ( length >= param[0] && length <= param[1] );
			}else{
				return false;
			}
		}, "请输入有效的范围");
	/*** check rangeLength ***********************/ 
	jQuery.validator.addMethod("rangeLenNew", function(value, element,param) {
		var $temp = $("<div></div>").html($(element).val());
		var value = $temp.text();
		if(value != $(element).attr('placeholder')){
			var length = $.isArray( value ) ? value.length : this.getLength($.trim(value), element);
			return this.optional(element) || ( length >= param[0] && length <= param[1] );
		}else{
			return false;
		}
	}, "请输入有效的范围");
	/*** check salary  最大值不超过等于最小值2倍***********************/ 	
		jQuery.validator.addMethod("salaryRange", function(value, element,param) {
			if(($('#salaryMin').val() != '' && $('#salaryMin').val() != $('#salaryMin').attr('placeholder')) && ($('#salaryMax').val() != '' && $('#salaryMax').val() != $('#salaryMax').attr('placeholder'))){
				if(parseInt($.trim($('#salaryMax').val()))/parseInt($.trim($('#salaryMin').val())) > 2){
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}
		}, "请输入有效的月薪范围");
	
	/*** check salary 最大值大于最小值***********************/ 	
		jQuery.validator.addMethod("Dvalue", function(value, element,param) {
			if(($('#salaryMin').val() != '' && $('#salaryMin').val() != $('#salaryMin').attr('placeholder')) && ($('#salaryMax').val() != '' && $('#salaryMax').val() != $('#salaryMax').attr('placeholder'))){
				if(parseInt($.trim($('#salaryMax').val())) > parseInt($.trim($('#salaryMin').val()))){
					return true;
				}else{
					return false;
				}
			}else{
				return true;
			}
		}, "请输入有效的月薪范围");
		
		/*** check tel***********************/ 	
		jQuery.validator.addMethod("isTel", function(value, element,param) {
			var valArray = value.split(',');
			var isTel = true;
			//var pattern=/(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}$)|(^[0-9]{3,4}\-[0-9]{7,8}\-[0-9]{3,5}$)|(^[0-9]{7,8}\-[0-9]{3,5}$)|(^\([0-9]{3,4}\)[0-9]{7,8}$)|(^\([0-9]{3,4}\)[0-9]{7,8}\-[0-9]{3,5}$)|(^0{0,1}[13|15|18|14|17]{2}[0-9]{9}$)/;
			var pattern=/(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}$)|(^[0-9]{3,4}\-[0-9]{7,8}\-[0-9]{3,5}$)|(^[0-9]{7,8}\-[0-9]{3,5}$)|(^\([0-9]{3,4}\)[0-9]{7,8}$)|(^\([0-9]{3,4}\)[0-9]{7,8}\-[0-9]{3,5}$)|(^1[3,4,5,7,8]{1}[0-9]{9}$)/;
			for(var i=0;i<valArray.length;i++){
				if(!pattern.test(valArray[i])){ 
					isTel = false; 
				}
			}
			if(isTel){ 
				return true; 
			}else{ 
				return false; 
			} 
		}, "请输入正确的手机号或座机号，座机格式如010-62555255或010-6255255-分机号，多个电话用英文逗号隔开");
	
		/*** check Mobile***********************/ 	
		jQuery.validator.addMethod("isMobile", function(value, element,param) {
			//var pattern=/(^0{0,1}[13|15|18|14|17]{2}[0-9]{9}$)/;
			var pattern= /(^1[3,4,5,7,8]{1}[0-9]{9}$)/;
			//var pattern = /(?:\(?[0\+]?\d{1,3}\)?)[\s-]?(?:0|\d{1,4})[\s-]?(?:(?:13\d{9})|(?:\d{7,8}))/;
			if(pattern.test(value)){ 
				return true; 
			}else{ 
				return false; 
			} 
		}, "请输入正确的手机号");
		/*** check 字符长度 区分中英文（输入字符为区间的形式）***********************/ 
		jQuery.validator.addMethod("rangeLenStr", function(value, element,param) {
			//27  esc键  126 ~键
			var len = $.trim(value).length;
			var reLen = 0;
			for(var i=0;i<len;i++){
				if(value.charCodeAt(i) < 27 || value.charCodeAt(i) > 126){
					reLen += 2; // 全角  
				}else{
					reLen++;
				}
			}
			/*if(reLen <= 2*param[1] && reLen>= 2*param[0]){ 
				return true; 
			}else{ 
				return false; 
			}*/
			if((reLen <= 2*param[1] && reLen>= 2*param[0]) || reLen == 0){
				return true; 
			}else{ 
				return false; 
			}
		},"请输入1-40个字符");
		/*** check 字符长度 区分中英文***********************/ 	
		jQuery.validator.addMethod("maxlenStr", function(value, element,param) {
			var len = value.length;
			var reLen = 0; 
		    for (var i = 0; i < len; i++) {       
		        if (value.charCodeAt(i) < 27 || value.charCodeAt(i) > 126 ) {   
		            reLen += 2; // 全角  
		        } else { 
		            reLen++;
		        } 
		    }  
			if(reLen <= 2*param){ 
				return true; 
			}else{ 
				return false; 
			} 
		}, "请输入100字以内的字符");
		
		/*** check Email 多个 用;分隔***********************/ 	
		jQuery.validator.addMethod("moreEmail", function(value, element,param) {
			value = value.replace('；',";").split(';');
			value = jQuery.grep(value, function(n, i){
				  		return ($.trim(n) !== "" && n != null);
					});
			var reg = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
			var isTrue = true;
			if(value.length > 2){
				isTrue = false;
			}else{
				for(var i=0; i<value.length; i++){
					if(!reg.test($.trim(value[i]))){
						isTrue = false;
					}
				}
			}
			if(isTrue){ 
				return true; 
			}else{ 
				return false; 
			} 
		}, "请输入有效的邮件地址，最多2个，并用英文;隔开");

		/**
		 * 除了#号之外的特殊字符判断
		 */
		jQuery.validator.addMethod( 
			'checkExceptSharp', 
			function ( value, element, param ) {
				var reg = /^[\u4e00-\u9fa5a\d\w#\'\s]+$/;
				return this.optional( element ) || reg.test( value );
			},
			'不能输入除去"#"之外的特殊字符'
		);

		/**
		 * tinymce的长度验证器, 获取ueditor内容转换为text，获取长度 edit by honge
		 */
		jQuery.validator.addMethod(
			'tinymceLength',
			/**
			 * 验证方法
			 * @param  string value   值
			 * @param  jquerywrappend element 目标对象
			 * @param  Array params [ 0, 100 ]
			 * @return {[type]} [description]
			 */
			function ( value, element, params ) {
				var targetmce = $( element );
				var textAreaValue = $.trim( targetmce.text().replace( /&nbsp;/g, '' ) );
				var totalLength = getStrLen( textAreaValue );
				return this.optional( element ) 
					|| ( ( params[ 0 ] * 2 ) <= totalLength 
						&& ( totalLength <= ( params[ 1 ] * 2 ) ) );
			},
			jQuery.validator.format( '请输入长度为 {0} - {1} 的字长' )
		);
		/**
		 * ueditor的长度验证器, 获取ueditor内容转换为text，获取长度 edit by honge
		 */
		jQuery.validator.addMethod(
			'ueditorLength',
			/**
			 * 验证方法
			 * @param  string value   值
			 * @param  jquerywrappend element 目标对象
			 * @param  Array params [ 0, 100 ]
			 * @return {[type]} [description]
			 */
			function ( value, element, params ) {
				var targetmce = $( element );
				var temp = $('<div></div>');
				temp.html(targetmce.val());
				var content = temp.text();
				var textAreaValue = $.trim( content.replace( /&nbsp;/g, '' ) );
				var totalLength = getStrLen( textAreaValue );
				return this.optional( element ) 
					|| ( ( params[ 0 ] * 2 ) <= totalLength 
						&& ( totalLength <= ( params[ 1 ] * 2 ) ) );
			},
			jQuery.validator.format( '请输入长度为 {0} - {1} 的字长' )
		);

		jQuery.validator.addMethod(
			'ueditorHtmlLength',
			/**
			 * 验证方法
			 * @param  string value   值
			 * @param  jquerywrappend element 目标对象
			 * @param  Array params [ 0, 100 ]
			 * @return {[type]} [description]
			 */
			function ( value, element, params ) {
				var targetmce = $( element );
				var textAreaValue = $.trim( targetmce.val().replace( /&nbsp;/g, '' ) );
				var totalLength = getStrLen( textAreaValue );
				// console.log('totalLength is ', totalLength);
				// console.log('textAreaValue is ', textAreaValue);
				return this.optional( element ) 
					|| ( ( params[ 0 ] * 2 ) <= totalLength 
						&& ( totalLength <= ( params[ 1 ] * 2 ) ) );
			},
			jQuery.validator.format( '请输入长度为 {0} - {1} 的字长' )
		);
        /*
        * 正数或两位以内小数 "^\d{11}(?:\.\d{1,2})?$"
        */
        jQuery.validator.addMethod( 
			'checkMoney', 
			function ( value, element, param ) {
				var reg = /^([1-9]\d*|0)(\.\d{1,2})?$/;
				return this.optional( element ) || reg.test( value );
			},
			'请输入正确金额'
		);
});
