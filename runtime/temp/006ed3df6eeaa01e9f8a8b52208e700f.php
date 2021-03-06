<?php /*a:1:{s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/login/index.html";i:1633531198;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>后台管理中心登陆</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/static/admin/js/bootstrap/css/bootstrap.min.css?v=3.3.7" rel="stylesheet" />
        <link href="/static/admin/css/font-awesome/css/font-awesome.min.css?v=4.7.0" rel="stylesheet" />
        <link href="/static/admin/css/animate.min.css" rel="stylesheet" />
        <link href="/static/admin/css/login.css" rel="stylesheet" />
    </head>
    <body class="gray-bg">
        <div class="login-wrap-w">
            <div class="login-wrap">
                <div class="login-logo">
                    后台管理中心
                </div>
                <form id="loginForm" action="<?php echo url('dologin'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control J-input" autocomplete="off" name="account" placeholder="" required="">
                        <div class="form-tit"><span>*</span>用户名</div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control J-input J-pwd" autocomplete="off"  name="pwd" placeholder="" required="">
                        <div class="form-tit"><span>*</span>密码</div>
                    </div>
                    <?php if(!(empty($google_authenticator) || (($google_authenticator instanceof \think\Collection || $google_authenticator instanceof \think\Paginator ) && $google_authenticator->isEmpty()))): ?>
                    <div class="form-group">
                        <input type="password" class="form-control J-input J-pwd" autocomplete="off"  name="oneCode" placeholder="" required="">
                        <div class="form-tit"><span>*</span>谷歌验证器</div>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="text" class="form-control verify-input J-input" name="verify" placeholder="" required="">
                        <div class="form-tit"><span>*</span>验证码</div>
                        <img src="<?php echo captcha_src(); ?>" alt="" class="verify-img" id="verifyImg" title="点击刷新"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">登 录</button>
                </form>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="popInfo">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">系统提示</h4>
                        </div>
                        <div class="modal-body" id="popInfoBody"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-warp-bot"><a href="" target="_blank">技术支持：聚散终有时 </a></div>

        <script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
        <script src="/static/admin/js/bootstrap/js/bootstrap.min.js?v=3.3.7"></script>
        <script src="/static/admin/js/login.js?v=3.3.7"></script>
        <script>
            $(function(){
                var verifyImg = document.getElementById("verifyImg");
                var url = verifyImg.src;
                verifyImg.onclick = function(){
                    this.src = url + "?t=" + Math.random();
                };
                $('#loginForm').on('submit', function() {
                    $.ajax({
                        type: "POST",
                        url: this.action,
                        data: $(this).serialize(),
                        dataType: "json",
                        error: function(){
                            verifyImg.click();
                            $("#popInfoBody").text("页面出错，请刷新后再试");
                            $('#popInfo').modal("show");
                        },
                        success: function(rst){
                            if (rst.code === 0) {
                                verifyImg.click();
                                $("#popInfoBody").text(rst.msg);
                                $('#popInfo').modal("show");
                            } else {
                                window.location.href = rst.url;
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>
