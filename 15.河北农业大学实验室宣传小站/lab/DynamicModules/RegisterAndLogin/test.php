<?php
		//团长
		require_once 'Myservice.php';
		class FenyePage{
	
		var $pageNow=1;
		var $pageCount;
		var $pageSize=6;
		var $rowCount;
		var $navigator;
		var $res="";
		var $goUrl;
		}
		
		$fenye=new FenyePage();
		$fenye->pageSize=12;
		$fenye->pageNow=1;
		
		
		//连长
		$myService=new Myservice();
		
		//连长
		$myService->test1($fenye);
		
		echo $fenye->pageCount;
		echo $fenye->navigator;
		
		
		
		
		
?>