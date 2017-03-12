<?php


	//验证用户是否合法的代码
	function userIsValid(){
		session_start();
		if(!isset($_SESSION['loginuser'])){
			header("location: login.php?errno=4");
			exit();
		}
		
	}

	function getLastTime(){
		
			//直接写
		//empty isset 函数又区别!!
		//isset 函数可以判断某个变量是否设置过
		//empty 函数判断该变量是为空(empty函数再如下情况会返回真)
		date_default_timezone_set("PRC");
		if(!isset($_COOKIE['lasttime'])){
			//获取当前时间，然后保存
			setcookie("lasttime",date('Y-m-d H:i:s'),time()+3600);
			echo '欢迎你第一次登陆';
		}else{
			echo $_COOKIE['lasttime'];
			setcookie("lasttime",date('Y-m-d H:i:s'),time()+3600);
			
		}
	}
	
	//得到上次的id
	function getCookieKey($key){
		
		if(isset($_COOKIE[$key])){
			echo $_COOKIE[$key];
		}else{
			echo "";
		}
		
	}
?>