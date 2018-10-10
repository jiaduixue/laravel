//购物车动画
function cartA(obj){
    $("body .dot").remove();
    var obj = $(obj),
    cartOffset = obj.offset(),
    newCartOffset = $(".mask-btn-group .cart>i").offset(),
    cartT,
    newCartT;
    if($(".layer-wrap.active").length>0){
        cartT = cartOffset.top - $(window).scrollTop();
        newCartT = newCartOffset.top - $(window).scrollTop();
        $(".layer-wrap.active").append('<div class="dot" style="top:'+cartT+'px;left:'+cartOffset.left+'px"></div>');
    }else{
        cartT = cartOffset.top - $(window).scrollTop();
        newCartT = newCartOffset.top - $(window).scrollTop();
        $("body").append('<div class="dot" style="top:'+cartT+'px;left:'+cartOffset.left+'px"></div>');
    }
    $("body .dot").animate({"top":newCartT-2,"left":newCartOffset.left+15},500);
    setTimeout(function(){
        $(".mask-btn-group .cart").addClass("active");
        $("body .dot").remove();
    },500);
}
function pageloadingShow(){
    var wH = $(window).height(),obj;
    if($(".layer-wrap.active").length>0){
        obj = $(".layer-wrap.active");
    }else{
        obj = $("body")
    }
    var timeID = Date.parse(new Date());
    obj.append('<div class="loading-wrap" style="top:'+(wH/2)+'px" data-timeID="'+timeID+'">'+
        '<div class="loader">Loading...</div>'+
        '</div>');
    /*setTimeout(function(){
        if($("[data-timeID="+timeID+"]").length>0){
            $("[data-timeID="+timeID+"]").next(".loading-mask").remove();
            $("[data-timeID="+timeID+"]").remove();
            msgAlert("error"," Oops,your request is timeout.<br>Please try again.",2500);
        }
    },10000);*/
window.setTimeout(function(){pageloadingHide()}, 2000);

}
function pageloadingHide(){
    $(".loading-wrap,.loading-mask").remove();
}
//视频iframe 高
function watchIframeH(){
    var watchW = $(".watch-play-wrap").width();
    $(".watch-play-wrap iframe").height(watchW*0.5625);
    $(".watch-play-wrap").next().css("margin-top",watchW*0.5625);
    //红人列表头高
    var headerW = $(".celebrity-header-wrap").width();
    $(".celebrity-header-wrap").height(headerW/3);

}
function imgLoad(obj){
    var option;
    if(!obj){
        option = {
            effect : "fadeIn",
            threshold : 100,
            load:function(){
                //图片载入后
                $(".img-wrap img").attr("onload","imgSize(this)");
            }
        }
    }else{
        option = {
            effect : "fadeIn",
            threshold : 100,
            load:function(){
                //图片载入后
                $(".img-wrap img").attr("onload","imgSize(this)");
            },
            container: obj
        }
    }
    if($(".layer-wrap.active").length>0){
        $(".layer-wrap.active img[src*='images/default_mamall'],.layer-wrap.active .video-pic:not([style*='background-image']),.layer-wrap.active .product-info a:not([style*='background-image']),.layer-wrap.active .photo a:not([style*='background-image']),.task-info-pic li:not([style*='background-image'])").lazyload(option);
    }else{
        $("img[src*='images/default_mamall'],img[src*='images/loading-1.gif'],.me-info>a:not([style*='background-image']),.video-pic:not([style*='background-image']),.product-info.video-detail a:not([style*='background-image']),.product-info a:not([style*='background-image']),.photo a:not([style*='background-image']),.task-info-pic li:not([style*='background-image'])").lazyload(option);
    }

}
function isHTTP (str_url) {
    var strRegex = '^((https|http)?://)' ;
    var re=new RegExp(strRegex);
//re.test()
    if (re.test(str_url)) {
        return (true);
    } else {
        return (false);
    }
}
function imgSize(obj){
    var w = $(obj).width(),h = $(obj).height();
    if(w>h){
        $(obj).parents(".img-wrap").addClass("align");
    }else{
        $(obj).parents(".img-wrap").removeClass("align");
    }
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
function readyOk(){
    $(document).trigger("readyOk");
}
$(function(){
    $(document).on("click","a[onclick*='pageloadingShow()']",function(e){
        e.preventDefault();
        window.location.href = $(this).prop('href');
    })
    //tabs
    $(document).on("click","[data-toggle=tab]",function(){
        //if(typeof(loadFlag) != "undefined" && loadFlag===false) return false;
        var item = $(this).data("item");
        $(this).addClass("active").siblings().removeClass("active");
        $(this).parent(".nav-tabs").next(".tabs-content").find(item).show().siblings().hide();
       $(".tabs-content").trigger("tabChange");
    });
    //视频高度自适应
    watchIframeH();
    $(window).resize(function(){
        watchIframeH();
    });
    //有底栏底部空间
    if($(".sidebar-bottom").length>0){
        var bH =$('.sidebar-bottom').height()+24;

        if($(".shopping-total").length>0){
        var tH =$('.shopping-total').height()+bH;
        $("body").append('<div style="height: '+tH+'px;"></div>');
        $(".shopping-total").css("bottom",bH-24);
        }else{
            $("body").append('<div style="height: '+bH+'px;"></div>');
            $(".shopping-total").css("bottom",0);
        };
    }
       if($(".layer-wrap.active .sidebar-bottom").length>0){
        var bH =$('.layer-wrap.active .sidebar-bottom').height()+24;

        if($(".shopping-total").length>0){
        var tH =$('.shopping-total').height()+bH;
        $("body").append('<div style="height: '+tH+'px;"></div>');
        $(".shopping-total").css("bottom",bH-24);
        }else{
            $("body").append('<div style="height: '+bH+'px;"></div>');
            $(".shopping-total").css("bottom",0);
        };
    }
    if($(".p-d-bottom-bar").length>0){
            var hH = $(".p-d-bottom-bar").height()+10;
            $("body").append('<div style="height: '+hH+'px;"></div>');
        };
        
    //底部栏空间
		if($(".footer-nav").length>0){
        var bH =$('.footer-nav').height();

        if($(".shopping-total").length>0){
        var tH =$('.shopping-total').height()+bH;
        $("body").append('<div style="height: '+tH+'px;"></div>');
        $(".shopping-total").css("bottom",bH);
        }else{
            $("body").append('<div style="height: '+bH+'px;"></div>');
            $(".shopping-total").css("bottom",0);
        };
    }
	//底部栏空间
		if($(".layer-wrap.active .footer-nav").length>0){
        var bH =$('.layer-wrap.active .footer-nav').height();

        if($(".shopping-total").length>0){
        var tH =$('.shopping-total').height()+bH;
        $("body").append('<div style="height: '+tH+'px;"></div>');
        $(".shopping-total").css("bottom",bH);
        }else{
            $("body").append('<div style="height: '+bH+'px;"></div>');
            $(".shopping-total").css("bottom",0);
        };
    }
    //模态框
    //点击打开模态框
    $(document).off("click","[data-toggle=modal]").on("click","[data-toggle=modal]",function(event){
        event.preventDefault();
        var obj = $("[data-remodal-id="+$(this).attr('data-modalid')+"]"),
            contentUrl,container = document.body;
        contentUrl = $(this).prop("href");
        if(!isHTTP(contentUrl)){
            contentUrl = "";
        }
        if(!contentUrl){
            contentUrl = $(this).attr("data-href");
        }
        if(contentUrl){
            pageloadingShow();
            obj.find(".modal-content").load(contentUrl,function(){
                pageloadingHide();
                obj.remodal({'hashTracking': false}).open();
            });
        }else{
            obj.remodal({'hashTracking': false}).open();
        }

    });
    //模态框打开后。。。。。。
    $(document).on('opened', '.remodal', function () {
        var obj = $(this)
        obj.find("[data-modalOpen=focus]").focus();//焦点data-modalOpen=focus
        //没内容关闭
        if(obj.find(".modal-content").html()==""){
         setTimeout(function(){
         obj.remodal().close();
         },1000)
         }
    });
    //if($(".user-info .info .link").length==0)$(".user-info .info").append('<div class="mask"></div>');
    /*$(window).load(function(){
        var w = $(".user-info .name+div").width();
        if(w>150)w=150;
        $(".user-info .mask").width(w);
    });*/
    $(document).on("click",".des-card .title",function(){
        var obj = $(this).parent(".des-card");
        if(obj.hasClass("active")){
            $(this).parents(".des-card").removeClass("active");
        }else{
            $(this).parents(".des-card").addClass("active");
        }

    });
    $(document).on("click","[data-action=loading]",function(){
        pageloadingShow();
    });

})





/*---------hu--------------*/






function productW(obj){

    if(obj){
        var aW = $(obj+" .product-info a:first").width()
    }else{
        var aW = $(".product-info a:first").width()
    }
    $(".product-info a").height(aW);
    $(".product-info a>img").css("min-height",aW);
}
function productHW(obj){

    if(obj){
        var aW = $(obj+" .product-info a:first").width()       
    }else{
        var aW = $(".product-info a:first").width()      
    }
    $(".product-hide").width(aW);   
}
$(function(){
	productW();
	$(window).resize(function(){
		productW();
	});
    productHW();
    $(window).resize(function(){
        productHW();
    });
});
function videoW(obj){
    if(obj){
        var aWW = $(obj+" .viedo-detail a:first").width()
    }else{
        var aWW = $(".viedo-detail a:first").width()
    }
    $(".viedo-detail a").height(aWW*0.5613);
    // $(".viedo-detail a>img").css("min-height",aWW*0.5613);
}
$(function(){
    videoW();
    $(window).resize(function(){
        videoW();
    });
});




$(function(){
    $(".icon-jiajia").click(function() {
            var t = $(this).siblings(".count-input");
            t.val(parseInt(t.val()) + 1);   
        })
    $(".icon-jianjian").click(function() {
            var t = $(this).siblings(".count-input");
            if (t.val()>1) {
                t.val(parseInt(t.val()) - 1);
            } else{
               t.val(1);
            };
            
        });
    $(".icon-jia").click(function() {
            var t = $(this).siblings(".count-input");
            t.val(parseInt(t.val()) + 1);   
        })
    $(".icon-jian").click(function() {
            var t = $(this).siblings(".count-input");
            if (t.val()>0) {
                t.val(parseInt(t.val()) - 1);
            } else{
               t.val(1);
            };
        });
    $(".icon-delete").click(function() {
            $(this).parents(".product-detail").remove();
        })
    // $(".check-all").click(function(){    
    //     if(this.checked){    
    //         $(".check-only").attr("checked", true);   
    //     }else{    
    //         $(".check-only").attr("checked", false); 
    //     }    
    //  });
    // $(".check-all").click(function(){    
    //     if(this.checked){    
    //         $(".check-only").attr("checked", true);   
    //     }else{    
    //         $(".check-only").attr("checked", false); 
    //     }    
    //  });
    // $(".check-only").click(function(){    
    //     if(this.checked){    
    //         $(".check-all").attr("checked", true);   
    //     }else{    
    //         $(".check-all").attr("checked", false); 
    //     }    
    //  });
})
function backTopShow(){
    $(".side-btn-group .back-to-top,.side-btn-home .back-to-home").css({"visibility":"visible","display":"block"});
}
function backTophide(){
    $(".side-btn-group .back-to-top,.side-btn-home .back-to-home").css({"visibility":"hidden","display":"none"});
}

function isBackTop(){
    if($(".layer-wrap.active").length>0){
        if($(".layer-wrap.active").scrollTop()>=360){
            backTopShow();
        }else{
            backTophide();
        }
    }else{
        if($(window).scrollTop()>=360){
            backTopShow();
        }else{
            backTophide();
        }
    }
}
$(function(){
    
    $(document).on("click",".side-btn-group .back-to-top",function(){
        if($(".layer-wrap.active").length>0){
            $(".layer-wrap.active").animate({scrollTop:0},500);
        }else{
            $("html,body").animate({scrollTop:0},500);
        }

    });
	  var loadH = $(".down-load").outerHeight(),
          shopH = $(".footer-nav").outerHeight(),
          prodH = $(".p-d-bottom-bar").outerHeight(),
          totaH = $(".shopping-total").outerHeight();
          
    if($(".footer-nav").is(':visible')){
            	
                 $(".side-btn-group").css('bottom', shopH+10+50);
				
                 if($(".shopping-total").is(':visible')){
                    $(".side-btn-group").css('bottom', shopH+totaH+10+50);
                 };

           };
    
    if ($(".main-header,.shoppingheader").length>0) {
        if($(".layer-wrap.active").length>0){
            $(".layer-wrap.active").prepend('<div class="jia"></div>');
        }else{
            $("body").prepend('<div class="jia"></div>');
        }
        if($(".main-header.nav.nav-tabs").length>0){
            var hH = $(".main-header.nav.nav-tabs").height(),
                jH = $(".jia").height();
            $(".jia").css('height', jH+hH);
        }
        if($(".pages .nav.nav-tabs").length>0){
                    var hH = $(".pages .nav.nav-tabs").height(),
                        jH = $(".jia").height();

                    $(".jia").css('height', hH+jH+20);
                   
                };
    }else{
        if($(".cart-nav.nav.nav-tabs").length>0){
            $("body").prepend('<div class="jia"></div>');
            var hH = $(".cart-nav.nav.nav-tabs").height();

            $(".jia").css('height', hH);
           
        };

        // if($(".p-d-bottom-bar").length>0){
        //     $("body").append('<div class="jia"></div>');
        //     var hH = $(".p-d-bottom-bar").height();

        //     $(".jia").css('height', hH);
        // };
        if($(".layer-wrap.active .cart-nav.nav.nav-tabs").length>0){
            $(".layer-wrap.active").prepend('<div class="jia"></div>');
           
        };

        
    };

})
$(function(){
    
    $(document).on("click",".side-btn-home .back-to-home",function(){
        if($(".layer-wrap.active").length>0){
            $(".layer-wrap.active").animate({scrollTop:0},500);
        }else{
            $("html,body").animate({scrollTop:0},500);
        }

    });
	  var loadH = $(".down-load").outerHeight(),
          shopH = $(".footer-nav").outerHeight(),
          prodH = $(".p-d-bottom-bar").outerHeight(),
          totaH = $(".shopping-total").outerHeight();
          
    if($(".footer-nav").is(':visible')){
            	
                 $(".side-btn-group").css('bottom', shopH+10);
				
                 if($(".shopping-total").is(':visible')){
                    $(".side-btn-group").css('bottom', shopH+totaH+10);
                 };

           };
    
    if ($(".main-header,.shoppingheader").length>0) {
        if($(".layer-wrap.active").length>0){
            $(".layer-wrap.active").prepend('<div class="jia"></div>');
        }else{
            $("body").prepend('<div class="jia"></div>');
        }
        if($(".main-header.nav.nav-tabs").length>0){
            var hH = $(".main-header.nav.nav-tabs").height(),
                jH = $(".jia").height();
            $(".jia").css('height', jH+hH);
        }
        if($(".pages .nav.nav-tabs").length>0){
                    var hH = $(".pages .nav.nav-tabs").height(),
                        jH = $(".jia").height();

                    $(".jia").css('height', hH+jH+20);
                   
                };
    }else{
        if($(".cart-nav.nav.nav-tabs").length>0){
            $("body").prepend('<div class="jia"></div>');
            var hH = $(".cart-nav.nav.nav-tabs").height();

            $(".jia").css('height', hH);
           
        };

        // if($(".p-d-bottom-bar").length>0){
        //     $("body").append('<div class="jia"></div>');
        //     var hH = $(".p-d-bottom-bar").height();

        //     $(".jia").css('height', hH);
        // };
        if($(".layer-wrap.active .cart-nav.nav.nav-tabs").length>0){
            $(".layer-wrap.active").prepend('<div class="jia"></div>');
           
        };

        
    };

})


    $(document).on("change","[data-remodal-id=taskQuote] input[type=number]",function(){
        var price =  parseFloat($(this).val()).toFixed(2)
        if(price){
            $(this).val(price);
            }else{
                $(this).val(0);
                }   
        })
    //关闭后。。。。
    $(document).on('closed cancel', '.remodal', function () {
        // $(this).remove();
        $(this).find("[data-modalClose=clear]").val("");//清空data-modalClose=clear
    });

        //数字输入组件
    $(document).on("touchstart click",".quantity-number .btn-add",function(e){
        var n=$(this).parents(".quantity-number").find("input.form-control"),s=parseInt(n.val()), stock=parseInt(n.attr("data-stock")), t=s*1+1;
        if(t>=stock){
            n.val(stock);
            $(this).addClass("disabled");
            
        }else{
            n.val(t);
            $(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
            
        }
        e.preventDefault();
        // changeTotalAmount();
    });
    $(document).on("touchstart click",".quantity-number .btn-subtract",function(e){
        var n=$(this).parents(".quantity-number").find("input.form-control"),s=parseInt(n.val()), t=s*1-1;
        if(t>=1){
            n.val(t);
            $(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
            
        }else{
            n.val("1");
            $(this).addClass("disabled");
            
        };
        e.preventDefault();
        // changeTotalAmount();
    });
    $(document).on("change",".quantity-number input.form-control",function(){
        var s=parseInt($(this).val()), stock=parseInt($(this).attr("data-stock"));
        if(s<=1){
            $(this).val("1").parents(".quantity-number").find(".btn-subtract").addClass("disabled");
            $(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
            // setPrice($(this));
        }else if(s>=stock){
            $(this).val(stock).parents(".quantity-number").find(".btn-add").addClass("disabled");
            $(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
            // setPrice($(this));
        }else{
            $(this).parents(".quantity-number").find(".btn-add").removeClass("disabled");
            $(this).parents(".quantity-number").find(".btn-subtract").removeClass("disabled");
            // setPrice($(this));
        }
        // changeTotalAmount();
    });

    