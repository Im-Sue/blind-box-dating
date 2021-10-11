<?php /*a:4:{s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/index/index.html";i:1633439344;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1633531198;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1633531198;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1633531198;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>后台首页</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/static/admin/js/bootstrap/css/bootstrap.min.css?v=3.3.7" rel="stylesheet" />
        <link href="/static/admin/css/font-awesome/css/font-awesome.min.css?v=4.7.0" rel="stylesheet" />
        <link href="/static/admin/js/bootstrap-table/bootstrap-table.min.css?v=1.11.1" rel="stylesheet">
        <link href="/static/admin/js/metisMenu/metisMenu.min.css" rel="stylesheet" />
        <link href="/static/admin/js/webuploader/webuploader.css" rel="stylesheet" />
        <link href="/static/admin/js/jqueryui/jquery-ui.min.css" rel="stylesheet" />
        <link href="/static/admin/css/animate.min.css" rel="stylesheet" />
        <link href="/static/admin/css/style.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="/static/common/plupload-2.3.6/js/plupload.full.min.js"></script>
        <script src="/static/common/qiniu-js-sdk/dist/qiniu.min.js"></script>
    </head>
    <body>
<div class="home-wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-static-side" role="navigation">
        <style>
            .right_btn{
                position: absolute;
                right: -45px;
                width: 45px;
                color: #fff;
                z-index: 9999;
                background: #273a4a;
            }
        </style>
        <div class="right_btn">< 收起</div>
        <script>
            $(".right_btn").click(function () {
                if($(".right_btn").text()=="> 弹出"){
                    $(".page-container").css("margin-left","190px");
                    $(".navbar-static-side").css("width","190px");
                    $(".right_btn").text("< 收起");
                }else {
                    $(".page-container").css("margin-left","0px");
                    $(".navbar-static-side").css("width","0px");
                    $(".right_btn").text("> 弹出");
                }
            });
        </script>
        <div class="nav-close"><i class="fa fa-times-circle"></i></div>
        <div class="sidebar-collapse" id="sidebarScroll">
            <div class="sidebar-header">
                <?php echo htmlentities($site_info['smart_title']); ?>
            </div>
            <ul class="nav sidebar-nav metismenu" id="sidebarNav">
                <li  class="gotohome">
                    <a class="ift-menu-tab" href="javascript:;" >
                        <i class="fa fa-home"></i>
                        <span>概览</span>
                    </a>
                </li>
                <?php if(is_array($menu_list) || $menu_list instanceof \think\Collection || $menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="has-arrow" href="#none">
                        <?php if(!(empty($v['icon']) || (($v['icon'] instanceof \think\Collection || $v['icon'] instanceof \think\Paginator ) && $v['icon']->isEmpty()))): ?><i class="<?php echo htmlentities($v['icon']); ?>"></i><?php endif; ?>
                        <span class="nav-label"><?php echo htmlentities($v['title']); ?></span>
                    </a>
                    <?php if(!(empty($v['childlist']) || (($v['childlist'] instanceof \think\Collection || $v['childlist'] instanceof \think\Paginator ) && $v['childlist']->isEmpty()))): ?>
                        <ul class="nav">
                            <?php if(is_array($v['childlist']) || $v['childlist'] instanceof \think\Collection || $v['childlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['childlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a <?php if(!(empty($vv['childlist']) || (($vv['childlist'] instanceof \think\Collection || $vv['childlist'] instanceof \think\Paginator ) && $vv['childlist']->isEmpty()))): ?>class="has-arrow"<?php else: ?>class="ift-menu-item"<?php endif; ?> href="<?php echo url($vv['name']); ?>">
                                    <?php if(!(empty($vv['icon']) || (($vv['icon'] instanceof \think\Collection || $vv['icon'] instanceof \think\Paginator ) && $vv['icon']->isEmpty()))): ?>"></i><?php endif; ?>
                                    <?php echo htmlentities($vv['title']); ?>
                                </a>
                                <?php if(!(empty($vv['childlist']) || (($vv['childlist'] instanceof \think\Collection || $vv['childlist'] instanceof \think\Paginator ) && $vv['childlist']->isEmpty()))): ?>
                                <ul class="nav">
                                    <?php if(is_array($vv['childlist']) || $vv['childlist'] instanceof \think\Collection || $vv['childlist'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['childlist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a class="ift-menu-item" href="<?php echo url($vvv['name']); ?>">
                                            <?php if(!(empty($vvv['icon']) || (($vvv['icon'] instanceof \think\Collection || $vvv['icon'] instanceof \think\Paginator ) && $vvv['icon']->isEmpty()))): ?><i class="<?php echo htmlentities($vvv['icon']); ?>"></i><?php endif; ?>
                                            <?php echo htmlentities($vvv['title']); ?>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                
            </ul>
             <a href="http://www.tongbayun.com" target="_blank" class="nav-bottom"><img src="/static/admin/images/min-logo.png" width="30px"> 技术支持 通霸云</a>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧开始-->
    <div class="page-container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                  <ul class="nav navbar-nav navbar-right">
                    <li style="display: inline-block"><a href="/" target="_blank"><i class="fa fa-home"></i> <span>前台首页</span></a></li>
                    <li style="display: inline-block"><a href="<?php echo url('Profile/index'); ?>" class="ift-menu-item" data-title="个人信息"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                    <li style="display: inline-block"><a href="<?php echo url('Login/logout'); ?>"><i class="fa fa-sign-out"></i> <span>注销系统</span></a></li>
                </ul>
            </div>
        </nav>

        <nav class="menu-tabs-nav">
            <div class="menu-tabs-wrap">
                <ul class="nav navbar-nav menu-tabs" id="menuTabs"><li><a href="javascript:;" id="menuHome" data-id="home">HOME</a></li></ul>
                <a href="javascript:;" class="btn menu-tab-prev" id="iftPrev"><i class="fa fa-backward"></i></a>
                <a href="javascript:;" class="btn menu-tab-next" id="iftNext"><i class="fa fa-forward"></i></a>
            </div>
            <a  href="javascript:;" class="btn btn-refresh" id="iftReload"><i class="fa fa-refresh"></i> 刷新</a>
        </nav>

        <div class="iframe-wrapper" id="iframeWrapper">
            <iframe class="ift-iframe" id="iframe_home" name="iframe_home" width="100%" height="100%" src="<?php echo url('Index/welcome'); ?>" frameborder="0" data-id="home" seamless></iframe>
        </div>

    </div>
    <!--右侧结束-->
</div>

<style>
    .nav-bottom{
        color:#a7b1c2;
        text-align:center;
        position:absolute;
        left:0;
        bottom:0;
        width:100%;
        padding:10px 0;
        border-top:5px solid #2f4050;
        background:#22313f;
        display:block;

        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }
    .nav-bottom img{
        margin-right:5px;
    }
    .nav-bottom:hover{
        /*background:#243647;*/
        color:#fff;

        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }

    .navbar-static-top li a{
        padding-left:0;
        padding-right:20px;
    }
    .navbar-static-top li a:after{
        display:block;
        content: ' ';
        clear:both;
    }

    .navbar-default .navbar-nav>li>a{
        color:#5867dd;
    }
    .navbar-default .navbar-nav>li>a:hover span{
        /*display:block;*/
        opacity: 1;
        margin-right:0;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }

    .navbar-default .navbar-nav>li>a span{
        display:block;
        margin: 7px -64px 0 8px;
        vertical-align: text-bottom;
        float: left;
        /*transform: translateX(15px);*/
        opacity: 0;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }
    .navbar-nav>li{
        overflow:hidden;
    }
    .container-fluid li a .fa{
        width:35px;
        height:35px;
        line-height:35px;
        border-radius:50%;
        background:rgba(88,103,221,0.1);
        color:#5867dd;
        font-size:16px;
        text-align:center;
        float: left;
        display: block;
    }

    .container-fluid li:hover:nth-of-type(1) a{
        color:#5867dd;
    }

    .container-fluid li:nth-of-type(2) a{
        color:#2f4050;
    }
    .container-fluid li:hover:nth-of-type(2) a{
        color:#2f4050;
    }
    .container-fluid li:nth-of-type(2) a .fa{
        background:rgba(47,64,80,0.1);
        color:#2f4050;
    }
    .container-fluid li:nth-of-type(3) a{
        color:#1dc9b7;
    }
    .container-fluid li:hover:nth-of-type(3) a{
        color:#1dc9b7;
    }
    .container-fluid li:nth-of-type(3) a .fa{
        background:rgba(29,201,183,0.1);
        color:#1dc9b7;
    }
    .container-fluid li:nth-of-type(4) a{
        color:#ffb822;
    }
    .container-fluid li:hover:nth-of-type(4) a{
        color:#ffb822;
    }
    .container-fluid li:nth-of-type(4) a .fa{
        background:rgba(255,184,34,0.2);
        color:#ffb822;
    }


</style>

<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/underscore-min.js?v=1.8.3"></script>
<script src="/static/admin/js/bootstrap/js/bootstrap.min.js?v=3.3.7"></script>
<script src="/static/admin/js/datepicker/WdatePicker.js?v=4.8"></script>
<script src="/static/admin/js/metisMenu/metisMenu.min.js"></script>
<script src="/static/admin/js/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/static/admin/js/bootstrap-table/bootstrap-table.min.js?v=1.11.1"></script>
<script src="/static/admin/js/bootstrap-table/locale/bootstrap-table-zh-CN.min.js?v=1.11.1"></script>
<script src="/static/admin/js/treetable/jquery.treetable.js?v=3.2.0"></script>
<script src="/static/admin/js/layer/layer.js?v=3.0.3"></script>
<script type="text/javascript" src="/static/admin/js/webuploader/webuploader.min.js"></script>
<script type="text/javascript" src="/static/admin/js/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.disableAutoInline = true;
</script>
<script src="/static/admin/js/mytabs.js"></script>
<script src="/static/admin/js/common.js"></script>
<script>
    $(function(){
        $(".gotohome").click(function(){
            var url= "/admin/index/welcome.html";
            $("#iframe_home").attr({"src" : url});
            $("#menuHome").click();
        })
    })
</script>

    </body>
</html>

