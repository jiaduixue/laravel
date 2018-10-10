//表单验证


$(function(){
	//输入内容时取消错误状态
	$("form").on("keyup","input.form-control.parsley-error",function(){
		$(this).removeClass("parsley-error");
	});
	
	//更改选择内容时取消错误状态
	$("form").on("change","select.form-control.parsley-error",function(){
		$(this).removeClass("parsley-error");
	});
});

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
	if(isInteger(str)) return true;
	var re = /^[-]{0,1}(\d+)[\.]+(\d+)$/;
	if (re.test(str)) {
	if(RegExp.$1==0&&RegExp.$2==0) return false;
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
















