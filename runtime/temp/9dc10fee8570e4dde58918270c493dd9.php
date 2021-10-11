<?php /*a:3:{s:66:"/www/wwwroot/love.tongbayun.com/template/white/cn/index/order.html";i:1633525136;s:68:"/www/wwwroot/love.tongbayun.com/template/white/cn/common/header.html";i:1633418254;s:68:"/www/wwwroot/love.tongbayun.com/template/white/cn/common/footer.html";i:1631529292;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="/static/home/cn/css/white.css">
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
    <style>
        /* 设置全局变量属性 */
        :root {
            --text-color: hsl(0 95% 60%);
            --bg-color: hsla(0, 0%, 100%, 0);
            --bg-size: 200px;
        }

        .bg {
            display: grid;
            place-items: center;
            place-content: center;
            grid-template-areas: "body";
            overflow: hidden;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        .bg::before {
            --size: 150vmax;
            grid-area: body;
            content: "";
            inline-size: var(--size);
            block-size: var(--size);
            background-image: url("https://www.jq22.com/newjs/foot-pattern.svg");
            background-size: var(--bg-size);
            background-repeat: repeat;
            transform: rotate(45deg);
            opacity: 0.25;
            animation: bg 10s linear infinite;
        }

        /* 背景图平移动画 */
        @keyframes bg {
            to {
                background-position: 0 calc(var(--bg-size) * -1);
            }
        }
    </style>
</head>
<body>

<div class="bg"></div>
<div class="index">
    <ul class="layui-nav">
        <li class="layui-nav-item"><a href="JavaScript:void(0)" id="invitation">摆摊赚钱</a></li>
        <li class="layui-nav-item"><a href="/index">抽个对象</a></li>
        <li class="layui-nav-item layui-this">
            <a href="javascript:;">更多内容</a>
            <dl class="layui-nav-child">
                <dd><a href="/about">常见问题</a></dd>
                <dd><a href="/news/919">网站条款</a></dd>
                <dd><a href="javascript:;">我的订单</a></dd>
            </dl>
        </li>
    </ul>
    <div class="text" style="color: #fff">
        <p>请输入28位的“交易单号”或19位的“订单号”查询您的【留一个】或【抽一个】订单，免费订单暂不支持查询，交易单号位置见下图/订单号在您提交订单时显示！</p>
        <p style="color: yellow">如果“交易单号”查不到，请使用19位的“订单号”进行查询</p>
    </div>
    <div class="content">
        <div class="layui-row">
                <form class="layui-form layui-form-pane" action="">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><span class="red">* </span>交易单号</label>
                        <div class="layui-input-block">
                            <input type="text" name="order_sn" autocomplete="off" value="<?php echo htmlentities($order_sn); ?>" placeholder="19位订单号或28位交易单号" class="layui-input" lay-verify="required|order">
                        </div>
                    </div>
                    <div style="text-align: center;margin-bottom: 15px;"><img src="/static/home/cn/image/order.jpg" style="text-align: center;max-width: 500px;" width="100%"></div>
                    <div class="layui-form-item">
                        <div class="layui-input-block" style="margin: 0px;text-align: center;">
                            <button type="button" class="layui-btn layui-btn-radius layui-btn-warm" lay-submit lay-filter="order_from" id="order_from" style="background-color: #f79191">查询</button>
                            <a href="../index" class="layui-btn layui-btn-radius">回主页</a>
                        </div>
                    </div>
                </form>


            <script>
                $(function () {
                    layui.use(['form','layer'], function () {
                        var form=layui.form;
                        var layer=layui.layer;

                        form.verify({
                            order: [
                                /^[0-9]{19}/,'请输入19位订单号或28位交易单号！'
                            ]
                        });

                        // 监听提交按钮
                        form.on('submit(order_from)', function(data){
                            layer.load();
                            $.ajax({
                                url:"/order_sava",
                                type:"POST",
                                dataType: "json",
                                data:data.field,
                                success: function(data){
                                    if(data.code==0){
                                        layer.msg(data.msg);
                                    }
                                    if(data.code==1){
                                        if(data.data.type==1){
                                            //询问框
                                            layer.ready(function(){
                                                layer.confirm("您已成功提交微信！", {
                                                    btn: ['去抽一个']
                                                }, function(){
                                                    window.location.href = '../take';
                                                });
                                            });
                                        }

                                        if(data.data.type==4){
                                            //询问框
                                            layer.ready(function(){
                                                layer.confirm("您已成功开通！", {
                                                    btn: ['去推广']
                                                }, function(){
                                                    window.location.href = '../invitation';
                                                });
                                            });
                                        }

                                        if(data.data.type==2 || data.data.type==3){
                                            var html = `<table width="98%" style="text-align: center;margin: 1%;">
                        <tr>
                            <td rowspan="4" style="text-align: center"><img style="width: 100px;" src="${data['data']['headimg']}" alt=""></td>
                            <td><b>${data['data']['province']} ${data['data']['city']}</b></td>
                        </tr>
                        <tr>
                            <td><b>${data['data']['age']}岁  ${data['data']['sex']} ${data['data']['constellation']}</b></td>
                        </tr>
                        <tr>
                            <td><b>${data['data']['content']}</b></td>
                        </tr>
                        <tr>
                            <td><b style="color: red;">微信号：${data['data']['wechat']}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 5px;color: red;"><b>添加好友时，请备注来自脱单盲盒！</b></td>
                        </tr>
                    </table>`;
                                            //页面层
                                            layer.ready(function(){
                                                layer.open({
                                                    type: 1,
                                                    title:'查询成功',
                                                    skin: 'layui-layer-rim', //加上边框
                                                    area: ['80%', '50%'], //宽高
                                                    content: html
                                                });
                                            });
                                        }

                                    }
                                    layer.closeAll('loading');
                                }
                            })
                            return false;
                        });

                        if("<?php echo htmlentities($order_sn); ?>" != ""){
                            $("#order_from").trigger("click");//模拟执行id=a的事件
                        }

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