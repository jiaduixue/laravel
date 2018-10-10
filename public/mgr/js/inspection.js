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

$(function(){
	//下拉选单点击copy选项文字
	$(".copytext li[class!='edit'] a").on("click",function(){
		$(this).parents("ul.dropdown-menu").prev("button").find("span.text").stop().html($(this).html());
		$(this).parents("ul.dropdown-menu").parent(".btn-group").next(".btn").removeClass("disabled");
	});
	
	//下拉选单点击copy选项文字
	$(".sidebar-show").on("click",function(){
		$('.mobile-sidebar').toggleClass("opened");
	});
	

	//全选取消功能
	$(".multi-choice").on("click","input[value='all']",function(){
		var objName=$(this).attr("name");
		if ($(this).attr("checked")) {  
			$("input[name='"+objName+"']").attr("checked", true).parent("label").addClass("active");
		} else {  
			$("input[name='"+objName+"']").attr("checked", false).parent("label").removeClass("active");
		}
	});
	//复选框的事件
	$(".multi-choice").on("click","input[value!='all']",function(){
		$(this).parent("label").toggleClass("active");
		var objName=$(this).attr("name");
		if (!$("input[name='"+objName+"']").checked) {  
			$("input[name='"+objName+"'][value='all']").attr("checked", false);
		}
		var chsub = $("input[name='"+objName+"'][value!='all']").length;
		var checkedsub = $("input[name='"+objName+"'][value!='all']:checked").length;  
		if (checkedsub == chsub) {  
			$("input[name='"+objName+"'][value='all']").attr("checked", true);  
		}  
	});
	//头部菜单
	$(".panelshow").on("click", function() {
		if($(".typepanel").css("top")=="0px"){
			$("html").animate({ marginTop: "0" });
			$(".typepanel").animate({ top: "-41px" });
			$(this).removeClass("opened");
			$(this).find("i").removeClass("ico-minus").addClass("ico-plus");
		}else{
			$("html").animate({ marginTop: "41px" });
			$(".typepanel").animate({ top: "0" });
			$(this).addClass("opened");
			$(this).find("i").removeClass("ico-plus").addClass("ico-minus");
		}
	});
});