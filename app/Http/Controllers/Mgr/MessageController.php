<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Helper\Common;
use Illuminate\Http\Request;
class MessageController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        // print_r(Config('constant.BOOLEAN_ARRAY'));

        return view('mgr.login.index');
    }


}
