<!--WeChat Autho
====================================================== -->
<?php 

    session_start();

     if(!isset($_SESSION["openid"]) && !isset($_SESSION["headimgurl"]) && !isset($_SESSION["nickname"]))
     {
		include_once 'weChat/weChatAutho.php';
	 }else
	 {
	 	// userinfo
		echo 'openid:'.$_SESSION['openid'] . '<br />';
		echo 'headimgurl:'.$_SESSION['img'] . '<br />';
		echo 'nickname:'.$_SESSION['nickname'] . '<br />';
	 }


?>
