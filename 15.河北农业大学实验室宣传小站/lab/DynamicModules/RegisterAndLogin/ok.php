
<?php
	header("content-type:text/html;charset=utf-8");
	echo "恭喜你操作成功!<a href='main.php'>返回管理页面</a><br/>";
	echo "<span id='timer'>5</span>秒后自动跳转到 管理页面";
?>

<script type="text/javascript">

	function showSec(){
		var myTimer=document.getElementById('timer');
		var sec=myTimer.innerHTML;
		var leftSec=parseInt(sec)-1;
		myTimer.innerHTML=leftSec;
		if(leftSec==0){
			//停止定时器
			window.clearInterval(myInterval);
			//跳转到main.php
			window.location.href='main.php';
			
		}
		
	}

	//window.setTimeout('showSec()',1);
	var myInterval=window.setInterval('showSec()',1000);

</script>