<?php
	
	require_once 'MySQLHelper.php';
	class Myservice{
		function test1($fenye){
			$fenye->pageCount=45;
			//排长
			$mySQLHelper=new MySQLHelper();
			//execute_dql_fenye
			$mySQLHelper->execute_dql_fenye($fenye);
		}
	}
?>