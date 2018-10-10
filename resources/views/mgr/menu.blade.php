<ul class="topmenu" data-toggle="menu">
    <li>
        <a href="{{ route('mgrMain') }}">

            <span class="figure"><i class="ico-home2"></i></span>
            <span class="text">后台首页</span>
        </a>
    </li>
    @if(1)

    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_member" data-parent=".topmenu">
            <span class="figure"><i class="ico-users"></i></span>
            <span class="text">用户管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_member" class="submenu collapse">
            <li class="submenu-header ellipsis">用户管理</li>
            <li><a href="{{ route('mgrSeller') }}"><span class="text">卖家管理</span></a></li>
            <li><a href="{{ route('mgrCustomer') }}"><span class="text">买家管理</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_order" data-parent=".topmenu">
            <span class="figure"><i class="ico-credit2"></i></span>
            <span class="text">订单管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_order" class="submenu collapse">
            <li class="submenu-header ellipsis">订单管理</li>
            <li><a href="{{ route('mgrOrder',['isTest'=> NO_VALUE,'dateFrom'=> date('Y-m-d', strtotime('-180 days'))])}}"><span class="text">全部订单</span></a></li>

        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_accountdetail" data-parent=".topmenu">
            <span class="figure"><i class="ico-credit2"></i></span>
            <span class="text">财务管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_accountdetail" class="submenu collapse">
            <li class="submenu-header ellipsis">财务管理</li>
            <li><a href="{{ route('mgrAccountDetail') }}"><span class="text">账户变动明细</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_product" data-parent=".topmenu">
            <span class="figure"><i class="ico-gift22"></i></span>
            <span class="text">商品管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_product" class="submenu collapse">
            <li class="submenu-header ellipsis">商品管理</li>
            <li><a href="{{ route('mgrProduct') }}"><span class="text">自营商品管理</span></a></li>
        </ul>
    </li>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_coupon" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">优惠券管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_coupon" class="submenu collapse">
            <li class="submenu-header ellipsis">优惠券管理</li>
            <li><a href="{{ route('mgrCoupon') }}"><span class="text">优惠券列表</span></a></li>
            <li><a href="{{ route('mgrCouponSet') }}"><span class="text">优惠券模板</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_edm" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">EDM营销</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_edm" class="submenu collapse">
            <li class="submenu-header ellipsis">EDM营销</li>
            <li><a href="{{ route('mgrEdmPlanList') }}"><span class="text">邮件计划</span></a></li>
            <li><a href="{{ route('mgrEdmTemplateList') }}"><span class="text">邮件模板管理</span></a></li>
            <li><a href="{{ route('mgrEdmSendLogList') }}"><span class="text">系统发送邮件</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_keyword" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">关键词趋势</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_keyword" class="submenu collapse">
            <li class="submenu-header ellipsis">关键词趋势</li>
            <li><a href="{{ route('mgrKeywords') }}"><span class="text">关键词</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_system" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">系统管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_system" class="submenu collapse">
            <li class="submenu-header ellipsis">系统管理</li>
            <li><a href="{{ route('mgrSystemShorten') }}"><span class="text">短链接工具</span></a></li>
            <li><a href="{{ route('mgrLanguage') }}"><span class="text">语言包</span></a></li>
            <li><a href="{{ route('mgrSystemUploadPageLog') }}"><span class="text">页面上传</span></a></li>
        </ul>
    </li>

    @else

    {{--  以下为一般管理员看到的页面-   --}}
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_member" data-parent=".topmenu">
            <span class="figure"><i class="ico-users"></i></span>
            <span class="text">用户管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_member" class="submenu collapse">
            <li class="submenu-header ellipsis">用户管理</li>
            <li><a href="{{ route('seller', 'ourmallStoreList') }}"><span class="text">店铺列表</span></a></li>
            <li><a href="{{ route('channel', 'list') }}"><span class="text">渠道商管理</span></a></li>
            <li><a href="{{ route('seller', 'list') }}"><span class="text">卖家管理</span></a></li>
            <li><a href="{{ route('customer', 'list') }}"><span class="text">买家管理</span></a></li>
            <li><a href="{{ route('sponsor', 'list') }}"><span class="text">红人管理</span></a></li>
         <li><a href="{{ route('seller', 'taskList') }}"><span class="text">卖家任务管理</span></a></li>
        <li><a href="{{ route('message', 'allList') }}"><span class="text">买家留言管理</span></a></li>
            <li><a href="{{ route('sellermail', 'list') }}"><span class="text">外部卖家邮箱</span></a></li>
                      <li><a href="{{ route('feedback', 'list') }}"><span class="text">买家反馈管理</span></a></li>
            <li><a href="{{ route('business', 'list') }}"><span class="text">商务联系</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_feedback" data-parent=".topmenu">
            <span class="figure"><i class="ico-users"></i></span>
            <span class="text">咨询反馈管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_feedback" class="submenu collapse">
            <li class="submenu-header ellipsis">咨询反馈管理</li>
            <li><a href="{{ route('feedback', 'list','&type='.FEEDBACK_TYPE_EXCHANGE.'&status='.NO_REPLY) }}"><span class="text">实时咨询</span></a></li>
            <li><a href="{{ route('feedback', 'list','&type='.FEEDBACK_TYPE_MENU.'&status='.NO_REPLY) }}"><span class="text">留言反馈</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_order" data-parent=".topmenu">
            <span class="figure"><i class="ico-credit2"></i></span>
            <span class="text">订单管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_order" class="submenu collapse">
            <li class="submenu-header ellipsis">订单管理</li>
            <li><a href="{{ route('order', 'list', '&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-180 days'))) }}"><span class="text">全部订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&status='.ORDER_STATUS_PAID.'&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-180 days'))) }}"><span class="text">已付款订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&status='.ORDER_STATUS_SHIPPED.'&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-60 days'))) }}"><span class="text">已发货订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&status='.ORDER_STATUS_FINISHED.'&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-30 days'))) }}"><span class="text">已完成订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&status='.ORDER_STATUS_NOT_PAY.'&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-3 days'))) }}"><span class="text">未付款订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&status='.ORDER_STATUS_CANCELED.'&isTest='.NO_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-30 days'))) }}"><span class="text">已取消订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&hasAbnormal='.YES_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-3 month'))) }}"><span class="text">异常订单订单</span></a></li>
            <li><a href="{{ route('order', 'list', '&isTest='.YES_VALUE.'&dateFrom='.date('Y-m-d', strtotime('-30 days'))) }}"><span class="text">测试订单</span></a></li>
            <li><a href="{{ route('order', 'freeProduct','&status='.FREE_PRODUCT_STATUS_NOT_SHIPPING) }}"><span class="text">免费申请单</span></a></li>
            <li><a href="{{ route('order', 'list', '&isSellerOrder=1&dateFrom='.date('Y-m-d', strtotime('-30 days'))) }}"><span class="text">卖家订单</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_accountdetail" data-parent=".topmenu">
            <span class="figure"><i class="ico-credit2"></i></span>
            <span class="text">财务管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_accountdetail" class="submenu collapse">
            <li class="submenu-header ellipsis">财务管理</li>
            <li><a href="{{ route('accountdetail', 'list') }}"><span class="text">账户变动明细</span></a></li>
            <li><a href="{{ route('accountdetail', 'withdrawList') }}"><span class="text">红人提现申请</span></a></li>
            <li><a href="{{ route('accountdetail', 'userWithdrawList') }}"><span class="text">用户提现申请</span></a></li>
            <li><a href="{{ route('accountdetail', 'refundList') }}"><span class="text">用户退款申请</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_product" data-parent=".topmenu">
            <span class="figure"><i class="ico-gift22"></i></span>
            <span class="text">商品管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_product" class="submenu collapse">
            <li class="submenu-header ellipsis">商品管理</li>
        <li><a href="{{ route('product', 'list')}}"><span class="text">销售SKU管理</span></a></li>
            <li><a href="{{ route('product', 'stockList')}}"><span class="text">库存SKU管理</span></a></li>
         <li><a href="{{ route('product', 'list') }}"><span class="text">商品管理</span></a></li>
          <li><a href="{{ route('product', 'productInfo') }}"><span class="text">待审核自营商品</span></a></li>
            <li><a href="{{ route('product', 'productList') }}"><span class="text">自营商品管理</span></a></li>
            <li><a href="{{ route('product', 'groupBuyProductList') }}"><span class="text">拼团商品管理</span></a></li>
            <li><a href="{{ route('product', 'freeProductList') }}"><span class="text">免费商品管理</span></a></li>
            <li><a href="{{ route('product', 'productTrendList') }}"><span class="text">趋势商品管理</span></a></li>
            <li><a href="{{ route('product', 'qualityCommentProductList') }}"><span class="text">优质评论管理</span></a></li>
         <li><a href="{{ route('product', 'votoboProductList') }}"><span class="text">Votobo导入商品</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_sample" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">样品申请管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_sample" class="submenu collapse">
            <li class="submenu-header ellipsis">样品申请管理</li>
            <li><a href="{{ route('sample', 'list', '&auditStatus='.SPONSOR_TASK_AUDIT_STATUS_APPLY) }}"><span class="text">卖家未审核</span></a></li>
            <li><a href="{{ route('sample', 'list', '&auditStatus='.SPONSOR_TASK_AUDIT_STATUS_SHIPPED) }}"><span class="text">卖家已审核</span></a></li>
            <li><a href="{{ route('sample', 'list', '&auditStatus='.SPONSOR_TASK_AUDIT_STATUS_REJECT) }}"><span class="text">卖家已拒绝</span></a></li>
            <li><a href="{{ route('sample', 'list', '&auditStatus='.SPONSOR_TASK_AUDIT_STATUS_CANCEL) }}"><span class="text">红人已取消</span></a></li>
            <li><a href="{{ route('sample', 'allSample') }}"><span class="text">单个样品</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_coupon" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">优惠券管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_coupon" class="submenu collapse">
            <li class="submenu-header ellipsis">优惠券管理</li>
            <li><a href="{{ route('coupon', 'couponList') }}"><span class="text">优惠券列表</span></a></li>
            <li><a href="{{ route('coupon', 'couponSet') }}"><span class="text">优惠券模板</span></a></li>
                   <li><a href="{{ route('coupon', 'list') }}"><span class="text">优惠券列表</span></a></li>
                      <li><a href="{{ route('coupon', 'setting') }}"><span class="text">优惠券规则</span></a></li>
        </ul>
    </li>
     <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_vloggerproduct" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">红人选品</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_vloggerproduct" class="submenu collapse">
            <li class="submenu-header ellipsis">红人选品</li>
            <li><a href="{{ route('vloggerproduct', 'sponsorConfirmList') }}"><span class="text">红人确认</span></a></li>
            <li><a href="{{ route('vloggerproduct', 'sponsorAuditedList') }}"><span class="text">红人审核</span></a></li>
            <li><a href="{{ route('vloggerproduct', 'deliverGoodsList') }}"><span class="text">已发货</span></a></li>
            <li><a href="{{ route('vloggerproduct', 'completeList') }}"><span class="text">已完成</span></a></li>
            <li><a href="{{ route('vloggerproduct', 'cancelList') }}"><span class="text">已取消</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_h5video" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">Video网站前台</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_h5video" class="submenu collapse">
            <li class="submenu-header ellipsis">Video网站前台</li>
            <li><a href="{{ route('h5video', 'keywordsList') }}"><span class="text">搜索关键词</span></a></li>
            <li><a href="{{ route('h5video', 'hotKeywordsList') }}"><span class="text">热搜关键词</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_advertise" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">广告管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_advertise" class="submenu collapse">
            <li class="submenu-header ellipsis">广告管理</li>
            <li><a href="{{ route('advertise', 'list') }}"><span class="text">广告列表</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_edm" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">EDM营销</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_edm" class="submenu collapse">
            <li class="submenu-header ellipsis">EDM营销</li>
            <li><a href="{{ route('edm', 'planList') }}"><span class="text">邮件计划</span></a></li>
            <li><a href="{{ route('edm', 'templateList') }}"><span class="text">邮件模板管理</span></a></li>
            <li><a href="{{ route('edm', 'sendLogList') }}"><span class="text">系统发送邮件</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_operational" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">运营管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_operational" class="submenu collapse">
            <li class="submenu-header ellipsis">运营管理</li>
            <li><a href="{{ route('operational', 'mySponsorList') }}"><span class="text">我的红人</span></a></li>
            <li><a href="{{ route('operational', 'mySponsorRamList') }}"><span class="text">我的红人动态</span></a></li>
            <li><a href="{{ route('operational', 'mySponsorVideoList') }}"><span class="text">我的红人视频</span></a></li>
            <li><a href="{{ route('operational', 'mySponsorProductList') }}"><span class="text">视频商品</span></a></li>
            <li><a href="{{ route('operational', 'giftPackagelist') }}"><span class="text">样品套餐</span></a></li>
            <li><a href="{{ route('operational', 'taskList') }}"><span class="text">任务管理</span></a></li>
            <li><a href="{{ route('operational', 'shorten') }}"><span class="text">短链接工具</span></a></li>
            <li><a href="{{ route('operational', 'ourmallVideoList') }}"><span class="text">Ourmall视频审核</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_youtube" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">Youtube资源</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_youtube" class="submenu collapse">
            <li class="submenu-header ellipsis">Youtube资源</li>
            <li><a href="{{ route('youtube', 'userList') }}"><span class="text">红人列表</span></a></li>
            <li><a href="{{ route('youtube', 'videoList') }}"><span class="text">视频列表</span></a></li>
            <li><a href="{{ route('youtube', 'videoProductList') }}"><span class="text">商品列表</span></a></li>
            <li><a href="{{ route('youtube', 'keywordsList') }}"><span class="text">关键词列表</span></a></li>
            <li><a href="{{ route('youtube', 'labelList') }}"><span class="text">标签列表</span></a></li>
            <li><a href="{{ route('youtube', 'webAudit') }}"><span class="text">网站审核</span></a></li>
            <li><a href="{{ route('youtube', 'talkTemplateList') }}"><span class="text">话术模板</span></a></li>
            <li><a href="{{ route('youtube', 'giftPackagelist') }}"><span class="text">样品套餐</span></a></li>
            <li><a href="{{ route('youtube', 'taskList') }}"><span class="text">任务管理</span></a></li>
            <li><a href="{{ route('youtube', 'taskStatList') }}"><span class="text">任务统计</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_show" data-parent=".topmenu">
            <span class="figure"><i class="ico-tags"></i></span>
            <span class="text">Show资源</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_show" class="submenu collapse">
            <li class="submenu-header ellipsis">Show资源</li>
            <li><a href="{{ route('show', 'showList') }}"><span class="text">秀列表</span></a></li>
            <li><a href="{{ route('show', 'topicShowList') }}"><span class="text">主题秀</span></a></li>
            <li><a href="{{ route('show', 'audit') }}"><span class="text">秀审核</span></a></li>
            <li><a href="{{ route('show', 'showReport') }}"><span class="text">秀统计</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_activity" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">活动管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_activity" class="submenu collapse">
            <li class="submenu-header ellipsis">活动管理</li>
            <li><a href="{{ route('activity', 'list') }}"><span class="text">活动列表</span></a></li>
                       <li><a href="{{ route('activity', 'couponList') }}<!--"><span class="text">优惠卷列表</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_statistic" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">统计管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_statistic" class="submenu collapse">
            <li class="submenu-header ellipsis">统计管理</li>
         <li><a href="{{ route('statistic', 'sponsor') }}"><span class="text">红人统计</span></a></li>
            <li><a href="{{ route('statistic', 'increment') }}"><span class="text">增量统计</span></a></li>
            <li><a href="{{ route('statistic', 'videoStatList') }}"><span class="text">视频统计</span></a></li>
            <li><a href="{{ route('statistic', 'visitUserList') }}"><span class="text">访问用户统计</span></a></li>
            <li><a href="{{ route('statistic', 'visitPageConditionList') }}"><span class="text">定义页面</span></a></li>
            <li><a href="{{ route('statistic', 'visitFilterConditionList') }}"><span class="text">访问条件</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_report" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">报表管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_report" class="submenu collapse">
            <li class="submenu-header ellipsis">报表管理</li>
            {{ $reports = DB::table('Report')->all() }}
            @if ($reports)
            @foreach ($reports as $report)
            <li><a href="{{ route('report', 'list','&id='.$report->id) }}"><span class="text">{{ $report->title }}</span></a></li>

            @endforeach
            @endif
            <li><a href="{{ route('report', 'orderReport') }}"><span class="text">订单报表</span></a></li>
            <li><a href="{{ route('report', 'customerReport') }}"><span class="text">新增用户报表</span></a></li>
            <li><a href="{{ route('report', 'productReport','&type=1') }}"><span class="text">普通商品报表</span></a></li>
            <li><a href="{{ route('report', 'productReport','&type=2') }}"><span class="text">拼团商品报表</span></a></li>
            <li><a href="{{ route('report', 'productReport','&type=3') }}"><span class="text">免费商品报表</span></a></li>
            <li><a href="{{ route('report', 'userActiveReport','&type=1') }}"><span class="text">活跃用户报表</span></a></li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_keyword" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">关键词趋势</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_keyword" class="submenu collapse">
            <li class="submenu-header ellipsis">关键词趋势</li>
            <li><a href="{{ route('keywords', 'list') }}"><span class="text">关键词</span></a></li>
        </ul>
    </li>
    @if(in_array($memberInfo['adminType'], array(ADMIN_TYPE_MANAGER)))
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_system" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">系统管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_system" class="submenu collapse">
            <li class="submenu-header ellipsis">系统管理</li>
            <li><a href="{{ route('system', 'adminList') }}"><span class="text">管理员管理</span></a></li>
            <li><a href="{{ route('system', 'shorten') }}"><span class="text">短链接工具</span></a></li>
            <li><a href="{{ route('language', 'list') }}"><span class="text">语言包</span></a></li>
            <li><a href="{{ route('system', 'uploadPageLog') }}"><span class="text">页面上传</span></a></li>
            <li><a href="{{ route('system', 'proxyIp') }}"><span class="text">代理ip</span></a></li>
        </ul>
    </li>
    @endif
    @if(true || preg_match('/^127\.0/', Common::getIp()))
    <li>
        <a href="javascript:void(0);" data-toggle="submenu" data-target="#collapsesubMenu_monitor" data-parent=".topmenu">
            <span class="figure"><i class="ico-settings"></i></span>
            <span class="text">服务器管理</span>
            <span class="arrow"></span>
        </a>
        <ul id="collapsesubMenu_monitor" class="submenu collapse">
            <li class="submenu-header ellipsis">服务器管理</li>
            <li><a href="{{ route('monitor', 'serverList') }}"><span class="text">服务器列表</span></a></li>
        </ul>
    </li>
        @endif

    @endif
</ul>
<script language="javascript" type="text/javascript">
    var tempMod = '{{ in_array(explode('/',Request::path())[1] ,['message', 'seller', 'customer', 'sponsor', 'sellermail'])?'member':explode('/',Request::path())[1] }}';

    //var thisMod = 'member';
    $(document).ready(function(e) {
        $('#collapsesubMenu_' + thisMod).removeClass('collapse').addClass('in');
        @if(isset($isMainHome)&&$isMainHome)
        $('#menuHomepage').addClass('active');
        @else
        $('#collapsesubMenu_' + thisMod).parent().find('a[data-parent=".topmenu"]').addClass('active');
        @endif
    });
</script>
