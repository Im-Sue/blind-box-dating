<?php /*a:6:{s:72:"/www/wwwroot/love.tongbayun.com/application/admin/view/siteinfo/add.html";i:1632893154;s:72:"/www/wwwroot/love.tongbayun.com/application/admin/view/tpl/base-add.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1632893154;s:70:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/nav.html";i:1632893154;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1632893154;}*/ ?>
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
                <th>标题</th>
                <td><input class="form-control w-lg" type="text" name="data[title]" /><span class="help-block">这是说明</span></td>
            </tr>
            <tr>
                <th>配置代码</th>
                <td><input class="form-control w-lg" type="text" name="data[config_name]" /><span class="help-block">这是说明</span></td>
            </tr>
            <tr>
                <th>配置值</th>
                <td>
                    <textarea name="data[config_value]" class="form-control w-lg" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <textarea name="data[remark]" class="form-control w-lg" rows="4"></textarea>
                </td>
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
            
        });
    </script>


    </body>
</html>

