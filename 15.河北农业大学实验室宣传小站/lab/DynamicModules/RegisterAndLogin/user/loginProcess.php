<?php
	require_once "UserService.class.php";
	if(!empty($_POST['name'])){
		$name=$_POST['name'];
	}
	

	//2.接收密码
	if(!empty($_POST['passwd'])){
		$passwd=$_POST['passwd'];
	}
	//echo $name.$passwd;
	//$userService=new UserService();
	if(isset($_REQUEST['authcode']))
	{
		session_start();
		if($_REQUEST['authcode']==$_SESSION['authcode'])
		{
			$userService=new UserService();
			$res=$userService->checkUser($name,$passwd);
			var_dump($res);
			if($res=="ok")
			{
				if(isset($_POST['keepid']))
				{
					setcookie("name",time()+3600);
				}
				else
				{
					if(isset($_COOKIE['name']))
						setcookie("name",time()-10);
				}
				$_SESSION['loginuser']=$name;
				header("Location:main.php");
			}
			else if($res=="2")
				header("Location:login.php?errno=2");
			else if($res=="1")
				header("Location:login.php?errno=1");
		}
		else
		{
			header("Location:login.php?errno=3");
			exit();
		}
	}
	else
	{
		header("Location:login.php?errno=3");
		exit();
	}

?>