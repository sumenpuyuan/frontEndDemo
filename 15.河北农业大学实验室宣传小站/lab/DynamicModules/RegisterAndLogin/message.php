<html>
	<head><title>留言板</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		body{background:#f8f7f5;}
		#message{width:340px;height:400px;background:#fff;border:1px solid #ddd;border-radius:10px;margin:50px auto;}
		#message p.txt input{width:240px; height:35px; border:1px solid #ddd; 
				border-radius:5px;/*css3 圆角样式*/}
		#message .but{width:90px; height:40px; background:#5c307d; color:#fff;border:0px;}
		#usermessage{width:80%;height:200px;margin:0 auto;border:1px solid #cee3e9;background:#f1f7f9;border-radius:10px;position:relative;}
		#usermessage .txt{width:70%;height:100px;margin:0 auto;font-size:17px;font-family:微软雅黑;text-indent:2em;overflow: auto;}
		#usermessage .image{background:red;margin-top:0px;position:relative;}
		#usermessage .image img{float:right;};
	</style>
	
	<link href="/images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

	</head>
	<body>
	<script language="JavaScript">
	function www_zzjs_net(field, countfield, maxlimit) {
	if (field.value.length > maxlimit)
field.value = field.value.substring(0,maxlimit);
else
countfield.value = maxlimit - field.value.length;
}
</script>	
	<?php	include_once "../../head.html";  ?>
        <!-- 以下为用户输入表单界面（GUI）-->
	
	<div id="message">
		<center>
		<form action="" method="post">
			<br><br>
			<p class="txt"><input type="text" size=10 name="username" placeholder="用户名"><p><br><br>
			<p class="txt"><input type="text" size=30 name="title" placeholder="标题"></p><br><br>
			<p class="txt"><textarea name="mess" rows=9 cols=38 placeholder="请在这里输入留言信息！"></textarea></p><br>

			<input class="but" type="submit" name="sub" value="留言">
		</form>
		</div>
	</div>
	
		
<?php
			
			
		
			//声明一个变量保存文件名，在这个文件中保存留言信息
			$filename = "text_data.txt";	
			
			//判断用户是否按下提交按钮，用户提交后则条件成功
			if(isset($_POST["sub"])){	
				//接收表单中三条内容，并整合为一条，使用“||”分隔，使用“<|>”结尾
				$message = $_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."<|>";
				writeMessage($filename, $message); 	//调用自定义函数，将信息写入文件
			}

			if(file_exists($filename))        			//判断文件是否存在，如果存在则条件成立
				readMessage($filename);   				//文件存在则调用自定义函数，读取数据

			/**
				自定义一个向文件中写入数据的函数
				@param	string	$filename	写入的文件名
				@param	string	$message		写入文件的内容，即消息
			*/
			function writeMessage($filename, $message) {	
				$fp = fopen($filename, "a");          	//以追加模式打开文件
				if (flock($fp, LOCK_EX)) {            	//进行排他型锁定（独占锁定）
   					fwrite($fp, $message);           	//将数据写入文件
    					flock($fp, LOCK_UN);           	//同样使用flock()函数释放锁定
				} else {                            	//如果建立独占锁定失败
    					echo "不能锁定文件!";          	//输出错误消息
				}
				fclose($fp);	                        //关闭文件资源
			}
			
			/**
				自定义一个遍历读取文件的函数
				@param	string	$filename	读取的文件名
			*/
			function readMessage($filename){     	
				$fp = fopen($filename, "r");        	//以只读的模式打开文件
				flock($fp, LOCK_SH);           			//建立文件的共享锁定
				$buffer = "";                     		//将文件中的数据遍历后放入这个字符串中
				while (!feof($fp)) {              		//使用while循环将文件中数据遍历出来  
					$buffer.= fread($fp, 1024);   		//读出数据追加到$buffer变量中
				}	
				
				$data = explode("<|>", $buffer);  	    //通过“<|>”将每行留言分隔并存入到数组中
				foreach($data as $line) {      	    	//遍历数组将每行数据以HTML输出
					//将每行数据再分隔 
					if($line == ''){
						
					}else{
						list($username, $title, $message)=explode("||",$line); 
					//判断每部分是否为空
					
					if($username!="" && $title!="" && $message!="") {	
						echo "<div id='usermessage'>";
						echo "<br>";
						echo "<div class='txt'>";
						echo $username.'说：';  		//输出用户名
						echo '&nbsp;'.$title.'，';
						  	//输出标题
						echo $message;  
						echo "</div>";
						echo "<div class='image'>";	
						echo "<img src='/lab/images/liuyan02.gif'>";
						echo "</div>";	
						echo "</div>";		//输出留言主题信息
					}
					
					
					echo "<br><br>";
					}
					
				}
				flock($fp, LOCK_UN);           			//释放锁定
				fclose($fp);                     		//关闭文件资源
			}
		?>
<?php
			include_once "../../footer.html";
		?>
	</body>
</html>
