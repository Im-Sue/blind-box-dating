<?php /*a:3:{s:64:"/www/wwwroot/love.tongbayun.com/template/black/cn/news/info.html";i:1633269934;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
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
    <h2 style="color: #fff"><?php echo htmlentities($article['info']['title']); ?></h2>
    <hr>
    <div style="text-align: center">
        <span class="layui-badge"><?php echo htmlentities($article['info']['author']); ?></span>
        <span class="layui-badge layui-bg-blue"><?php echo htmlentities($category['cate_name_cn']); ?></span>
        <span class="layui-badge layui-bg-orange"><?php echo htmlentities(date("Y-m-d",!is_numeric($article['publish_time'])? strtotime($article['publish_time']) : $article['publish_time'])); ?></span>
    </div><br>

    <div>
        <div class="layui-row layui-col-space15">
            <div class="layui-col-lg12">
                <div class="layui-panel" style="padding: 5px">
                    <?php echo $article['info']['content']; ?>
                </div>
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