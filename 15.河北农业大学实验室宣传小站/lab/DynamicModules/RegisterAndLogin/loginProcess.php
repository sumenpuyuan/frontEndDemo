<?php

	//这里我们验证用户是否合法
	
	//1.接收用户id

	if(!empty($_POST['admid'])){
		$admid=$_POST['admid'];
	}
	

	//2.接收密码
	if(!empty($_POST['passwd'])){
		$passwd=$_POST['passwd'];
	}
	
	if(isset($_REQUEST['authcode']))
     {
     	session_start();
		
     	if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) 
     	{    
		   // header('Content-type: text/html; charset=UTF8;'); 
     		//echo '<font color="#0000CC">验证码输入正确hello</font>';

	//创建AdminService对象
	require_once 'AdminService.class.php';

	$adminService=new AdminService();
	$res=$adminService->checkAdmin($admid,$passwd);
	
	//这里process根据不同的结果，做出相应的处理
	if($res=="ok"){
		
		//这里我们把用户id保存起来
		//接收
		if(isset($_POST['keepid'])){
			//选中
			setcookie("admid",$admid,time()+3600);
		}else{
			//取消
			if(isset($_COOKIE['admid'])){
				setcookie("admid","",time()-100);
			}
		}
		
		//保存该用户的信息到session
		session_start();
		$_SESSION['loginuser']=$admid;
		
		header("Location:main.php");
	}else if($res=="2"){
		header("Location: login.php?errno=2");
	}else if($res=="1"){
		header("Location: login.php?errno=1");
	}

			
			
	    }
     	else{
			//header('Content-type: text/html; charset=UTF8'); 
            //echo '<font color="#CC0000">验证码输入错误wrong</font>';
		header("Location:login.php?errno=3");    
     	    }
     	exit();
     }

	
	

	
	
	

?>