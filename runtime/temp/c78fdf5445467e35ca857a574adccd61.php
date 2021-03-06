<?php /*a:2:{s:73:"/www/wwwroot/love.tongbayun.com/application/admin/view/index/welcome.html";i:1633531198;s:71:"/www/wwwroot/love.tongbayun.com/application/admin/view/public/head.html";i:1633531198;}*/ ?>
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

<div class="index-wrap">

    <div class="index-top">
        <div class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle"></i>
            <span>为了便于您的阅读，建议使用浏览器: 360 极速模式、IE9、 Google 10. Firefox 3.2以上版本访问该系统。<br/>如果您的屏幕分辨率较小，请使用快捷键Ctrl+"-进行屏募缩放。</span>
        </div>
        <div class="index-top-admin">
            <div class="index-top-portrait"><img src="/static/admin/images/portrait.svg"> </div>
            <div class="index-top-con">
                <div class="index-top-tit">你好，<?php echo htmlentities($auth_info['account']); ?>，祝你开心每一天。</div>
                <div class="index-top-ad"><?php echo htmlentities($auth_info['group_name']); ?>，当前版本号V1.8 <a href="https://share.weiyun.com/1vq4Np98" target="_blank">点击查看补丁包</a></div>
            </div>
        </div>
    </div>
</div>

<style>
    .index-wrap{
        background:#f8f8f8;
    }
    .index-top{
        padding:2% 2%;
        /*margin:0 2%;*/
        border-bottom:1px solid #eee;
        background:#fff;
        -webkit-box-shadow:0 0 15px rgba(0,0,0,0.05);
        -moz-box-shadow:0 0 15px rgba(0,0,0,0.05);
        -o-box-shadow:0 0 15px rgba(0,0,0,0.05);
        box-shadow:0 0 15px rgba(0,0,0,0.05);
        /*margin-top: 25px;*/
    }

    .index-top:after{
        display:block;
        content: ' ';
        clear:both;
    }
    .alert-danger{
        color: #2f4050;
        background-color: #e7eef5;
        border-color: #e7eef5;

        -webkit-box-shadow:0 0 15px rgba(0,0,0,0.05);
        -moz-box-shadow:0 0 15px rgba(0,0,0,0.05);
        -o-box-shadow:0 0 15px rgba(0,0,0,0.05);
        box-shadow:0 0 15px rgba(0,0,0,0.05);
    }
    .alert-danger .fa{
        margin-right: 12px;
        font-size: 26px;
        margin-top: 4px;
        /*color:#999;*/
    }
    .alert-danger{
        display: flex;
    }
    .index-top-admin{

    }
    .index-top-portrait{
        float:left;
        margin-right:10px;
    }
    .index-top-con{
        float:left;
        margin-top:6px;
        font-size:15px;
        line-height:25px;
    }
    .index-top-ad{
        color:#999;
    }


    .index-con{
        padding:2% 2%;
    }
    .index-con:after{
        display:block;
        content:" ";
        clear:both;
    }
    .index-con-tit{
        font-size:22px;
        font-weight:bold;
        padding-bottom:15px;
        color:#2f4050;
    }

    .index-con-li{
        width: 17.6%;
        text-align: center;
        margin-right: 3%;
        float:left;
        border:1px solid #efefef;
        border-radius:5px;
        padding:25px 0;
        display:block;
        color:#fff;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
        background:#fff;

        -webkit-box-shadow:0 0 15px rgba(0,0,0,0.03);
        -moz-box-shadow:0 0 15px rgba(0,0,0,0.03);
        -o-box-shadow:0 0 15px rgba(0,0,0,0.03);
        box-shadow:0 0 15px rgba(0,0,0,0.03);
    }
    .index-con-li:last-of-type{
        margin-right:0;
    }

    .index-con-li:nth-of-type(1){
        background:#fd397a;
    }
    .index-con-li:hover:nth-of-type(1){
        background:#fff;
        color:#fd397a;
    }
    .index-con-li:hover:nth-of-type(1) svg path{
        fill:#fd397a;
    }
    .index-con-li:nth-of-type(2){
        background:#5867dd;
    }
    .index-con-li:hover:nth-of-type(2){
        background:#fff;
        color:#5867dd;
    }
    .index-con-li:hover:nth-of-type(2) svg path{
        fill:#5867dd;
    }
    .index-con-li:nth-of-type(3){
        background:#1dc9b7;
    }
    .index-con-li:hover:nth-of-type(3){
        background:#fff;
        color:#1dc9b7;
    }
    .index-con-li:hover:nth-of-type(3) svg path{
        fill:#1dc9b7;
    }
    .index-con-li:nth-of-type(4){
        background:#2f4050;
    }
    .index-con-li:hover:nth-of-type(4){
        background:#fff;
        color:#2f4050;
    }
    .index-con-li:hover:nth-of-type(4) svg path{
        fill:#2f4050;
    }
    .index-con-li:nth-of-type(5){
        background:#ffb822;
    }
    .index-con-li:hover:nth-of-type(5){
        background:#fff;
        color:#ffb822;
    }
    .index-con-li:hover:nth-of-type(5) svg path{
        fill:#ffb822;
    }

    .index-con-li svg path{

        fill:#fff;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }
    .index-con-li:hover{
        background:#2f4050;
        color:#fff;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }
    .index-con-li:hover svg path{
        fill:#fff;
        -webkit-transition: 400ms;
        -moz-transition: 400ms;
        -o-transition: 400ms;
        transition: 400ms;
    }

    .index-con-li-fa{

    }
    .index-con-li svg{
        max-width:50px;
        max-height:50px;
    }
    .index-con-li-fa img{
        max-width:50px;
        max-height:50px;

    }
    .index-con-li-tit{
        font-size:15px;
        font-weight:bold;
        padding-top:10px;
    }



    .index-bot{
        padding:0.5% 2% 2%;
    }
    .index-bot:after{
        display:block;
        content:" ";
        clear:both;
    }
    .index-bot-li{
        float:left;
        width:48.5%;
        margin-right:3%;

        -webkit-box-shadow:0 0 15px rgba(0,0,0,0.03);
        -moz-box-shadow:0 0 15px rgba(0,0,0,0.03);
        -o-box-shadow:0 0 15px rgba(0,0,0,0.03);
        box-shadow:0 0 15px rgba(0,0,0,0.03);
        border-radius:5px;
    }
    .index-bot-li:last-of-type{
        margin-right:0;
    }

    .index-bot-li .table td,.index-bot-li .table th{
        padding:12px 15px;
        font-size:14px;
    }
    .index-bot-li .table th:last-of-type,.index-bot-li .table td:last-of-type{
        text-align:right;
    }
    .index-bot-li .panel-default>.panel-heading{

        font-size:18px;
        border-color: #efefef;
        background:#fff;
        font-weight: bold;
        padding-bottom:20px;
        padding-top:20px;
        color:#2f4050;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{

        border-color: #efefef;
    }
    .panel{
        margin-bottom:0;
    }

    .panel-default{
        border-color: #fff;
    }


    .panel-heading a{
        float:right;
        color:#657686;
        font-size:14px;
        line-height:23px;
    }
    .panel-heading .fa{
        margin-left:3px;
    }
</style>