<?php /*a:6:{s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/links/index.html";i:1632893154;s:68:"/www/wwwroot/love.tongbayun.com/application/admin/view/tpl/base.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1632893154;s:70:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/nav.html";i:1632893154;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1632893154;}*/ ?>
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


    
    <form class="well search-form form-inline" action="" method="get">
        <div class="form-group">
            推广分类：
            <select class="form-control" name="category_id">
                <option value="0">请选择</option>
                <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($v['id']); ?>" <?php if($opts['category_id'] == $v['id']): ?>selected<?php endif; ?>><?php echo $v['spacer']; ?> <?php echo htmlentities($v['cate_name']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="form-group">
            推广渠道：<input class="form-control" type="text" name="title"  value="<?php echo htmlentities($opts['title']); ?>" />
        </div>
        <button type="submit" class="btn btn-primary" id="searchBtn">查询</button>
        <button type="submit" class="btn btn-success" data-url="<?php echo url('export'); ?>" id="exportBtn">导出数据</button>
    </form>


    <form action="#" method="post" id="tableListForm">
        
    <table class="table table-striped table-list table-no-bordered" id="tableList" 
           data-toggle="table" 
           data-select-item-name="ids[]" 
           data-remove-url="<?php echo url('delete'); ?>" 
           data-status-url="<?php echo url('setstatus'); ?>" 
           data-sort-url="<?php echo url('setsort'); ?>"
           >
        <thead>
            <tr>
                <th data-checkbox="true"></th>
                <th class="w-50" data-field="sort">排序</th>
                <th class="w-50" data-field="id">ID</th>
                <th class="w-100">展会届数</th>
                <th class="w-100">推广分类</th>
                <th>推广渠道</th>
                <th class="w-100">二维码</th>
                <th class="w-300">调用链接</th>
                <th class="w-300">推广链接</th>
                <th class="w-100">点击量</th>
                <th class="w-100">时间</th>
                <th class="w-50">状态</th>
                <th class="w-150">操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;$link=request()->domain()."/links?id=".$v['id']; ?>
            <tr>
                <td></td>
                <td><input class="form-control w-xs js-sort" type="text" name="sort[]" value="<?php echo htmlentities($v['sort']); ?>" /></td>
                <td><?php echo htmlentities($v['id']); ?></td>
                <td><?php echo htmlentities($expo_list[$v['expo_id']]['title']); ?></td>
                <td><?php echo htmlentities($cate_list[$v['category_id']]['cate_name']); ?></td>
                <td><?php echo htmlentities($v['title']); ?></td>
                <td><img src="<?php echo create_qrcode_url($link); ?>" height="80" /></td>
                <td><?php echo htmlentities($link); ?></td>
                <td><?php echo htmlentities($v['url']); ?></td>
                <td><?php echo htmlentities($v['clicks']); ?></td>
                <td><?php echo htmlentities($v['create_time']); ?></td>
                <td><a href="javascript:;" class="status js-status" data-field="status" data-value="<?php echo htmlentities($v['status']); ?>"><i></i></a></td>
                <td>
                    <a href="<?php echo url('edit',array('id'=>$v['id'])); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> 编辑</a>
                    <a href="javascript:;" class="btn btn-danger btn-xs js-remove"><i class="fa fa-trash"></i> 删除</a>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    </form>

    <div class="table-list-toolbar clearfix">
        <div class="table-list-actions" id="tableListActions">
            
                <button type="button" class="btn btn-danger js-remove-select" disabled><i class="fa fa-trash"></i> 删除</button>
            
        </div>
        <div class="table-list-pages">
            
            <div class="pagination-actions form-inline">
                共<?php echo htmlentities($total); ?>条数据
            </div>
            <?php echo $pagination; ?>
            <div class="pagination-actions form-inline">
                跳转 
                <input type="number" min="1" value="<?php echo input('page/d',1); ?>" class="form-control w-xs" id="pageNum"/>
                页
                <button type="button" class="btn btn-default" id="pageJumpBtn">确定</button>
            </div>
            
        </div>
    </div>

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


    </body>
</html>

