<?
(! defined('APP_DOMAIN')) && define('APP_DOMAIN', 'ourmall.com');
define('HTTP_PORT', preg_match('/:\d+$/', $_SERVER['HTTP_HOST']) ? preg_replace('/.*?(:\d+)$/', '$1', $_SERVER['HTTP_HOST']) : '');
define('IS_HTTPS', isset($_SERVER) && ('on'==$_SERVER['HTTPS'] || 'https'==$_SERVER['HTTP_X_FORWARDED_PROTO']) ? true : false);
!defined("GLOBAL_HOST") && define('GLOBAL_HOST', (IS_HTTPS ? 'https':'http').'://global.'.APP_DOMAIN.HTTP_PORT.'/');
define("SWF_PATH", GLOBAL_HOST."swf/");
define('WEB_WS_HOST', (IS_HTTPS ? 'wss':'ws').'://message.ourmall.com:7272');

define('YES_VALUE',	1);//是
define('NO_VALUE',	2);//否

define('GENDER_MALE', 1);//先生
define('GENDER_FEMALE', 2);//女士

define('ADMIN_TYPE_BASE', 	1);//基础
define('ADMIN_TYPE_DIRECTOR', 2);//总监
define('ADMIN_TYPE_MANAGER', 9);//管理员

define('MEMBER_TYPE_CUSTOMER', 1);//买家
define('MEMBER_TYPE_SELLER', 2);//卖家
define('MEMBER_TYPE_VISITOR', 3);//游客
define('MEMBER_TYPE_MANAGER', 4);//管理
define('MEMBER_TYPE_SPONSOR', 5);//推广账号（红人）
define('MEMBER_TYPE_CHANNEL', 6);//渠道商
define('MEMBER_TYPE_ADMIN', 9);//管理員

define('MEMBER_SOURCE_WEBSITE', 1);//本站

define('ORDER_STATUS_NOT_PAY', 1);//未支付
define('ORDER_STATUS_PAID', 2);//已支付
define('ORDER_STATUS_SHIPPED', 3);//已发货
define('ORDER_STATUS_FINISHED', 5);//已完成
define('ORDER_STATUS_CANCELED', 9);//已取消

define('PAY_RECORD_STATUS_NOT_PAY', 1);//未付款
define('PAY_RECORD_STATUS_PAID', 2);//已付款
define('PAY_RECORD_CANCELED', 3);//已取消

define('MESSAGE_SUBJECT_TYPE_PRODUCT', 1);//商品
define('MESSAGE_SUBJECT_TYPE_ORDER', 2);//订单
define('MESSAGE_SUBJECT_TYPE_NONE', 3);//无主题
define('MESSAGE_SUBJECT_TYPE_TASK', 4);//分享任务

define('LUCENE_SEARCH_TYPE_AND', 	1);//搜索类型AND操作
define('LUCENE_SEARCH_TYPE_OR', 	2);//搜索类型OR操作

define('MONEY_TYPE_USD', 1);//美元
define('MONEY_TYPE_GBP', 2);//英镑
define('MONEY_TYPE_AUD', 3);//澳元
define('MONEY_TYPE_EUR', 4);//欧元
define('MONEY_TYPE_CAD', 5);//加拿大元

define('PRODUCT_CATEGORY_ID_1', 1);
define('PRODUCT_CATEGORY_ID_2', 2);
define('PRODUCT_CATEGORY_ID_3', 3);
define('PRODUCT_CATEGORY_ID_4', 4);
define('PRODUCT_CATEGORY_ID_5', 5);
define('PRODUCT_CATEGORY_ID_6', 6);
define('PRODUCT_CATEGORY_ID_7', 7);
define('PRODUCT_CATEGORY_ID_8', 8);
define('PRODUCT_CATEGORY_ID_9', 9);
define('PRODUCT_CATEGORY_ID_10', 10);
define('PRODUCT_CATEGORY_ID_11', 11);
define('PRODUCT_CATEGORY_ID_12', 12);
define('PRODUCT_CATEGORY_ID_13', 13);

define('COUPON_STATUS_NOT_USE', 1);
define('COUPON_STATUS_USED', 2);
define('COUPON_STATUS_EXPIRED', 3);

define('COUPON_SOURCE_FIRST_PACKAGE', 1);
define('COUPON_SOURCE_EVERYDAY_PRODUCT', 2);
define('COUPON_SOURCE_CHANNEL_BARCODE', 3);
define('COUPON_SOURCE_CHANNEL_FIRST_USER', 4);
define('COUPON_SOURCE_SELLER_GIVE', 8);
define('COUPON_SOURCE_MGR_GIVE', 9);

define('SPONSOR_TYPE_INNER', 1);
define('SPONSOR_TYPE_OUTER', 2);

define('SELLER_SOURCE_WEBSITE', 1);
define('SELLER_SOURCE_FROM_MABANG', 2);

define('CUSTOMER_SOURCE_WEBSITE', 1);

define('ACCOUNT_DETAIL_SYMBOL_IN', 1);//明细收入
define('ACCOUNT_DETAIL_SYMBOL_OUT', 2);//明细支出

define('ACCOUNT_DETAIL_TYPE_ORDER_PAID', 1);//订单付款
define('ACCOUNT_DETAIL_TYPE_CASH_OUT', 2);//提现
define('ACCOUNT_DETAIL_TYPE_ORDER_REFUND', 3);//订单退款
define('ACCOUNT_DETAIL_TYPE_ACCOUNT_CHARGE', 4);//账户充值
define('ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYOUT', 5);//账户付款
define('ACCOUNT_DETAIL_TYPE_ACCOUNT_PAYIN', 6);//账户收入
define('ACCOUNT_DETAIL_TYPE_PUNISH', 98);//惩罚
define('ACCOUNT_DETAIL_TYPE_SYSTEM_REWARDS', 99);//系统奖励
define('ACCOUNT_DETAIL_TYPE_PAY_TASK', 7);//支付红人推广
define('ACCOUNT_DETAIL_TYPE_APPLY_WITHDRAWAL', 8);//申请账户提现
define('ACCOUNT_DETAIL_TYPE_APPLY_REJECT', 9);//提现申请驳回
define('ACCOUNT_DETAIL_TYPE_TO_PAYPAL', 10);//转入卖家paypal账户
define('ACCOUNT_DETAIL_TYPE_TO_PLATFORM', 11);//分销服务费
define('ACCOUNT_DETAIL_TYPE_TO_SHOP_PACKAGE', 12);//分销服务费
define('ACCOUNT_DETAIL_TYPE_TO_SHOP_FEE', 13);//平台交易订单手续费用
define('ACCOUNT_DETAIL_TYPE_BIND_PAYPAL', 14);//绑定paypal账户奖励
define('ACCOUNT_DETAIL_TYPE_ORDER_COMMISSION', 15);//Order Commission 返利
define('ACCOUNT_DETAIL_TYPE_TO_BALANCE', 16);//转到账户余额
define('ACCOUNT_DETAIL_TYPE_PLATFORM_PROMOTION', 17);//转到账户余额


define('SPONSOR_SOURCE_PLATFORM', 1);//平台来源
define('SPONSOR_SOURCE_SELF', 2);//自营商品

define('SPONSOR_TYPE_NEW', 1);//红人商品全新
define('SPONSOR_TYPE_OLD', 2);//红人商品二手

define('ARTICLE_THEME_COLOR_GOLD', 1);//金色
define('ARTICLE_THEME_COLOR_RED', 2);//红色
define('ARTICLE_THEME_COLOR_BLACK', 3);//红色

define('ARTICLE_PRODUCT_URL_TYPE_OURMALL', 1);//站内
define('ARTICLE_PRODUCT_URL_TYPE_OUTSITE', 2);//站外

define('SELLER_SPONSOR_STATUS_INIT', 1); //红人初始关注卖家
define('SELLER_SPONSOR_STATUS_TASKED', 2); //红人接受过卖家任务

define('IMPORT_TYPE_EXCEL',   1);//XLS导入
define('IMPORT_TYPE_API_EBAY_SHOPPRODUCT',   2);//Ebay店铺商品导入
define('IMPORT_TYPE_API_TYPE_ITEM_ID',   3);//类型ITEMID
define('IMPORT_TYPE_API_ALIEXPRESS_SHOPPRODUCT',   4);//SMT店铺商品导入
define('IMPORT_TYPE_API_AMAZON_SHOPPRODUCT',   5);//AMZ店铺商品导入
define('IMPORT_TYPE_API_WISH_SHOPPRODUCT',  6);//WISH店铺商品导入
define('IMPORT_TYPE_API_A688_SHOPPRODUCT',  7);//1688店铺商品导入
define('IMPORT_TYPE_API_TAOBAO_SHOPPRODUCT',  8);//淘宝店铺商品导入
define('IMPORT_TYPE_API_TMALL_SHOPPRODUCT',  9);//天猫店铺商品导入
define('IMPORT_TYPE_EXCEL_PRODUCT',   10);//XLS导入商品

define('SHOP_SELLER_TYPE_EBAY', 1);//eBay
define('SHOP_SELLER_TYPE_ALIEXPRESS', 2);//Aliexpress
define('SHOP_SELLER_TYPE_AMAZON', 3);//Amazon
define('SHOP_SELLER_TYPE_WISH', 4);//Wish
define('SHOP_SELLER_TYPE_A1688', 5);//1688.com
define('SHOP_SELLER_TYPE_TAOBAO', 6);//淘宝网
define('SHOP_SELLER_TYPE_TMALL', 7);//天猫商城
define('SHOP_SELLER_TYPE_ITEM', 0);//单品导入商店

define('PRODUCT_IMPORT_SOURCE_VOTOBO',1);//从votobo导入的商品

define('SHOP_SELLER_STATUS_READY', 1);//已更新
define('SHOP_SELLER_STATUS_STAY', 2);//待更新
define('SHOP_SELLER_STATUS_NONE', 3);//不再更新
define('SHOP_SELLER_STATUS_UPDATING', 4);//正在更新

define('GLOBAL_ID_EBAY_US', 		0);
define('GLOBAL_ID_EBAY_ENCA', 		2);
define('GLOBAL_ID_EBAY_GB', 		3);
define('GLOBAL_ID_EBAY_AU', 		15);
define('GLOBAL_ID_EBAY_AT', 		16);
define('GLOBAL_ID_EBAY_FRBE', 		23);
define('GLOBAL_ID_EBAY_FR', 		71);
define('GLOBAL_ID_EBAY_DE', 		77);
define('GLOBAL_ID_EBAY_MOTOR', 		100);
define('GLOBAL_ID_EBAY_IT', 		101);
define('GLOBAL_ID_EBAY_NLBE', 		123);
define('GLOBAL_ID_EBAY_NL', 		146);
define('GLOBAL_ID_EBAY_ES', 		186);
define('GLOBAL_ID_EBAY_CH', 		193);
define('GLOBAL_ID_EBAY_HK', 		201);
define('GLOBAL_ID_EBAY_IN', 		203);
define('GLOBAL_ID_EBAY_IE', 		205);
define('GLOBAL_ID_EBAY_MY', 		207);
define('GLOBAL_ID_EBAY_FRCA', 		210);
define('GLOBAL_ID_EBAY_PH', 		211);
define('GLOBAL_ID_EBAY_PL', 		212);
define('GLOBAL_ID_EBAY_SG', 		216);
define('GLOBAL_ID_EBAY_SE',			218);

define('SNS_TYPE_FACEBOOK', 1);
define('SNS_TYPE_TWITTER', 2);
define('SNS_TYPE_GOOGLE', 3);
define('SNS_TYPE_PINTEREST', 4);
define('SNS_TYPE_INSTAGRAM', 5);
define('SNS_TYPE_YOUTUBE', 6);

define('SPONSOR_SELLER_TASK_DETAIL_STATUS_WAITING_SELLER', 1); //等待卖家确认
define('SPONSOR_SELLER_TASK_DETAIL_STATUS_WAITING_SPONSOR', 2); //等待红人确认
define('SPONSOR_SELLER_TASK_DETAIL_STATUS_SPONSOR_START', 3); //任务进行中
define('SPONSOR_SELLER_TASK_DETAIL_STATUS_SPONSOR_FINISH', 4); //任务完成
define('SPONSOR_SELLER_TASK_DETAIL_STATUS_SELLER_FINISH', 5); //任务结束
define('SPONSOR_SELLER_TASK_DETAIL_STATUS_CANCELED', 9); //任务放弃

define('BANNER_TYPE_TASK', 1); //任务
define('BANNER_TYPE_URL', 2); //网址链接

define('PLATFORM_RATE', 1.1); //平台费率
define('PLATFORM_RATE_ONLY', 0.1); //平台费率 单独

define('SELF_ORDER', 1); //平台费率
define('TO_SPONSOR_ORDER', 2); //平台费率
define('NO_MANAGE_STOCK','999+'); //不管理库存时显示库存数量
define('ADD_TYPE_BUYER',1);
define('ADD_TYPE_ADMIN',2);

//促销订单状态
define('RPOMOTION_ORDER_STATUS_SELECTED',1);//已选品，未申请返现（30分钟有效）
define('PROMOTION_ORDER_STATUS_APPLIED',2);//已申请返现（填写了平台订单数据等，30天自动变成卖家确认）
define('PROMOTION_ORDER_STATUS_SELLER_CONFIRMED',3);//卖家已确认（允许管理员放款）
define('PROMOTION_ORDER_STATUS_CASH',4);//已返现
define('PROMOTION_ORDER_STATUS_CANCELLED',9);//已作废

//商品是否获得评价
define('IS_HAVED_FEEDBACK_YES',2);
define('IS_HAVED_FEEDBACK_NO',1);


define('MEMBER_DEVICE_PLATFORM_ANDROID',    1);
define('MEMBER_DEVICE_PLATFORM_IOS',        2);
define('MEMBER_DEVICE_PLATFORM_WINPHONE',   3);

define('BATCH_HANDLE_UP',1);
define('BATCH_HANDLE_DOWN',2);
define('BATCH_HANDLE_CLASSIFY',3);
define('BATCH_HANDLE_PRICE',4);
define('BATCH_HANDLE_SHIP_PRICE',5);
define('BATCH_SETTING_TAGES',6);
define('BATCH_HANDLE_DISTRIBUTE',7);
define('BATCH_HANDLE_SHOP',7);


define('BATCH_UPDATE_PRODUCT_ON_SALE', 1);//批量在售
define('BATCH_UPDATE_PRODUCT_OFF_SALE', 2);//批量下架
define('BATCH_UPDATE_PRODUCT_SET_PRICE_BY_ADD', 3);//批量设置加价
define('BATCH_UPDATE_PRODUCT_SET_PRICE_PERCENTAGE', 4);//批量设置百分比加价
define('BATCH_UPDATE_PRODUCT_SET_SHIPFEE', 5);//批量设置运费
define('BATCH_UPDATE_PRODUCT_SET_FIXED_SALE_PRICE', 6);//批量设置固定售价
define('BATCH_UPDATE_PRODUCT_SET_CATEGORY', 7);//批量设置固定售价


define('SKU_TYPE_SINGLE',1); //商品单属性
define('SKU_TYPE_MULTI',2);//商品多属性

//物流公司
define('EXPRESS_OTHER',99);//其他
define('EXPRESS_EUB',1);//线下E邮宝
define('EXPRESS_YANWEN',2);//燕文
define('EXPRESS_4PX',3);//4PX
define('EXPRESS_WISH_U',4);//wish u
define('EXPRESS_WANSE',5);//万色物流
define('EXPRESS_SHUIHU',6);//水浒国际
define('EXPRESS_SHUNYOU',7);//顺友物流
define('EXPRESS_JOY',8);//趣物流
define('EXPRESS_SF',9);//顺丰国际电商
define('EXPRESS_HK_DHL',10);//香港DHL
define('EXPRESS_YUNTU',11);//云途物流
define('EXPRESS_SH_DHL',12);//上海DHL
define('EXPRESS_MIAOXIN',13);//深圳淼信物流
define('EXPRESS_JMS',14);//捷买送
define('EXPRESS_WSY',15);//威速易
define('EXPRESS_TAIJIA',16);//泰嘉国际物流

//SOURCE订单类型
define('ORDER_SOURCE_SELF_ORDER',1);//自营订单
define('ORDER_SOURCE_DISTRIBUTION_ORDER',2);//分销订单
define('ORDER_SOURCE_IMPORT_ORDER',3);//导入订单
define('ORDER_SOURCE_INDEPENDENT_APP',4);//独立店铺订单

//订单platform
define('ORDER_PLATFORM_WEB',1);//网站
define('ORDER_PLATFORM_IOS',2);//网站
define('ORDER_PLATFORM_AND',3);//网站


//物流方式
define('SHIPPING_TYPE_DEFAULT',0);//默认
define('SHIPPING_TYPE_NORMAL',1);//普通物流
define('SHIPPING_TYPE_EXPRESS',2);//快递


//导入类型/手动导入/批量导入
define('IMPORT_BATCH',1);
define('IMPORT_ITEM',2);

//导入状态
define('WAITING_FOR_IMPORT',1);//等待导入
define('IMPORT_MEDIUM',2);     //导入中
define('IMPORT_COMPLETED',3);  //导入完成

//卖家提现处理状态
define('SELLER_WITHDRAW_STATUS_APPLY',1);
define('SELLER_WITHDRAW_STATUS_LOAN',2);
define('SELLER_WITHDRAW_STATUS_REJECT',3);

//edm
define('EDM_QUANTITY_OPERATE_ALL_ADD', 		1);//总量增加
define('EDM_QUANTITY_OPERATE_ALL_MINUS', 	2);//总量减少
define('EDM_QUANTITY_OPERATE_SEND_ADD', 	3);//发送量增加
define('EDM_QUANTITY_OPERATE_SEND_MINUS', 	4);//发送量减少

define('YOUTUBE_USER_SOURCE_KEYWORDS',		1);//通过关键词
define('YOUTUBE_USER_SOURCE_USER_RELATE',  	2);//通过频道关联
define('YOUTUBE_USER_SOURCE_CHANNEL_RELATE',3);//通过频道关联
define('YOUTUBE_USER_SOURCE_VIDEO_RELATE',	4);//通过视频关联
define('YOUTUBE_USER_SOURCE_ADD',			9);//通过手动添加

define('YOUTUBE_VIDEO_SOURCE_CRAWL', 1);//爬虫添加
define('YOUTUBE_VIDEO_SOURCE_ADD', 2);//后台添加

define('FOLLOW_STATUS_UNTRACE',1);//未跟进
define('FOLLOW_STATUS_TRACEING',2);//跟进中
define('FOLLOW_STATUS_COOPERATED',3);//已合作
define('FOLLOW_STATUS_REJECTED',9);//已拒绝

//跟进周期
define('TRACE_PERIOD_3','3');
define('TRACE_PERIOD_3_5','3_5');
define('TRACE_PERIOD_5_7','5_7');

// Refund reason
define('REFUND_REASON_GOODS_OUT_OF_STOCK', 		1);//商品缺货
define('REFUND_REASON_GOODS_QUALITY_PROBLEM', 	2);//商品质量有问题
define('REFUND_REASON_SELLER_SEND_WRONG_GOODS', 	3);//卖家发错货
define('REFUND_REASON_DO_NOT_WANT', 	4);//发送量减少
define('REFUND_REASON_OTHER_SITUATION', 	5);//其他原因

// Refund intention
define('REFUND_INTENTION_NOT_GOODS_NOT_NEED_REFUND', 		1);//没收到货，不需要退货
define('REFUND_INTENTION_HAS_GOODS_NOT_WANT_REFUND', 	2);//已收到货，不想退货
define('REFUND_INTENTION_HAS_GOODS_WANT_REFUND', 	3);//已收到货，我要退货

// Refund type
define('REFUND_TYPE_AMOUNT', 		1);//金额退款
define('REFUND_TYPE_NOT_SHIPPED', 	2);//未发货退款
define('REFUND_TYPE_SHIPPED', 	3);//已发货退款

//Refund status
define('REFUND_STATUS_SELLER_HAS_NOT_HANDLE', 		1);//卖家未处理
define('REFUND_STATUS_CUSTOMER_HAS_NOT_HANDLE', 	2);//买家未处理
define('REFUND_INTENTION_HAS_FINISH_REFUND', 	3);//已完成
define('REFUND_INTENTION_HAS_CANCEL_REFUND', 	9);//已取消

//Refund history status
define('REFUND_STATUS_HISTORY_HAS_NOT_HANDLE',1);//未处理
define('REFUND_STATUS_HISTORY_HAS_AGREE', 	2);//同意
define('REFUND_STATUS_HISTORY_DOING_CONSULT', 	3);//协商
define('REFUND_STATUS_HISTORY_HAS_REFUSE', 	4);//拒绝
define('REFUND_STATUS_HISTORY_HAS_CANCEL', 	9);//拒绝

define('LINK_TYPE_YOUTUBE', 1);
define('LINK_TYPE_FACEBOOK', 2);
define('LINK_TYPE_TWITTER', 3);
define('LINK_TYPE_INSTAGRAM', 4);
define('LINK_TYPE_PINTEREST', 5);
define('LINK_TYPE_GOOGLE', 6);
define('LINK_TYPE_UNKNOWN', 7);

//外部卖家来源
define('SELLER_MAIL_SOURCE_DEFAULT', 0);
define('SELLER_MAIL_SOURCE_EBAY', 1);
define('SELLER_MAIL_SOURCE_WISH', 2);
define('SELLER_MAIL_SOURCE_AMAZON', 3);
define('SELLER_MAIL_SOURCE_ALIEXPRESS', 4);
define('SELLER_MAIL_SOURCE_ENSOGO', 5);
define('SELLER_MAIL_SOURCE_LAZADA', 6);
define('SELLER_MAIL_SOURCE_ERP', 7);
define('SELLER_MAIL_SOURCE_CDISCOUNT', 8);


//邮件任务状态
define('TASK_STATUS_WAIT', 1);//待发送
define('TASK_STATUS_ACCEPTED', 2);//服务器已接受
define('TASK_STATUS_REJECTED', 3);//服务器拒绝
define('TASK_STATUS_DELIVERED', 4);//服务器已发送
define('TASK_STATUS_FAILED', 5);//服务器发送失败
define('TASK_STATUS_OPENED', 6);//用户打开
define('TASK_STATUS_CLICKED', 7);//用户点击
define('TASK_STATUS_UNSUBSCRIBED', 8);//用户取消订阅
define('TASK_STATUS_COMPLAINED', 9);//用户投诉
define('TASK_STATUS_DROPPED', 10);//删除
define('TASK_STATUS_PROHIBIT', 11);//禁止

//样品申请状态
define('GIFT_STATUS_AUDIT',1);//待审核
define('GIFT_STATUS_PASSED',2);//审核通过
define('GIFT_STATUS_REFUSE',9);//审核不通过
define('GIFT_STATUS_SELLER_DELIVER',4);//卖家发货
define('GIFT_STATUS_CONFIRM_DELIVER',5);//卖家发货到货确认
define('GIFT_STATUS_OURMALL_DELIVER',6);//OurMall已发货

//任务视频审核
define('TASK_VIDEO_STATUS_WAIT_CRAWL',1);//待解析
define('TASK_VIDEO_STATUS_EXIST_VIDEO',2);//已经解析出视频
define('TASK_VIDEO_STATUS_EXIST_PRODUCT',3);//已经解析出商品
define('TASK_VIDEO_STATUS_WAIT_AUDIT',4);//待审核
define('TASK_VIDEO_STATUS_AUDIT_PASSED',5);//审核通过
define('TASK_VIDEO_STATUS_AUDIT_REFUSE',6);//审核不通过



//店铺类型
define('SELLER_SHOP_TYPE_BASIC',1);//基础
define('SELLER_SHOP_TYPE_PROFESSIONAL',2);//专业
define('SELLER_SHOP_TYPE_ENTERPRISE',3);//企业

//店铺操作类型
define('OPERATION_TYPE_OPENSHOP',1);
define('OPERATION_TYPE_UPGRADE',2);
define('OPERATION_TYPE_EXTEND',3);

//红人Bonus Detail类型  类型： 1.绑定社交账号  2.领样品  3.领样品失败   4.分享样品链接 5 .奖励礼金
define('BONUS_DETAIL_TYPE_BIND_YOUTUBE', 1);
define('BONUS_DETAIL_TYPE_EXCHANGE_GIFT', 2);
define('BONUS_DETAIL_TYPE_REFUSE_APPLY', 3);
define('BONUS_DETAIL_TYPE_SHARE_PRODUCT', 4);
define('BONUS_DETAIL_TYPE_REWARD_MONEY', 5);
define('BONUS_DETAIL_TYPE_PAY_ORDER', 6);//抵扣支付
define('BONUS_DETAIL_TYPE_CUSTOMER_SIGN', 7);//买家的签到记录
define('BONUS_DETAIL_TYPE_CUSTOMER_CLEAR', 8);//买家的bonus 清除

//订单类型
define('ORDER_SELF_BUY_TYPE',1);//自买订单
define('ORDER_SPONSOR_GIFT_TYPE',2);//送红人订单

//my gift status
define('GIFT_APPLICATION_TYPE_APPLY',1);//待审核
define('GIFT_APPLICATION_TYPE_AGREE',2);//审核通过
define('GIFT_APPLICATION_TYPE_CANCEL',3);//取消
define('GIFT_APPLICATION_TYPE_REJECT',9);//审核不通过

//sponsortask status
define('SPONSOR_TASK_AUDIT_STATUS_SHIPPED',1);//已发货
define('SPONSOR_TASK_AUDIT_STATUS_APPLY',2);//未发货
define('SPONSOR_TASK_AUDIT_STATUS_REJECT',3);//已拒绝
define('SPONSOR_TASK_AUDIT_STATUS_CANCEL',4);//已取消

//
define('PRODUCT_SKU_TYPE_SINGLE',1);//商品sku单属性
define('PRODUCT_SKU_TYPE_MORE',2);//商品sku多属性


define('YOUTUBE_EMAIL_STATUS_NOT_EXISTS', 1);//无邮件
define('YOUTUBE_EMAIL_STATUS_EXISTS', 2);//有邮件
define('YOUTUBE_EMAIL_STATUS_CAN_ADD', 3);//可添加邮件

define('YOUTUBE_USER_STATUS_WAIT_VERIFY', 1);//待验证
define('YOUTUBE_USER_STATUS_VALID_USER', 2);//有效用户
define('YOUTUBE_USER_STATUS_INVALID_USER',3);//无效用户


define('YOUTUBE_USER_LABEL_A', 1);
define('YOUTUBE_USER_LABEL_B', 2);
define('YOUTUBE_USER_LABEL_C', 3);
define('YOUTUBE_USER_LABEL_D', 4);
define('YOUTUBE_USER_LABEL_N', 9);

define('YOUTUBE_VIDEO_LABEL_A', 5);
define('YOUTUBE_VIDEO_LABEL_B', 4);
define('YOUTUBE_VIDEO_LABEL_C', 3);
define('YOUTUBE_VIDEO_LABEL_D', 2);
define('YOUTUBE_VIDEO_LABEL_E', 1);

//sponsor task
define('SPONSOR_TASK_BIND_YOUTUBE', 1);//绑定youtube
define('SPONSOR_TASK_BIND_FACEBOOK', 2);//绑定 Facebook
define('SPONSOR_TASK_BIND_TWITTER',3);//绑定 twitter
define('SPONSOR_TASK_INVITE_FRIEND',4);//邀请好友
define('SPONSOR_TASK_BIND_EMAIL',5);//绑定邮箱
define('SPONSOR_TASK_UP_20_PRODUCT',6);//上架20个商品
define('SPONSOR_TASK_UP_50_PRODUCT',7);//上架50个商品
define('SPONSOR_TASK_BIND_PAYPAL',8);//绑定paypal
define('SPONSOR_TASK_WITHDRAW',9);//提现
define('SPONSOR_TASK_SHARE_TWITTER',10);//分享店铺到twitter
define('SPONSOR_TASK_SHARE_FACEBOOK',11);//分享到Facebook
define('SPONSOR_TASK_CREATE_SECOND',12);//红人店铺产生第二单
define('SPONSOR_TASK_COLLECT_SAMPLE',13);//红人第一次审核通过。领取样品
define('SPONSOR_TASK_SINGLE_MAKING_VIDEO',14);//领取单品,拍视频
define('SPONSOR_TASK_PACKAGE_MAKING_VIDEO',15);//领取样品套餐,拍视频
define('CUSTOMER_TASK_FIRST_DOWNLOAD_APP',16);//customer 买家下载了平台app
define('CUSTOMER_TASK_SIGN_OURMALL',17);//customer 在ourmall 签到

define('PAYMENT_TYPE_BALANCE',1);
define('PAYMENT_TYPE_PAYPAL',2);

define('PAYRECORD_PAY_TYPE_PAYPAL', 1);//PAYPAL
define('PAYRECORD_PAY_TYPE_PAYSSION', 2);//PAYSSION
define('PAYRECORD_PAY_TYPE_ADYEN', 3);//ADYEN
define('PAYRECORD_PAY_TYPE_BALANCE', 4);// 余额支付

//sponsor task status
define('SPONSOR_TASK_START', 1);//HON红人任务开始
define('SPONSOR_TASK_FINISH', 2);// 红人任务完成
define('SPONSOR_TASK_FAILED',9);// 红人任务失败
define('SPONSOR_TASK_HAS_LEAD_SAMPLE',4);// 已领样品
define('SPONSOR_TASK_SAMPLE_DELIVERY',5);// 样品配送中
define('SPONSOR_TASK_VIDEO_SHOOT',6);// 视频拍摄中
define('SPONSOR_TASK_VIDEO_REVIEWED',7);// 视频审核中


define('YOUTUBE_WEB_LINK_TYPE_SHOPPING_MALL', 1);//商城
define('YOUTUBE_WEB_LINK_TYPE_BLOG', 2);//博客
define('YOUTUBE_WEB_LINK_TYPE_UNKNOWN', 9);//未知


define('AUDIT_STATUS_WAIT', 1);//待审核
define('AUDIT_STATUS_SUCCESS', 2);//审核通过
define('AUDIT_STATUS_FAIL', 3);//审核不通过


define('YOUTUBE_USER_POOL_CHECK_FLAG_FIND_BY_USER', 1);//用户关联
define('YOUTUBE_USER_POOL_CHECK_FLAG_FIND_BY_CHANNEL', 2);//用户关注
define('YOUTUBE_USER_POOL_CHECK_FLAG_SUBSCRIBE_1', 11);//用户订阅>5k
define('YOUTUBE_USER_POOL_CHECK_FLAG_VIDEO_COUNT', 12);//符合关联关键词>5
define('YOUTUBE_USER_POOL_CHECK_FLAG_PRODUCT_SUBSCRIBE', 13);//10个有效商品 或 用户订阅>10w

define('YOUTUBE_USER_IS_VALID_REAL', 1);//真实红人
define('YOUTUBE_USER_IS_VALID_WAIT', 2);//待确定
define('YOUTUBE_USER_IS_VALID_NO', 3);//无效红人
//红人进度
define('USER_TASK_PROGRESS_TYPE_REGIST_ACCOUNT', 1);//注册帐号
define('USER_TASK_PROGRESS_TYPE_APPLY_PRODUCT', 2);//申领样品
define('USER_TASK_PROGRESS_TYPE_UPLOAD_VIDEO', 3);//上传视频
define('USER_TASK_PROGRESS_TYPE_SHOP_ADD_PRODUCT', 4);//店铺添加商品
define('USER_TASK_PROGRESS_TYPE_PAY_ORDER', 5);//支付订单

define('YOUTUBE_FOLLOW_HISTORY_TYPE_ADMIN', 1);//管理备注
define('YOUTUBE_FOLLOW_HISTORY_TYPE_SYSTEM', 2);//系统动态

define('VIDEO_LINK_STATUS_WAIT_PARSE_REAL_URL', 1);//待解析realUrl
define('VIDEO_LINK_STATUS_WAIT_PARSE_PRODUCT', 2);//待解析商品地址
define('VIDEO_LINK_STATUS_HAS_PARSE_PRODUCT', 3);//已解析商品地址
define('VIDEO_LINK_STATUS_INVALID_URL', 4);//无效的URL地址
define('VIDEO_LINK_STATUS_UN_CONTACT_PRODUCT', 5);//商品不关联视频


define('USER_LANGUAGE_TYPE_UNKNOWN', 0);//未知
define('USER_LANGUAGE_TYPE_IS_ENGLISH', 2);//英语系
define('USER_LANGUAGE_TYPE_NO_ENGLISH', 3);//非英语系

define('USER_MESSAGE_TYPE_COMMENT', 1);//评论
define('USER_MESSAGE_TYPE_LIKE', 2);//点赞
define('USER_MESSAGE_TYPE_SUBSCRIBE', 3);//关注
define('USER_MESSAGE_TYPE_NEW_VIDEO', 4);//新视频
define('USER_MESSAGE_TYPE_SHOW_COMMENT', 5);//show评论
define('USER_MESSAGE_TYPE_SHOW_LIKE', 6);//show点赞
define('USER_MESSAGE_TYPE_TOPIC_SHOW_COMMENT', 7);//show评论
define('USER_MESSAGE_TYPE_GIVE_AWAY', 8);//give away
define('USER_MESSAGE_TYPE_SYSTEM', 99);//系统推送


define('YOUTUBE_PRODUCT_STATUS_ONSALE', 1);//在售
define('YOUTUBE_PRODUCT_STATUS_NOTSALE', 2);//下架

define('RANDOM_TYPE_PRODUCT', 1);//商品类型
define('RANDOM_TYPE_VIDEO', 2);//视频类型

define('CUSTOMER_FAVORITES_LIKE', 1);//收藏类型：1 like
define('CUSTOMER_FAVORITES_SPONSOR', 2);//2 红人
define('CUSTOMER_FAVORITES_ITEM', 3);//3 商品
define('CUSTOMER_FAVORITES_SHOW', 4);//4 show

define('CUSTOMER_SUBSCRIBE_TYPE_LIKE_VIDEO', 1);
define('CUSTOMER_SUBSCRIBE_TYPE_VLOGGER_CHANNEL', 2);

define('SERVING_ADS_TYPE_AD_IS_NOT_SERVING', 1);//未投放广告
define('SERVING_ADS_TYPE_AD_HAS_BEEN_SERVED', 2);//已投放广告

define('USER_STYLE_1', 1);//特别漂亮
define('USER_STYLE_2', 2);//表现力极佳
define('USER_STYLE_3', 3);//big size
define('USER_STYLE_4', 4);//搞怪
define('USER_STYLE_5', 5);//巨丑
define('USER_STYLE_6', 6);//just so so

define('ORDER_QUERY_STATUS_NOT_QUERY', 1);//物流查询状态 未查询
define('ORDER_QUERY_STATUS_QUERYING', 2);//物流查询状态 查询中
define('ORDER_QUERY_STATUS_QUERY_FINISH', 3);//物流查询状态 查询完成

define('KEYWORDS_SOURCE_VIDEO', 1);//视频
define('KEYWORDS_SOURCE_SPONSOR', 2);//红人
define('KEYWORDS_SOURCE_PRODUCT', 3);//商品

define('VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_ANALYZE', 0);//待解析
define('VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_SPONSOR_CONFIRM', 1);//待红人确认
define('VLOGGER_PRODUCT_AUDIT_STATUS_WAIT_SELLER_CONFIRM', 2);//待卖家确认
define('VLOGGER_PRODUCT_AUDIT_STATUS_SPONSOR_CONFIRMED', 3);//已确认
define('VLOGGER_PRODUCT_AUDIT_STATUS_CANCEL', 6);//取消
define('VLOGGER_PRODUCT_AUDIT_STATUS_PARSER_FAIL', 9);//解析失败

//feedback回复状态
define('NO_REPLY', 1);//未回复
define('ALREADY_REPLY', 5);//已回复
define('NO_LONGER_REPLY', 9);//不再回复
//taskType 主任务 任务类型
define('TASK_TYPE_SPONSOR', 1);//红人task
define('TASK_TYPE_CUSTOMER', 2);//买家task
define('TASK_TYPE_SELLER', 3);//卖家task
//customer Task porgress
define('CUSTOMER_TASK_STATUS_NOT_START', 1);//未开始
define('CUSTOMER_TASK_STATUS_FINISH', 2);//任务完成
define('CUSTOMER_TASK_STATUS_CANCEL', 9);//任务取消


define('MAIL_PLAN_STATUS_WAITING_IMPORT', 1);//等待导入邮件
define('MAIL_PLAN_STATUS_IMPORTING', 2);//正在导入邮件
define('MAIL_PLAN_STATUS_IMPORT_COMPLETE', 3);//导入邮件完成
define('MAIL_PLAN_STATUS_WAIT_SEND', 4);//等待发送邮件
define('MAIL_PLAN_STATUS_SENDING', 5);//发送邮件中
define('MAIL_PLAN_STATUS_SEND_COMPLETE', 6);//发送邮件完成

define('MAIL_TASK_STATUS_WAIT', 1);//待发送
define('MAIL_TASK_STATUS_ACCEPTED', 2);//服务器已接受
define('MAIL_TASK_STATUS_REJECTED', 3);//服务器拒绝
define('MAIL_TASK_STATUS_DELIVERED', 4);//服务器已发送
define('MAIL_TASK_STATUS_FAILED', 5);//服务器发送失败
define('MAIL_TASK_STATUS_OPENED', 6);//用户打开
define('MAIL_TASK_STATUS_CLICKED', 7);//用户点击
define('MAIL_TASK_STATUS_UNSUBSCRIBED', 8);//用户取消订阅
define('MAIL_TASK_STATUS_COMPLAINED', 9);//用户投诉
define('MAIL_TASK_STATUS_DROPPED', 10);//删除
define('MAIL_TASK_STATUS_PROHIBIT', 11);//禁止

define('FASHION_SHOW_TYPE_PRODUCT', 2);//商品图片
define('FASHION_SHOW_TYPE_VIDEO', 1);//视频


define('SHOW_SOURCE_LOOKBOOK', 1);//lookbook
define('SHOW_SOURCE_PRODUCTCOMMENT', 2);//自营商品库评论
define('SHOW_SOURCE_UPLOAD_BY_ADMIN', 3);//管理上传
define('SHOW_SOURCE_UPLOAD_BY_CUSTOMER', 4);//用户上传
define('SHOW_SOURCE_TWITTER', 5);//Twitter
define('SHOW_SOURCE_YOUTUBE', 6);//Youtube

define('FASHION_SHOW_SOURCE_PRODUCT_COMMENT', 1);//商品评论

define('VIDEO_SHARE_PLATFORM_TYPE_PINTEREST_FOR_VIDEO', 1);
define('VIDEO_SHARE_PLATFORM_TYPE_PINTEREST_FOR_IMAGE', 2);

define('LOG_TYPE_START',	1);//1 启动
define('LOG_TYPE_SCAN_PRODUCT',	2);//2 浏览商品
define('LOG_TYPE_SCAN_VIDEO',	3);//3 浏览视频
define('LOG_TYPE_SCAN_SHOW',	4);//4 浏览show
define('LOG_TYPE_CART',	5);// 5加入购物车
define('LOG_TYPE_ORDER',	6);//6下单
define('LOG_TYPE_PAYMENT',	7);//7付款
define('LOG_TYPE_SCAN_SPONSOR',	8);//浏览红人
define('LOG_TYPE_SCAN_QRCODE', 9);//扫描二维码
define('LOG_TYPE_SCAN_ACTIVITY', 10);// 浏览activity
define('LOG_TYPE_SEARCH_PRODUCT', 11);// 用户搜索商品
define('LOG_TYPE_MENU_DO', 12);// 商品列表类型记录
define('LOG_TYPE_PRODUCT_DETAIL_COMMENT', 13);// 商品详情页面评论
define('LOG_TYPE_PRODUCT_DETAIL_SHARE', 14);// 商品详情页面分享
define('LOG_TYPE_PRODUCT_DETAIL_CART', 15);// 商品详情页面cart
define('LOG_TYPE_PRODUCT_DETAIL_BUY', 16);// 商品详情页面buy
define('LOG_TYPE_FREE_PRODUCT', 17);// free商品

define('SHARE_PLATFORM_SOURCE_PIN1', 1);//pin视频分享
define('SHARE_PLATFORM_SOURCE_PIN2', 2);//pin视频合成图分享
define('SHARE_PLATFORM_SOURCE_PIN3', 3);//pinSHOW合成图分享
define('SHARE_PLATFORM_SOURCE_PIN4', 4);//pinSHOW-商品,上传合成图分享
define('SHARE_PLATFORM_SOURCE_PIN5', 5);//pinSHOW
define('SHARE_PLATFORM_SOURCE_PIN6', 6);//pinSHOW
define('SHARE_PLATFORM_SOURCE_PIN7', 7);//pinSHOW
define('SHARE_PLATFORM_SOURCE_PIN8', 8);//pinSHOW
define('SHARE_PLATFORM_SOURCE_PIN9', 9);//pinSHOW
define('SHARE_PLATFORM_SOURCE_PIN10', 10);//pinSHOW

define('CUSTOMER_ACTIVE_PROPERTY_START',	1);//1 新注册用户
define('CUSTOMER_ACTIVE_PROPERTY_ACTIVE',	2);//2 活跃用户
define('CUSTOMER_ACTIVE_PROPERTY_SWING',	3);//3 摇摆用户
define('CUSTOMER_ACTIVE_PROPERTY_LEAVE',	4);//4 流失用户',

define('CUSTOMER_CONSUME_PROPERTY_NOT',	1);//1 未消费\n
define('CUSTOMER_CONSUME_PROPERTY_PRE',	2);//2  预消费\
define('CUSTOMER_CONSUME_PROPERTY_HAS',	3);//3 已消费\n
define('CUSTOMER_CONSUME_PROPERTY_OVERTIME',	4);//4 消费超时

define('LOG_SOURCE_APP',	1);//1 app
define('LOG_SOURCE_WEB',	2);//2 web

define('ACTIVITY_STATUS_NOT_START',	1);//活动状态 1 未开始 2进行中 3 已结束
define('ACTIVITY_STATUS_GOING',	2);//2 web
define('ACTIVITY_STATUS_FINISH',	3);//2 web

define('ACTIVITY_AWARD_STATUS_NONE',	1);//'获奖状态  0 无\n 1 待领奖2 待发货\n3 发货中\n4 领奖结束'
define('ACTIVITY_AWARD_STATUS_WILL_SHIP',	2);//2 web
define('ACTIVITY_AWARD_STATUS_SHIPPED',	3);//2 web
define('ACTIVITY_AWARD_STATUS_FINISH',	3);//2 web

define('KEYWORDS_SOURCE_0',	0); //关键词来源0 手动导入
define('KEYWORDS_SOURCE_1',	1); //关键词来源1 youtube keywords数据
define('KEYWORDS_SOURCE_2',	2); //关键词来源2 youtube video tags 数据
define('KEYWORDS_SOURCE_LOOKBOOK',	3); //关键词来源 lookbook
define('KEYWORDS_SOURCE_SEOTOOL',	4); //关键词来源 seotool
define('KEYWORDS_SOURCE_SMT',	5); //关键词来源 smt

define('COUPON_TYPE_FULL_CUT',	1);//1 优惠卷满减
define('COUPON_TYPE_FULL_FOLDING',	2);//2 优惠卷满折

define('KEYWORDS_PLATFORM_FLAG_LOOKBOOK',1);
define('KEYWORDS_PLATFORM_FLAG_SMT',2);

//关键词统计间隔
define('KEYWORDS_INCREASE_RANGE_S',3);
define('KEYWORDS_INCREASE_RANGE_M',5);
define('KEYWORDS_INCREASE_RANGE_L',7);

//统计项
define('KEYWORDS_ITEM_VOLUME','Volume');
define('KEYWORDS_ITEM_CPC','Cpc');

define('SHOW_CHECK_WAIT', 1);//未解析的show
define('SHOW_CHECKED', 2);//已经解析的show

define('PRODUCT_STATUS_AUDIT',1);//待审核
define('PRODUCT_STATUS_PASSED',2);//审核通过
define('PRODUCT_STATUS_REFUSE',3);//审核不通过

define('PRODUCT_LEVEL_1',1);//普通
define('PRODUCT_LEVEL_2',2);//优质

define('FEEDBACK_TYPE_MENU',1);//feedback菜单
define('FEEDBACK_TYPE_EXCHANGE',9);//feedback客服交流

define('GROUP_BUY_STATUS_UNPAID',0);//0 未付款
define('GROUP_BUY_STATUS_WAIT',1);//1 未成团
define('GROUP_BUY_STATUS_SUCCESS',2);//2 已成团
define('GROUP_BUY_STATUS_EXPIRE',3);//3 已过期',

define('FREE_PRODUCT_STATUS_NONE',1);//1 未满员
define('FREE_PRODUCT_STATUS_NOT_SHIPPING',2);//2 已满员未发货
define('FREE_PRODUCT_STATUS_SHIPPING',3);//3 已发货',
define('FREE_PRODUCT_STATUS_EXPIRE',4);//4 已过期',
define('FREE_PRODUCT_STATUS_INVALID',9);//9 已作废,

define('ORDER_PROPERTY_ORDINARY',1);//普通订单
define('ORDER_PROPERTY_GROUP_BUYING',2);//拼团订单
define('ORDER_PROPERTY_SECKILL',3);//秒杀订单

define('UPLOAD_PAGE_LOG_TYPE_WAIT_IMPORT', 1);//待初始化
define('UPLOAD_PAGE_LOG_TYPE_NORMAL', 2);//正常
define('UPLOAD_PAGE_LOG_TYPE_FAIL', 3);//初始化失败
define('UPLOAD_PAGE_LOG_TYPE_DELETE', 4);//标记删除

define('CUSTOMER_OURMALL_SOURCE', 1);//用户来源本站
define('CUSTOMER_DRAINAGE_ADV_SOURCE', 2);//用户来源广告引流
define('CUSTOMER_TEMPLATE_1_SOURCE', 3);//来源于模板1的的注册
define('CUSTOMER_APP_REG_SOURCE', 11);//通过App直接注册

define('ANONYMOUS_TYPE_INTERNAL_HIGHT',		1);//国内高匿
define('ANONYMOUS_TYPE_INTERNAL_GENERAL',	2);//国内普通
define('ANONYMOUS_TYPE_EXTERNAL_HIGHT',		3);//国外高匿
define('ANONYMOUS_TYPE_EXTERNAL_GENERAL',	4);//国外普通
define('ANONYMOUS_TYPE_HIGHT',				5);//高匿
define('ANONYMOUS_TYPE_GENERAL',			6);//普通
define('ANONYMOUS_TYPE_UNKNOWN',			7);//未知

define('PROXY_TYPE_HTTP',	1);//HTTP
define('PROXY_TYPE_HTTPS',	2);//HTTPS

define('COUPON_SETTING_STATUS_NOT_START', 1);//优惠卷模板未开始
define('COUPON_SETTING_STATUS_AVAILABLE', 2);//优惠卷模板可使用
define('COUPON_SETTING_STATUS_EXPIRED', 3);//优惠卷模板已过期
define('COUPON_SETTING_STATUS_CANCEL', 4);//优惠卷模板已取消
?>
