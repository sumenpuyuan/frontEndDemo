<?php
	require_once '../EmpService.class.php';
	 $empService=new EmpService();
	 
	 
	 
	/* if($empService->deleteById(89)==1){
	 	echo '测试ok';
	 }else{
	 	echo '函数又问题';
	 }*/
	 
	 //测试分页函数
	 $fenyePage=new FenyePage();
	 $fenyePage->pageNow=1;
	 $fenyePage->pageSize=4;
	 $fenyePage->goUrl="test.php";
	 $empService->showEmpByPage2($fenyePage);
	 
	 echo $fenyePage->navigator;
	 
	 
?>