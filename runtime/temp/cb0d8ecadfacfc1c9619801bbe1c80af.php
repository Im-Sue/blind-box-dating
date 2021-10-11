<?php /*a:6:{s:70:"/www/wwwroot/love.tongbayun.com/application/admin/view/banner/add.html";i:1632893154;s:72:"/www/wwwroot/love.tongbayun.com/application/admin/view/tpl/base-add.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1632893154;s:70:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/nav.html";i:1632893154;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1632893154;}*/ ?>
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
    <ul class="nav nav-tabs page-nav-tabs">
    <li <?php if($action_name == 'index'): ?>class="active"<?php endif; ?>><a href="<?php echo url('index'); ?>">管理</a></li>
    <li <?php if($action_name == 'add'): ?>class="active"<?php endif; ?>><a href="<?php echo url('add'); ?>">添加</a></li>
    <?php if($action_name == 'edit'): ?><li class="active"><a href="javascript:;">编辑</a></li><?php endif; ?>
</ul>

    <form action="<?php echo url($action_name.'_post'); ?>" method="post" enctype="multipart/form-data" id="formData">
        <?php echo token(); ?>
        
    <table class="table table-bordered table-hover table-data" id="tableData">
        <tbody>
            <tr>
                <th>广告位</th>
                <td>
                    <select name="data[position_id]" class="form-control w-md">
                        <option value="0">请选择</option>
                        <?php if(is_array($position_list) || $position_list instanceof \think\Collection || $position_list instanceof \think\Paginator): $i = 0; $__LIST__ = $position_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['position_name']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>标题</th>
                <td><input class="form-control w-lg" type="text" name="data[title]" /></td>
            </tr>
            <tr>
                <th>副标题</th>
                <td><input class="form-control w-lg" type="text" name="data[sub_title]" /></td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                    <textarea name="data[brief]" class="form-control w-lg" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <th>链接</th>
                <td><input class="form-control w-lg" type="text" name="data[link]" placeholder="http://"/></td>
            </tr>
            <tr>
                <th>图片</th>
                <td>
                    <div>
                        <a href="javascript:;" data-server="<?php echo url('uploadfile'); ?>" data-path="banner" id="wuPickImage">选择图片</a>
                        <span class="help-block">格式：jpg，png，gif，jpeg；尺寸：-- x -- px</span>
                    </div>
                    <div id="imageDisplay">
                        <input type="hidden" name="data[image]" class="js-file-input" />
                        <input type="hidden" name="asset_id[]" class="js-asset-input" />
                        <img class="data-img js-img" data-default="/static/admin/images/thumbnail.png" src="/static/admin/images/thumbnail.png" />
                        <a class="deletefile js-deletefile hidden" href="javascript:;"><i class="fa fa-close"></i> 删除</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td><input class="form-control w-md" type="text" name="data[sort]" value="0" /></td>
            </tr>
            <tr>
                <th>状态</th>
                <td>
                    <label><input type="radio" name="data[status]" value="1" checked /> 显示</label>
                    <label><input type="radio" name="data[status]" value="0" /> 隐藏</label>
                </td>
            </tr>
        </tbody>
    </table>

        
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
            initImageWebUploader("#wuPickImage");
        });
        
    </script>


    </body>
</html>

