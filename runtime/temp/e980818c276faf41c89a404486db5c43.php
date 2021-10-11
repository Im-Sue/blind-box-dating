<?php /*a:3:{s:65:"/www/wwwroot/love.tongbayun.com/template/black/cn/take/index.html";i:1633526322;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
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

<div class="take">
    <style>
        .text{
            background-image:url('/static/home/cn/image/black_footer.png') ;
            background-size: 100% 100%;
            border-radius:10px;
            color:#fff;
            margin: 5%;
        }
    </style>
    <div class="text"><?php echo $take['content']; ?></div>
    <div class="content">
        <div class="layui-row">
            <div class="layui-col-xs12">
                <form class="layui-form layui-form-pane" action="">

                    <div class="layui-tab" lay-filter="type" style="background: #231a44;padding: 1rem;border-radius: 1rem;">
                        <ul class="layui-tab-title">
                            <li class="layui-this" style="color: #fff">普通盲盒</li>
                            <li style="color: #fff" class="click-type">条件盲盒</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-form-item">
                                <label class="layui-form-label"><span class="red">* </span>意向位置</label>
                                <div class="layui-input-inline">
                                    <select name="province" id="province" lay-filter="province" lay-verify="required" autocomplete="off" >
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($province_list) || $province_list instanceof \think\Collection || $province_list instanceof \think\Paginator): $i = 0; $__LIST__ = $province_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name_cn']); ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <div class="layui-input-inline">
                                    <select name="city" id="city" lay-verify="required">
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item" style="background: #fff;">
                                <label class="layui-form-label"><span class="red">* </span>意向性别</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="sex" value="1" title="男" checked>
                                    <input type="radio" name="sex" value="2" title="女" <?php if($data['sex'] == '2'): ?>checked<?php endif; ?>>
                                    <input type="hidden" name="type" value="1">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><span class="red">* </span> 你的微信</label>
                                <div class="layui-input-block">
                                    <input type="text" name="wechat" autocomplete="off" placeholder="请输入微信号码" class="layui-input" lay-verify="required|wechat">
                                </div>
                            </div>
                            <div class="layui-tab-item layui-show"></div>
                            <div class="layui-tab-item">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">意向星座</label>
                                    <div class="layui-input-inline">
                                        <select name="constellation" lay-filter="constellation" id="constellation" autocomplete="off" >
                                            <option value="" selected>请选择星座</option>
                                            <option value="白羊座">白羊座</option>
                                            <option value="金牛座">金牛座</option>
                                            <option value="双子座">双子座</option>
                                            <option value="巨蟹座">巨蟹座</option>
                                            <option value="狮子座">狮子座</option>
                                            <option value="处女座">处女座</option>
                                            <option value="天秤座">天秤座</option>
                                            <option value="天蝎座">天蝎座</option>
                                            <option value="射手座">射手座</option>
                                            <option value="摩羯座">摩羯座</option>
                                            <option value="水瓶座">水瓶座</option>
                                            <option value="双鱼座">双鱼座</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-form-item" style="background: #fff;">
                                    <label class="layui-form-label">有无照片</label>
                                    <div class="layui-input-block">
                                        <input type="radio" name="headimg" value="1" title="随机" checked>
                                        <input type="radio" name="headimg" value="2" title="有">
                                    </div>
                                </div>

                                <div class="layui-form-item" style="background: #fff;">
                                    <div class="layui-inline" style="margin-bottom: 0px;">
                                        <label class="layui-form-label">意向年龄</label>
                                        <input type="text" name="age_min" placeholder="最小周岁" autocomplete="off" class="layui-input inlineOne"> -
                                        <input type="text" name="age_max" placeholder="最大周岁" autocomplete="off" class="layui-input inlineOne">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block" style="margin: 0px;text-align: center;">
                            <button type="submit" class="layui-btn layui-btn-radius layui-btn-warm" lay-submit lay-filter="formDemo" style="background-color: #4317e2;">立即提交</button>
                            <a href="../" class="layui-btn layui-btn-radius">返回主页</a>
                        </div>
                    </div>

                    <hr>
                    <script>
                        $(function () {
                            layui.use(['form','layer','element'], function () {
                                var form=layui.form;
                                var layer=layui.layer;
                                var element=layui.element;

                                // 判断弹窗
                                if("<?php echo htmlentities($alert); ?>" != ''){
                                    layer.ready(function(){
                                        layer.open({'closeBtn':0,content: "<?php echo htmlentities($alert); ?>"});
                                    });
                                }

                                if("<?php echo htmlentities($data['type']); ?>" == 2){
                                    $(".click-type").trigger("click");
                                    $("input[name='type']").val("2");
                                }

                                form.verify({
                                    wechat: [
                                        /^[a-zA-Z0-9_]([-_a-zA-Z0-9]{5,19})+$/,'微信号不符合规则！'
                                    ]
                                });

                                // 判断什么类型
                                element.on('tab(type)', function(elem){
                                    if(elem.index==0){
                                        $("input[name='type']").val("1");
                                    }
                                    if(elem.index==1){
                                        $("input[name='type']").val("2");
                                    }
                                });

                                // 监听二级联动下拉框
                                form.on('select(province)',function(data){
                                    layer.load();
                                    $.ajax({
                                        url: '/api/get_region',
                                        type: 'get',
                                        data: {pid:data.value},
                                        dataType: "json",
                                        success: function(rst){
                                            $("select[name='city']").html("");
                                            $("select[name='city']").append("<option value='' selected>请选择</option>");
                                            $.each(rst.data, function (i, o) {
                                                $("select[name='city']").append("<option value='" + o.id + "'>" + o.name_cn + "</option>");
                                            });
                                            form.render();
                                            layer.closeAll('loading');
                                        }
                                    });
                                })

                                // 监听提交按钮
                                form.on('submit(formDemo)', function(data){
                                    layer.load();
                                    $.ajax({
                                        url:"/take/save",
                                        async: false,
                                        type:"POST",
                                        dataType: "json",
                                        data:data.field,
                                        success: function(data){
                                            if(data.code==4001){
                                                //询问框
                                                layer.ready(function(){
                                                    layer.confirm(data.msg, {
                                                        btn: ['去投放']
                                                    }, function(){
                                                        window.location.href = '../stay?province='+data.data.province+'&city='+data.data.city+'&wechat='+data.data.wechat+'&sex='+data.data.sex;
                                                    });
                                                });
                                                layer.closeAll('loading');
                                            }

                                            if(data.code==4002){
                                                //询问框
                                                layer.ready(function(){
                                                    layer.confirm(data.msg, {
                                                        btn: ['去邀请']
                                                    }, function(){
                                                        window.location.href = '../invitation?wechat='+data.data.wechat;
                                                    });
                                                });
                                                layer.closeAll('loading');
                                            }

                                            if(data.code==0){
                                                layer.msg(data.msg);
                                                layer.closeAll('loading');
                                            }

                                            if(data.code==1){
                                                if(data.data.url){
                                                    var content = "您的订单号为【"+data.data.order_sn+"】请截图保存，便于后期查询您的订单。";
                                                    layer.ready(function(){
                                                        layer.confirm(content,{'closeBtn':0,title: "重要提示",btn: ['微信支付']}, function(){
                                                            window.location.href = data.data.url;
                                                        });
                                                    });
                                                }else {
                                                    var html = `<table width="98%" style="text-align: center;margin: 1%;">
                        <tr>
                            <td rowspan="4" style="text-align: center"><img style="width: 100px;" src="${data['data']['headimg']}" alt=""></td>
                            <td><b>${data['data']['province']} ${data['data']['city']}</b></td>
                        </tr>
                        <tr>
                            <td><b>${data['data']['age']}岁 ${data['data']['sex']} ${data['data']['constellation']}</b></td>
                        </tr>
                        <tr>
                            <td><b>${data['data']['content']}</b></td>
                        </tr>
                        <tr>
                            <td><b style="color: red;">微信号：${data['data']['wechat']}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 5px;color: red;"><b>请及时截图保存，该信息只显示一次！</b></td>
                        </tr>
                    </table>`;
                                                    //页面层
                                                    layer.ready(function(){
                                                        layer.open({
                                                            type: 1,
                                                            title: '抽取成功',
                                                            skin: 'layui-layer-rim', //加上边框
                                                            area: ['80%', '50%'], //宽高
                                                            content: html
                                                        });
                                                    });
                                                    layer.closeAll('loading');
                                                }
                                            }
                                        }
                                    });
                                    return false;
                                });
                            });
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
    <div style="text-align: center;color: #999;padding: 0px 0px 10px 0px">
        <p>提交即同意<a href="../news/919" style="color: #999">网站条款</a> | <a href="../about" style="color: #999">常见问题</a> | <a href="JavaScript:void(0)" style="color: #999" id="invitation">一起赚钱</a></p>
    </div>
</div>
<div style="display: none">
    <?php echo $siteinfo['tongji']; ?>
</div>
</body>
</html>