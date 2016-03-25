<!--WeChat Autho
====================================================== -->
<?php

    session_start();

    $_SESSION['url'] = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
    if(!isset($_SESSION["openid"]) && !isset($_SESSION["headimgurl"]) && !isset($_SESSION["nickname"]))
    {
        include_once 'weChat/weChatAutho.php';
    }else
    {
    	// userinfo
        //echo 'openid:'.$_SESSION['openid'] . '<br />';
        //echo 'headimgurl:'.$_SESSION['headimgurl'] . '<br />';
        //echo 'nickname:'.$_SESSION['nickname'] . '<br />';
    }


?>
