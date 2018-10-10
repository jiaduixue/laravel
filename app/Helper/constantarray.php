<?

$BOOLEAN_ARRAY = array(
    YES_VALUE 	=>	"是",
    NO_VALUE 	=>	"否",
);

$VISIBLE_ARRAY = array(
    YES_VALUE 	=>	'启用',
    NO_VALUE 	=>	'停用',
);

$CURRENCY_SIGN = array(
    'USD'=>'US$',
    'EUR'=>'€',
    'GBP'=>'£',
    'AUD'=>'AU$',
    'CAD'=>'C$',
    'CHF'=>'CHF',
    'CNY'=>'¥',
    'SGD'=>'S$',
    'AED'=>'AED',
    'ARS'=>'ARS',
    'BRL'=>'R$',
    'CLP'=>'CLP',
    'COP'=>'COP',
    'CZK'=>'Kč',
    'DKK'=>'kr',
    'EGP'=>'£',
    'HKD'=>'HK$',
    'HUF'=>'Ft',
    'IDR'=>'Rp',
    'ILS'=>'₪',
    'INR'=>'₹',
    'JPY'=>'¥',
    'KRW'=>'₩',
    'KZT'=>'₸',
    'MXN'=>'MXN$',
    'MYR'=>'RM',
    'NOK'=>'kr',
    'NZD'=>'NZ$',
    'PEN'=>'S/.',
    'PHP'=>'₱',
    'PKR'=>'₨',
    'PLN'=>'zł',
    'RON'=>'lei',
    'RUB'=>'руб.',
    'SAR'=>'kr',
    'THB'=>'฿',
    'TRY'=>'TL',
    'TWD'=>'TW$',
    'UAH'=>'₴',
    'VND'=>'₫',
    'ZAR'=>'R',
);

$SELLER_SOURCE_ARRAY = array(
    SELLER_SOURCE_WEBSITE => '网站注册',
    SELLER_SOURCE_FROM_MABANG => '马帮ERP',
);

$GENDER_SHOW_ARRAY = array(
    GENDER_MALE => '先生',
    GENDER_FEMALE => '女士',
);

$ORDER_STATUS_ARRAY = array(
    ORDER_STATUS_NOT_PAY => 'Unpaid',
    ORDER_STATUS_PAID => 'Waiting for delivery',
    ORDER_STATUS_SHIPPED => 'Delivered',
    ORDER_STATUS_FINISHED => 'Finished',
    ORDER_STATUS_CANCELED => 'Canceled',
);

$ADMIN_TYPE_ARRAY = array(
    ADMIN_TYPE_BASE => '基础',
    ADMIN_TYPE_DIRECTOR => '总监',
    ADMIN_TYPE_MANAGER => '管理员',
);

$MESSAGE_SUBJECT_TYPE_ARRAY = array(
    MESSAGE_SUBJECT_TYPE_PRODUCT => '商品',
    MESSAGE_SUBJECT_TYPE_ORDER => '订单',
    MESSAGE_SUBJECT_TYPE_TASK => '分享任务',
);

$MONEY_TYPE_ARRAY = array(
    MONEY_TYPE_USD => 'USD',
    MONEY_TYPE_GBP => 'GBP',
    MONEY_TYPE_AUD => 'AUD',
    MONEY_TYPE_EUR => 'EUR',
    MONEY_TYPE_CAD => 'CAD',
);

$PRODUCT_CATEGORY_ID_ARRAY = array(
    PRODUCT_CATEGORY_ID_1 => 'Women’s Clothing',//女装 .
    PRODUCT_CATEGORY_ID_2 => 'Men’s Clothing',//男装
    PRODUCT_CATEGORY_ID_11 => 'Health & Beauty',//美妆健康 .
    PRODUCT_CATEGORY_ID_8 => 'Bags & Shoes',//鞋包类 .
    PRODUCT_CATEGORY_ID_6 => 'Jewelry & Watches',//珠宝和手表 .
    PRODUCT_CATEGORY_ID_10 => 'Sports & Outdoors',//户外和运动
    PRODUCT_CATEGORY_ID_3 => 'Phones & Accessories',//手机和配件
    PRODUCT_CATEGORY_ID_4 => 'Computer & Office',//电脑和办公设备
    PRODUCT_CATEGORY_ID_5 => 'Consumer Electronics',//消费数码
    PRODUCT_CATEGORY_ID_9 => 'Toys, Kids & Baby',//儿童玩具
    PRODUCT_CATEGORY_ID_7 => 'Home & Garden',//家居园艺
    PRODUCT_CATEGORY_ID_13 => 'Home Improvement',//家庭装潢
    PRODUCT_CATEGORY_ID_12 => 'Automobiles & Motorcycles',//汽车和摩托车
);

$COUPON_STATUS_ARRAY = array(
    COUPON_STATUS_NOT_USE => 'Not USE',
    COUPON_STATUS_USED => 'Used',
    COUPON_STATUS_EXPIRED => 'Expired',
);

$COUPON_MGR_STATUS_ARRAY = array(
    COUPON_STATUS_NOT_USE => '可使用',
    COUPON_STATUS_USED => '已使用',
    COUPON_STATUS_EXPIRED => '已作废',
);

$COUPON_SOURCE_ARRAY = array(
    COUPON_SOURCE_FIRST_PACKAGE => '首次礼包',
    COUPON_SOURCE_EVERYDAY_PRODUCT => '每日商品分享',
    COUPON_SOURCE_CHANNEL_BARCODE => '渠道二维码',
    COUPON_SOURCE_CHANNEL_FIRST_USER => '渠道新用户',
    COUPON_SOURCE_SELLER_GIVE => '商家发放',
    COUPON_SOURCE_MGR_GIVE => '管理员发放',
);

$SPONSOR_TYPE_ARRAY = array(
    SPONSOR_TYPE_INNER => '内部员工',
    SPONSOR_TYPE_OUTER => '外部资源',
);

$SPONSOR_TASK_ARRAY = array(
    SPONSOR_TASK_BIND_YOUTUBE => '绑定youtube',
    SPONSOR_TASK_BIND_FACEBOOK => '绑定 Facebook',
    SPONSOR_TASK_BIND_TWITTER => '绑定 twitter',
    SPONSOR_TASK_INVITE_FRIEND => '邀请好友',
    SPONSOR_TASK_BIND_EMAIL => '绑定邮箱',
    SPONSOR_TASK_UP_20_PRODUCT => '上架20个商品',
    SPONSOR_TASK_UP_50_PRODUCT => '上架50个商品',
    SPONSOR_TASK_BIND_PAYPAL => '绑定paypal',
    SPONSOR_TASK_WITHDRAW => '提现',
    SPONSOR_TASK_SHARE_TWITTER => '分享店铺到twitter',
    SPONSOR_TASK_SHARE_FACEBOOK => '分享到Facebook',
    SPONSOR_TASK_CREATE_SECOND => '红人店铺产生第二单',
    SPONSOR_TASK_COLLECT_SAMPLE => '红人第一次审核通过。领取样品',
    SPONSOR_TASK_SINGLE_MAKING_VIDEO => '领取单品,拍视频',
    SPONSOR_TASK_PACKAGE_MAKING_VIDEO => '领取样品套餐,拍视频',
);

$SPONSOR_TASK_STATUS_ARRAY = array(
    SPONSOR_TASK_START => '红人任务开始',
    SPONSOR_TASK_FINISH => '红人任务完成',
    SPONSOR_TASK_FAILED => '红人任务失败',
    SPONSOR_TASK_HAS_LEAD_SAMPLE => '已领样品',
    SPONSOR_TASK_SAMPLE_DELIVERY => '样品配送中',
    SPONSOR_TASK_VIDEO_SHOOT => '视频拍摄中',
    SPONSOR_TASK_VIDEO_REVIEWED => '视频审核中',
);

$CUSTOMER_SOURCE_ARRAY = array(
    CUSTOMER_SOURCE_WEBSITE => '网站注册',
    CUSTOMER_DRAINAGE_ADV_SOURCE => '广告引流',
);

$ORDER_MGR_STATUS_ARRAY = array(
    ORDER_STATUS_NOT_PAY => '<span class="text-danger">未付款</span>',
    ORDER_STATUS_PAID => '<span class="text-success">已付款</span>',
    ORDER_STATUS_SHIPPED => '<span class="text-danger">已发货</span>',
    ORDER_STATUS_FINISHED => '<span class="text-primary">已完成</span>',
    ORDER_STATUS_CANCELED => '<span class="text-default">已取消</span>',
);

$ACCOUNT_DETAIL_TYPE_ARRAY = array(
    ACCOUNT_DETAIL_TYPE_ORDER_PAID => '订单付款',
    ACCOUNT_DETAIL_TYPE_CASH_OUT => '佣金提现',
    ACCOUNT_DETAIL_TYPE_ORDER_REFUND => '订单退款',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_CHARGE => '账户充值',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYOUT => '支付',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYIN => '收入',
    ACCOUNT_DETAIL_TYPE_PUNISH => '惩罚',
    ACCOUNT_DETAIL_TYPE_SYSTEM_REWARDS => '系统奖励',
    ACCOUNT_DETAIL_TYPE_PAY_TASK => '支付红人推广',
    ACCOUNT_DETAIL_TYPE_APPLY_WITHDRAWAL => '申请账户提现',
    ACCOUNT_DETAIL_TYPE_APPLY_REJECT => '提现申请驳回',
    ACCOUNT_DETAIL_TYPE_TO_PAYPAL => 'Paypal账户收款',
    ACCOUNT_DETAIL_TYPE_TO_PLATFORM => '分销服务费',
    ACCOUNT_DETAIL_TYPE_TO_SHOP_PACKAGE => '店铺套餐',
    ACCOUNT_DETAIL_TYPE_TO_SHOP_FEE => '订单费用',
    ACCOUNT_DETAIL_TYPE_BIND_PAYPAL => '绑定paypal奖励',
    ACCOUNT_DETAIL_TYPE_TO_BALANCE => '转到账户余额',
    ACCOUNT_DETAIL_TYPE_PLATFORM_PROMOTION => '平台促销活动',
);
$ACCOUNT_DETAIL_TYPE_ARRAY_ENGLISH = array(
    ACCOUNT_DETAIL_TYPE_ORDER_PAID => 'Pay order',
    ACCOUNT_DETAIL_TYPE_CASH_OUT => 'Cash withdrawal',
    ACCOUNT_DETAIL_TYPE_ORDER_REFUND => 'Order refund',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_CHARGE => 'Account recharge',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYOUT => 'Pay',
    ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYIN => 'Income',
    ACCOUNT_DETAIL_TYPE_PUNISH => 'Punishment',
    ACCOUNT_DETAIL_TYPE_SYSTEM_REWARDS => 'System reward',
    ACCOUNT_DETAIL_TYPE_PAY_TASK => 'Paid sponsor promotion',
    ACCOUNT_DETAIL_TYPE_APPLY_WITHDRAWAL => 'Withdrawal',
    ACCOUNT_DETAIL_TYPE_APPLY_REJECT => 'Return',
    ACCOUNT_DETAIL_TYPE_TO_PAYPAL => 'Paypal account Income',
    ACCOUNT_DETAIL_TYPE_TO_PLATFORM => 'Distribution service fee',
    ACCOUNT_DETAIL_TYPE_TO_SHOP_PACKAGE => 'Shop package',
    ACCOUNT_DETAIL_TYPE_TO_SHOP_FEE => 'Order cost',
    ACCOUNT_DETAIL_TYPE_BIND_PAYPAL => 'Bind paypal reward',
    ACCOUNT_DETAIL_TYPE_ORDER_COMMISSION => 'Order Commission',
    ACCOUNT_DETAIL_TYPE_TO_BALANCE => 'Withdrawal',
    ACCOUNT_DETAIL_TYPE_PLATFORM_PROMOTION => 'Promotion',
);
$ACCOUNT_DETAIL_ACCOUNT_TYPE_ARRAY = array(
    MEMBER_TYPE_CUSTOMER => '买家',
    MEMBER_TYPE_SELLER => '卖家',
    MEMBER_TYPE_SPONSOR => '红人',
    MEMBER_TYPE_ADMIN => '平台',
);

$ARTICLE_THEME_COLOR_ARRAY = array(
    ARTICLE_THEME_COLOR_RED => '红色',
);

$ARTICLE_PRODUCT_URL_TYPE_ARRAY = array(
    ARTICLE_PRODUCT_URL_TYPE_OURMALL => '站内商品链接',
    ARTICLE_PRODUCT_URL_TYPE_OUTSITE => '站外商品链接',
);

$SHOP_SELLER_TYPE_ARRAY = array(
    0 => '系统添加',
    SHOP_SELLER_TYPE_EBAY => 'eBay',
    SHOP_SELLER_TYPE_ALIEXPRESS => 'Aliexpress',
// SHOP_SELLER_TYPE_AMAZON => 'Amazon',
    SHOP_SELLER_TYPE_WISH => 'Wish',
);

$OURMALL_SELLER_PLATFORM_TYPE_ARRAY = array(
    SHOP_SELLER_TYPE_EBAY => 'eBay',
    SHOP_SELLER_TYPE_ALIEXPRESS => 'Aliexpress',
// SHOP_SELLER_TYPE_AMAZON => 'Amazon',
    SHOP_SELLER_TYPE_WISH => 'Wish',
    SHOP_SELLER_TYPE_A1688 => '1688',
    SHOP_SELLER_TYPE_TAOBAO => 'Taobao',
    SHOP_SELLER_TYPE_TMALL => 'Tmall',
);

$IMPORT_TYPE_ARRAY = array(
    IMPORT_TYPE_EXCEL => 'EXCEL导入',
    IMPORT_TYPE_API_EBAY_SHOPPRODUCT => 'Ebay店铺商品导入',
    IMPORT_TYPE_API_TYPE_ITEM_ID => '类型ITEMID导入',
    IMPORT_TYPE_API_ALIEXPRESS_SHOPPRODUCT => 'Aliexpress店铺商品导入',
    IMPORT_TYPE_API_AMAZON_SHOPPRODUCT => 'Amazon店铺商品导入',
    IMPORT_TYPE_API_WISH_SHOPPRODUCT => 'Wish店铺商品导入',
    IMPORT_TYPE_API_A688_SHOPPRODUCT => '1688店铺商品导入',
    IMPORT_TYPE_API_TAOBAO_SHOPPRODUCT => '淘宝店铺商品导入',
    IMPORT_TYPE_API_TMALL_SHOPPRODUCT => '天猫店铺商品导入',
    IMPORT_TYPE_EXCEL_PRODUCT => 'Excel导入商品',
);
$TYPE_IMPORTTYPE_MAP = array(
    SHOP_SELLER_TYPE_EBAY => IMPORT_TYPE_API_EBAY_SHOPPRODUCT,
    SHOP_SELLER_TYPE_ITEM => IMPORT_TYPE_API_TYPE_ITEM_ID,
    SHOP_SELLER_TYPE_ALIEXPRESS => IMPORT_TYPE_API_ALIEXPRESS_SHOPPRODUCT,
    SHOP_SELLER_TYPE_AMAZON => IMPORT_TYPE_API_AMAZON_SHOPPRODUCT,
    SHOP_SELLER_TYPE_WISH => IMPORT_TYPE_API_WISH_SHOPPRODUCT,
    SHOP_SELLER_TYPE_A1688 => IMPORT_TYPE_API_A688_SHOPPRODUCT,
    SHOP_SELLER_TYPE_TAOBAO => IMPORT_TYPE_API_TAOBAO_SHOPPRODUCT,
    SHOP_SELLER_TYPE_TMALL => IMPORT_TYPE_API_TMALL_SHOPPRODUCT,
);

$SHOP_SELLER_STATUS_ARRAY = array(
    SHOP_SELLER_STATUS_READY => '已更新',
    SHOP_SELLER_STATUS_STAY => '等待更新',
    SHOP_SELLER_STATUS_NONE => '不再更新',
    SHOP_SELLER_STATUS_UPDATING => '正在更新',
);

$GLOBAL_ID_ARRAY = array(
    GLOBAL_ID_EBAY_US => 'EBAY-US',
    GLOBAL_ID_EBAY_ENCA => 'EBAY-ENCA',
    GLOBAL_ID_EBAY_GB => 'EBAY-GB',
    GLOBAL_ID_EBAY_AU => 'EBAY-AU',
    GLOBAL_ID_EBAY_AT => 'EBAY-AT',
    GLOBAL_ID_EBAY_FRBE => 'EBAY-FRBE',
    GLOBAL_ID_EBAY_FR => 'EBAY-FR',
    GLOBAL_ID_EBAY_DE => 'EBAY-DE',
    GLOBAL_ID_EBAY_MOTOR => 'EBAY-MOTOR',
    GLOBAL_ID_EBAY_IT => 'EBAY-IT',
    GLOBAL_ID_EBAY_NLBE => 'EBAY-NLBE',
    GLOBAL_ID_EBAY_NL => 'EBAY-NL',
    GLOBAL_ID_EBAY_ES => 'EBAY-ES',
    GLOBAL_ID_EBAY_CH => 'EBAY-CH',
    GLOBAL_ID_EBAY_HK => 'EBAY-HK',
    GLOBAL_ID_EBAY_IN => 'EBAY-IN',
    GLOBAL_ID_EBAY_IE => 'EBAY-IE',
    GLOBAL_ID_EBAY_MY => 'EBAY-MY',
    GLOBAL_ID_EBAY_FRCA => 'EBAY-FRCA',
    GLOBAL_ID_EBAY_PH => 'EBAY-PH',
    GLOBAL_ID_EBAY_PL => 'EBAY-PL',
    GLOBAL_ID_EBAY_SG => 'EBAY-SG',
    GLOBAL_ID_EBAY_SE => 'EBAY-SE',
);
$GLOBAL_ID_FLIP_ARRAY = array_flip($GLOBAL_ID_ARRAY);
$GLOBAL_ID_SITE_ARRAY = array(
    GLOBAL_ID_EBAY_US => 'http://www.ebay.com/',
    GLOBAL_ID_EBAY_ENCA => 'http://www.ebay.ca/',
    GLOBAL_ID_EBAY_GB => 'http://www.ebay.co.uk/',
    GLOBAL_ID_EBAY_AU => 'http://www.ebay.com.au/',
    GLOBAL_ID_EBAY_AT => 'http://www.ebay.at/',
    GLOBAL_ID_EBAY_FRBE => 'http://www.befr.ebay.be/',
    GLOBAL_ID_EBAY_FR => 'http://www.ebay.fr/',
    GLOBAL_ID_EBAY_DE => 'http://www.ebay.de/',
    GLOBAL_ID_EBAY_MOTOR => 'http://www.motors.ebay.com/',
    GLOBAL_ID_EBAY_IT => 'http://www.ebay.it/',
    GLOBAL_ID_EBAY_NLBE => 'http://www.benl.ebay.be/',
    GLOBAL_ID_EBAY_NL => 'http://www.ebay.nl/',
    GLOBAL_ID_EBAY_ES => 'http://www.ebay.es/',
    GLOBAL_ID_EBAY_CH => 'http://www.ebay.ch/',
    GLOBAL_ID_EBAY_HK => 'http://www.ebay.com.hk/',
    GLOBAL_ID_EBAY_IN => 'http://www.ebay.in/',
    GLOBAL_ID_EBAY_IE => 'http://www.ebay.ie/',
    GLOBAL_ID_EBAY_MY => 'http://www.ebay.com.my/',
    GLOBAL_ID_EBAY_FRCA => 'http://www.cafr.ebay.ca/',
    GLOBAL_ID_EBAY_PH => 'http://www.ebay.ph/',
    GLOBAL_ID_EBAY_PL => 'http://www.ebay.pl/',
    GLOBAL_ID_EBAY_SG => 'http://www.ebay.com.sg/',
    GLOBAL_ID_EBAY_SE => 'http://www.eim.ebay.se/',
);

$DEFAULT_EBAY_SITE = array(
    GLOBAL_ID_EBAY_US=>'美国站-US',
    GLOBAL_ID_EBAY_ENCA=>'加拿大站-ENCA',
    GLOBAL_ID_EBAY_GB=>'英国站-GB',
    GLOBAL_ID_EBAY_FR=>'法国站-FR',
    GLOBAL_ID_EBAY_DE=>'德国站-DE',
    GLOBAL_ID_EBAY_ES=>'西班牙站-ES',
);

$SNS_TYPE_ARRAY = array( // 用户接口注册使用
    SNS_TYPE_FACEBOOK =>'Facebook',
    SNS_TYPE_TWITTER => 'Twitter',
    SNS_TYPE_GOOGLE => 'Google',
    SNS_TYPE_PINTEREST => 'Pinterest',
    SNS_TYPE_INSTAGRAM => 'Instagram',
    SNS_TYPE_YOUTUBE => 'YouTube',
);
$PRODUCT_TYPE_URL_ARRAY =array(
    SNS_TYPE_FACEBOOK =>'facebook',
    SNS_TYPE_TWITTER =>'twitter',
    SNS_TYPE_GOOGLE =>'google',
    SNS_TYPE_PINTEREST =>'pinterest',
    SNS_TYPE_INSTAGRAM =>'instagram',
    SNS_TYPE_YOUTUBE => 'youtube',
);
$PRODUCT_SHARE_SUMMARY_ARRAY =array(
    SNS_TYPE_FACEBOOK =>'facebook [] to up your taste! via@OurMall',
    SNS_TYPE_TWITTER =>'I just find [] to up your taste! via@OurMall',
    SNS_TYPE_PINTEREST =>'pinterest [] to up your taste! via@OurMall',
);
$SPONSOR_SELLER_TASK_DEFAULT_STATUS =array(
    SPONSOR_SELLER_TASK_DETAIL_STATUS_WAITING_SELLER => '应聘审核',
    SPONSOR_SELLER_TASK_DETAIL_STATUS_WAITING_SPONSOR=>'等待红人确定',
    SPONSOR_SELLER_TASK_DETAIL_STATUS_SPONSOR_START=>'任务进行中',
    SPONSOR_SELLER_TASK_DETAIL_STATUS_SPONSOR_FINISH=>'放款审核',
    SPONSOR_SELLER_TASK_DETAIL_STATUS_SELLER_FINISH=>'任务结束',
    SPONSOR_SELLER_TASK_DETAIL_STATUS_CANCELED=>'任务放弃',
);

$BANNER_TYPE_ARRAY = array(
    BANNER_TYPE_TASK => '任务',
    BANNER_TYPE_URL => '网址链接',
);

$ADD_TYPE = array(
    ADD_TYPE_BUYER => "买家添加",
    ADD_TYPE_ADMIN => "管理员添加",
);
$MEMBER_DEVICE_PLATFORM_ARRAY = array(
    MEMBER_DEVICE_PLATFORM_ANDROID=>'android',
    MEMBER_DEVICE_PLATFORM_IOS=>'ios',
    MEMBER_DEVICE_PLATFORM_WINPHONE=>'winphone',
);
$SALLER_STATE = array(
    YES_VALUE =>'在售',
    NO_VALUE => '停售'
);
//option 选择是否启用快递
$IS_ENABLESHIPFEE2 = array(
    YES_VALUE => '启用',
    NO_VALUE => '未启用',
);



//物流公司
$EXPRESS_COMPANY_TYPE = array(
    EXPRESS_EUB => '线下E邮宝',
    EXPRESS_YANWEN => '燕文',
    EXPRESS_4PX => '4PX',
    EXPRESS_WISH_U => 'Wish邮',
    EXPRESS_WANSE => '万色物流',
    EXPRESS_SHUIHU => '水浒国际',
    EXPRESS_MIAOXIN => '深圳淼信物流',
    EXPRESS_SHUNYOU => '顺友物流',
    EXPRESS_HK_DHL => '香港DHL',
    EXPRESS_SH_DHL => '上海DHL',
    EXPRESS_JMS => '捷买送',
    EXPRESS_WSY => '威速易',
    EXPRESS_SF => '顺丰国际电商',
    EXPRESS_YUNTU => '云途物流',
    EXPRESS_JOY => '趣物流',
    EXPRESS_TAIJIA => '泰嘉国际物流',
    EXPRESS_OTHER => '其他',
);

//订单类型
$ORDER_SOURCE_TYPE = array(
    ORDER_SOURCE_SELF_ORDER => '自营订单',
    ORDER_SOURCE_DISTRIBUTION_ORDER => '分销订单'
);

//订单状态类型
$ORDER_STATUS_TYPE = array(
    ORDER_STATUS_NOT_PAY => '待支付',
    ORDER_STATUS_PAID => '已支付',
    ORDER_STATUS_SHIPPED => '已发货',
    ORDER_STATUS_CANCELED => '已取消',
    ORDER_STATUS_FINISHED => '已完成'
);

//物流方式
$SHIPPING_TYPE_ARRAY = array(
    SHIPPING_TYPE_DEFAULT => '默认',
    SHIPPING_TYPE_NORMAL => '普通物流',
    SHIPPING_TYPE_EXPRESS => '快递'
);

////卖家提现处理状态
$SELLER_WITHDRAW_STATUS_ARRAY = array(
    SELLER_WITHDRAW_STATUS_APPLY => '申请中',
    SELLER_WITHDRAW_STATUS_LOAN => '已放款',
    SELLER_WITHDRAW_STATUS_REJECT => '已驳回'
);

//edm
$EDM_QUANTITY_OPERATE_ARRAY = array(
    EDM_QUANTITY_OPERATE_ALL_ADD => '总量增加',
    EDM_QUANTITY_OPERATE_ALL_MINUS => '总量减少',
    EDM_QUANTITY_OPERATE_SEND_ADD => '发送量增加',
    EDM_QUANTITY_OPERATE_SEND_MINUS => '发送量减少',
);

$EDM_REPLACE_TAGS_ARRAY = array(
    '{$店铺名称}', '{$店铺地址}', '{$商品列表}', '{$优惠券}', '{$客户名称}'
);

$YOUTUBE_USER_SOURCE = array(
    YOUTUBE_USER_SOURCE_KEYWORDS => '通过关键词',
    YOUTUBE_USER_SOURCE_USER_RELATE => '通过红人关联',
    YOUTUBE_USER_SOURCE_CHANNEL_RELATE => '通过红人关注',
    YOUTUBE_USER_SOURCE_VIDEO_RELATE => '通过视频关联',
    YOUTUBE_USER_SOURCE_ADD => '通过手动添加',
);

$YOUTUBE_VIDEO_SOURCE = array(
    YOUTUBE_VIDEO_SOURCE_CRAWL => '爬虫添加',
    YOUTUBE_VIDEO_SOURCE_ADD => '后台添加',
);

$FOLLOW_STATUS_ARRAY = array(
    FOLLOW_STATUS_UNTRACE     =>  '未跟进',
    FOLLOW_STATUS_TRACEING    =>  '跟进中',
    FOLLOW_STATUS_COOPERATED  =>  '已合作',
    FOLLOW_STATUS_REJECTED    =>  '已拒绝'
);

$TRACE_PERIOD_ARRAY = array(
    TRACE_PERIOD_3 => '3天未跟进',
    TRACE_PERIOD_3_5 => '3-5天未跟进',
    TRACE_PERIOD_5_7 => '5-7天未跟进',
);
// refund reason
$REFUND_SEASON_ORDER_ARRAY = array(
    REFUND_REASON_GOODS_OUT_OF_STOCK => 'Out of stock',
    REFUND_REASON_GOODS_QUALITY_PROBLEM => 'Quality defects',
    REFUND_REASON_SELLER_SEND_WRONG_GOODS => 'Shipping errors',
    REFUND_REASON_DO_NOT_WANT => 'Order extra items / order mistake items / unsatisfied',
    REFUND_REASON_OTHER_SITUATION => 'Others',
);

// REFUND INTENTION
$REFUND_INTENTION_ORDER_ARRAY = array(
    REFUND_INTENTION_NOT_GOODS_NOT_NEED_REFUND => 'Confiscation of arrival, no return',
    REFUND_INTENTION_HAS_GOODS_NOT_WANT_REFUND => 'Received the goods, no return',
    REFUND_INTENTION_HAS_GOODS_WANT_REFUND => 'Received the goods, return',
);

// Refund type
$REFUND_ORDER_TYPE_ARRAY = array(
    REFUND_TYPE_AMOUNT=>'金额退款',
    REFUND_TYPE_NOT_SHIPPED=>'未发货退款',
    REFUND_TYPE_SHIPPED=>'已发货退款',
);

$SELLER_MAIL_SOURCE_ARRAY = array(
    SELLER_MAIL_SOURCE_DEFAULT => '未指定',
    SELLER_MAIL_SOURCE_EBAY => 'eBay卖家',
    SELLER_MAIL_SOURCE_WISH => 'Wish卖家',
    SELLER_MAIL_SOURCE_AMAZON => 'Amazon卖家',
    SELLER_MAIL_SOURCE_ALIEXPRESS => '速卖通卖家',
    SELLER_MAIL_SOURCE_ENSOGO => 'Ensogo卖家',
    SELLER_MAIL_SOURCE_LAZADA => 'Lazada卖家',
    SELLER_MAIL_SOURCE_CDISCOUNT => 'CDiscount卖家',
    SELLER_MAIL_SOURCE_ERP => 'ERP卖家',
);
$YOUTUBU_LINK_TYPE_ARRAY = array(
    LINK_TYPE_YOUTUBE =>'youtube',
    LINK_TYPE_FACEBOOK =>'facebook',
    LINK_TYPE_TWITTER =>'twitter',
    LINK_TYPE_INSTAGRAM =>'instagram',
    LINK_TYPE_PINTEREST =>'pinterest',
    LINK_TYPE_GOOGLE =>'google+',
    LINK_TYPE_UNKNOWN =>'other',
);

$SHOP_TYPE_PRICE = array(
    SELLER_SHOP_TYPE_BASIC => 0,
    SELLER_SHOP_TYPE_PROFESSIONAL => 19.99,
    //SELLER_SHOP_TYPE_PROFESSIONAL => 0.01,
    SELLER_SHOP_TYPE_ENTERPRISE => 29.99
    //SELLER_SHOP_TYPE_ENTERPRISE => 0.03
);
$SHOP_TYPE_DISPLAYNAME = array(
    SELLER_SHOP_TYPE_BASIC => '基础版',
    SELLER_SHOP_TYPE_PROFESSIONAL => '专业版',
    SELLER_SHOP_TYPE_ENTERPRISE => '企业版'
);
//套餐内容
$SHOP_TYPE_CONTENT = array(
    SELLER_SHOP_TYPE_BASIC => array(
        'limitProductQuantity' => 20,
        'emailPerMonth' => 1000,
        'tradeFee' => 1,
        'shopNum' => 2,
        'unitPrice' => 0
    ),
    SELLER_SHOP_TYPE_PROFESSIONAL => array(
        'limitProductQuantity' => 100,
        'emailPerMonth' => 5000,
        'tradeFee' => 0.5,
        'shopNum' => null,
        //'unitPrice' => 0.01
        'unitPrice' => 19.99
    ),
    SELLER_SHOP_TYPE_ENTERPRISE => array(
        'limitProductQuantity' => null,
        'emailPerMonth' => 10000,
        'tradeFee' => 0.3,
        'shopNum' => null,
        //'unitPrice' => 0.03
        'unitPrice' => 29.99
    )
);

$GIFT_APPLICATION_TYPE = array(
    GIFT_APPLICATION_TYPE_APPLY => 'Approving',
    GIFT_APPLICATION_TYPE_AGREE => 'Delivered',
    GIFT_APPLICATION_TYPE_CANCEL => 'Canceled',
    GIFT_APPLICATION_TYPE_REJECT => 'Refused',
);
$GIFT_APPLICATION_TYPE_ARRAY = array(
    GIFT_APPLICATION_TYPE_APPLY => '待审核',
    GIFT_APPLICATION_TYPE_AGREE => '已通过',
    GIFT_APPLICATION_TYPE_CANCEL => '已取消',
    GIFT_APPLICATION_TYPE_REJECT => '已拒绝',
);

$SPONSOR_TASK_AUDIT_STATUS_ARRAY = array(
    SPONSOR_TASK_AUDIT_STATUS_SHIPPED => '已发货',
    SPONSOR_TASK_AUDIT_STATUS_APPLY => '未发货',
    SPONSOR_TASK_AUDIT_STATUS_REJECT => '已拒绝',
    SPONSOR_TASK_AUDIT_STATUS_CANCEL => '已取消',
);

$YOUTUBE_USER_STATUS_ARRAY = array(
    YOUTUBE_USER_STATUS_WAIT_VERIFY => '待验证',
    YOUTUBE_USER_STATUS_VALID_USER => '有效用户',
    YOUTUBE_USER_STATUS_INVALID_USER => '无效用户',
);
$YOUTUBE_EMAIL_STATUS_ARRAY = array(
    YOUTUBE_EMAIL_STATUS_NOT_EXISTS => '无邮件',
    YOUTUBE_EMAIL_STATUS_EXISTS => '有邮件',
    YOUTUBE_EMAIL_STATUS_CAN_ADD => '可添加邮件',
);

$ACCOUNT_DETAIL_SYMBOL_ARRAY = array(
    ACCOUNT_DETAIL_SYMBOL_IN => '收入',
    ACCOUNT_DETAIL_SYMBOL_OUT => '支出',
);

$YOUTUBE_USER_LABEL_ARRAY = array(
    YOUTUBE_USER_LABEL_A =>	'A',
    YOUTUBE_USER_LABEL_B => 'B',
    YOUTUBE_USER_LABEL_C => 'C',
    YOUTUBE_USER_LABEL_D => 'D',
    YOUTUBE_USER_LABEL_N => '-',
);
$YOUTUBE_VIDEO_LABEL_ARRAY = array(
    YOUTUBE_VIDEO_LABEL_A => 'A',
    YOUTUBE_VIDEO_LABEL_B => 'B',
    YOUTUBE_VIDEO_LABEL_C => 'C',
    YOUTUBE_VIDEO_LABEL_D => 'D',
    YOUTUBE_VIDEO_LABEL_E => 'E',
);
$TALK_TEMPLATE_REPLACE_FIELDS = array('红人名称', '红人粉丝数', '红人视频浏览数', '礼金数量', '商家店铺地址', '样品地址');
$EDM_TEMPLATE_REPLACE_FIELDS = array('name'=>'用户名称', 'mail'=>'邮箱', 'unsubscribe'=>'取消订阅');

$YOUTUBE_WEB_LINK_TYPE_ARRAY = array(
    YOUTUBE_WEB_LINK_TYPE_SHOPPING_MALL => '商城',
    YOUTUBE_WEB_LINK_TYPE_BLOG => '博客',
    YOUTUBE_WEB_LINK_TYPE_UNKNOWN => '未知',
);

$AUDIT_STATUS_ARRAY = array(
    AUDIT_STATUS_WAIT => '待审核',
    AUDIT_STATUS_SUCCESS => '审核通过',
    AUDIT_STATUS_FAIL => '审核不通过',
);


$YOUTUBE_USER_POOL_CHECK_FLAG_ARRAY = array(
    YOUTUBE_USER_POOL_CHECK_FLAG_FIND_BY_USER => '用户关联',
    YOUTUBE_USER_POOL_CHECK_FLAG_FIND_BY_CHANNEL => '用户关注',
    YOUTUBE_USER_POOL_CHECK_FLAG_SUBSCRIBE_1 => '用户订阅>5k',
    YOUTUBE_USER_POOL_CHECK_FLAG_VIDEO_COUNT => '视频>5 且 最近视频6月内',
    YOUTUBE_USER_POOL_CHECK_FLAG_PRODUCT_SUBSCRIBE => '10个有效商品 或 用户订阅>10w',
);


$YOUTUBE_USER_IS_VALID_ARRAY = array(
    YOUTUBE_USER_IS_VALID_REAL => '真实红人',
    YOUTUBE_USER_IS_VALID_WAIT => '待确定',
    YOUTUBE_USER_IS_VALID_NO => '无效红人',
);

$ORDER_SELF_TYPE_ARRAY = array(
    ORDER_SELF_BUY_TYPE => '自买订单',
    ORDER_SPONSOR_GIFT_TYPE => '送红人订单'
);

$BONUS_DETAIL_TYPE_ARRAY = array(
    BONUS_DETAIL_TYPE_BIND_YOUTUBE  => 'Connect with YouTube',
    BONUS_DETAIL_TYPE_EXCHANGE_GIFT  => 'Apply for gift',
    BONUS_DETAIL_TYPE_REFUSE_APPLY  => 'Return the bonus',
    BONUS_DETAIL_TYPE_SHARE_PRODUCT  => 'Share sample link',
    BONUS_DETAIL_TYPE_REWARD_MONEY  => 'Reward the bonus',
);
//红人进度
$USER_TASK_PROGRESS_TYPE_ARRAY = array(
    USER_TASK_PROGRESS_TYPE_REGIST_ACCOUNT => '注册帐号',
    USER_TASK_PROGRESS_TYPE_APPLY_PRODUCT => '申领样品',
    USER_TASK_PROGRESS_TYPE_UPLOAD_VIDEO => '上传视频',
//    USER_TASK_PROGRESS_TYPE_SHOP_ADD_PRODUCT => '店铺添加商品',
    USER_TASK_PROGRESS_TYPE_PAY_ORDER => '支付订单',
);

$YOUTUBE_FOLLOW_HISTORY_TYPE_ARRAY = array(
    YOUTUBE_FOLLOW_HISTORY_TYPE_ADMIN => '管理备注',
    YOUTUBE_FOLLOW_HISTORY_TYPE_SYSTEM => '系统动态',
);

$VIDEO_LINK_STATUS_ARRAY = array(
    VIDEO_LINK_STATUS_WAIT_PARSE_REAL_URL => '待解析realUrl',
    VIDEO_LINK_STATUS_WAIT_PARSE_PRODUCT => '待解析商品地址',
    VIDEO_LINK_STATUS_HAS_PARSE_PRODUCT => '已解析商品地址',
    VIDEO_LINK_STATUS_INVALID_URL => '无效的URL地址',
    VIDEO_LINK_STATUS_UN_CONTACT_PRODUCT => '商品不关联视频',
);


$USER_LANGUAGE_TYPE_ARRAY = array(
    USER_LANGUAGE_TYPE_UNKNOWN => '未知',
    USER_LANGUAGE_TYPE_IS_ENGLISH => '英语系',
    USER_LANGUAGE_TYPE_NO_ENGLISH => '非英语系',
);

$RANDOM_TYPE_ARRAY = array(
    RANDOM_TYPE_PRODUCT => '商品类型',
    RANDOM_TYPE_VIDEO => '视频类型',
);

$SERVING_ADS_TYPE_ARRAY = array(
    SERVING_ADS_TYPE_AD_IS_NOT_SERVING => '未投放广告',
    SERVING_ADS_TYPE_AD_HAS_BEEN_SERVED => '已投放广告',
);

$USER_STYLE_ARRAY = array(
    USER_STYLE_1 => '特别漂亮',
    USER_STYLE_2 => '表现力极佳',
    USER_STYLE_3 => 'big size',
    USER_STYLE_4 => '搞怪',
    USER_STYLE_5 => '巨丑',
    USER_STYLE_6 => 'just so so',
);
//任务视频审核状态数组
$TASK_VIDEO_AUDIT_STATUS_ARRAY = array(
    TASK_VIDEO_STATUS_WAIT_CRAWL => '待解析',
    TASK_VIDEO_STATUS_EXIST_VIDEO => '已解析视频',
    TASK_VIDEO_STATUS_EXIST_PRODUCT => '已解析商品',
    TASK_VIDEO_STATUS_WAIT_AUDIT => '待审核',
    TASK_VIDEO_STATUS_AUDIT_PASSED => '审核通过',
    TASK_VIDEO_STATUS_AUDIT_REFUSE => '审核不通过',
);

$KEYWORDS_SOURCE_ARRAY = array(
    KEYWORDS_SOURCE_VIDEO => '视频',
    KEYWORDS_SOURCE_SPONSOR => '红人',
    KEYWORDS_SOURCE_PRODUCT => '商品',
);

$VLOGGER_PRODUCT_AUDIT_STATUS_ARRAY = array(
    VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_ANALYZE => '待解析',
    VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_SPONSOR_CONFIRM => '待红人确认',
    VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_SELLER_CONFIRM => '待卖家确认',
    VLOGGER_PRODUCT_AUDIT_STATUS_SPONSOR_CONFIRMED => '已确认',
    VLOGGER_PRODUCT_AUDIT_STATUS_CANCEL => '取消',
);
$PAYSSION_PAYMENT_ARRAY = array(
    'MX' => array(
        'oxxo_mx' => array('name' => 'OXXO', 'img' => 'oxxo_mx.png'),
        'banamex_mx' => array('name' => 'Banamex', 'img' => 'banamex_mx.png'),
        'bancomer_mx' => array('name' => 'Bancomer', 'img' => 'bancomer_mx.png'),
        'santander_mx' => array('name' => 'Santander', 'img' => 'santander_mx.png')
    ),
    'AR' => array(
        'dineromail_ar' => array('name' => 'DineroMail', 'img' => 'dineromail_ar.png'),
        'santander_ar' => array('name' => 'Santander Rio', 'img' => 'santander_ar.png'),
        'link_ar' => array('name' => 'Red Link', 'img' => 'link_ar.png'),
        'pagofacil_ar' => array('name' => 'Pago Fácil', 'img' => 'pagofacil_ar.png'),
        'dmtransfer_ar' => array('name' => 'Dinero Mail(Transfer)', 'img' => 'dmtransfer_ar.png'),
        'dmcash_ar' => array('name' => 'Dinero Mail(Cash)', 'img' => 'dmcash_ar.png'),
        'rapipago_ar' => array('name' => 'Rapi Pago', 'img' => 'rapipago_ar.png'),
        'visadebit_ar' => array('name' => 'Visa Debit Argentina', 'img' => 'visa_ar.png'),
        'mastercarddebit_ar' => array('name' => 'MasterCard Debit Argentina', 'img' => 'mastercard_ar.png')
    ),
    'UY' => array('redpagos_uy' => array('name' => 'RedPagos' , 'img' => 'redpagos.png') ),
    'BR' => array(
        'bancodobrasil_br' => array('name' => 'Banco do Brasil' , 'img' => 'bancodobrasil_br.png'),
        'itau_br' => array('name' => 'Itaú' , 'img' => 'itau_br.png'),
        'boleto_br' => array('name' => 'Boleto' , 'img' => 'boleto_br.png'),
        'bradesco_br' => array('name' => 'Bradesco' , 'img' => 'bradesco_br.png'),
        'hsbc_br' => array('name' => 'HSBC' , 'img' => 'hsbc_br.png'),
        'caixa_br' => array('name' => 'Caixa' , 'img' => 'caixa_br.png'),
        'santander_br' => array('name' => 'Santander' , 'img' => 'santander_br.png')
    ),
    'CL' => array(
        'bancochile_cl' => array('name' => 'Banco de Chile' , 'img' => 'bancochile.png'),
        'webpay_cl' => array('name' => 'WebPay Plus' , 'img' => 'webpayplus.png')
    ),
    'DE' => array('sofort' => array('name' => 'Sofort', 'img' => 'sofort.png')),
    'CO' => array(
        'efecty_co' => array('name' => 'Efecty', 'img' => 'efecty_co.png'),
        'pse_co' => array('name' => 'PSE', 'img' => 'pse_co.png'),
        'davivienda_co' => array('name' => 'Davivienda', 'img' => 'davivienda_co.png'),
        'exito_co' => array('name' => 'Almacenes Exito', 'img' => 'exito_co.png'),
        'baloto_co' => array('name' => 'Baloto', 'img' => 'baloto_co.png'),
        'oc_co' => array('name' => 'Banco de Occidente', 'img' => 'oc_co.png')
            )
     );

$FEEDBACK_STATUS_ARRAY = array(
    NO_REPLY => '未回复',
    ALREADY_REPLY => '已回复',
    NO_LONGER_REPLY => '不再回复'
);

$MAIL_PLAN_STATUS_ARRAY = array(
    MAIL_PLAN_STATUS_WAITING_IMPORT=>'等待导入邮件',
    MAIL_PLAN_STATUS_IMPORTING => '正在导入邮件',
    MAIL_PLAN_STATUS_IMPORT_COMPLETE => '导入邮件完成',
    MAIL_PLAN_STATUS_WAIT_SEND => '等待发送邮件',
    MAIL_PLAN_STATUS_SENDING => '发送邮件中',
    MAIL_PLAN_STATUS_SEND_COMPLETE => '发送邮件完成',
);

$MAIL_TASK_STATUS_ARRAY = array(
    MAIL_TASK_STATUS_WAIT=>'waiting',
    MAIL_TASK_STATUS_ACCEPTED=>'accepted',
    MAIL_TASK_STATUS_REJECTED=>'rejected',
    MAIL_TASK_STATUS_DELIVERED=>'delivered',
    MAIL_TASK_STATUS_FAILED=>'failed',
    MAIL_TASK_STATUS_OPENED=>'opened',
    MAIL_TASK_STATUS_CLICKED=>'clicked',
    MAIL_TASK_STATUS_UNSUBSCRIBED=>'unsubscribed',
    MAIL_TASK_STATUS_COMPLAINED=>'complained',
    MAIL_TASK_STATUS_DROPPED=>'dropped',
    MAIL_TASK_STATUS_PROHIBIT=>'prohibit',
);


$SHOW_SOURCE_ARRAY = array(
    SHOW_SOURCE_LOOKBOOK => 'LOOKBOOK',
    SHOW_SOURCE_PRODUCTCOMMENT => '速卖通评论',
    SHOW_SOURCE_UPLOAD_BY_ADMIN => '管理上传',
    SHOW_SOURCE_UPLOAD_BY_CUSTOMER => '用户上传',
    SHOW_SOURCE_TWITTER => 'TWITTER',
    SHOW_SOURCE_YOUTUBE => 'YOUTUBE',

);
$FASHION_SHOW_TYPE_ARRAY = array(
    FASHION_SHOW_TYPE_PRODUCT => '商品',
    FASHION_SHOW_TYPE_VIDEO => '视频',
);
$FASHION_SHOW_SOURCE_ARRAY = array(
    FASHION_SHOW_SOURCE_PRODUCT_COMMENT => '商品评论',
);

$VIDEO_SHARE_PLATFORM_TYPE_ARRAY = array(
    VIDEO_SHARE_PLATFORM_TYPE_PINTEREST_FOR_VIDEO => 'PINTEREST视频分享',
    VIDEO_SHARE_PLATFORM_TYPE_PINTEREST_FOR_IMAGE => 'PINTEREST图片分享',
);
$SHARE_PLATFORM_SOURCE_ARRAY = array(
    SHARE_PLATFORM_SOURCE_PIN1 => 'PIN1(视频分享)',
    SHARE_PLATFORM_SOURCE_PIN2 => 'PIN2(视频合成图分享)',
    SHARE_PLATFORM_SOURCE_PIN3 => 'PIN3(SHOW-lookbook合成图分享)',
    SHARE_PLATFORM_SOURCE_PIN4 => 'PIN4(SHOW-商品,上传合成图分享)',
    SHARE_PLATFORM_SOURCE_PIN7 => 'PIN4(SHOW-PIN7)',
    SHARE_PLATFORM_SOURCE_PIN8 => 'PIN4(SHOW-PIN8)',
    SHARE_PLATFORM_SOURCE_PIN10 => 'PIN4(SHOW-PIN10)',
);

//不能发货的国家列表
$COUNTRY_NOT_DELIVER_ARR = [
    'GY','SR','BO','PY','UY','GT','SN','TN','MA','MR','ML','BF','CV','GN','CI','TG','DJ','GQ','BJ','TD','LR','DO'
];
$ACTIVITY_STATUS_ARRAY = [
    ACTIVITY_STATUS_NOT_START=>'未开始',
    ACTIVITY_STATUS_GOING=>'进行中',
    ACTIVITY_STATUS_FINISH=>'已结束',
];
$ACTIVITY_AWARD_STATUS_ARRAY = [
    ACTIVITY_AWARD_STATUS_NONE=>'待领奖',
    ACTIVITY_AWARD_STATUS_WILL_SHIP=>'待发货',
    ACTIVITY_AWARD_STATUS_SHIPPED=>'发货中',
    ACTIVITY_AWARD_STATUS_FINISH=>'领奖结束',
];
$LOG_SOURCE_ARRAY = [
    LOG_SOURCE_APP=>'app',
    LOG_SOURCE_WEB=>'网站',
];
$OURMALL_KEYWORDS_SOURCE_ARRAY = array(
    KEYWORDS_SOURCE_0 => '手动导入',
    KEYWORDS_SOURCE_1 => 'youtube关键词',
    KEYWORDS_SOURCE_2 => 'youtube视频标签',
);
$COUPON_TYPE_FULL_ARRAY = array(
    COUPON_TYPE_FULL_CUT => '满减',
    COUPON_TYPE_FULL_FOLDING => '满折',
);
$CUSTOMER_ACTIVE_PROPERTY_ARRAY = array(
    CUSTOMER_ACTIVE_PROPERTY_START=>'新注册用户',
    CUSTOMER_ACTIVE_PROPERTY_ACTIVE=>'活跃用户',
    CUSTOMER_ACTIVE_PROPERTY_SWING=>'摇摆用户',
    CUSTOMER_ACTIVE_PROPERTY_LEAVE=>'流失用户',
);
$CUSTOMER_CONSUME_PROPERTY_ARRAY = array(
    CUSTOMER_CONSUME_PROPERTY_NOT=>'未消费',
    CUSTOMER_CONSUME_PROPERTY_PRE=>'预消费',
    CUSTOMER_CONSUME_PROPERTY_HAS=>'已消费',
    CUSTOMER_CONSUME_PROPERTY_OVERTIME=>'消费超时',
);

$KEYWORDS_PLATFORM_FLAG_ARRAY = array(
    KEYWORDS_PLATFORM_FLAG_LOOKBOOK => '监听lookbook',
    KEYWORDS_PLATFORM_FLAG_SMT => '监听aliexpress',
);

$KEYWORDS_INCREASE_RANGE_ARRAY = array(
    KEYWORDS_INCREASE_RANGE_S => '连增3d',
    KEYWORDS_INCREASE_RANGE_M => '连增5d',
    KEYWORDS_INCREASE_RANGE_L => '连增7d',
);

$KEYWORDS_ITEM_ARRAY = array(
    KEYWORDS_ITEM_VOLUME => 'Volume',
    KEYWORDS_ITEM_CPC => 'Cpc',
);

$FREE_PRODUCT_STATUS_ARRAY = array(
    FREE_PRODUCT_STATUS_NONE => '未满员',
    FREE_PRODUCT_STATUS_NOT_SHIPPING => '已满员未发货',
    FREE_PRODUCT_STATUS_SHIPPING => '已发货',
    FREE_PRODUCT_STATUS_EXPIRE => '已过期',
    FREE_PRODUCT_STATUS_INVALID => '已作废',
);

$LANGUAGE_APP_ARRAY = array(  'en', 'cn', 'es' );

$PAYRECORD_PAY_TYPE_ARRAY = array(
    PAYRECORD_PAY_TYPE_PAYPAL => 'PAYPAL',
    PAYRECORD_PAY_TYPE_PAYSSION => 'PAYSSION',
    PAYRECORD_PAY_TYPE_ADYEN => '信用卡',
    PAYRECORD_PAY_TYPE_BALANCE => '余额支付',
);

$UPLOAD_PAGE_LOG_TYPE_ARRAY = array(
    UPLOAD_PAGE_LOG_TYPE_WAIT_IMPORT => '待初始化',
    UPLOAD_PAGE_LOG_TYPE_NORMAL => '正常',
    UPLOAD_PAGE_LOG_TYPE_FAIL => '初始化失败',
);

$ORDER_PROPERTY_TYPE_ARRAY = array(
    ORDER_PROPERTY_ORDINARY => '普通订单',
    ORDER_PROPERTY_GROUP_BUYING => '拼团订单',
);

$PROXY_ANONYMOUS_TYPE_ARRAY = array(
    ANONYMOUS_TYPE_INTERNAL_HIGHT => '国内高匿',
    ANONYMOUS_TYPE_INTERNAL_GENERAL => '国内普通',
    ANONYMOUS_TYPE_EXTERNAL_HIGHT => '国外高匿',
    ANONYMOUS_TYPE_EXTERNAL_GENERAL => '国外普通',
    ANONYMOUS_TYPE_HIGHT => '高匿',
    ANONYMOUS_TYPE_GENERAL => '普通',
    ANONYMOUS_TYPE_UNKNOWN => '未知',
);

$PROXY_TYPE_ARRAY = array(
    PROXY_TYPE_HTTP => 'HTTP',
    PROXY_TYPE_HTTPS =>'HTTPS',
);

$APP_SKIN_ARRAY = array(
    1=>array('name'=>'红色','file'=>'sass/skin-ourmall.scss','color'=>'','websiteV'=>'','websiteV2'=>''),
    2=>array('name'=>'黑色&黄色','file'=>'sass/skin-black.scss','color'=>'#222222','websiteV'=>'style/skin-black.css'),'websiteV2'=>'v2_css/skin-black.css',
    3=>array('name'=>'绿色','file'=>'sass/skin-green.scss','color'=>'#78bb30','websiteV'=>'style/skin-green.css','websiteV2'=>'v2_css/skin-green.css'),
    4=>array('name'=>'紫色','file'=>'sass/skin-purple.scss','color'=>'#711d3f','websiteV'=>'style/skin-purple.css','websiteV2'=>'v2_css/skin-purple.css'),
);

$COUPON_SETTING_STATUS_ARRAY = array(
    COUPON_SETTING_STATUS_NOT_START => '未开始',
    COUPON_SETTING_STATUS_AVAILABLE => '可使用',
    COUPON_SETTING_STATUS_EXPIRED => '已过期',
    COUPON_SETTING_STATUS_CANCEL => '已取消',
);