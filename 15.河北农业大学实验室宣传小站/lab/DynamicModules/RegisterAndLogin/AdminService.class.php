<?php

	require_once 'SqlHelper.class.php';

	class AdminService {
		
		//提供验证用户是否合法的方法
		function checkAdmin($admId,$passwd){
			
			//业务处理->把sql语句组织[这里体现出对业务逻辑的处理]
			$sqlHelper=new SqlHelper();
			
			
			//1.获取$admId密码进行比较
			$sql="select passwd from admin where admid=$admId";
			//这里我们需要去操作数据库，但是Service层(业务层)，不要直接操作
			
			$res=$sqlHelper->execute_dql($sql);
			//取出密码
			if($row=mysql_fetch_row($res)){
				
				if(md5($passwd)==$row[0]){
					return "ok";
				}else{
					return "1";
				}
				
			}else{
				return "2";
			}
			//释放资源..
			mysql_free_result($res);
			//关闭连接.
			$sqlHelper->my_close();
			
		}
	}
?>