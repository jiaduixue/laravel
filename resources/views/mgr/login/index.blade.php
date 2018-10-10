<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OurMall.com - 登录后台管理系统</title>
    <meta name="author" content="pampersdry.info">
    <meta name="description" content="Adminre is a clean and flat admin theme build with Slim framework and Twig template engine.">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('mgr/theme/library/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mgr/theme/stylesheet/layout.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mgr/theme/stylesheet/uielement.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/icons/iconfont/style.css') }}">
    <script src="{{ URL::asset('mgr/theme/library/modernizr/js/modernizr.min.js') }}"></script>
</head>
<body class="login-page">
<section id="main" role="main">
    <div class="login-header register">
        <img src="//global.ourmall.com/image/logo_180.png" title="OurMall">
        <h3 class="semibold text-primary mb0">后台管理系统</h3>
    </div>
    <section class="container">
        <div class="loginform">
            <form class="panel" name="form-login">
                <div class="panel-body">
                    <p class="semibold text-muted">欢迎登录管理后台！请使用帐号密码登录系统</p>
                    <div class="form-group">
                        <div class="form-stack has-icon pull-left">
                            <input name="username" type="text" class="form-control input-lg" data-parsley-error-message="请正确填写帐号" data-parsley-errors-container="#error-container" data-parsley-required>
                            <span class="form-control-icon"><i class="ico-user2 mr5"></i>用户名</span>
                        </div>
                        <div class="form-stack has-icon pull-left">
                            <input name="password" type="password" class="form-control input-lg" data-parsley-error-message="请正确填写密码" data-parsley-errors-container="#error-container" data-parsley-required>
                            <span class="form-control-icon"><i class="ico-asterisk mr5"></i>密码</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="checkbox" name="agree" id="agree" value="1">
                                <label for="agree">&nbsp;&nbsp;记住我</label>
                            </div>
                        </div>
                    </div>
                    <div id="error-container"class="mb15"></div>
                    <div class="form-group nm">
                        <button type="submit" class="btn btn-block btn-lg btn-success">登录<i class="ico-external-link"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</section>
<span style="display:none;">{{ $_SERVER['SERVER_ADDR'] }}</span>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/library/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/library/jquery/js/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/library/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/library/core/js/core.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/plugins/sparkline/js/jquery.sparkline.min.js') }}"></script><!-- will be use globaly as a summary on sidebar menu -->
<script type="text/javascript" src="{{ URL::asset('mgr/theme/javascript/app.min.js') }}"></script>

<script src="{{ URL::asset('mgr/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/plugins/parsley/js/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('mgr/theme/plugins/bootbox/js/bootbox.min.js') }}"></script>
<script type="text/javascript">
    $(function () {
        var $form    = $("form[name=form-login]");
        $form.on("click", "button[type=submit]", function (e) {
            var $this = $(this);
            if ($form.parsley().validate()) {
                $this.prop("disabled", true);
                $.ajax({
                    type: "POST",
                    url: "{{ route('mgrLoginCheck')}}",
                    data: $form.serialize() + '&_token={{csrf_token()}}',
                    dataType: 'json',
                    success: function(r){
                        if(r.success) {
                            NProgress.start();
                            window.location.href = '{{ route('mgrMain') }}';
                        } else {
                            $this.prop("disabled", false);
                            $('#error-container').html(r.message);
                        }
                    }
                });
            } else {
                $form
                    .removeClass("animation animating shake")
                    .addClass("animation animating shake")
                    .one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                        $(this).removeClass("animation animating shake");
                    });
            }
            e.preventDefault();
        });

        //注册条款，超出滚动显示
        $('#registerClause .registerclause').slimScroll({
            height: '300px',
            railVisible: true,
            alwaysVisible: true
        });
    });
</script>
</body>
</html>