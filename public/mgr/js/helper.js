// JavaScript Document
// 字符上限截取
function subString(str, len, hasDot){
    var newLength = 0;
    var newStr = "";
    var chineseRegex = /[^\x00-\xff]/g;
    var singleChar = "";
    var strLength = str.replace(chineseRegex,"**").length;
    for(var i = 0;i < strLength;i++){
        singleChar = str.charAt(i).toString();
        if(singleChar.match(chineseRegex) != null){
            newLength += 2;
        }else{
            newLength++;
        }
        if(newLength > len){
            break;
        }
        newStr += singleChar;
    }
    if(hasDot && strLength > len){
        newStr += "...";
    }
    return newStr;
}
//文章内容标签过滤
//标签转换
var resetPostText = {
	detal : ".post-detail",
	init : function() {
		$(this.detal).find("group").each(function() {
			$(this).replaceWith("<div class='post-group'>"+$(this).html()+"</div>");
		});
		$(this.detal).find("title").each(function() {
			$(this).replaceWith("<h3 class='title'>"+$(this).text()+"</h3>");
		});
		$(this.detal).find("step").each(function() {
			var number=$(this).text().substring(0,1);
			$(this).replaceWith("<h4 class='step'><i class='ico-seven-segment"+number+"'></i>"+$(this).text().substring(1)+"</h4>");
		});
		$(this.detal).find("page").each(function() {
			$(this).replaceWith("<span class='page'><i class='ico-file mr5'></i>"+$(this).text()+"</span>");
		});
		$(this.detal).find("explain").each(function() {
			$(this).replaceWith("<a title='名词解释' target='_blank' href='"+$(this).text()+"'><i class='link ico-question-sign'></i></a>");
		});
		$(this.detal).find("btn").each(function() {
			$(this).replaceWith("<span class='button-type'>"+$(this).text()+"</span>");
		});
		$(this.detal).find("tips").each(function() {
			$(this).replaceWith("<blockquote><p>"+$(this).html()+"</p></blockquote>");
		});
		
		//预览图片链接
		$(".post-detail img").each(function() {
			if($(this).hasClass("zoom")){
				$(this).wrap("<p class='text-center'><a class='magnific' href='"+$(this).attr("src")+"'></a></p>)");
				$(".post-detail").magnificPopup({
					delegate: '.magnific',
					type: 'image',
					gallery: {
						enabled: false,
					},
					image: {
						tError: '图片无法显示，请检查图片路径是否正确',
					}
				});
			}else $(this).wrap("<p class='text-center'></p>)");
		});	
	}
};

//加载动画
function wrapperLoad(){
	$('#floatingCirclesG').remove();
	$('.header, .banner-search, .main, .footer').css('display','block');
}
//window.onload=function(){wrapperLoad();}

$(document).ready(function(){
	//$(".header, .banner-search, .main, .footer").css("display","none");
	//$("body").append('<div id="floatingCirclesG"><div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02"></div><div class="f_circleG" id="frotateG_03"></div><div class="f_circleG" id="frotateG_04"></div><div class="f_circleG" id="frotateG_05"></div><div class="f_circleG" id="frotateG_06"></div><div class="f_circleG" id="frotateG_07"></div><div class="f_circleG" id="frotateG_08"></div></div>');
	
	//渲染内容格式
    if ($(".post-detail").length > 0) {
        resetPostText.init()
    }
    //在线视频比例
	if($(window).width()<=767&&$(".videogroup").length > 0){
		$(".videogroup iframe").height(($(document.body).width()-40)*0.75);
    }
    //下拉选单点击copy选项文字
	$(".copytext li[class!='edit'][class!='dropdown-submenu'] a").on("click",function(){
		$(this).parents(".btn-group, .nav").find("span.text").stop().html($(this).html()).find(".badge").remove();
	});
	
	//评分等级
	$(".commentarea .score i").on({
		"click":function(){
			$(this).addClass("active ico-star6").removeClass("ico-star4").prevAll("i").addClass("active ico-star6").removeClass("ico-star4");
			$(this).nextAll("i").addClass("ico-star4").removeClass("active ico-star6");
		},
		"mouseover":function(){
			if(!$(this).hasClass("active")){
				$(this).addClass("ico-star6").removeClass("ico-star4").prevAll("i:not('.active')").addClass("ico-star6").removeClass("ico-star4");
				$(this).nextAll("i").addClass("ico-star4").removeClass("ico-star6");
			}
		},
		"mouseout":function(){
			if(!$(this).hasClass("active")){
				$(this).addClass("ico-star4").removeClass("ico-star6").prevAll("i:not('.active')").addClass("ico-star4").removeClass("ico-star6");
			}
		}
	});
});