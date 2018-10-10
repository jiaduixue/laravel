<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Helper\Common;
use Illuminate\Http\Request;
class ChannelController extends Controller
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

}
