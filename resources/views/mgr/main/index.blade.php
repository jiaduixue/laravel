<!-- 文件保存于 resources/views/mgr/main/index.blade.php -->

@extends('mgr.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent


@endsection

@section('content')
    <section id="main" role="main">
        <div class="container-fluid">
            <div class="mainbanner" style="height:270px;">
                <div class="mask_node">
                    <div class="node saveworry"><span>省心</span></div>
                    <div class="node safety"><span>安全</span></div>
                    <div class="node efficient"><span>高效</span></div>
                    <div class="node simple"><span>易用</span></div>
                </div>
                <h3>欢迎使用OurMall</h3>
                <ul class="feature">
                    <li><strong>省心</strong>只要能上网就能使用，无须专人维护</li>
                    <li><strong>安全</strong>7×24小时服务器运维监控，数据随时备份</li>
                    <li><strong>高效</strong>多渠道订单统一收订，业务处理自动化</li>
                    <li><strong>专业</strong>专业机房及云端数据存储，专业运维保证数据安全可靠</li>
                    <li><strong>易用</strong>人性化操作，普通员工也能迅速上手</li>
                </ul>
                <div class="mask_disc"></div>
                <div class="mask_box"></div>
            </div>
        </div>
        <a href="#" class="totop animation" data-toggle="waypoints totop" data-marker="#main" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="-50%"><i class="ico-angle-up"></i></a>
    </section>
@endsection