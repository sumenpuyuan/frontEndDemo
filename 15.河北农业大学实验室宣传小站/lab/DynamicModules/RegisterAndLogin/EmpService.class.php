<?php

	require_once 'SqlHelper.class.php';

	class EmpService{
		
	
		
		//1.提供一个多少页函数
	/*	function getPageCount($pageSize){
			
			$sql="select count(*) from emp";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			
			//取出又有多少记录
			if($row=mysql_fetch_row($res)){
				$rowCount=$row[0];
				
			}
			//关闭资源，关闭连接
			mysql_free_result($res);
			//$sqlHelper->my_close();;
			return ceil($rowCount/$pageSize);
			
			
		}
		
		//2.提供方法返回应当显示的雇员列表
		function showEmpByPage($pageSize,$pageNow){
			
			$sql="select * from emp limit "
			.($pageNow-1)*$pageSize.",".$pageSize;
			$sqlHelper=new SqlHelper();
			//操作数据库..
			
			return $sqlHelper->execute_dql2($sql); 
			
		}*/
		
		//3.把上面的两个函数合并
		//mysql->sql（好好学习）
		/**
		 * Enter description here...
		 *
		 * @param unknown_type $fenyePage
		 * @example 
		 */
		function showEmpByPage2($fenyePage){
			
			$sqls[0]="select count(*) from emp";
			$sqls[1]="select * from emp limit "
			.($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			
			
			
			$sqlHelper=new SqlHelper();
			//因为分页不只是 emp表分页，还有其它
			$sqlHelper->execute_dql_page($sqls,$fenyePage);
			
			//关闭!!!!
			$sqlHelper->my_close();
			
		}
		
		//根据id删除一个用户
		/**
		 * Enter description 该函数功能是完成删除用户
		 *
		 * @author 韩顺平
		 * @param $id 表示输入一个id,是一个整数
		 * @return 0 表示失败  1 成功，并且有行数受到影响 2: 成功，没有行数受到影响
		 */
		function deleteById($id){
			$sqlHelper=new SqlHelper();
			$sql="delete from emp where empid=$id";
			$result=$sqlHelper->execute_dml($sql);
			$sqlHelper->my_close();
			return $result;
			
		}
		
		//添加用户
		function addEmp($name,$passwd,$email){
			 
			//组织$sql  password  passwd 
			$passwd=md5($passwd);
			$sql="insert into emp (name,passwd,email) value('$name','$passwd','$email')";
			$sqlHelper=new SqlHelper();
			$result=$sqlHelper->execute_dml($sql);
			$sqlHelper->my_close();
			return $result;
			
		}
		
		
		//提供一个通过
		function seaEmp($keyword,$type,$fenyePage){
			
			
			/*$sqls[0]="select count(*) from emp ";
			$sqls[1]="select * from emp limit "
			.($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			
			
			
			$sqlHelper=new SqlHelper();
			//因为分页不只是 emp表分页，还有其它
			$sqlHelper->execute_dql_page($sqls,$fenyePage);
			
			//关闭!!!!
			$sqlHelper->my_close();*/
			
			
			//组织 sql
			//type是模糊查询
			if ($type=="1") {
				$sql[0]="select count(*) from emp where name like '%$keyword%'";
				$sql[1]="select * from emp where name like '%$keyword%' limit "
				.($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			
			
			}else if($type=="2"){
				//$sql="select * from emp where name='$keyword'";
			}
			
			$sqlHelper=new SqlHelper();
			
			
			//$arr=$sqlHelper->execute_dql2($sql);
			
			$sqlHelper->execute_dql_page($sql,$fenyePage);
			
			$sqlHelper->my_close();
			
			
		}
		
		//更新用户
		function updateEmp($name,$email,$id){
			
			//组织$sql  password  passwd 
			
			$sql="update  emp set name='$name',email='$email' where empid=$id";
			$sqlHelper=new SqlHelper();
			$result=$sqlHelper->execute_dml($sql);
			$sqlHelper->my_close();
			return $result;//0,1,2
		}
		
		function getEmpById($id){
			
			$sql="select * from emp where empid=$id";
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->execute_dql2($sql);
			$sqlHelper->my_close();
			return $arr;
		}
		
		}
?>