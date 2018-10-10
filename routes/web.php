<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//基础路由

Route::get('/', function () {
    return view('welcome');
});
/*
Route::post('/post', function () {
    return 'sd';
});
// 多请求路由

Route::match(['post','get'],'match', function () {
    return 'sd';
});

Route::any('/any', function () {
    return 'sd';
});
// 漏油参数
Route::get('/ssss/{id}', function ($id) {
    return 'sss'.$id;
});
Route::get('/sss1/{name?}', function ($name = null) {
    return 'sss'.$name;
});
Route::get('/sss2/{name2?}', function ($name2 = 'yujia') {
    return 'sss'.$name2;
});
Route::get('/sss3/{name3?}', function ($name3 = 'yujia') {
    return 'sss'.$name3;
})->where('name3','[A-Z]+');
Route::get('/sssf/{id}/{name4?}', function ($id,$name4 = 'yujia') {
    return 'sss'.$name4;
})->where(['id'=> '[0-9]+','name4'=>'[A-Za-z]+']);
//路由别名
Route::get('/mingming/yujiajia', ['as' => 'jiajia',function () {
    return route('jiajia'); // 用别名生成一个链接地址
}]);
// 路由群组
Route::group(['prefix'=>'prefix'],function(){ //原来的路由前面加一个前缀
	Route::get('/group1', function () {
	    return 'dsf';
	});

});
//路由模版
//Route::get('/customer/show', 'Customer\ShowController@index');
Route::get('/customer/show', [
	'uses'=>'Customer\ShowController@index',
	'as'=>'customerShow',
]);
*/

Route::group(['prefix' => 'mgr'], function (){
    Route::get('/login', [
        'uses'=>'Mgr\LoginController@index',
        'as'=>'mgrLogin',
    ]);
    Route::post('/login/check', [
        'uses'=>'Mgr\LoginController@check',
        'as'=>'mgrLoginCheck',
    ]);
    Route::get('/login/edit', [
        'uses'=>'Mgr\LoginController@edit',
        'as'=>'mgrLoginEdit',
    ]);
    Route::get('/main', [
        'uses'=>'Mgr\MainController@index',
        'as'=>'mgrMain',
    ]);
    Route::post('/main/setRowsPerPage', [
        'uses'=>'Mgr\MainController@setRowsPerPage',
        'as'=>'mgrMainSetRowsPerPage',
    ]);
    Route::get('/main/doLogout', [
        'uses'=>'Mgr\MainController@doLogout',
        'as'=>'mgrMainDoLogout',
    ]);


    Route::get('/message', [
        'uses'=>'Mgr\MessageController@index',
        'as'=>'mgrMessage',
    ]);

    //未添加控制器
    Route::get('/seller', [
        'uses'=>'Mgr\SellerController@index',
        'as'=>'mgrSeller',
    ]);
    Route::get('/customer', [
        'uses'=>'Mgr\CustomerController@index',
        'as'=>'mgrCustomer',
    ]);
    Route::get('/accountdetail', [
        'uses'=>'Mgr\AccountDetailController@index',
        'as'=>'mgrAccountDetail',
    ]);
    Route::get('/accountdetail', [
        'uses'=>'Mgr\AccountDetailController@index',
        'as'=>'mgrAccountDetail',
    ]);
    Route::get('/product', [
        'uses'=>'Mgr\ProductController@index',
        'as'=>'mgrProduct',
    ]);
     Route::get('/coupon', [
         'uses'=>'Mgr\CouponController@index',
         'as'=>'mgrCoupon',
     ]);
    Route::get('/coupon/set', [
        'uses'=>'Mgr\CouponController@set',
        'as'=>'mgrCouponSet',
    ]);
    Route::get('/edm/planlist', [
        'uses'=>'Mgr\EdmController@planlist',
        'as'=>'mgrEdmPlanList',
    ]);
    Route::get('/coupon/templatelist', [
        'uses'=>'Mgr\EdmController@templatelist',
        'as'=>'mgrEdmTemplateList',
    ]);
    Route::get('/coupon/sendloglist', [
        'uses'=>'Mgr\EdmController@sendloglist',
        'as'=>'mgrEdmSendLogList',
    ]);
    Route::get('/keyword', [
        'uses'=>'Mgr\KeywordController@index',
        'as'=>'mgrKeywords',
    ]);
    Route::get('/system/shorten', [
        'uses'=>'Mgr\SystemController@shorten',
        'as'=>'mgrSystemShorten',
    ]);
    Route::get('/language', [
        'uses'=>'Mgr\LanguageController@index',
        'as'=>'mgrLanguage',
    ]);
    Route::get('/system/uploadpagelog', [
        'uses'=>'Mgr\SystemController@uploadPageLog',
        'as'=>'mgrSystemUploadPageLog',
    ]);
    Route::get('/order', [
        'uses'=>'Mgr\OrderController@index',
        'as'=>'mgrOrder',
    ]);
});



