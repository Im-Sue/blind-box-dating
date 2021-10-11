<?php /*a:5:{s:69:"/www/wwwroot/love.tongbayun.com/application/admin/view/info/edit.html";i:1633531198;s:80:"/www/wwwroot/love.tongbayun.com/application/admin/view/tpl/base-edit-nohead.html";i:1633531198;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1633531198;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1633531198;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1633531198;}*/ ?>
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
<div class="wrapper">
    <form action="<?php echo url($action_name.'_post'); ?>" method="post" enctype="multipart/form-data" id="formData">
        <?php echo token(); ?>
        <input type="hidden" name="data[id]" value="<?php echo htmlentities($data['id']); ?>" id="dataId" />
        
<ul class="nav nav-pills page-nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="pill">主站相关</a></li>
    <li><a href="#tab4" data-toggle="pill">微信支付相关</a></li>
    <li><a href="#tab5" data-toggle="pill">分销相关</a></li>
    <li><a href="#tab2" data-toggle="pill">留一个</a></li>
    <li><a href="#tab3" data-toggle="pill">抽一个</a></li>
</ul>
<style>
    #info_color_1 *,#info_color_2 *,#info_color_3 *,#info_color_4 *{
        -webkit-box-sizing: unset;box-sizing: unset;
    }
</style>
<div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
        <table class="table table-bordered table-hover table-data">
            <tbody>
            <tr>
                <th>标题</th>
                <td><input class="form-control w-lg" type="text" name="info[title]" value="<?php echo htmlentities($data['info']['title']); ?>" /></td>
            </tr>
            <tr>
                <th>客服微信</th>
                <td><input class="form-control w-lg" type="text" name="info[wechat]" value="<?php echo htmlentities($data['info']['wechat']); ?>" /></td>
            </tr>
            <tr>
                <th>电子邮箱</th>
                <td><input class="form-control w-lg" type="text" name="info[email]" value="<?php echo htmlentities($data['info']['email']); ?>" /></td>
            </tr>
            <tr>
                <th>虚拟数量</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[man]" placeholder="男" value="<?php echo htmlentities($data['info']['man']); ?>" /> -
                    <input class="form-control w-md" type="text" name="info[woman]" placeholder="女" value="<?php echo htmlentities($data['info']['woman']); ?>" />
                <span>(前台显示为：真实数量+虚拟数量)</span></td>
            </tr>
            <tr>
                <th>海报模板ID</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[poster]" placeholder="非开发人员勿动" value="<?php echo htmlentities($data['info']['poster']); ?>" />
                    <span>(前端宣传海报模板，多个海报例：1,2,3 英文逗号分割)</span></td>
            </tr>
            <tr>
                <th>轮播数量</th>
                <td><input class="form-control w-lg" type="number" name="info[num]" value="<?php echo htmlentities($data['info']['num']); ?>" /></td>
            </tr>

            <tr>
                <th>扩展功能</th>
                <td>
                    <label><input type="checkbox" name="info[middleware][]" <?php if(in_array((1), is_array($data['info']['middleware'])?$data['info']['middleware']:explode(',',$data['info']['middleware']))): ?>checked<?php endif; ?> value="1"> IP黑名单</label>
                    <label><input type="checkbox" name="info[middleware][]" <?php if(in_array((2), is_array($data['info']['middleware'])?$data['info']['middleware']:explode(',',$data['info']['middleware']))): ?>checked<?php endif; ?> value="2"> 禁止PC访问</label>
                    <label><input type="checkbox" name="info[middleware][]" <?php if(in_array((3), is_array($data['info']['middleware'])?$data['info']['middleware']:explode(',',$data['info']['middleware']))): ?>checked<?php endif; ?> value="3"> 开启首页幻灯片</label>
                </td>
            </tr>

            <tr class="pay">
                <th>选择前端模板</th>
                <td>
                    <label><input type="radio" name="info[template]" value="home" <?php if($data['info']['template'] == 'home'): ?>checked<?php endif; ?> /> 粉色版</label>
                    <label><input type="radio" name="info[template]" value="black" <?php if($data['info']['template'] == 'black'): ?>checked<?php endif; ?> /> 深蓝版</label>
                    <label><input type="radio" name="info[template]" value="white" <?php if($data['info']['template'] == 'white'): ?>checked<?php endif; ?> /> 简约动画版</label>
                </td>
            </tr>

            <!--<tr>-->
                <!--<th>主题配色</th>-->
                <!--<td>-->
                    <!--<link rel="stylesheet" type="text/css" href="https://unpkg.com/layui@2.6.8/dist/css/layui.css" />-->
                    <!--<script type="text/javascript" src="https://unpkg.com/layui@2.6.8/dist/layui.js"></script>-->
                    <!--标题背景：<div id="info_color_1"></div><input type="hidden" name="info[info_color_1]" id="info_color_1_id">-->
                    <!--边框颜色：<div id="info_color_2"></div><input type="hidden" name="info[info_color_2]" id="info_color_2_id">-->
                    <!--投影颜色：<div id="info_color_3"></div><input type="hidden" name="info[info_color_3]" id="info_color_3_id">-->
                    <!--图标颜色：<div id="info_color_4"></div><input type="hidden" name="info[info_color_4]" id="info_color_4_id">-->
                    <!--<script>-->
                        <!--layui.use('colorpicker', function(){-->
                            <!--var colorpicker = layui.colorpicker;-->
                            <!--//开启透明度-->
                            <!--colorpicker.render({-->
                                <!--elem: '#info_color_1',-->
                                <!--color: '<?php echo htmlentities($data['info']['info_color_1']); ?>',-->
                                <!--alpha: true,-->
                                <!--format: 'rgb',-->
                                <!--done: function(color){-->
                                    <!--$("#info_color_1_id").val(color);-->
                                <!--}-->
                            <!--});-->
                            <!--colorpicker.render({-->
                                <!--elem: '#info_color_2',-->
                                <!--color: '<?php echo htmlentities($data['info']['info_color_2']); ?>',-->
                                <!--alpha: true,-->
                                <!--format: 'rgb',-->
                                <!--done: function(color){-->
                                    <!--$("#info_color_2_id").val(color);-->
                                <!--}-->
                            <!--});-->
                            <!--colorpicker.render({-->
                                <!--elem: '#info_color_3',-->
                                <!--color: '<?php echo htmlentities($data['info']['info_color_3']); ?>',-->
                                <!--alpha: true,-->
                                <!--format: 'rgb',-->
                                <!--done: function(color){-->
                                    <!--$("#info_color_3_id").val(color);-->
                                <!--}-->
                            <!--});-->
                            <!--colorpicker.render({-->
                                <!--elem: '#info_color_4',-->
                                <!--color: '<?php echo htmlentities($data['info']['info_color_4']); ?>',-->
                                <!--alpha: true,-->
                                <!--format: 'rgb',-->
                                <!--done: function(color){-->
                                    <!--$("#info_color_4_id").val(color);-->
                                <!--}-->
                            <!--});-->
                        <!--});-->
                    <!--</script>-->
                <!--</td>-->
            <!--</tr>-->

            <tr>
                <th>主页公告</th>
                <td><textarea class="ckeditor" name="info[content]"><?php echo htmlentities($data['info']['content']); ?></textarea></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="tab2">
        <table class="table table-bordered table-hover table-data">
            <tbody>
                <tr>
                    <th>标题</th>
                    <td><input class="form-control w-lg" type="text" name="stay[title]" value="<?php echo htmlentities($data['stay']['title']); ?>" /></td>
                </tr>
                <tr>
                    <th>价格(留一次)</th>
                    <td><input class="form-control w-md" type="text" name="stay[price]" value="<?php echo htmlentities($data['stay']['price']); ?>" />元</td>
                </tr>
                <tr>
                    <th>价格(一直留)</th>
                    <td><input class="form-control w-md" type="text" name="stay[price_two]" value="<?php echo htmlentities($data['stay']['price_two']); ?>" />元</td>
                </tr>
                <tr>
                    <th>扩展功能</th>
                    <td>
                        <label><input type="checkbox" name="stay[pay]" <?php if($data['stay']['pay'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 开启收费</label>
                        <label><input type="checkbox" name="stay[is_permanent]" <?php if($data['stay']['is_permanent'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 开启一直留</label>
                    </td>
                </tr>
                <tr>
                    <th>弹窗内容</th>
                    <td><textarea class="form-control w-lg" name="stay[alert]"><?php echo htmlentities($data['stay']['alert']); ?></textarea></td>
                </tr>
                <tr>
                    <th>顶部公告</th>
                    <td><textarea class="ckeditor" name="stay[content]"><?php echo htmlentities($data['stay']['content']); ?></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="tab3">
        <table class="table table-bordered table-hover table-data">
            <tbody>
                <tr>
                    <th>标题</th>
                    <td><input class="form-control w-lg" type="text" name="take[title]" value="<?php echo htmlentities($data['take']['title']); ?>" /></td>
                </tr>
                <tr>
                    <th>价格(普通盲盒)</th>
                    <td><input class="form-control w-md" type="text" name="take[price_one]" value="<?php echo htmlentities($data['take']['price_one']); ?>" />元</td>
                </tr>
                <tr>
                    <th>价格(条件盲盒)</th>
                    <td><input class="form-control w-md" type="text" name="take[price_two]" value="<?php echo htmlentities($data['take']['price_two']); ?>" />元</td>
                </tr>
                <tr>
                    <th>扩展功能</th>
                    <td>
                        <label><input type="checkbox" name="take[pay]" <?php if($data['take']['pay'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 开启收费</label>
                        <label><input type="checkbox" name="take[num]" <?php if($data['take']['num'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 限制抽一次(开启海报)</label>
                        <label><input type="checkbox" name="take[mutual]" <?php if($data['take']['mutual'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 开启先投在抽</label>
                        <label><input type="checkbox" name="take[take_one]" <?php if($data['take']['take_one'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 关闭普通盲盒</label>
                        <label><input type="checkbox" name="take[take_two]" <?php if($data['take']['take_two'] == 'yes'): ?>checked<?php endif; ?> value="yes"> 关闭条件盲盒</label>
                    </td>
                </tr>
                <tr>
                    <th>弹窗内容</th>
                    <td><textarea class="form-control w-lg" name="take[alert]"><?php echo htmlentities($data['take']['alert']); ?></textarea></td>
                </tr>
                <tr>
                    <th>顶部公告</th>
                    <td><textarea class="ckeditor" name="take[content]"><?php echo htmlentities($data['take']['content']); ?></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="tab4">
        <table class="table table-bordered table-hover table-data">
            <tbody>

            <tr class="pay">
                <th>选择支付平台</th>
                <td>
                    <label><input type="radio" name="info[pay_platform]" value="wxpay" <?php if($data['info']['pay_platform'] == 'wxpay'): ?>checked<?php endif; ?> /> 微信官方支付</label>
                    <label><input type="radio" name="info[pay_platform]" value="xunhupay" <?php if($data['info']['pay_platform'] == 'xunhupay'): ?>checked<?php endif; ?> /> 虎皮椒</label>
                    <label><input type="radio" name="info[pay_platform]" value="xorpay" <?php if($data['info']['pay_platform'] == 'xorpay'): ?>checked<?php endif; ?> /> XORPAY</label>
                    <label><input type="radio" name="info[pay_platform]" value="caihong" <?php if($data['info']['pay_platform'] == 'caihong'): ?>checked<?php endif; ?> /> 彩虹易支付</label>
                </td>
            </tr>

            <tr class="wxpay">
                <th>微信APPID</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[wx_appid]" value="<?php echo htmlentities($data['info']['wx_appid']); ?>" placeholder="微信官方支付平台" />
                    <span><a href="https://pay.weixin.qq.com/">点击进入微信支付</a></span>
                </td>
            </tr>
            <tr class="wxpay">
                <th>微信APPSECRET</th>
                <td><input class="form-control w-lg" type="text" name="info[wx_appsecret]" value="<?php echo htmlentities($data['info']['wx_appsecret']); ?>" placeholder="微信官方支付平台" /></td>
            </tr>
            <tr class="wxpay">
                <th>微信MCHID</th>
                <td><input class="form-control w-lg" type="text" name="info[wx_mchid]" value="<?php echo htmlentities($data['info']['wx_mchid']); ?>" placeholder="微信官方支付平台" /></td>
            </tr>
            <tr class="wxpay">
                <th>微信MCHKEY</th>
                <td><input class="form-control w-lg" type="text" name="info[wx_mchkey]" value="<?php echo htmlentities($data['info']['wx_mchkey']); ?>" placeholder="微信官方支付平台" /></td>
            </tr>

            <tr class="xunhupay">
                <th>虎皮椒APPID</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[appid]" value="<?php echo htmlentities($data['info']['appid']); ?>" placeholder="虎皮椒个人免签平台" />
                    <span><a href="http://www.xunhupay.com/">点击进入虎皮椒地址</a></span>
                </td>
            </tr>
            <tr class="xunhupay">
                <th>虎皮椒APPSECRET</th>
                <td><input class="form-control w-lg" type="text" name="info[appsecret]" value="<?php echo htmlentities($data['info']['appsecret']); ?>" placeholder="虎皮椒个人免签平台" /></td>
            </tr>
            <tr class="xunhupay">
                <th>虎皮椒网关地址</th>
                <td><input class="form-control w-lg" type="text" name="info[xunhu_gateway]" value="<?php echo htmlentities($data['info']['xunhu_gateway']); ?>" placeholder="虎皮椒平台网关地址" /></td>
            </tr>

            <tr class="xorpay">
                <th>XOR_APPID</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[xor_appid]" value="<?php echo htmlentities($data['info']['xor_appid']); ?>" placeholder="XORPAY个人免签平台" />
                    <span><a href="https://xorpay.com/">点击进入XORPAY地址</a></span>
                </td>
            </tr>
            <tr class="xorpay">
                <th>XOR_APPSECRET</th>
                <td><input class="form-control w-lg" type="text" name="info[xor_appsecret]" value="<?php echo htmlentities($data['info']['xor_appsecret']); ?>" placeholder="XORPAY个人免签平台" /></td>
            </tr>


            <tr class="caihong">
                <th>商户ID</th>
                <td>
                    <input class="form-control w-md" type="text" name="info[caihong_id]" value="<?php echo htmlentities($data['info']['caihong_id']); ?>" placeholder="商户ID" />
                    <span><a href="">仅支持对接彩虹内核易支付</a></span>
                </td>
            </tr>
            <tr class="caihong">
                <th>商户密钥</th>
                <td><input class="form-control w-lg" type="text" name="info[caihong_key]" value="<?php echo htmlentities($data['info']['caihong_key']); ?>" placeholder="商户密钥" /></td>
            </tr>
            <tr class="caihong">
                <th>商户对接网址</th>
                <td><input class="form-control w-lg" type="text" name="info[caihong_url]" value="<?php echo htmlentities($data['info']['caihong_url']); ?>" placeholder="例如：https://caihong.pay.com/" /></td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="tab5">
        <table class="table table-bordered table-hover table-data">
            <tbody>

            <tr>
                <th>是否免费</th>
                <td>
                    <label><input type="radio" name="info[invitation_free]" value="0" <?php if($data['info']['invitation_free'] == '0'): ?>checked<?php endif; ?> /> 免费</label>
                    <label><input type="radio" name="info[invitation_free]" value="1" <?php if($data['info']['invitation_free'] == '1'): ?>checked<?php endif; ?> /> 收费</label>
                </td>
            </tr>

            <tr>
                <th>代理价格</th>
                <td><input class="form-control w-lg" type="text" name="info[invitation_money]" value="<?php echo htmlentities($data['info']['invitation_money']); ?>" placeholder="代理价格" /></td>
            </tr>

            <tr>
                <th>弹窗提示</th>
                <td><input class="form-control w-lg" type="text" name="info[invitation_alert]" value="<?php echo htmlentities($data['info']['invitation_alert']); ?>" placeholder="前台未开通分销提示" /></td>
            </tr>

            <tr>
                <th>返佣比例</th>
                <td><input class="form-control w-lg" type="text" name="info[invitation_bili]" value="<?php echo htmlentities($data['info']['invitation_bili']); ?>" placeholder="推广返佣比例，例如：0.5，代表50%" /></td>
            </tr>

            <tr>
                <th>最少提现</th>
                <td><input class="form-control w-lg" type="text" name="info[invitation_tixian]" value="<?php echo htmlentities($data['info']['invitation_tixian']); ?>" placeholder="最少提现限制" /></td>
            </tr>

            <tr>
                <th>顶部公告</th>
                <td><textarea class="ckeditor" name="info[invitation_content]"><?php echo htmlentities($data['info']['invitation_content']); ?></textarea></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>

        
            <div class="well table-data-actions">
                <button type="submit" class="btn btn-primary" id="submitDataBtn">保存</button>
                <button type="button" class="btn btn-default js-cancel-btn">返回</button>
            </div>
        
    </form>
</div>
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

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        $(function(){
            var ue = UE.getEditor('ueditor',ue_config);
        });
    </script>


    </body>
</html>

