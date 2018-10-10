<!-- 文件保存于 resources/views/mgr/customer/index.blade.php -->

@extends('mgr.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent


@endsection

@section('content')
    <section id="main" role="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-panel large-list-search">
                        <form name="frmQuickSearch" id="frmQuickSearch">
                            <div class="input-group">
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr5">买家用户名</span>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" name="username" id="username" value="{{request()->input("username")}}" placeholder="请输入买家用户名">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr5">买家邮箱</span>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" name="email" id="email" value="{{request()->input("email")}}" placeholder="请输入买家邮箱">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr5">推荐人</span>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" name="channelId" id="email" value="{{request()->input("channelId")}}" placeholder="请输入推荐人编号">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr3">活跃属性</span>
                                            </button>
                                        </div>
                                        <select class="form-control" name="activeProperty" id="activeProperty">
                                            <option value="">全部来源</option>
                                            {{$CUSTOMER_ACTIVE_PROPERTY_OPTION}}
                                        </select>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr3">消费属性</span>
                                            </button>
                                        </div>
                                        <select class="form-control" name="consumeProperty" id="consumeProperty">
                                            <option value="">全部来源</option>
                                            {{$CUSTOMER_CONSUME_PROPERTY_OPTION}}
                                        </select>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default " data-toggle="dropdown">
                                                <span class="text pr3">来源</span>
                                            </button>
                                        </div>
                                        <select class="form-control" name="source" id="source">
                                            <option value="">全部来源</option>
                                            {{$CUSTOMER_SOURCE_OPTION}}
                                        </select>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-from" name="dateFrom" placeholder="注册起始日期" value="{{request()->input("dateFrom")}}">
                                        <span class="input-group-addon" style="border-width:1px 0;">至</span>
                                        <input type="text" class="form-control" id="datepicker-to" name="dateTo" placeholder="注册截止日期" value="{{request()->input("dateTo")}}">
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" onclick="quickSearch()"><i class="ico-search mr5"></i>搜索</button>
                                </div>
                                <div class="btn-group dis-none">
                                    <button type="button" class="btn btn-warning"><i class="ico-rotate mr5"></i>清除结果</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel panel-default nm">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-list mr5"></i>买家管理</h3>
                        </div>

                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>买家编号</th>
                                <th>买家名称</th>
                                <th>推荐人</th>
                                <th>活跃属性</th>
                                <th>销售属性</th>
                                <th>来源</th>
                                <th>注册时间</th>
                                <th>最近访问时间</th>
                                <th>登录次数</th>
                                <th class="text-right">有效订单数</th>
                                <th class="text-right">有效交易额</th>
                                <th class="text-right">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)


                            <tr>
                                <td><a href="">{{$customer->id}}</a></td>
                                <td>{{$customer->customerName}} </td>
                                <td><a class="text-danger" href="{{$customer->channelUrl}}" target="_blank">{{$customer->channelId?$customer->channelId:''}}</a></td>
                                <td>{{$customer->activeProperty}}</td>
                                <td>{{$customer->consumeProperty}}</td>
                                <td>{{$customer->source}}</td>
                                <td>{{substr($customer->timeCreated, 0, 16)}}</td>

                                <td>{{$customer->recentVisittime}}</td>
                                <td>{{$customer->loginTimes}}</td>
                                <td class="text-right">{{$customer->cumulationOrderCount, 0}}</td>
                                <td class="text-right">{{round($customer->cumulationAmount,2)}}</td>
                                <td class="text-right"><div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" onClick="window.location.href='{{route('mgrCustomerDetail',['id'=>$customer->id])}}'">详情</button>
                                    </div></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="panel-footer table-control nm">

                            <div class="panel-toolbar page-nav pull-right"> {{ $customers->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <script language="javascript" type="text/javascript">
        $(document).ready(function(e) {
            $("#datepicker-from").datepicker({
                numberOfMonths: 1,
            });
            $("#datepicker-to").datepicker({
                numberOfMonths: 1,
                onClose: function (selectedDate) {
                    $("#datepicker-from").datepicker("option", "maxDate", selectedDate);
                    if($("#datepicker-from").val().length==0)$("#datepicker-from").val(selectedDate);
                }
            });

        });
        function quickSearch() {
            window.location.href = '{{ route("mgrCustomer") }}&' + $('#frmQuickSearch').serialize();
        }

        function addChannel(id){
            $('.loading_large').fadeIn();
            $.ajax({
                url:"{{route('mgrCustomer')}}",
                type:'post',
                dataType:'json',
                success:function (data) {
                    $('.loading_large').fadeOut();
                    if(data.success) {
                        showInfo('操作成功');
                        window.setTimeout('window.location.reload()', 2000);
                    }else {
                        $('.loading_large').fadeOut();
                        showInfo(data.message);
                    }
                }
            });
        }
    </script>

@endsection