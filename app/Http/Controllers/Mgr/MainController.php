<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Helper\Common;
use Illuminate\Http\Request;
class MainController extends Controller
{

    /**
     * @author yoga
     * @content 后台主页
     * @return void
     */
    public function index()
    {
        $memberInfo = session('MEMBER_INFO');
        $isMainHome = true;
        return view('mgr.main.index',['memberInfo'=>$memberInfo,'isMainHome'=>$isMainHome]);
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
        echo Common::formatNumber('3.1234');
        echo ADMIN_TYPE_MANAGER;
        if(isset($admin->id) && $admin->id && $admin->password == md5($password) && adminLogin($admin)) {
            return response()->json(array('success'=>true,'message'=>'操作成功'));die;
        }
        return response()->json(array('success'=>false,'message'=>'用户名或密码错误'));
    }
    public function setRowsPerPage(Request $request){
        $mod = $request->input('mod');
        $rowsPerPage = $request->input('rowsPerPage');
        echo setcookie('PAGINATION_'.$mod, intval($rowsPerPage), strtotime('+1 year'));

    }
    public function doLogout(){
        if(isset($memberInfo['loginKey'])) Cache::me()->clear('MEMBER_LOGIN_'.$memberInfo['loginKey']);
        Session::start()->clear();
        $process_forward = goUrl('main', 'login');
        header('Location:'.$process_forward);
    }
}
