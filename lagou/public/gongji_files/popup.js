$(function(){$("#loginForm").validate({rules:{email:{required:!0,email:!0,maxlength:100},password:{required:!0}},messages:{email:{required:"请输入登录邮箱地址",email:"请输入有效的邮箱地址，如：vivi@lagou.com",maxlength:"请输入100字以内的邮箱地址"},password:{required:"请输入密码"}},submitHandler:function(a){var b,c,d;$("#remember").prop("checked")?$("#remember").val(1):$("#remember").val(null),b=$("#email").val(),c=$("#password").val(),d=$("#remember").val(),$(a).find(":submit").attr("disabled",!0),$.ajax({type:"POST",data:{email:b,password:c,autoLogin:d},url:ctx+"/user/login.json"}).done(function(b){var c,d;b.success?(c=""==$(".collect_position").val()?null:$(".collect_position").val(),"collected"==c&&(d=$("#jobCollection"),collect(d,b.resubmitToken)),top.location.reload()):$("#beError").text(b.msg).show(),$(a).find(":submit").attr("disabled",!1)})}}),$("body").on("click","a.btn_s",function(){$.colorbox.close(),parent.jQuery.colorbox.close()}),$(".inline").colorbox({inline:!0}),$(".errorTips").click(function(){errorTips("上传附件格式错误!")}),$("#resend").click(function(){var a=$("#userid").val(),b=$("#resend_type").val();$.ajax({type:"POST",data:{code:a,type:b},url:ctx+"/user/resendActivatedMail"}).done(function(a){a.success?$.colorbox({inline:!0,href:"#resend_success",title:"验证邮件发送成功"}):alert(a.msg)})})});