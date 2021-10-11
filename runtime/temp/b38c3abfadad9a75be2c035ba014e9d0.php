<?php /*a:3:{s:71:"/www/wwwroot/love.tongbayun.com/template/black/cn/invitation/index.html";i:1633525550;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico">
    <title><?php echo htmlentities($meta['title']); ?></title>
    <meta name="description"  content="<?php echo htmlentities($meta['description']); ?>">
    <meta name="keywords"  content="<?php echo htmlentities($meta['keywords']); ?>">

	<!-- 引入css -->
    <link rel="stylesheet" type="text/css" href="/static/home/cn/css/black.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/layui@2.6.8/dist/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/cn/css/funnyNewsTicker.css">
    <link rel="stylesheet" type="text/css" href="/static/home/cn/css/swiper-bundle.min.css">
    <!-- 引入js -->
    <script type="text/javascript" src="/static/home/cn/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/static/common/qiniu-js-sdk/dist/qiniu.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/layui@2.6.8/dist/layui.js"></script>
    <script type="text/javascript" src="/static/common/smart/smart.js?v=20190309"></script>
    <script type="text/javascript" src="/static/home/cn/js/funnyNewsTicker.js"></script>
    <script type="text/javascript" src="/static/home/cn/js/home.js"></script>
    <script type="text/javascript" src="/static/home/cn/js/swiper-bundle.min.js"> </script>
    <script type="text/javascript" src="/static/home/cn/js/snowfall.jquery.js"> </script>
</head>
<body>

<div class="take" style="color: #fff">
    <header>
        <h1>摆摊赚钱</h1>
    </header>
    <div class="text"><?php echo $invitation_content; ?></div>
    <div class="content">
        <div class="layui-row">

            <fieldset class="layui-elem-field">
                <legend>账号<a href="../invitation/login_out" style="color: #fff">【退出登录】</a></legend>
                <div class="layui-field-box" style="text-align: center;font-weight: 600;font-size: 1rem;">
                    【id:<?php echo htmlentities($info['id']); ?>】<?php echo htmlentities($info['user']); ?>
                </div>
            </fieldset>

            <div class="layui-bg-gray" style="padding: 30px;border-radius: 1rem;">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6 layui-col-xs6">
                        <div class="layui-card">
                            <div class="layui-card-header">余额 <span id="tixian">[提现]</span></div>
                            <div class="layui-card-body">
                                <b class="surplus_money"><?php echo htmlentities($info['surplus_money']); ?></b>元
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md6 layui-col-xs6">
                        <div class="layui-card">
                            <div class="layui-card-header">已提 <span id="jilu">[记录]</span></div>
                            <div class="layui-card-body">
                                <b><?php echo htmlentities($info['already_money']); ?></b>元
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-col-xs12">


                <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                    <ul class="layui-tab-title">
                        <?php if(is_array($imgs) || $imgs instanceof \think\Collection || $imgs instanceof \think\Paginator): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <li>海报<?php echo htmlentities($key+1); ?></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="layui-tab-content">
                        <?php if(is_array($imgs) || $imgs instanceof \think\Collection || $imgs instanceof \think\Paginator): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <div class="layui-tab-item content-poster<?php echo htmlentities($key+1); ?> ">
                            <img src="<?php echo htmlentities($v); ?>" alt="" width="100%">
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>

            <br >
            <div class="layui-form-item">
                <div class="layui-input-block" style="margin: 0px;text-align: center;">
                    <a href="../stay" class="layui-btn layui-btn-radius layui-btn-normal">留一个</a>
                    <a href="../take" class="layui-btn layui-btn-radius layui-btn-warm">抽一个</a>
                    <a href="../index" class="layui-btn layui-btn-radius">回主页</a>
                </div>
            </div>
            <script>
                $(function () {
                    $(".layui-tab-title li:eq(0)").addClass("layui-this");
                    $(".content-poster1").addClass("layui-show");
                    layui.use(['layer'], function(){
                        var layer = layui.layer;
                        if("<?php echo htmlentities($invitation); ?>" == "no"){
                            layer.ready(function(){
                                layer.confirm('<?php echo htmlentities($invitation_alert); ?>', {
                                    btn: ['开通分销','退出']
                                }, function(){
                                    window.location.href = '../invitation/order';
                                },function (){
                                    window.location.href = '../invitation/login_out';
                                });
                            });
                        }

                        $("#jilu").click(function () {
                            $.ajax({
                                url: '/invitation/tixianjilu',
                                type: 'post',
                                data: {},
                                dataType: "json",
                                success: function(rst){
                                     html = `<table width="98%" border="1" style="text-align: center;margin: 1%;">
                                            <tr>
                                                <td>提现金额</td>
                                                <td>支付宝账号</td>
                                                <td>支付宝姓名</td>
                                                <td>状态</td>
                                                <td>申请时间</td>
                                            </tr>`;

                                    $.each(rst.data,function(i,j){
                                         html += `<tr>
                                                    <td>${j.surplus_money}元</td>
                                                    <td>${j.ali_pay}</td>
                                                    <td>${j.ali_name}</td>
                                                    <td>${j.status}</td>
                                                    <td>${j.create_time}</td>
                                                </tr>`;
                                        });
                                    html += `</table>`;

                                    //页面层-自定义
                                    layer.ready(function(){
                                        layer.open({
                                            type: 1,
                                            title: false,
                                            closeBtn: 0,
                                            shadeClose: true,
                                            skin: 'yourclass',
                                            content: html
                                        });
                                    });
                                }
                            });
                        });

                        $("#tixian").click(function () {
                            layer.prompt({title:'提现申请'},function(value){
                                var ali_pay = $("#ali_pay").val();
                                var ali_name = $("#ali_name").val();
                                var surplus_money = $(".surplus_money").text();
                                if(parseFloat(value)>parseFloat(surplus_money)){
                                    layer.msg("提现金额不足！");
                                    return false;
                                }
                                $.ajax({
                                    url: '/invitation/tixian',
                                    type: 'post',
                                    data: {surplus_money:value,ali_pay:ali_pay,ali_name:ali_name},
                                    dataType: "json",
                                    success: function(rst){
                                        layer.msg(rst.msg);
                                        if(rst.code==1){
                                            window.location.reload()
                                        }
                                    }
                                });
                            });
                            $(".layui-layer-content .layui-layer-input").attr("placeholder","输入提现金额");
                            $(".layui-layer-content").append("<br><input type=\"text\" id= \"ali_pay\" class=\"layui-input\" placeholder=\"请输入支付宝账号\"/>");
                            $(".layui-layer-content").append("<br><input type=\"text\" id= \"ali_name\" class=\"layui-input\" placeholder=\"请输入支付宝姓名\"/>");
                        })
                    });
                });
            </script>
        </div>
    </div>
</div>
<div style="display: none">
    <?php echo $siteinfo['tongji']; ?>
</div>
</body>
</html>