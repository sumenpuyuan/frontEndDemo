<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>用户登录界面</title>
		<meta name="Keywords" content="登录界面">
		<meta name="description" content="登录">	
		<link href="/images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="/css/register.css">
	

</head>
<body>
<?php 
	require_once '../commonFuns.php';
	include_once "../../..//head.html";
?>
<div id="Login">
<h3>用</h3>
<div class="loginCon">
<form  action="loginProcess.php" method="post">

<p class="txt" ><input type="text" name="name"  placeholder="用户名" value='<?php getCookieKey('name'); ?>' /></p>
<p class="txt" ><input type="password" name="passwd" placeholder="用户密码"/></p>
<p>是否保存该用户的id(2周)<input type='checkbox' name='keepid'/></p> <br>
<p><img id="captcha_img" border="1" src="/DynamicModules/RegisterAndLogin/captcha_cn.php?r=<?php echo rand();?>" width="180" height="40">
    <a href="javascript:void(0)" onClick="document.getElementById('captcha_img').src='/DynamicModules/RegisterAndLogin/captcha_cn.php?r='+Math.random()" style="text-decoration:none;color:#000;font-weight:bold;"><font size="2px">换一个</font></a>
   </p>
<br>
<p class="txt"><input type="text" class="yzm" id="vdcode" name="authcode" placeholder="验证码"/>

<p class="txt"><input class="but" type="submit" value="登录" />
<input class="but" type="reset" value="重新填写"/></p>

</div>
</div>

<?php 
	//看看返回错误信息
	//$errno=@$_GET['errno']; //null "" ->false
	
	if(!empty($_GET['errno'])){
		$errno=$_GET['errno'];
		if($errno==1){
			echo "<script>alert('密码输入错误')</script>";
		}else if($errno==2){
			echo "<script>alert('用户名有误')</script>";
		}else if($errno==3){
			echo "<script>alert('验证码输入错误')</script>";					
		}
	}

?>
</form>
hhahha
</body>
</html>