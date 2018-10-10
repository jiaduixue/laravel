<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Controllers\mgr\BaseMgrController;
use App\Models\Customer;
use App\Models\Channel;
use App\Helper\Common;
use Illuminate\Http\Request;
class CustomerController extends BaseMgrController
{

    /**
     * @author yoga
     * @content 后台主页
     * @return void
     */
    public function index()
    {
        //$memberInfo = session('MEMBER_INFO');
        $CUSTOMER_ACTIVE_PROPERTY_OPTION = Common::genOptions(Config('constant.CUSTOMER_ACTIVE_PROPERTY'), intval(request()->input('activeProperty')));
        $CUSTOMER_CONSUME_PROPERTY_OPTION = Common::genOptions(Config('constant.CUSTOMER_CONSUME_PROPERTY'), (int)request()->input('consumeProperty'));
        $CUSTOMER_SOURCE_OPTION = Common::genOptions(Config('constant.CUSTOMER_SOURCE'), (int)request()->input('source'));
        $memberInfo = session('MEMBER_INFO');
        $where = [];
        $customers = Customer::where($where)
            //->orderBy('name', 'desc')
            ->paginate(10);
        $CUSTOMER_ACTIVE_PROPERTY_ARRAY = Config('constant.CUSTOMER_ACTIVE_PROPERTY');
        $CUSTOMER_CONSUME_PROPERTY_ARRAY = Config('constant.CUSTOMER_CONSUME_PROPERTY');
        $CUSTOMER_SOURCE_ARRAY = Config('constant.CUSTOMER_SOURCE');
        $CUSTOMER_ACTIVE_PROPERTY_ARRAY[0] = '默认';
        $CUSTOMER_CONSUME_PROPERTY_ARRAY[0] = '默认';
        if($customers->total()>0) foreach($customers as $key=> $customer){

            $customers[$key]->customerName =$customer->firstName ? $customer->firstName.' '.$customer->lastName : '未填写';
            $customers[$key]->activeProperty = $CUSTOMER_ACTIVE_PROPERTY_ARRAY[$customer->activeProperty];
            $customers[$key]->consumeProperty = $CUSTOMER_CONSUME_PROPERTY_ARRAY[$customer->consumeProperty];
            $customers[$key]->source = $CUSTOMER_SOURCE_ARRAY[$customer->source];
            $channel = Channel::find($customer->channelId);
            $customers[$key]->channelUrl = $channel?route('mgrCustomerDetail',['id'=>$channel->id]):'javascript:;';


        }else{
            $customers = array();
        }
        return view('mgr.customer.index',['memberInfo'=>$memberInfo,'customers'=>$customers,'CUSTOMER_ACTIVE_PROPERTY_OPTION'=>$CUSTOMER_ACTIVE_PROPERTY_OPTION,'CUSTOMER_CONSUME_PROPERTY_OPTION'=>$CUSTOMER_CONSUME_PROPERTY_OPTION,'CUSTOMER_SOURCE_OPTION'=>$CUSTOMER_SOURCE_OPTION]);
    }
    /**
     * @author yoga
     * @content 用户详情页面
     * @return void
     */
    public function detail(Request $request){
        $mod = $request->input('mod');
        $rowsPerPage = $request->input('rowsPerPage');
        echo setcookie('PAGINATION_'.$mod, intval($rowsPerPage), strtotime('+1 year'));

    }

    public function setRowsPerPage(Request $request){
        $mod = $request->input('mod');
        $rowsPerPage = $request->input('rowsPerPage');
        echo setcookie('PAGINATION_'.$mod, intval($rowsPerPage), strtotime('+1 year'));

    }

}
