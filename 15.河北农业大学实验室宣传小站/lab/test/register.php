
<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	if($password!=$password2)
	{
		exit("两次输入密码不一致");
	}
	if($username=="")
	{
		exit("用户名不能为空");
	}
	if($password=="")
	{
		exit("密码不能为空");
	}
	echo "您通过了用户信息测试";
	//将数据进入到数据库
	$host="localhost";
	$user="zhoushao";
	$pwd="Zhou74110";
	$dbname="zhoushao_labuser";
	$connection=mysqli_connect($host,$user,$pwd);
	if($connection)
	{
		echo "数据库链接成功";
		mysqli_select_db($connection,$dbname);
		$sql="insert into userinfo (UserName,Password) values ('$username','$password')";
		$result=mysqli_query($connection,$sql);
		if($result)
		{
			echo $username."注册成功";
		}
		else
		{
			die("注册失败");
		}

	}
	else
	{
		echo "数据库链接失败";
	}

?>
