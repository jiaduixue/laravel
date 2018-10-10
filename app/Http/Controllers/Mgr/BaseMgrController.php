<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Helper\Common;
use Illuminate\Http\Request;
class BaseMgrController extends Controller
{
    /**
     * @authon yoga
     * @date 18-10-8
     * @content 处理用户如果未登陆就跳出到登陆页面
     * @return void
     */
    public function __construct(){
        $admin = DB::table('Admin')->find(1);
        print_r($admin);
        //checkAdminLogin();
    }

    /**
     * @authon yoga
     * @date 18-10-8
     * @content 执行登陆
     * @return void
     */
    public function check(Request $request)
    {
        
    }


}
