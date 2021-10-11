<?php /*a:6:{s:69:"/www/wwwroot/love.tongbayun.com/application/admin/view/news/edit.html";i:1632893154;s:73:"/www/wwwroot/love.tongbayun.com/application/admin/view/tpl/base-edit.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1632893154;s:68:"/www/wwwroot/love.tongbayun.com/application/admin/view/news/nav.html";i:1632893154;s:74:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/plugins.html";i:1632893154;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/foot.html";i:1632893154;}*/ ?>
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
    <li <?php if($action_name == 'addwx'): ?>class="active"<?php endif; ?>><a href="<?php echo url('addwx'); ?>">抓取微信文章</a></li>
    <?php if($action_name == 'edit'): ?><li class="active"><a href="javascript:;">编辑</a></li><?php endif; ?>
</ul>


    <form action="<?php echo url($action_name.'_post'); ?>" method="post" enctype="multipart/form-data" id="formData">
        <?php echo token(); ?>
        <input type="hidden" name="data[id]" value="<?php echo htmlentities($data['id']); ?>" id="dataId" />
        
<ul class="nav nav-pills page-nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="pill">基本信息</a></li>
    <?php if(is_array($lang_list) || $lang_list instanceof \think\Collection || $lang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $lang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lang): $mod = ($i % 2 );++$i;?>
    <li><a href="#tab_<?php echo htmlentities($lang['lang_code']); ?>" data-toggle="pill">正文内容[<?php echo htmlentities($lang['title']); ?>]</a></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
        <table class="table table-bordered table-hover table-data" id="tableData">
            <tbody>
                <tr>
                    <th>分类</th>
                    <td>
                        <select name="data[category_id]" class="form-control w-md">
                            <option value="0">请选择</option>
                            <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if($data['category_id'] == $v['id']): ?>selected<?php endif; ?>><?php echo $v['cate_name_cn']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>发布日期</th>
                    <td><input class="form-control w-md js-date" type="text" name="data[publish_time]" value="<?php echo htmlentities(date('Y-m-d',!is_numeric($data['publish_time'])? strtotime($data['publish_time']) : $data['publish_time'])); ?>" /></td>
                </tr>
                <?php if(is_array($lang_list) || $lang_list instanceof \think\Collection || $lang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $lang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lang): $mod = ($i % 2 );++$i;?>
                <tr>
                    <th>代表图片（<?php echo htmlentities($lang['title']); ?>）</th>
                    <td>
                        <div>
                            <a href="javascript:;" data-server="<?php echo url('uploadfile'); ?>" data-display="imageDisplay_<?php echo htmlentities($i); ?>" data-path="news" id="wuPickImage_<?php echo htmlentities($i); ?>">选择图片</a>
                            <span class="help-block">格式：jpg，png，gif，jpeg；尺寸：-- x -- px</span>
                        </div>
                        <div id="imageDisplay_<?php echo htmlentities($i); ?>">
                            <input type="hidden" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][image]" value="<?php echo htmlentities($infos[$lang['lang_code']]['image']); ?>" class="js-file-input" />
                            <input type="hidden" name="asset_id[]" class="js-asset-input" />
                            <?php if(empty($infos[$lang['lang_code']]['image']) || (($infos[$lang['lang_code']]['image'] instanceof \think\Collection || $infos[$lang['lang_code']]['image'] instanceof \think\Paginator ) && $infos[$lang['lang_code']]['image']->isEmpty())): ?>
                            <img class="data-img js-img" data-default="/static/admin/images/thumbnail.png" src="/static/admin/images/thumbnail.png" />
                            <?php else: ?>
                            <img class="data-img js-img" data-default="/static/admin/images/thumbnail.png" src="<?php echo htmlentities($infos[$lang['lang_code']]['image']); ?>" />
                            <?php endif; ?>
                            <a class="deletefile js-deletefile" href="javascript:;"><i class="fa fa-close"></i> 删除</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <th>排序</th>
                    <td><input class="form-control w-md" type="text" name="data[sort]" value="<?php echo htmlentities($data['sort']); ?>" /></td>
                </tr>
                <tr>
                    <th>状态</th>
                    <td>
                        <label><input type="radio" name="data[status]" value="1" checked /> 显示</label>
                        <label><input type="radio" name="data[status]" value="0" <?php if($data['status'] == '0'): ?>checked<?php endif; ?> /> 隐藏</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php if(is_array($lang_list) || $lang_list instanceof \think\Collection || $lang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $lang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lang): $mod = ($i % 2 );++$i;?>
    <div class="tab-pane fade" id="tab_<?php echo htmlentities($lang['lang_code']); ?>">
        <input type="hidden" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][id]" value="<?php echo htmlentities($infos[$lang['lang_code']]['id']); ?>" />
        <table class="table table-bordered table-hover table-data">
            <tbody>
                <tr>
                    <th>标题</th>
                    <td><input class="form-control w-lg" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][title]" value="<?php echo htmlentities($infos[$lang['lang_code']]['title']); ?>" /></td>
                </tr>
                <tr>
                    <th>副标题</th>
                    <td><input class="form-control w-lg" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][sub_title]" value="<?php echo htmlentities($infos[$lang['lang_code']]['sub_title']); ?>" /></td>
                </tr>
                <tr>
                    <th>作者</th>
                    <td><input class="form-control w-md" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][author]" value="<?php echo htmlentities($infos[$lang['lang_code']]['author']); ?>" /></td>
                </tr>
                <tr>
                    <th>来源</th>
                    <td><input class="form-control w-md" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][source]" value="<?php echo htmlentities($infos[$lang['lang_code']]['source']); ?>" /></td>
                </tr>
                <tr>
                    <th>外链</th>
                    <td><input class="form-control w-lg" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][outlink]" value="<?php echo htmlentities($infos[$lang['lang_code']]['outlink']); ?>" /></td>
                </tr>
                <tr>
                    <th>描述</th>
                    <td>
                        <textarea name="lang[<?php echo htmlentities($lang['lang_code']); ?>][brief]" class="form-control w-lg" rows="4"><?php echo htmlentities($infos[$lang['lang_code']]['brief']); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>内容</th>
                    <td>
                        <textarea class="ckeditor" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][content]"><?php echo htmlentities($infos[$lang['lang_code']]['content']); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>SEO标题</th>
                    <td><input class="form-control w-lg" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][meta_title]" value="<?php echo htmlentities($infos[$lang['lang_code']]['meta_title']); ?>"/></td>
                </tr>
                <tr>
                    <th>SEO关键词</th>
                    <td><input class="form-control w-lg" type="text" name="lang[<?php echo htmlentities($lang['lang_code']); ?>][meta_kws]" value="<?php echo htmlentities($infos[$lang['lang_code']]['meta_kws']); ?>"/></td>
                </tr>
                <tr>
                    <th>SEO描述</th>
                    <td><textarea name="lang[<?php echo htmlentities($lang['lang_code']); ?>][meta_desc]" class="form-control w-lg" rows="4"><?php echo htmlentities($infos[$lang['lang_code']]['meta_desc']); ?></textarea></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

        
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
            <?php if(is_array($lang_list) || $lang_list instanceof \think\Collection || $lang_list instanceof \think\Paginator): $i = 0; $__LIST__ = $lang_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lang): $mod = ($i % 2 );++$i;?>
            initImageWebUploader("#wuPickImage_<?php echo htmlentities($i); ?>");
            <?php endforeach; endif; else: echo "" ;endif; ?>
        });
    </script>


    </body>
</html>

