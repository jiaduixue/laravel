
function downapp(flag){

        var downHtml = '<div class="down-load">\
                        <a href="javascript:;" class="down-logo"></a>\
                        <div><strong>DOWNLOAD APP!</strong><br><span>Enjoy special discount for items.</span></div>\
                        <a href="javascript:;" class="down-btn android"></a>\
                        </div>';

        if(flag){
            $(".layer-wrap.active").append(downHtml);
            if($(".layer-wrap.active>[data-id=bottom001]").length==0)$(".layer-wrap.active").append('<div data-id="bottom001" style="height:65px;"></div>');
        }else{
            $("body").append(downHtml);
            if($(".body>[data-id=bottom001]").length==0)$("body").append('<div data-id="bottom001" style="height:65px;"></div>');
        }
        var loadH = $(".down-load").outerHeight(),
            shopH = $(".footer-nav").outerHeight(),
            prodH = $(".p-d-bottom-bar").outerHeight(),
            totaH = $(".shopping-total").outerHeight();
            $(".down-load").addClass('fix');

        if($(".layer-wrap.active .down-load").length>0){
            
            
            if($(".layer-wrap.active .footer-nav").is(':visible')){
                 $(".layer-wrap.active .down-load").css('bottom', shopH);
                 $(".side-btn-group").css('bottom', shopH+loadH+10+50);
				 $(".side-btn-home").css('bottom', shopH+loadH+10);
                 if($(".layer-wrap.active .shopping-total").is(':visible')){
                    $(".layer-wrap.active .down-load").css('bottom', shopH+totaH-2);
                    $(".side-btn-group").css('bottom', shopH+totaH+loadH+10+50);
                    $(".side-btn-home").css('bottom', shopH+totaH+loadH+10);
                 }else{
                    $(".down-load").css('bottom', shopH);
                 };

            }else{
               $(".layer-wrap.active .down-load").css('bottom', 0); 
               $(".side-btn-group").css('bottom', loadH+10+50);
               $(".side-btn-home").css('bottom', loadH+10);
            };
            
            if($(".layer-wrap.active .p-d-bottom-bar").is(':visible')){
                $(".layer-wrap.active .down-load").css('bottom', prodH);
                $(".side-btn-group").css('bottom', prodH+loadH+10+50);
                $(".side-btn-home").css('bottom', prodH+loadH+10);
                $(".layer-wrap.active [data-id=bottom001]").css('height', prodH+loadH+10);
            }else{
                $(".layer-wrap.active .down-load").css('bottom', 0);
                $(".side-btn-group").css('bottom', loadH+10+50);
                $(".side-btn-home").css('bottom', loadH+10);
            };
           
        };


        if($(".down-load").length>0 && $(".layer-wrap.active").length==0){

            // $("body").remove(downHtml);

            if($(".footer-nav").is(':visible')){
                 $(".down-load").css('bottom', shopH);
                 $(".side-btn-group").css('bottom', shopH+loadH+10+50);
				 $(".side-btn-home").css('bottom', shopH+loadH+10);
                 if($(".shopping-total").is(':visible')){
                    $(".down-load").css('bottom', shopH+totaH-2);
                    $(".side-btn-group").css('bottom', loadH+shopH+totaH+10+50);
                    $(".side-btn-home").css('bottom', loadH+shopH+totaH+10);
                 }else{
                    $(".down-load").css('bottom', shopH);
                 };

            }else{
              $(".down-load").css('bottom', 0); 
               $(".side-btn-group").css('bottom', loadH+10+50);
               $(".side-btn-home").css('bottom', loadH+10);
            };

            if($(".p-d-bottom-bar").is(':visible')){
                $(".down-load").css('bottom', prodH);
                $(".side-btn-group").css('bottom', prodH+loadH+10+50);
                $(".side-btn-home").css('bottom', prodH+loadH+10);
                $("[data-id=bottom001]").css('height', prodH+loadH+10);
            };


        };
        

   };


