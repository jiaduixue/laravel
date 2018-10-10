<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Helper\Common;
use Illuminate\Http\Request;
class BaseController extends Controller
{
    public function __construct($name){
        $admin = DB::table('Admin')->find();
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
        if (!$request->isMethod('post')) {
            return response()->json([
                'success'=>false,
                'message'=>'请您合法操作'
            ]);
        }
        $username = $request->input('username');
        $password = $request->input('password');
        $admin = Admin::where('username',trim($username))->first();
        //echo Common::formatNumber('3.1234');
        //echo ADMIN_TYPE_MANAGER;
        if(isset($admin->id) && $admin->id && $admin->password == md5($password) && adminLogin($admin)) {
            return response()->json(array('success'=>true,'message'=>'操作成功'));die;
        }
        return response()->json(array('success'=>false,'message'=>'用户名或密码错误'));
    }


}
