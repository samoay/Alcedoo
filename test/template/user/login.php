<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<link rel="stylesheet" href="css/style.css" />
<meta name="description" content="Build software better, together." />
<title></title>
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".loginButton").click(function(){
		console.log("login button clicked");
		$(".loginForm").submit();
	});
});
</script>
</head>

<body>
<!--[if lte IE 8]>
    <div class="error chromeframe">您正在使用<strong>漏洞百出</strong>的浏览器，为了正常地访问本网站，请升级您的浏览器 <a target="_blank" href="http://browsehappy.com">立即升级</a></div>
<![endif]-->

<?php $this->template('header.php'); ?>

<div class="contentBox">
	<div class="loginBox">
	<form name="LoginForm" method="post" class="loginForm">
    	<div class="loginFormHeader">
        	<h2>Login</h2>
        </div>
    	<div class="loginFormBody">
        	<label for="username">Username</label>
            <input autocapitalize="off" autofocus="autofocus" class="input-block" id="login_field" name="username" tabindex="1" type="text">
            <label for="password">Password</label>
            <input autocapitalize="off" autofocus="autofocus" class="input-block" id="login_field" name="password" tabindex="1" type="password">
            <a href="#" class="loginButton">Login</a>
        </div>
    </form>
    </div>
</div>

<?php $this->template('footer.php'); ?>

</body>
</html>
