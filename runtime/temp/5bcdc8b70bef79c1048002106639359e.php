<?php /*a:3:{s:65:"/www/wwwroot/love.tongbayun.com/template/black/cn/stay/index.html";i:1633526322;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/header.html";i:1633259580;s:68:"/www/wwwroot/love.tongbayun.com/template/black/cn/common/footer.html";i:1631529292;}*/ ?>
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

<div class="stay">
    <style>
        .text{
            background-image:url('/static/home/cn/image/black_footer.png') ;
            background-size: 100% 100%;
            border-radius:10px;
            color:#fff;
            margin: 5%;
        }
    </style>
    <div class="text"><?php echo $stay['content']; ?></div>
    <div class="content">
        <div class="layui-row">
            <div class="layui-col-xs12">
                <form class="layui-form layui-form-pane" action="">
                    <style>
                        .form-datas{
                            background: #231a44;
                            padding: 1rem;
                            border-radius: 1rem;
                        }
                    </style>

                    <div class="layui-upload" style="text-align: center;padding: 20px;">
                            <span style="position: relative;display: inline-block;width: 100%;border-radius: 50%">
                                <img src="/static/home/cn/image/black_tx.png" id="headimg">
                                <input type="hidden" name="headimg" id="headimgg">
                            </span>
                    </div>
                    <div class="form-datas">
                        <div class="layui-form-item">
                            <label class="layui-form-label"><span class="red">* </span>选择位置</label>
                            <div class="layui-input-inline">
                                <select name="province" id="province" lay-filter="province" lay-verify="required" autocomplete="off" >
                                    <option value="" selected>请选择</option>
                                    <?php if(is_array($province_list) || $province_list instanceof \think\Collection || $province_list instanceof \think\Paginator): $i = 0; $__LIST__ = $province_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($v['id']); ?>" <?php if($data['province'] == $v['id']): ?>selected<?php endif; ?> ><?php echo htmlentities($v['name_cn']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="city" id="city" lay-verify="required">
                                    <option value="" selected>请选择</option>
                                    <?php if(is_array($city_list) || $city_list instanceof \think\Collection || $city_list instanceof \think\Paginator): $i = 0; $__LIST__ = $city_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($v['id']); ?>"  <?php if($data['city'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name_cn']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="layui-form-item" style="background: #fff;">
                            <label class="layui-form-label"><span class="red">* </span>你的性别</label>
                            <div class="layui-input-block">
                                <input type="radio" name="sex" value="1" title="男" checked>
                                <input type="radio" name="sex" value="2" title="女" <?php if($data['sex'] == '1'): ?>checked<?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label"><span class="red">* </span>微信号码</label>
                            <div class="layui-input-block">
                                <input type="text" name="wechat" autocomplete="off" value="<?php echo htmlentities($data['wechat']); ?>" placeholder="请输入微信" class="layui-input" lay-verify="required|wechat">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label"><span class="red">* </span>你的年龄</label>
                            <div class="layui-input-block">
                                <input type="number" name="age" autocomplete="off" placeholder="请输入年龄(周岁)" class="layui-input" lay-verify="required|age">
                            </div>
                        </div>

                        <?php if(!(empty($stay['is_permanent']) || (($stay['is_permanent'] instanceof \think\Collection || $stay['is_permanent'] instanceof \think\Paginator ) && $stay['is_permanent']->isEmpty()))): ?>
                        <div class="layui-form-item" style="background: #fff;">
                            <label class="layui-form-label">选择类型</label>
                            <div class="layui-input-block">
                                <input type="checkbox" name="type" value="1" lay-skin="switch" lay-filter="switchTest" lay-text="一直留(不会被删除)|留一次(被抽到后删除)">
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="layui-form-item">
                            <label class="layui-form-label">你的星座</label>
                            <div class="layui-input-inline">
                                <select name="constellation" lay-filter="constellation" autocomplete="off" >
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
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">脱单宣言</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入你的脱单宣言" name="content" class="layui-textarea"></textarea>
                            </div>
                        </div>

                    </div>


                    <div class="layui-form-item">
                        <div class="layui-input-block" style="margin: 15px;text-align: center;">
                            <button type="submit" class="layui-btn layui-btn-radius layui-btn-warm" lay-submit lay-filter="formDemo" style="background-color: #4317e2;">立即提交</button>
                            <a href="../" class="layui-btn layui-btn-radius">返回主页</a>
                        </div>
                    </div>
                    <hr>
                    <script>
                        $(function () {
                            initQiniuUploader();

                            layui.use(['layer','form'], function(){
                                var layer = layui.layer;
                                var form = layui.form;

                                //监听指定开关
                                form.on('switch(switchTest)', function(data){
                                    if(this.checked){
                                        layer.ready(function(){
                                            layer.alert("选择后：被他人抽取信息不会被删除，可以一直被他人抽取！价格与留一次不同！");
                                        });

                                    }else{
                                        layer.ready(function(){
                                            layer.alert("关闭后：被他人抽取信息后会被删除，只可以被抽取一次，如需抽取需再次提交！");
                                        });
                                    }
                                });

                                if("<?php echo htmlentities($alert); ?>" != ''){
                                    layer.ready(function(){
                                        layer.open({'closeBtn':0,content: "<?php echo htmlentities($alert); ?>"});
                                    });
                                }
                            });
                        });

                        var uploader;
                        var qiniuImgDomain = '<?php echo htmlentities($qiniu_domain); ?>',
                            qiniuVideoKeyPath = 'linshi';

                        function makeGuid() {
                            function S4() {
                                return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
                            }
                            return (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4());
                        }

                        // 判断是不是苹果终端
                        var u = navigator.userAgent,isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
                        $("#headimg").click(function () {
                            if(isiOS){
                                $(this).siblings("div").children("input").trigger("click");
                                return false;
                            }
                        });

                        function initQiniuUploader() {
                            uploader = Qiniu.uploader({
                                disable_statistics_report: true, // 禁止自动发送上传统计信息到七牛，默认允许发送
                                runtimes: 'html5,flash,html4', // 上传模式,依次退化
                                browse_button: 'headimg', // 上传选择的点选按钮，**必需**
                                uptoken_url:'/ajax/uptoken', // Ajax 请求 uptoken 的 Url，**强烈建议设置**（服务端提供）
                                get_new_uptoken: false, // 设置上传文件的时候是否每次都重新获取新的 uptoken
                                save_key: false, // 默认 false。若在服务端生成 uptoken 的上传策略中指定了 `save_key`，则开启，SDK在前端将不对key进行任何处理
                                domain: qiniuImgDomain, // bucket 域名，下载资源时用到，如：'http://xxx.bkt.clouddn.com/' **必需**
                                max_file_size: '20mb', // 最大文件体积限制
                                flash_swf_url: '/static/common/plupload-2.3.6/js/Moxie.swf', //引入 flash,相对路径
                                max_retries: 3, // 上传失败最大重试次数
                                dragdrop: false, // 开启可拖曳上传
                                chunk_size: '0mb', // 分块上传时，每块的体积
                                auto_start: true, // 选择文件后自动上传，若关闭需要自己绑定事件触发上传,
                                multi_selection: false,
                                init: {
                                    'FilesAdded': function(up, files) {
                                        layer.load();
                                    },
                                    'BeforeUpload': function(up, file) {
                                        layer.load();
                                        var ext = Qiniu.getFileExtension(file.name);
                                        if (!(ext === 'jpg' || ext === 'png' || ext === 'jpeg')){
                                            layer.msg("请上传jpg,png,jpeg格式图片");
                                            layer.closeAll('loading');
                                            return false;
                                        }
                                    },
                                    'UploadProgress': function(up, file) {
                                        layer.load();
                                    },
                                    'FileUploaded': function(up, file, info) {
                                        var domain = up.getOption('domain');
                                        var res = JSON.parse(info.response);
                                        var url = domain + res.key; //获取上传成功后的文件的Url
                                        $('#headimg').attr('src', url + "?imageView2/2/h/135/q/75");
                                        $('#headimgg').val(res.key);
                                        layer.closeAll('loading');
                                    },
                                    'Error': function(up, err, errTip) {
                                        //上传出错时,处理相关的事情
                                        showMsg(errTip);
                                    },
                                    'UploadComplete': function() {
                                        //队列文件处理完毕后,处理相关的事情
                                    },
                                    'Key': function(up, file) {
                                        // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
                                        // 该配置必须要在 unique_names: false , save_key: false 时才生效
                                        var ext = Qiniu.getFileExtension(file.name);
                                        var name = makeGuid();
                                        var date = getTodayDate();
                                        var key = qiniuVideoKeyPath + '/' + date + '/' + name + '.' + ext;
                                        return key;
                                    }
                                }
                            });
                        }

                        function getTodayDate(){
                            var d = new Date();
                            var s = '';
                            s += d.getMonth() + 1;
                            s += d.getDate();
                            return s;
                        }
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