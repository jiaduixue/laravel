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
// 两个浮点数求和  
function mathAdd(num1,num2)
{  
   var r1,r2,m;  
   try{r1 = num1.toString().split('.')[1].length;}catch(e){r1 = 0;}
   try{r2=num2.toString().split(".")[1].length;}catch(e){r2=0;}
   m=Math.pow(10,Math.max(r1,r2));
   return Math.round(num1*m+num2*m)/m;  
}  
  
// 两个浮点数相减  
function mathSub(num1,num2)
{  
   var r1,r2,m;  
   try{r1 = num1.toString().split('.')[1].length;}catch(e){r1 = 0;}
   try{r2=num2.toString().split(".")[1].length;}catch(e){r2=0;}
   m=Math.pow(10,Math.max(r1,r2));
   n=(r1>=r2)?r1:r2;
   return (Math.round(num1*m-num2*m)/m).toFixed(n);  
}  

// 两数相除  
function mathDiv(num1,num2)
{  
   var t1,t2,r1,r2;  
   try{t1 = num1.toString().split('.')[1].length;}catch(e){t1 = 0;}  
   try{t2=num2.toString().split(".")[1].length;}catch(e){t2=0;}
   r1=Number(num1.toString().replace(".",""));
   r2=Number(num2.toString().replace(".",""));
   return (r1/r2)*Math.pow(10,t2-t1);
}  

// 两数相乘    
function mathMul(num1,num2)
{
   var m=0,s1=num1.toString(),s2=num2.toString();   
    try{m+=s1.split(".")[1].length}catch(e){};  
    try{m+=s2.split(".")[1].length}catch(e){};  
    return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m);  
}
//图片保持比例
var autoPhotoHeight=function(){
	if($(".itemlist.active li").length>0){
		var height=$(".itemlist.active li").first().width();
		$(".photoimg").each(function(){
			$(this).height(height);
		});
	};
	if($(".coupons-banner").length>0){
		var couponHeight=$(".coupons-banner").first().width()/3;
		$(".coupons-banner").each(function(){
			$(this).height(couponHeight);
		});
	}
};

//计算tab实际宽度
var autoTabWidth=function(){
	if($(".itemtab").length>0){
		var tabWidth=0;
		$(".itemtab .nav-tabs li").each(function(){
			tabWidth+=$(this).outerWidth(true) + 1;
		});
		$(".itemtab .nav-tabs").width(tabWidth);
	};
};
			
//定位页面的 Cookie
//window.onload = fnLoad; 
//window.onunload = fnUnload;
function SetCookie(sName, sValue) 
{ 
    date = new Date(); 
    s = date.getDate(); 
    date.setDate(s+1);            //expire time is one month late!, and can't be current date! 
    document.cookie = sName + "=" + escape(sValue) + "; expires=" + date.toGMTString(); 
} 
function GetCookie(sName) 
{ 
    // cookies are separated by semicolons 
    var aCookie = document.cookie.split("; "); 
    for (var i=0; i < aCookie.length; i++) 
    { 
    // a name/value pair (a crumb) is separated by an equal sign 
    var aCrumb = aCookie[i].split("="); 
    if (sName == aCrumb[0]) { 
        return unescape(aCrumb[1]);} 
    } 
     
    // a cookie with the requested name does not exist 
    return null;
}

function fnLoad() 
{ 
    document.documentElement.scrollLeft = GetCookie("scrollLeft"); 
    document.documentElement.scrollTop = GetCookie("scrollTop"); 
} 

function fnUnload() 
{ 
    SetCookie("scrollLeft", document.documentElement.scrollLeft) 
    SetCookie("scrollTop", document.documentElement.scrollTop) 
} 

// 重发验证码
function waitingRetry(obj,time) { 
	var sec = parseInt(time),waitingHandle;
	if (sec == 0) { 
		$(obj).removeClass("disabled").text("Resend");         
		sec = parseInt(time); 
	} else { 
		$(obj).addClass("disabled").text("Resend ("+sec+")");
		sec--; 
		setTimeout(function() { waitingRetry(obj,sec) }, 1000) 
	} 
}
$(function(){
	$("#status").fadeOut();
	$("#preloader").delay(350).fadeOut("slow"); 
	});


//计算小计金额
function setPrice(obj){
	if(obj.attr("data-price")){
		var price=obj.parent(".quantity-number").next(".cart-price").children(".total-price");
		price.text((parseInt(obj.val())*parseFloat(obj.attr("data-price"))).toFixed(2));
	};
}

//计算总计金额
function changeTotalAmount(){
	if($("#total-amount").length>0){
		var totalAmount=0;
		$(".cart-product-list li.active .total-price").each(function(){
			totalAmount+=parseFloat($(this).text());
		});
		$("#total-amount").text(totalAmount.toFixed(2));
	}
}

//检查输入字符串是否为空或者全部都是空格
function isNull( str ){
	if ( str == "" ) return true;
	var regu = "^[ ]+$";
	var re = new RegExp(regu);
	return re.test(str);
}

//检查输入字符串是否符合正整数格式 
function isNumber( s ){  
	var regu = "^[0-9]+$";
	var re = new RegExp(regu);
	if (s.search(re) != -1) {
		return true;
	} else {
		return false;
	}
} 

//检查输入手机号码是否正确 
function checkMobile( s ){  
	var regu =/^[1][3][0-9]{9}$/;
	var re = new RegExp(regu);
	if (re.test(s)) {
		return true;
	}else{
		return false;
	}
}

//检查输入字符串是否是带小数的数字格式,可以是负数
function isDecimal( str ){  
	var re = new RegExp("^\\d+(\\.\\d+)?$");
	if (re.test(str)) {
		return true;
	} else {
		return false;
	}
}

//检查输入对象的值是否符合E-Mail格式 
function isEmail( str ){ 
	var myReg = /^[-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/;
	if(myReg.test(str)) return true;
	return false;
}


//检查输入字符串是否符合金额格式
function isMoney( s ){  
	var regu = "^[0-9]+[\.][0-9]{0,3}$";
	var re = new RegExp(regu);
	if (re.test(s)) {
		return true;
	} else {
		return false;
	}
}

//输入字符串是否只由英文字母和数字
function isNumberOrLetter( s ){//判断是否是数字或字母
	var regu = "^[0-9a-zA-Z]+$";
	var re = new RegExp(regu);
	if (re.test(s)) {
		return true;
	}else{
		return false;
	}
} 

//判断是否是日期 
function isDate( date, fmt ) {
	if (fmt==null) fmt="yyyyMMdd";
	var yIndex = fmt.indexOf("yyyy");
	if(yIndex==-1) return false;
	var year = date.substring(yIndex,yIndex+4);
	var mIndex = fmt.indexOf("MM");
	if(mIndex==-1) return false;
	var month = date.substring(mIndex,mIndex+2);
	var dIndex = fmt.indexOf("dd");
	if(dIndex==-1) return false;
	var day = date.substring(dIndex,dIndex+2);
	if(!isNumber(year)||year>"2100" || year< "1900") return false;
	if(!isNumber(month)||month>"12" || month< "01") return false;
	if(day>getMaxDay(year,month) || day< "01") return false;
	return true;
}
function getMaxDay(year,month) {
	if(month==4||month==6||month==9||month==11)
	return "30";
	if(month==2)
	if(year%4==0&&year%100!=0 || year%400==0)
	return "29";
	else
	return "28";
	return "31";
} 

//检查输入的Email信箱格式是否正确
function checkEmail(strEmail) {
	//var emailReg = /^[_a-z0-9]+@([_a-z0-9]+\.)+[a-z0-9]{2,3}$/;
	var emailReg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
	if( emailReg.test(strEmail) ){
		return true;
	}else{
		return false;
	}
}

//检查输入的电话号码格式是否正确 
function checkPhone( strPhone ) {
	var phoneRegWithArea = /^[0][1-9]{2,3}-[0-9]{5,10}$/;
	var phoneRegNoArea = /^[1-9]{1}[0-9]{5,8}$/;
	if( strPhone.length > 9 ) {
		if( phoneRegWithArea.test(strPhone) ){
			return true;
		}else{
			return false;
		}
	}else{
		if( phoneRegNoArea.test(strPhone) ){
			return true;
		}else{
			return false;
		}
	}
}
//移动端回顶部 
function mobileGotoTop(){
	if($(window).width()>980){
		return false;
		}
	$("body").append('<a href="javascript:;" class="goto-top"><i class="icon-fold"></i></a>');
	$(document).on("click",".goto-top",function(){
			$('body,html').animate({scrollTop:0},500);
			});
	$(window).scroll(function(){
		if($(window).scrollTop()>100){
			$(".goto-top").fadeIn();
			}else{
				$(".goto-top").fadeOut();
				}
		
		});
	}
//
$(function(){
	//回到顶部
	mobileGotoTop();
	$(window).scroll(function(){
		//排序分类浮动
		if($(".sort-tab").length>0){
			var sortT = $(".home-user-panel").offset().top + $(".home-user-panel").outerHeight() - $(".pages>.navbar").outerHeight(),
			scrollT = $(window).scrollTop();
			barH = $(".pages>.navbar").outerHeight();
			if(scrollT>sortT){
				$(".sort-tab").addClass("fixed").css("top",barH);
				}else{
					$(".sort-tab").removeClass("fixed").css("top",0);
					}	
			}
		
		});
	
	//输入内容时取消错误状态
	$("form").on("keyup","input.form-control.parsley-error, textarea.form-control.parsley-error",function(){
		$(this).removeClass("parsley-error");
	});
	
	//更改选择内容时取消错误状态
	$("form").on("change","select.form-control.parsley-error",function(){
		$(this).removeClass("parsley-error");
	});
	
	//图片保持长宽比
	autoPhotoHeight();
	$(window).resize(function(){
		autoPhotoHeight();
	});
	
	//跨页面传参
	(function () {
		var URL = document.location.toString();
		if($(".tab-pane").length > 0){
			var QueryString,arr =new Array(), paneId;
			if(URL.indexOf("pane")!=-1){
				QueryString=URL.substring(URL.indexOf("?")+1,URL.length);
				arr=QueryString.split("&");
				for(var i=0; i<arr.length; i++){
					if(arr[i].search("pane")!=-1)paneId="#"+arr[i].substring(5,arr[i].length);
				}
				$(paneId).addClass("active").siblings(".tab-pane").removeClass("active");
				$("a[data-toggle='tab'][href='"+paneId+"']").parent("li").addClass("active").siblings("li").removeClass("active");
				$(".nav li[rel='"+paneId+"']").addClass("active").siblings("li").removeClass("active");
			}else QueryString = "";
		}
	})();
	
	//可伸缩面板
	$(document).on("touchstart click",".panel-stretch .panel-heading",function(e){
		e.stopPropagation();
		e.preventDefault();
		$(this).closest(".panel-stretch").toggleClass("open");
		$(this).next(".panel-body").slideToggle();
	});
	
	//回到顶部
	$(window).bind("scroll",function(){
		if($(this).scrollTop()<=90){
			$("#fixed-menu .gotop").css("display","");
		}else {
			$("#fixed-menu .gotop").css("display","block");
		};
	});
	
	
	//数字输入组件
	$(document).on("touchstart click",".quantity-number .btn-add",function(e){
		var n=$(this).parents(".quantity-number").find("input.form-control"),s=parseInt(n.val()), stock=parseInt(n.attr("data-stock")), t=s*1+1;
		if(t>=stock){
			n.val(stock);
			$(this).addClass("disabled");
			setPrice(n);
		}else{
			n.val(t);
			$(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
			setPrice(n);
		}
		e.preventDefault();
		changeTotalAmount();
	});
	$(document).on("touchstart click",".quantity-number .btn-subtract",function(e){
		var n=$(this).parents(".quantity-number").find("input.form-control"),s=parseInt(n.val()), t=s*1-1;
		if(t>=1){
			n.val(t);
			$(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
			setPrice(n);
		}else{
			n.val("1");
			$(this).addClass("disabled");
			setPrice(n);
		};
		e.preventDefault();
		changeTotalAmount();
	});
	$(document).on("change",".quantity-number input.form-control",function(){
		var s=parseInt($(this).val()), stock=parseInt($(this).attr("data-stock"));
		if(s<=1){
			$(this).val("1").parents(".quantity-number").find(".btn-subtract").addClass("disabled");
			$(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
			setPrice($(this));
		}else if(s>=stock){
			$(this).val(stock).parents(".quantity-number").find(".btn-add").addClass("disabled");
			$(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
			setPrice($(this));
		}else{
			$(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
			$(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
			setPrice($(this));
		}
		changeTotalAmount();
	});
	
	//全选取消功能
	$(".multichoice").on("click touchstart","input[type='checkbox'][value='all']",function(){
		var objName=$(this).attr("name");
		if ($(this).prop("checked")){
			$("input[name='"+objName+"']").prop("checked", true).prev(".virtual-checkbox").attr("class","virtual-checkbox icon-roundcheck");
			$("input[name='"+objName+"'][value!='all']").parents("li").addClass("active");
		} else {
			$("input[name='"+objName+"']").prop("checked", false).prev(".virtual-checkbox").attr("class","virtual-checkbox icon-round");
			$("input[name='"+objName+"'][value!='all']").parents("li").removeClass("active");
		};
		changeTotalAmount();
	});
	
	//复选框的事件
	$(".multichoice").on("click touchstart","input[type='checkbox'][value!='all']",function(event){
		if ($(this).prop("checked")){
			$(this).prev("label").prop("class","virtual-checkbox icon-roundcheck").parents("li").addClass("active");
		}else {
			$(this).prev("label").prop("class","virtual-checkbox icon-round").parents("li").removeClass("active");
		};
		var objName=$(this).attr("name");
		if (!$("input[name='"+objName+"']").checked) {
			$("input[name='"+objName+"'][value='all']").prop("checked", false).prev(".virtual-checkbox").attr("class","virtual-checkbox icon-round");
		};
		var chsub = $("input[name='"+objName+"'][value!='all']").length;
		var checkedsub = $("input[name='"+objName+"'][value!='all']:checked").length;  
		if (checkedsub == chsub) {  
			$("input[name='"+objName+"'][value='all']").prop("checked", true).prev(".virtual-checkbox").attr("class","virtual-checkbox icon-roundcheck");  
		};
		changeTotalAmount();
		event.stopPropagation();
	});

});