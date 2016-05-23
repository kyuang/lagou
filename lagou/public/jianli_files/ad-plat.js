/*
 * 广告位异步方式--iframe/div方式
 * * 在页面上添加如
 * <div key="SPACE_KEY_xxx" keywordSelector="#keyword"></div>
 * 的结构，xxx为广告位的key，keywordSelector="#keyword"为搜索结果页可选项（根据关键词投放广告）
 *
 * 广告位异步方式--jsonp方式在页面中添加如
 * <div key="xxx class="lgad_jsonp"></div>
 * 的结构，xxx为广告位的key，若需要曝光量统计添加类名ad_exposure
 *
 *
 * 通用编码统计-曝光量统计使用方式--同步方式
 * 在要统计的标签上添加tj_exposure类名以及编码统计所需属性
 *
 * 编码统计-曝光量统计使用方式--异步方式
 * 在要统计的标签上添加tj_exposure类名以及编码统计所需属性,在异步加载DOM操作结束后，使用模块exports出的方法sendStatistics()
 *
 */
$(function() {

    var analyseUri = {
        jsonURL: 'http://a.lagou.com/json'
    };

    /* 广告--jsonp方式 */
    $('.lgad_jsonp').each(function(i, e) {
        var key = $(e).attr('key'),
            keyword = $('#keyword').val();
        $.getJSON('http://ggservice.lagou.com/promotionSpace/data?callback=?', {
            spaceKey: key,
            keyword: keyword
        }, function(json, textStatus) {
            if (json.success && json.data.promotionAds.length > 0) {
                var imgSrc = json.data.promotionAds[0].img1,
                    width = json.data.promotionAds[0].width || json.data.width,
                    height = json.data.promotionAds[0].height || json.data.height,
                    link = json.data.promotionAds[0].link1,
                    tjId = json.data.tgCode,
                    tjCid = json.data.promotionAds[0].id || 'idnull';

                var imgObj = $('<img src="' + imgSrc + '" />');
                if (!imgSrc) {
                    return;
                }
                $(e).append(imgObj);
                width && imgObj.width(width);
                height && imgObj.height(height);
                if (link) {
                    if (tjId) {
                        imgObj.wrap('<a href="' + link + '" data-lg-tj-id="' + tjId + '" data-lg-tj-no="idnull" data-lg-tj-cid="' + tjCid + '" target="_blank" rel="nofollow"></a>');
                        if ($(e).hasClass('ad_exposure')) {
                            exposureStatistics([getTjId(tjId, 'idnull', tjCid)]);
                        }
                    } else {
                        imgObj.wrap('<a href="' + link + '" target="_blank" rel="nofollow"></a>');
                    }
                }
            } else {
                $(e).remove();
                //重置页尾位置
                $(window).trigger('resize');
            }
        });
    });

    /* 广告--iframe/div方式 */
    if ($('div[key^=SPACE_KEY_]').size() > 0) {
        $.ajax({
            url: 'http://ggservice.lagou.com/static/main-mix.js',
            dataType: 'script',
            cache: true
        });
    }

    pushStatistics();

});

/* 曝光量统计 */
function pushStatistics() {
    var tgCodesArr = [];
    $('.tj_exposure').each(function(index, e) {
        if ($(e).attr('data-lg-tj-id')) {
            var tjId = $(e).attr('data-lg-tj-id') || 'idnull',
                tjNo = $(e).attr('data-lg-tj-no') || 'idnull',
                tjCid = $(e).attr('data-lg-tj-cid') || 'idnull';
            tgCodesArr.push(getTjId(tjId, tjNo, tjCid));
            $(e).removeClass('tj_exposure');
        }
    });
    if (tgCodesArr.length > 0) {
        exposureStatistics(tgCodesArr);
    }
}

/* 发送广告曝光量统计 */
function exposureStatistics(tgCodes) {
    var imgGet = new Image();
    var params = {
        "lt": 'trackshow',
        "a": tgCodes.join(','),
        "t": 'ad',
        "v": 1,
        "dl": window.location.href,
        "dr": window.location.protocol + '//' + window.location.hostname,
        "time": new Date().getTime()
    }
    paramsArr = [];
    for (var item in params) {
        paramsArr.push(item + '=' + params[item]);
    }
    imgGet.src = analyseUri.jsonURL + '?' + paramsArr.join('&');
}

/* 获取编码统计ID */
function getTjId(id, no, cid) {
    return [$.trim(id), $.trim(no), 0, $.trim(cid), Math.round(Math.random() * 10000)].join('_');
}
