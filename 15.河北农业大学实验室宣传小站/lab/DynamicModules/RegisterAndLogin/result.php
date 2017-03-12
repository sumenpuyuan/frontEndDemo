<?php
	$userid=$_REQUEST['userid'];
	 $pwd=$_REQUEST['pwd'];
	 echo "您输入的用户名为".$userid."<br>";
	 echo "您输入的密码为".$pwd."<br>";
     if(isset($_REQUEST['authcode']))
     {
     	session_start();
		
     	if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) 
     	{    
		   // header('Content-type: text/html; charset=UTF8;'); 
     		echo '<font color="#0000CC">验证码输入正确hello</font>';
			
			
	    }
     	else{
			//header('Content-type: text/html; charset=UTF8'); 
            echo '<font color="#CC0000">验证码输入错误wrong</font>';
		    
     	    }
     	exit();
     }
	header('Content-type: text/html; charset=UTF8'); 
?>