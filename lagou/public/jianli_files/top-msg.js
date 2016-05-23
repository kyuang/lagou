$(function() {

	/**
	 * @desc 格式化文本，限制字数
	 * @param {string}
	 *            text - 原始文本
	 * @param {number}
	 *            count - 限制字数
	 * @return {string} - 格式化后的文本
	 * @author garylin
	 * 
	 */
	template.helper('formatText', function(text, count) {
		return (text.length > count) ? text.substr(0, count) + '...' : text;
	});

	template.helper('resolvePaiTopTemplate', function(content, businessMessageStatus) {
        content = $.parseJSON(content);
        var topPaiMsg = template('PAI_' + businessMessageStatus, content);
        // 如果有a标签，需要把a标签去掉，以解决 ＃MESSAGE-47
        return topPaiMsg.replace(/<\/?a[^>]*>/, '').replace(/<\/a[^>]*>/,'');
    });

	var $msgDropdown = $('.msg_dropdown'),
	    $headMsgAmount = $('#headMsgAmount');
	// 发送清除通知
	var clearNoticeRemote = function() {
	    if ($msgDropdown.data('unreaded') === true) { //is first send？
	        // TODO send to server to clear notice
	        $.ajax({
	            url: '/message/clearNew.json',
	            type: 'POST',
	            dataType: 'json'
	        })
	        .done(function(data) {
	            // do nothing
	        })
	        .fail(function() {
	            // clear new 失败
	        });
	
	        $msgDropdown.data('unreaded', false);
	    }
	};
	
	/**
	 * 是否是一拍消息
	 * 一拍消息有两类 1、messageType === 'PAI' 2、messageType === 'SYSTEM' && businessStatus 有值
	 */
	function isPai(message) {
	    if (message.messageType === "PAI") {
	        return true;
	    }
	    if (message.messageType === 'SYSTEM' && message.businessStatus != null) {
	        return true;
	    }
	    return false;
	}
	
	// 加载消息
	$.ajax({
	    url: '/message/newMessageList.json',
	    type: 'POST',
	    dataType: 'json'
	})
	.done(function(data) {
	    var $msgBody = $('#lgPopupMsgBody'),
	        msgData = data.content.data,
	        msgContent,
	        contentJson;
	    if (msgData.newMessageList && msgData.newMessageList.length > 0) { // 消息体有东西则处理
	        if (msgData.newMessageCount) {
	            $msgDropdown.data('unreaded', true);
	            $headMsgAmount.removeClass('hide').html(msgData.newMessageCount);// 消息数量
	        }
	
	        for (var i = 0; i < msgData.newMessageList.length; i++) {
	            // 一拍不处理content字段，在pai-template里进行处理
	            if (isPai(msgData.newMessageList[i])) {
	                continue;
	            }
	            msgContent = msgData.newMessageList[i].content;
	            if (msgContent && !(typeof msgContent === 'object')) {
	                contentJson = $.parseJSON(msgContent);
	                // 处理companayName，有简称显示简称，否则显示全称
	                contentJson.companyShowName = contentJson.companyShortName || contentJson.companyName;
	                msgData.newMessageList[i].content = contentJson;
	            }
	        }
	        $msgBody.html(template('TOP_MSG_TPL', data));
	
	        // 初始化消息提示框滚动条
	        $('.lg_msg_pu_body').mCustomScrollbar({
	            theme: 'dark-2'
	        });
	    } else {
	        $('#lgPopupMsgBody').html('<div class="no_body"><p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p></div>');
	    }
	})
	.fail(function(data) {
	    $('#lgPopupMsgBody').html('<div class="no_body"><p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p></div>');
	});
	
	function resetNew() {
	    if ($msgDropdown.hasClass('open')) {
	        $msgDropdown.find('li.lg_msg_item').removeClass('is_new');
	    }
	}
	
	// 点击导航栏消息链接
	$('.msg_group').click(function(event) {
	    event.stopImmediatePropagation();
	    // 打开提示窗并发送清除通知
	    clearNoticeRemote();
	    resetNew();
	    $msgDropdown.toggleClass('open');
	    // 隐藏消息数量
	    $headMsgAmount.hide(200);
	});
	
	$(document).click(function(event) {
	    var $target = $(event.target);
	    // 点击消息提示预览窗口
	    if ($target.parents('.lg_msg_popup').length > 0) {
	        return;
	    }
	    // 点击页面其它地方，关闭提示窗并发送清除通知
	    resetNew();
	    $msgDropdown.removeClass('open');
	});
});