<?php
	require_once ("../SqlHelper.class.php");
	class UserService 
	{
		function checkUser($name,$passwd)//检查用户是否合法的方法
		{
			$sqlHelper=new SqlHelper();
			$sql="select * from emp where name='$name'";
			var_dump($sql);
			//$res = mysql_query ($sql) or die ( "查询失败" . mysql_error () );
			$res=$sqlHelper->execute_dql($sql);
			var_dump($res);
			$row=mysql_fetch_row($res);
			print_r($row);
			print_r($row);
			if($row)
			{
				if(md5($passwd)==$row[0])
					return "ok";
				else
				{
					return "1";
				}
			}
			else
			{
				var_dump($row);
				die("2");
				//die("var_dump($row)");
				return 2;
			}
			mysql_free_result($res);
			$sqlHelper->my_close();
		}
		
	}
?>