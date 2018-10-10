@include('mgr.header',['title'=>'Mall'])
<style type="text/css">
    .celebrity-info-wrap{ list-style: none;}
    .celebrity-info-wrap>li{ border:1px #ddd solid; padding: 15px; margin-left: -1px; background: #fff; }
    .celebrity-info-wrap>li iframe{ border: 1px #eee solid; width: 100%; min-height: 480px; margin-bottom: 15px;}
    .celebrity-info-wrap>li .form-group{ border-bottom: 1px #f0f0f0 solid; padding-bottom: 7px;}
    .tab-content .tab-wrap{ border:1px #ddd solid; border-top: none; background: #fff; padding: 15px;}
    .p-audit header{ border-bottom: 1px #ddd solid; padding-bottom: 15px;}
    .p-audit article{ background: #fff; padding-top: 15px; padding-bottom: 15px;}
    .p-audit .img-wrap{ display: table-cell; width: 200px; height: 200px; max-width: 200px; max-height: 200px; text-align: center; vertical-align: middle;
        border:1px #ddd solid;}
    .p-audit .img-wrap img{ max-width: 200px; max-height: 200px;}
    .p-audit .img-action{ max-width: 200px; margin-top: 5px;}
    .p-audit .preview-list{ margin-top: 15px; list-style: none;}
    .p-audit .preview-list>li{ float: left; margin-right: 15px;}
    .p-audit .preview-list>li .img-wrap:hover{ border-color: #999; cursor: pointer;}
    .p-audit .preview-list>li.active .img-wrap{ border-color: #00a5d2;}
    .p-audit .preview-list>li.active [data-action=setMain]{ color: #ddd !important;}
    @media (min-width: 992px)
        .modal-lg {
            width: 100%;
        }
        #tagsActive-active{word-break:break-all;}
</style>
<script type="text/javascript">
    showLeftTime();
    function getLocalTime(i)
    {
        //参数i为时区值数字，比如北京为东八区则输进8,西5输入-5
        if (typeof i !== 'number') return;
        var d = new Date();
        //得到1970年一月一日到现在的秒数
        var len = d.getTime();
        //本地时间与GMT时间的时间偏移差
        var offset = d.getTimezoneOffset() * 60000;
        //得到现在的格林尼治时间
        var utcTime = len + offset;
        return new Date(utcTime + 3600000 * i);
    }
    function showLeftTime()
    {
        var now=getLocalTime(-7);
        var year=now.getFullYear(); var month=now.getMonth()+1; var day=now.getDate();
        var hours=now.getHours(); var minutes=now.getMinutes(); var seconds=now.getSeconds();
        var d=now.getDay();
        var week = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");

        var time_value = "";

        month = ((month < 10) ? "0" : "") + month;
        day = ((day < 10) ? "0" : "") + day;
        time_value += year+"-"+month+"-"+day+" ";
        time_value += ((hours < 10) ? "0" : "") + hours;
        time_value += ((minutes < 10) ? ":0" : ":") + minutes;
        time_value += ((seconds < 10) ? ":0" : ":") + seconds;
        $('#aCurrentTime').html("("+week[d]+") "+time_value);
        setTimeout(showLeftTime, 1000);
    }
</script>

<body class="header-minimized">
<header id="header" class="navbar navbar-fixed-top">
    <div class="navbar-toolbar clearfix">
        <ul class="nav navbar-nav navbar-left">
            <li class="hidden-xs hidden-sm">
                <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" >
                    <span class="meta" data-placement="bottom" data-toggle="tooltip" data-container="body" data-original-title="收缩/展开左侧导航"><span class="icon"></span></span>
                </a>
            </li>
            <li class="navigation">
                <a href="index.php"><i class="ico-home mr5"></i>首页</a>
                <!--					<span class="current">员工管理</span>-->
                <!--					<span class="current">员工详情</span>-->
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <span style="position: absolute; text-align: center; margin-right: 20px; float: right; right:100px; top: 5px;"><a href="javascript:;" id="aCurrentTime"></a></span>
            <li class="dropdown profile">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="ico-cog4 mr5"></i>用户设置<span class="arrow pl5"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="account.php"><span class="icon"><i class="ico-user2 mr5"></i></span>个人资料管理</a></li>
                    <li><a href="#changePS" data-toggle="modal"><span class="icon"><i class="ico-key2 mr5"></i></span>修改密码</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('mgrMainDoLogout') }}"><span class="icon"><i class="ico-exit mr5"></i></span>退出登录</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<div id="changePS" class="modal fade">
    <div class="modal-dialog">
        <form parsley-validate="" action="" class="modal-content form-horizontal form-bordered advance-search">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <div class="ico-key2" style="font-size:30px;"></div>
                    <h3 class="semibold modal-title mb5">修改登录密码</h3>
                    <p class="text-danger mb0">请输入8-20位字符，必须用数字，字母，符号两种组合，如果不修改密码请勿填写</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- panel body -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">旧密码</label>
                                <div class="col-sm-6">
                                    <input type="password" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">新密码</label>
                                <div class="col-sm-6">
                                    <input type="password" value="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">确认新密码</label>
                                <div class="col-sm-6">
                                    <input type="password" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div>
<aside class="sidebar sidebar-left sidebar-menu">
    <section class="content">
        <header class="logo-env" style="background-image:url({{URL::asset('global/image/logo_90.png')}})"><h1 class="logo"></h1></header>
        <div class="account">
            <div class="accont-photo" style="background-image:url(theme/image/avatar/avatar6.jpg)">
            </div>
            <div class="accontdetail">
                <p><strong title="admin">{{ $memberInfo['username'] }}</strong></p>
                <p><a href="{{ route('mgrMessage')}}">您有<strong id="headerMessageUnReadCnt" class="text-danger pl5 pr5">0</strong>条未读消息</a></p>
            </div>
        </div><br />
        @section('sidebar')
            @include('mgr.menu')
        @show
    </section>
</aside>



{{--  头部内容   --}}



@yield('content')


{{--  页面尾部  --}}
<a href="#" class="totop animation" data-toggle="waypoints totop" data-marker="#main" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="-50%"><i class="ico-angle-up"></i></a>
<div style="display:none" class="loading_large">
    <span style="display:inline;" class="loading_text"><i class="ico-refresh"></i>数据处理中，请稍后...</span>
</div>
<span style="display:none;">{{ $_SERVER['SERVER_ADDR'] }}</span>
</body>
</html>
<script language="javascript" type="text/javascript">
    function setRowsPerPage(num) {
        $.ajax({
            url:"{{ route('mgrMainSetRowsPerPage')}}",
            type:"post",
            data:'&mod={{ Request::path() }}&rowsPerPage=' + num,
            success:function(r) {
                if(r) {
                    window.location.reload();
                }
            }
        });
    }
</script>
@yield('footer')
