<?php /*a:3:{s:71:"/www/wwwroot/love.tongbayun.com/template/black/cn/index/invitation.html";i:1633358016;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
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
        <h1>推广海报</h1>
    </header>
    <div class="text">
        <p>保存下方海报，邀请其他人扫码参与活动，邀请人就可额外获得抽一次机会，每日不限次数，可累计！</p>
    </div>
    <div class="content">
        <div class="layui-row">

            <fieldset class="layui-elem-field">
                <legend>微信号码</legend>
                <div class="layui-field-box" style="text-align: center;font-weight: 600;font-size: 1rem;">
                    <?php echo htmlentities($info['wechat']); ?>
                </div>
            </fieldset>

            <div class="layui-bg-gray" style="padding: 30px;border-radius: 1rem;">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-md6 layui-col-xs6">
                        <div class="layui-card">
                            <div class="layui-card-header">总邀请人数</div>
                            <div class="layui-card-body">
                                <?php echo htmlentities($info['invitation_total']); ?>人
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-md6 layui-col-xs6">
                        <div class="layui-card">
                            <div class="layui-card-header">剩余抽次数</div>
                            <div class="layui-card-body">
                                <?php echo htmlentities($info['invitation_num']); ?>次
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
                                //询问框
                                layer.alert('您还没有参与"抽一个"活动，暂不支持查看海报，请参与活动后在来！', {closeBtn: 0,icon:0}, function(){
                                    window.location.href = '../take';
                                });
                            });
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