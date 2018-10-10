(function($){
	if($(".page-navigation").length==0) return false;
	var sliderWidth=0;
	var sliderLeft=0;
	var navWidth=0;
	$(".page-navigation ul.nav").find("li").each(function(){
		sliderWidth += $(this).width()+5;
	});
	$(".page-navigation").each(function() {
		if(sliderWidth>$(this).width()){
			navWidth=parseInt($(this).width())-70;
			$(this).width(navWidth+70).wrapInner("<div class='scrollnav'></div)").append('<a href="javascript:void(0);" class="prev disabled"><i class="ico-arrow-left2"></i></a><a href="javascript:void(0);" class="next"><i class="ico-arrow-right22"></i></a>');
			$(".scrollnav").css("width",navWidth);
			$(".page-navigation ul.nav").css("width",sliderWidth);
			var active=$(this).find("li.active");
			
			if(active.position().left+active.width()>navWidth){
				$(".page-navigation ul.nav").css("left", navWidth-(active.position().left+active.width())-5);
				$(".page-navigation .prev").removeClass("disabled");
				if(active.next("li").length>0)$(".page-navigation .next").removeClass("disabled");
			}
			sliderLeft=parseInt($(".page-navigation ul.nav").css("left"));
        }
    });
	$(".page-navigation ul.nav").on("click", "li:not('.edit')", function() {
		$(this).siblings("li").removeClass("active");
		$(this).addClass("active");
		var paneName=$(this).attr("rel");
		$(paneName).show().siblings(".tab-pane").hide();
	});
	$(".page-navigation").on("click",".prev:not('.disabled')", function(event) {
		if( sliderLeft<0){
			$(".page-navigation .next.disabled").removeClass("disabled");
			sliderLeft= sliderLeft+120;
			$(".page-navigation ul.nav").animate({left:sliderLeft}, 200);
			if(sliderLeft>0)$(this).addClass("disabled");
		}
	});
	$(".page-navigation").on("click",".next:not('.disabled')", function(event) {
		var absleft = Math.abs(sliderLeft)+ navWidth;
		if(absleft<sliderWidth){
			$(".page-navigation .prev.disabled").removeClass("disabled");
			sliderLeft= sliderLeft-120;
			$(".page-navigation ul.nav").animate({left:sliderLeft}, 200);
			if(absleft+100>sliderWidth){
				$(this).addClass("disabled");
			}
		}
	});
})(jQuery);