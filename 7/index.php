<?php
error_reporting(0);
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "../inc/ini.php";
?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>里约奥运会门票生成器<?php echo $ini['title']?> </title>
<link rel="shortcuticon" href="http://bi.iwzh.cn/favicon.ico" />
<link type="text/css" rel="stylesheet" href="../css/frozen.css" />
<style>
.ui-header-positive, .ui-footer-positive {
background-color: #000000;
color: #fff;
}
a {
color: #000000;
}
</style>
</head>
<body ontouchstart="">

<header class="ui-header ui-header-positive ui-border-b">
	<h1>里约奥运会门票生成器图片在线制作一键生成器-网页版</h1>
</header>

<div class="wrapper"><br>
<img class="img-thumbnail" src="http://bi.iwzh.cn/paper/liyueaoyunhui/img.php?txt1=<?php echo $_GET["txt1"]; ?>&txt2=<?php echo $_GET["txt2"]; ?>
	" width="50%" style="margin:30px 25%;"/>
	<div class="ui-form">
    	<form action="">
        	<div class="ui-form-item ui-border-b">
            	<label for="#">姓名</label>
            	<input type="text" name="txt1" placeholder="输入你的姓名"/>
        	</div>
        	
			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-danger">确定</button>
			</div>
    	</form>
	</div>
		﻿<style>
.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style>
	<div style="padding:15px 15px;height:80px;"><a class="ui-btn-lg ui-btn-danger" href="http://bi.iwzh.cn" target="_blank">更多装X功能>></a></div>
</div>
<footer class="ui-footer ui-footer-btn">
	<ul class="ui-tiled ui-border-t">
		<li class="ui-border-r"><a href="../"><div>更多装逼功能</div></a></li>
		<li class="ui-border-r"><a onClick="show()"><div>关注装逼神器</div></a></li>
		
	</ul>
</footer>
<div id="follow" class="follow">
	<span class="close" onClick="hide()">×</span>
	<p>微信扫一扫</p>
	<p>关注装逼神器</p>	
	<img src="//bi.iwzh.cn/img/qrcode.png">
</div>
<script type="text/javascript">
function show(){
	document.getElementById("follow").style.display = "block"; 
}
function hide(){
	document.getElementById("follow").style.display = "none"; 
}
</script>
<script src="http://s4.cnzz.com/z_stat.php?id=1258199521&web_id=1258199521" language="JavaScript"></script>
</body>
</html></body>
</html>