<html>
	<head><title>网络留言板模式</title></head>
	<body>
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
					list($username, $title, $message)=explode("||",$line); 
					//判断每部分是否为空
					if($username!="" && $title!="" && $message!="") {	
						echo $username.'说：';  		//输出用户名
						echo '&nbsp;'.$title.'，';  	//输出标题
						echo $message."<hr>";   		//输出留言主题信息
					}
				}
				flock($fp, LOCK_UN);           			//释放锁定
				fclose($fp);                     		//关闭文件资源
			}
		?>
		
        <!-- 以下为用户输入表单界面（GUI）-->
		<form action="" method="post">
			用户名：<input type="text" size=10 name="username"><br>
			标&nbsp;&nbsp;题：<input type="text" size=30 name="title"><br>
			<textarea name="mess" rows=4 cols=38>请在这里输入留言信息！</textarea>
			<input type="submit" name="sub" value="留言">
		</form>
	</body>
</html>
