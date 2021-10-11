<?php /*a:3:{s:66:"/www/wwwroot/love.tongbayun.com/template/black/cn/index/about.html";i:1633265250;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
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

<div style="margin: 5% auto;width: 90%">
    <!--<blockquote class="layui-elem-quote">这个貌似不用多介绍，因为你已经在太多的地方都看到</blockquote>-->
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend style="color: #fff">常见问题</legend>
    </fieldset>
    <div class="layui-collapse" lay-accordion="">
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">如何联系客服？</h2>
            <div class="layui-colla-content layui-show">
                <p>客服微信：<?php echo htmlentities($info['wechat']); ?></p>
                <p>电子邮箱：<?php echo htmlentities($info['email']); ?></p>
                <p>使用问题、投诉建议、微商/虚假号码举报、涉黄涉暴、订单交易纠纷等网站相关问题请联系我处理；</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">可以查询我的历史留/抽记录吗？</h2>
            <div class="layui-colla-content">
                <p>可以，通过首页"订单查询"页面，输入28位的“交易单号”查询您的【留一个】或【抽一个】订单，免费订单暂不支持查询！</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">会多次抽到同一个人吗？</h2>
            <div class="layui-colla-content">
                <p>不会，系统会根据您所提交的信息进行随机匹配，同时为您排除您已经抽到的微信号码；</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">支持那些支付方式？</h2>
            <div class="layui-colla-content">
                <p>目前仅支持微信支付</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">为什么提示“请不要频繁提交”？</h2>
            <div class="layui-colla-content">
                <p>您的IP地址在一天内提交超过3条微信号，就会提示您不要频繁提交哦，请不要进行非法操作，否则会封IP禁止访问；</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">为什么提示“今天已经抽过，明天在来”？</h2>
            <div class="layui-colla-content">
                <p>今天您的"微信号码"或"和您同网络的其他人"已经抽过了，如果您没有抽过可以使用流量进行抽取；</p>
                <p>注意：通过海报邀请获得的次数，不受IP限制；</p>
                <p>注意：同wifi下上网为同一IP，流量上网单人单IP；</p>
            </div>
        </div>
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">为什么会获取到我的IP地址？什么用途？</h2>
            <div class="layui-colla-content">
                <p>IP地址是每个网络的唯一标识，由运营商随机分配。IP地址不会泄露您的任何个人隐私。记录用户IP地址属于合法范围内；</p>
                <p>获取IP主要用途是防止非法用户恶意提交，和非法攻击，给服务器、网站造成不良影响；</p>
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

</div>

<script>
    layui.use(['dropdown', 'util', 'layer'], function(){
        var element = layui.element;
        var layer = layui.layer;

        //监听折叠
        element.on('collapse(test)', function(data){
            layer.msg('展开状态：'+ data.show);
        });
    });
</script>

<div style="display: none">
    <?php echo $siteinfo['tongji']; ?>
</div>
</body>
</html>