<?php /*a:1:{s:67:"/www/wwwroot/love.tongbayun.com/template/white/cn/wxpay/wx_pay.html";i:1632984524;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微信订单支付</title>
</head>
<body>

<script>
    function onBridgeReady(){
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest', {
                "appId":"<?php echo htmlentities($jsapi['appId']); ?>",     //公众号名称，由商户传入
                "timeStamp":"<?php echo htmlentities($jsapi['timeStamp']); ?>",         //时间戳，自1970年以来的秒数
                "nonceStr":"<?php echo htmlentities($jsapi['nonceStr']); ?>", //随机串
                "package":"<?php echo htmlentities($jsapi['package']); ?>",
                "signType":"<?php echo htmlentities($jsapi['signType']); ?>",         //微信签名方式：
                "paySign":"<?php echo htmlentities($jsapi['paySign']); ?>" //微信签名
            },
            function(res){
                if(res.err_msg == "get_brand_wcpay_request:ok" ){
                    // 使用以上方式判断前端返回,微信团队郑重提示：
                    //res.err_msg将在用户支付成功后返回ok，但并不保证它绝对可靠。
                    location.href="<?php echo htmlentities($url); ?>";
                }
            });
    }

    window.onload=function(){
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
                document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
            }
        }else{
            onBridgeReady();
        }
    }
</script>
</body>
</html>