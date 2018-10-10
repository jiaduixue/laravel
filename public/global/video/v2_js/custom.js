var system_timestamp = Date.parse(new Date()) / 1000;
var mobilePlatformValue = localStorage.getItem("CURRENT_OS_VALUE");
var mobilePushClientId = localStorage.getItem("MOBILE_PUSH_CLIENTID");
mobilePushClientId = 'null' == mobilePushClientId ? '' : mobilePushClientId;

//lazyload
function imgLoad(){
	var option = {
		threshold: 100,
		load:function(){
			$(this).attr("data-lazyload",false);
		}
	}
	jQuery("[data-lazyload=true]").lazyload(option);
}
//秒数格式化mm:ss
function formatSeconds(value) {
    var theTime = parseInt(value);// 秒
    var theTime1 = 0;// 分
    if(theTime > 60) {
        theTime1 = parseInt(theTime/60);
        theTime = parseInt(theTime%60);
    }
        var result = parseInt(theTime);
        if(theTime1 > 0) {
        result = ""+parseInt(theTime1)+":"+result;
        }
    return result;
}
//页面loading
function pageloadingShow(){
    var wH = $(window).height(),obj;
    obj = $("body")
    var timeID = Date.parse(new Date());
    obj.append('<div class="loading-wrap" style="top:'+(wH/2)+'px" data-timeID="'+timeID+'">'+
        '<div class="loader">Loading...</div>'+
        '</div>');
}
function pageloadingShowMask(){
    var wH = $(window).height(),obj;
    obj = $("body")
    var timeID = Date.parse(new Date());
    obj.append('<div class="loading-wrap" style="top:'+(wH/2)+'px" data-timeID="'+timeID+'">'+
        '<div class="loader">Loading...</div>'+
        '</div>'+
        '<div class="loading-mask"></div>');
}
function pageloadingHide(){
    $(".loading-wrap,.loading-mask").remove();
}
//首页列表innerHtml
function listHtml(i,arr){
	var view = (arr[i].view|| 0).toString().replace(/(\d)(?=(?:\d{3})+$)/g, '$1,'),
	like= (arr[i].totalLike|| 0).toString().replace(/(\d)(?=(?:\d{3})+$)/g, '$1,'),
	time =  moment(formatSeconds(arr[i].duration),"mm:ss").format("mm:ss"),
	band = arr[i].User.isBand==1 ? "active":"",
	vProductArr = arr[i].videoProducts,
	vProductHtml="";
	//视频商品
	if(vProductArr.length>0){
		var vProductL = vProductArr.length>4 ? 4:vProductArr.length;
		for(var j = 0; j<vProductL; j++){
			vProductHtml+='<div>\
	      				  	<a href="javascript:;" style="background-image: url(v2_images/placeholder300.png);" data-lazyload="true"  data-original="'+vProductArr[j].picture+'"></a>\
	      				   </div>'
		}
	}else{
		vProductHtml="";
	}
	return '<div class="title t-overflow">\
      					<i class="iconfont icon-crown '+band+'"></i>\
      					<a href="javascript:;" class="c-name">'+arr[i].User.name+'</a>\
      				</div>\
      				<div class="preview-content">\
      						<a class="avatar-wrap" href="javascript:;">\
	      						<img src="v2_images/placeholder300.png" data-lazyload="true" data-original="'+arr[i].User.portrait+'">\
	      					</a>\
      					<a href="javascript:wCreateWatch(\''+arr[i].vid+'\');" class="img-wrap" style="background-image: url(v2_images/placeholder720.png);" data-lazyload="true" data-original="'+arr[i].preview+'">\
	      					<div class="time">'+time+'</div>\
	      				</a>\
	      				<a href="javascript:;" class="v-name">'+arr[i].name+'</a>\
	      				<div class="v-num-group">\
	      					<div class="left">\
	      						<span class="item">\
		      						<span class="val">'+view+'</span>\
		      						<span class="title">Views</span>\
		      					</span>\
		      					<span class="item">\
		      						<span class="val">'+like+'</span>\
		      						<span class="title">Like</span>\
		      					</span>\
	      					</div>\
	      					<div class="right">\
	      						<span class="val">'+arr[i].videoProductCount+'</span><span class="title">Products</span>\
	      					</div>\
	      				</div>\
	      				<div class="products-group">'+vProductHtml+'</div>\
      				</div>'
};
//获取国家json本地存储
function localStorageCountry(){
	$.mamall_request('video.video.country',{},function(r){
        if('9999'==r.ErrorCode)
        {
        	//国家列表
            var cListJSON = r.Data.Country; 
            localStorage.setItem("countryJSON",JSON.stringify(cListJSON));
	    }
        else
        {
            console.log(r.Message);
        }
    });
}
function getDefaultLocation() {
	var defaultCountryCode = localStorage.getItem("locationCSelect");
	if(! defaultCountryCode || defaultCountryCode == 'undefined') {
		//获取经纬度
        plus.geolocation.getCurrentPosition( function(p){
        		//获取所在国家
			mui.ajax('http://maps.google.com/maps/api/geocode/json',{
				data:{
					latlng:p.coords.latitude+','+p.coords.longitude,
					language:'EN',
					sensor:true
				},
				type:"get",
				dataType:"json",
				success:function(data){
					//所在国家
					var thisCountry;
					for (var i=0; i<data.results[0].address_components.length; i++){
						if(data.results[0].address_components[i].types[0]=='country'){
							defaultCountryCode = data.results[0].address_components[i].short_name
						};
					}
				},
				error:function(xhr,type,errorThrown){
					console.log(type);
					defaultCountryCode = 'US';
				}
			});
		},function(e) {
			console.log("Geolocation error: " + e.message );
			defaultCountryCode = 'US';
		});
	}
	if(!defaultCountryCode) defaultCountryCode = 'US';
	localStorage.setItem('locationCSelect', defaultCountryCode);
	return defaultCountryCode;
}
//首页右上国旗
function homeflag(){
	var country = getDefaultLocation();
	jQuery(".header-action .flag").attr("data-country",country).find("i").css("background-image","url(v2_images/flags/"+country+"@3x.png)");
}
//建立新窗口
function wCreate(url,id,styles,extras){
	var w = plus.webview.create(url,id,styles,extras);
	w.show('pop-in');
}
//红人视频页打开
// 判断预载打开
var preate={};
var _openw=null;
var as='pop-in';// 默认动画类型
function wCreateWatch(vid){
	if(_openw){return;}
	console.log("vid:"+vid);
	pageloadingShowMask();
	//用户信息
	var customerInfoString = localStorage.getItem('CustomerInfo_' + localStorage.getItem("OM_DEVICE_UUID"));
	jQuery.mamall_request('video.video.find', {vid:vid, withProducts:2,customerId:JSON.parse(customerInfoString).customerId}, function(r){
		
		if('9999'==r.ErrorCode)
        {
        	console.log("获取数据成功");
        	var data = r.Data.Data[0];
        	localStorage.setItem("watchJSON",JSON.stringify(data));
        	pageloadingHide();
        	_openw=preate['watch.html'];
			if(_openw){
				if(_openw.showded){
					_openw.show('auto');
				}else{
					_openw.show(as);
					_openw.showded=true;
				}	
				_openw=null;
			}else{
				_openw=plus.webview.create('watch.html','watch.html',{scrollIndicator:'none',scalable:false,popGesture:'hide'});
				preate['watch.html']=_openw;
				_openw.addEventListener('loaded',function(){//页面加载完成后才显示
					pageloadingHide();
					_openw.show(as);
					_openw.showded=true;
					_openw=null;
				},false);
				_openw.addEventListener('close',function(){//页面关闭后可再次打开
					pageloadingHide();
					_openw=null;
					preate['watch.html']&&(preate['watch.html']=null);//兼容窗口的关闭
				},false);
			}         
	    }
        else
        {
            console.log(r.Message);
        }
	})

}
//红人主页打开
var _openInfluencerw=null;
var preate0={};
function wCreateInfluencer(cid){
	if(_openInfluencerw){return;}
	pageloadingShowMask();
	
	//用户信息
	var customerInfoString = localStorage.getItem('CustomerInfo_' + localStorage.getItem("OM_DEVICE_UUID"));
	console.log("cid:"+cid)
	console.log(JSON.parse(customerInfoString).customerId)
	jQuery.mamall_request('video.influencer.find', {cid:cid,customerId:JSON.parse(customerInfoString).customerId}, function(r){
		if('9999'==r.ErrorCode)
        {
        	console.log("获取数据成功");
        	console.log(r.Data);
        	localStorage.setItem("influencerJSON",JSON.stringify(r.Data));
        	pageloadingHide();
        	_openInfluencerw=preate0['influencer.html'];
        	if(_openInfluencerw){
				if(_openInfluencerw.showded){
					_openInfluencerw.show('auto');
				}else{
					_openInfluencerw.show(as);
					_openInfluencerw.showded=true;
				}	
				_openInfluencerw=null;
			}else{
				_openInfluencerw=plus.webview.create('influencer.html','influencer.html',{scrollIndicator:'none',scalable:false,popGesture:'hide'});
				preate0['influencer.html']=_openw;
				_openInfluencerw.addEventListener('loaded',function(){//页面加载完成后才显示
					pageloadingHide();
					_openInfluencerw.show(as);
					_openInfluencerw.showded=true;
					_openInfluencerw=null;
				},false);
				_openInfluencerw.addEventListener('close',function(){//页面关闭后可再次打开
					pageloadingHide();
					_openInfluencerw=null;
					preate0['influencer.html']&&(preate['influencer.html']=null);//兼容窗口的关闭
				},false);
			}         
	    }
        else
        {
            console.log(r.Message);
        }
	})
}
//关闭自己webview
function closeMe(){
	var ws=plus.webview.currentWebview();
	plus.webview.close(ws);
}

function msgAlert(alertType,txt,hidetime){
    if(!alertType || !txt){
        return false;
    }
    if(!hidetime){
        hidetime=1500;
    }
    $("body").append(' <div class="msg-alert '+alertType+'"><p>'+txt+'</p></di>');
    $(".msg-alert").fadeIn();
    setTimeout(function(){
        $(".msg-alert").fadeOut(200);
    },hidetime);
    setTimeout(function(){
        $(".msg-alert").remove();
    },hidetime+200);
}


//购物车商品库存
function cartStock(num,stockID){
	if(!num)num=0;
	jQuery("#selectVariation .attr-group.last h5>span").text(num);
	jQuery(".mui-numbox").attr("data-num-max",num)
	jQuery("#selectVariation [data-action=add]").attr('data-stockID',stockID);
	
}

//购物车多属性
function cartAttrGroup(data){
	var innerH = "";
	console.log(data)
	for(var key in data){
		console.log(data[key])
		var attrVal = "";
		for(var i = 0;data[key].length>i;i++){
			attrVal += ' <li>'+data[key][i]+'</li>';
		}
		innerH += '<div class="attr-group" data-group="attr">\
            <h5>'+key+'</h5>\
            <ul class="mui-table-view">'+attrVal+'</ul>\
        </div>'
	}
	
	return innerH;
}
//点击添加购物车
function addCart(brand,pid){
	if(brand === "OurMall"){
		pageloadingShowMask();
		jQuery.mamall_request('video.product.getsku', {youtubepid:pid}, function(r){
			if('9999'==r.ErrorCode){
				var data = r.Data.Product;
				console.log(data);
				resetHtml = '<div class="sv-top">\
					        	<button type="button" id="closePopover" class="close"><i class="iconfont icon-close"></i></button>\
					            <div class="img-wrap"></div>\
					            <div class="right">\
					                <h4></h4>\
					                <div class="price text-danger"></div>\
					            </div>\
					        </div>\
					        <div class="attr-group last">\
					            <h5>Quantity (Stock:<span> -- </span>)</h5>\
					            <div class="mui-numbox" data-num-step=\'1\' data-num-min=\'1\' data-num-max>\
					  			<button class="mui-btn mui-numbox-btn-minus" type="button">-</button>\
					  			<input class="mui-numbox-input" type="number" value="1" readonly="readonly"/>\
					 			<button class="mui-btn mui-numbox-btn-plus" type="button">+</button>\
								</div>\
					        </div>\
					        <div class="action">\
					        	<button  class="btn btn-primary" type="button" data-action="add">Add to Cart</button>\
					        	<button  class="btn btn-white" type="button">Buy Now</button>\
					        </div>'
				jQuery("#selectVariation .modal-content").html("").append(resetHtml); //购物车弹层初始化
				jQuery("#selectVariation").attr("data-shopURL",data.shopUrl) //url属性
				jQuery("#selectVariation .img-wrap").css("background-image","url("+data.imgUrl1+")"); //图片
				jQuery("#selectVariation .right h4").text(data.name); //品名
				jQuery("#selectVariation .price").text(data.currency+" "+data.defaultPrice); //价格
				jQuery("#selectVariation .sv-top").after(cartAttrGroup(data.mobilePropertyArr));//多属性
				jQuery("#selectVariation [data-action]").attr("data-vpid",pid);//vpid属性
				//加购物车按钮属性
				jQuery("#selectVariation [data-action=add]").attr({
					'data-shopID':data.sponsorShopId,
					'data-productID':data.productId
				});
				
				if(data.stocks.length==1){
					cartStock(data.stocks[0].quantity,data.stocks[0].productStockId);
				}
				pageloadingHide();
				mui('#selectVariation').popover("show");	
				
			}else{
				console.log(r.Message);
			}
		})
		
	}else{
		
	}
}
//购物车选择属性
jQuery("#selectVariation").on("tap",".attr-group[data-group=attr] li",function(){
	jQuery("#selectVariation .attr-group.last h5>span").text(" -- ");
	jQuery("#selectVariation .mui-numbox-input").val(1);
	jQuery("#selectVariation [data-action]").removeAttr("data-stockid");
	jQuery(this).addClass("active").siblings().removeClass("active");
	var shopURL = jQuery("#selectVariation").data("shoopurl");
	var attrGroup = jQuery("#selectVariation .attr-group[data-group=attr]").length;
	var attrGroupA = jQuery("#selectVariation .attr-group[data-group=attr] .active").length;
	if(attrGroup===attrGroupA){
		var shopURL = jQuery("#selectVariation").data("shoopurl"),
			propertyVal = new Array();
		jQuery("#selectVariation .attr-group[data-group=attr] .active").each(function(){
			propertyVal.push(this.innerHTML);
		})
		propertyVal = propertyVal.join("||");
		var shopURL = jQuery("#selectVariation").attr("data-shopURL");
		jQuery.mamall_request('video.product.getstock', {url:shopURL,propertyValue:propertyVal}, function(r){
			if('9999'==r.ErrorCode){
				jQuery("#selectVariation [data-action]").attr("data-stockid",r.Data.product.productStockId)
				cartStock(r.Data.product.quantity,r.Data.product.productStockId); //库存数
			}else{
				console.log(r.Message);
			}
		})
	}

});
//购物车数量输入
//减一
jQuery("#selectVariation").on("tap",".mui-numbox-btn-minus",function(){
	if(jQuery(this).siblings(".mui-numbox-input").val()>jQuery(this).parent(".mui-numbox").attr("data-num-min")){
		jQuery(this).siblings(".mui-numbox-input").val(jQuery(this).siblings(".mui-numbox-input").val()-jQuery(this).parent(".mui-numbox").attr("data-num-step"))
	}else{
		return false;
	}
})
//加一
jQuery("#selectVariation").on("tap",".mui-numbox-btn-plus",function(){
	if(parseInt(jQuery(this).siblings(".mui-numbox-input").val())<parseInt(jQuery(this).parent(".mui-numbox").attr("data-num-max"))){
		jQuery(this).siblings(".mui-numbox-input").val(parseInt(jQuery(this).siblings(".mui-numbox-input").val())+parseInt(jQuery(this).parent(".mui-numbox").attr("data-num-step")))

	}else{
		return false;
	}
})
//放入购物车
jQuery("#selectVariation").on("click","[data-action=add]",function(){
	if(!jQuery(this).attr("data-stockid")){
		if(jQuery("#selectVariation .attr-group[data-group=attr]").length  !== jQuery("#selectVariation .attr-group[data-group=attr] .active").length){
			mui.toast("请选择商品属性");
		}else{
			mui.toast("库存没有获取,请重试");
		}
		return false;
	}
	pageloadingShowMask();
	var shopID = jQuery(this).attr("data-shopid"),
		productID = jQuery(this).attr("data-productid"),
		quantity = jQuery("#selectVariation .mui-numbox-input").val(),
		stockID = jQuery(this).attr("data-stockid");
		UUID = localStorage.getItem("OM_DEVICE_UUID");
		VID = watchJSON.vid;
		VPID = jQuery(this).attr("data-vpid");
	console.log("uuid:"+UUID+" shopID:"+shopID+" productID:"+productID+" qut:"+quantity+" stockID:"+stockID+" vid:"+VID+" vpid:"+VPID)
	jQuery.mamall_request('video.cart.change',{
		OM_DEVICE_UUID:UUID,
		ACTION:'add',
		SPONSOR_SHOP_ID:shopID,
		PRODUCT_ID:productID,
		QUANTITY:quantity,
		PRODUCT_STOCK_ID:stockID,
		VID:VID,
		VPID:VPID	
	}, function(r){
		if('9999'==r.ErrorCode){
			var vpid = r.Data[0]
			pageloadingHide();
			mui('#selectVariation').popover("hide");
			jQuery("[data-pid="+vpid+"] .p-cart").addClass("active");
			mui.toast("加入购物车成功");
			window.parent.cartActive(); 
		}else{
			console.log(r.Message);
		}
	})
});



function getMemberInfoByDeviceID() {
	var deviceID = localStorage.getItem("OM_DEVICE_UUID");
	var CustomerInfo = localStorage.getItem('CustomerInfo_' + deviceID);
	if(deviceID && !CustomerInfo.memberId) {
		$.mamall_request('member.getmemberbyuids',{OM_DEVICE_UUID:deviceID},function(r){
	        if('9999'==r.ErrorCode){
	        		CustomerInfo = JSON.stringify(r.Data.Customer);
	        		localStorage.setItem('CustomerInfo_' + deviceID, CustomerInfo);
		    }
	        else {
	            console.log(r.Message);
	        }
	    });
	}
}

function downapp(platform){
    var downHtml = '<div class="down-load">\
                    <a href="javascript:;" class="down-logo"></a>\
                    <div><strong>DOWNLOAD APP!</strong><br><span>Enjoy special discount for items.</span></div>\
                    <a href="javascript:;" class="down-btn '+platform+'"></a>\
                    </div>';
    jQuery("body").append(downHtml); 
    jQuery(".mui-scroll").append('<div id="bottomPlaceholder" style="padding-bottom:99px"></div>');
    if(jQuery(".p-d-bottom-bar").length>0) jQuery(".down-load").css("bottom","46px");
}
				

