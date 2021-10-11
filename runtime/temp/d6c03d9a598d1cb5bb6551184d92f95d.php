<?php /*a:3:{s:65:"/www/wwwroot/love.tongbayun.com/template/home/cn/index/index.html";i:1632389028;s:67:"/www/wwwroot/love.tongbayun.com/template/home/cn/common/header.html";i:1632800314;s:67:"/www/wwwroot/love.tongbayun.com/template/home/cn/common/footer.html";i:1631529292;}*/ ?>
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
    <link rel="stylesheet" type="text/css" href="/static/home/cn/css/home.css">
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

<div class="index">
    <header>
        <h1><?php echo htmlentities($info['title']); ?></h1>
    </header>
    <div class="text"><?php echo $info['content']; ?></div>
    <script>
        $(document).snowfall('clear');
        $(document).snowfall({
            image: "/static/home/cn/image/huaban.png",
            flakeCount:10,
            minSize: 10,
            maxSize: 30
        });
    </script>
    <div class="content">
        <div class="layui-row">
            <!-- 幻灯片开始 -->
            <?php if(in_array((3), is_array($info['middleware'])?$info['middleware']:explode(',',$info['middleware']))): ?>
                <div class="layui-col-xs12" >
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php if(is_array($banner_kv) || $banner_kv instanceof \think\Collection || $banner_kv instanceof \think\Paginator): $i = 0; $__LIST__ = $banner_kv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <div class="swiper-slide"><a href="<?php echo htmlentities($v['link']); ?>"><img src="<?php echo htmlentities($v['image']); ?>" alt=""></a></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script>
                        new Swiper ('.swiper-container', {
                            direction: 'horizontal', // 垂直切换选项
                            loop: true, // 循环模式选项
                            grabCursor : true, //小手形状
                            effect : 'flip', //切换样式
                            pagination: {
                                el: '.swiper-pagination'
                            },
                            autoplay: {
                                delay: 3000,
                                disableOnInteraction: false
                            }
                        })
                    </script>
                </div>
            <?php endif; ?>
            <!-- 幻灯片结束 -->
            <div class="layui-col-xs6 nav-one">
                <a href="/stay">
                    <img src="/static/home/cn/image/img05.png" alt="" class="icon-nav">
                    <!--<i class="layui-icon layui-icon-release" style="font-size: 3rem; color: #1E9FFF;"></i>-->
                    <p>留一个</p>
                </a>
            </div>
            <div class="layui-col-xs6 nav-one">
                <a href="/take">
                    <img src="/static/home/cn/image/img06.png" alt="" class="icon-nav">
                    <!--<i class="layui-icon layui-icon-dialogue" style="font-size: 3rem; color: #1E9FFF;"></i>-->
                    <p>抽一个</p>
                </a>
            </div>

            <div class="layui-col-xs12 nav-two">
                <div class="layui-col-xs3">
                    <a href="/about">
                        <img src="/static/home/cn/image/img01.png" alt="">
                        <p>常见问题</p>
                    </a>
                </div>
                <div class="layui-col-xs3">
                    <a href="JavaScript:void(0)" id="invitation">
                        <img src="/static/home/cn/image/img02.png" alt="">
                        <p>推广海报</p>
                    </a>
                </div>
                <div class="layui-col-xs3">
                    <a href="/order">
                        <img src="/static/home/cn/image/img03.png" alt="">
                        <p>订单查询</p>
                    </a>
                </div>
                <div class="layui-col-xs3">
                    <a href="/">
                        <img src="/static/home/cn/image/img04.png" alt="">
                        <p>版本切换</p>
                    </a>
                </div>
            </div>

            <div class="layui-col-xs12">
                <p>现有数据<?php echo htmlentities($sex[0]['num']+$sex[1]['num']+$info['man']+$info['woman']); ?>条，包含男生<?php echo htmlentities($sex[0]['num']+$info['man']); ?>条、女生<?php echo htmlentities($sex[1]['num']+$info['woman']); ?>条</p>
                <div style="margin:10px auto; box-sizing:border-box;">
                    <div class="funnyNewsTicker fnt-radius fnt-shadow fnt-easing" id="funnyNewsTicker1">
                        <ul>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div style="width: 100px;height: 100px;line-height: 100px;display: inline-block;vertical-align: top;text-align: center;">
                                    <img style="max-height: 100px;max-width: 100px;" src="<?php echo htmlentities($v['headimg']); ?>?imageView2/2/h/100/q/75" alt="">
                                </div>
                                <div style="display: inline-block;width: calc(100% - 120px);padding: 5px">
                                    <p><b><?php echo htmlentities((isset($v['province']) && ($v['province'] !== '')?$v['province']:'未填写')); ?> <?php echo htmlentities((isset($v['city']) && ($v['city'] !== '')?$v['city']:'未填写')); ?></b></p>
                                    <p><b><?php echo $v['age']==0 ? "" : htmlentities($v['age']."岁"); ?> <?php echo htmlentities($v['constellation']); ?></b></p>
                                    <b><?php echo htmlentities((isset($v['content']) && ($v['content'] !== '')?$v['content']:'此用户没有留言~')); ?></b>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- 跑马灯开始 -->
                <div>
                    <marquee behavior="alternate" scrollamount="3">
                        <?php if(is_array($partner) || $partner instanceof \think\Collection || $partner instanceof \think\Paginator): $i = 0; $__LIST__ = $partner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo htmlentities($v['link']); ?>">
                                <img src="<?php echo htmlentities($v['image']); ?>" alt="<?php echo htmlentities($v['title_cn']); ?>" style="border: 1px solid #bdbdbd;padding: 5px;height: 10vw;max-height: 50px;">
                            </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </marquee>
                </div>
                <!-- 跑马灯结束 -->

                <hr>
                <div style="text-align: center;color: #999;padding: 0px 0px 10px 0px">
                    <p>请阅读<a href="../news/919" style="color: #999">网站条款</a> | <a href="https://beian.miit.gov.cn/"><?php echo htmlentities($siteinfo['icp']); ?></a></p>
                </div>

                <!--右下脚小人物-->
                <div style="position: fixed;bottom: 0px;right: 10px;opacity: .9;z-index: 999;">
                    <img src="/static/home/cn/image/renwu-01.png" alt="" style="height: 200px;">
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display: none">
    <?php echo $siteinfo['tongji']; ?>
</div>
</body>
</html>