<?php
	header("Content-type:text/html,charset=utf-8");
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="")
	{
		die("用户名不能为空");
	}
	if($password=="")
	{
		die("用户密码不能为空");
	}
	$host="localhost";
	$user="zhoushao";
	$pwd="Zhou74110";
	$dbname="zhoushao_labuser";
	$connection=mysqli_connect($host,$user,$pwd);
	if($connection)
	{
		mysqli_select_db($connection,$dbname);
		$sql = "select * from userinfo where UserName=$username and Password=$password";
		$result=mysqli_query($connection,$sql);
		if($result)
		{
			$row=mysqli_fetch_array($result);
			if($row)
			{
				echo $row['UserName']."登录成功";
			}
			else{
				echo "密码不正确，或者用户不存在";
			}			
		}
		else
		{
			die("登陆失败");
		}

	}

?>