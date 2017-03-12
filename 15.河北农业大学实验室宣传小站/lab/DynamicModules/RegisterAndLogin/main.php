<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>管理员界面</title>
<link href="../../images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<style type="text/css">
	*{margin:0px;}
	body{background:#f8f7f5;}

	#Top{width:100%; height:120px; background:#5C307D;}
	#Top #Banner{width:1000px; height:70px;  margin:0px auto;
			padding-top:10px;}
	#Login{width:340px; height:410px; background:#fff; margin:50px auto; border:1px solid #ddd;border-radius:10px;}
	</style>

</head>
<body>
<div id=Top>
<div id="Banner"><img src="../../images/logo.png">
</div>
</div>
<br>
<p style="float:right;">
<?php 

	require_once 'commonFuns.php';
	userIsValid();
	//显示上次登陆
	getLastTime();
?></p>
<center>
<a href='manageEmpList.php'>管理用户</a>&nbsp
<a href='addEmp.php'>添加用户</a>&nbsp
<a href='searchEmp.php'>查找用户</a> &nbsp
<a href='#'>安全退出</a>&nbsp
<a href="http://labpuyuan.nat123.net">图像</a>
</center>
</body>
</html>