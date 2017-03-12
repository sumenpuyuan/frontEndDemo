<?php
	
	//接收用户要删除的用户的id
	//获取用户传输的do  是 
	//通过empService的一个方法.
	require_once 'EmpService.class.php';
	$empService=new EmpService();
	if(!empty($_GET['do'])){
	
			//获取do值
			$do=$_GET['do'];
			//希望执行删除
			if($do=='delete'){
				
				//说明用户希望删除某个用户
				$id=$_GET['id'];
				//删除.这里不要连接数据.
				
				
				if($empService->deleteById($id)==1){
					//成功!
					header("Location: ok.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}else{
					//失败!
					header("Location: error.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}
				
			}else if($do=='add'){
				
				//获取提交信息
				$name=$_POST['name'];
				$passwd=$_POST['passwd'];
				$email=$_POST['email'];
				//php可以使用preg正则验证.
				
				if($empService->addEmp($name,$passwd,$email)==1){
					
					//成功!
					header("Location: ok.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}else{
					//失败!
					header("Location: error.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}
				
			}else if($do=='update'){
				
				//接收用户新的数据
				//获取提交信息
			
				$name=$_POST['name'];				
				$email=$_POST['email'];
				$id=$_POST['id'];
				//update这里可能是用户没有修改就直接提交，
				$res=$empService->updateEmp($name,$email,$id);
				if($res==1){
					//成功!
					header("Location: ok.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}else if($res==0){
					//失败!
					header("Location: error.php");
					//这里我们建议增加exit函数，提高效率
					exit();
				}else if($res==2){
					header("content-type:text/html;charset=utf-8");
					echo "<script>window.alert('没有数据修改'); location.href='main.php';</script>";

					//echo '没有修改数据';
				}
			}
	}
?>