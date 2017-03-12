//确认删除该用户
	function confirmDel(id){
		//这个函数返回bool
		return window.confirm("真的删除 "+id+"号 用户");
	}

	function go(){

		var pageNow=document.getElementById('pageNow').value;
		//发给manageEmpList.php[get]
		window.location.href='manageEmpList.php?pageNow='+pageNow;
		
	}

	//校验用户输入的值是否是整数.(isNaN) 0123

	function checkPageNow(){

		
		//1.获取用户输入
		var pageNow=document.getElementById('pageNow').value;

		//alert(pageNow);
		//2.校验 isNaN如果不是数，返回真
		/*if(isNaN(pageNow)){
			alert('输入的跳转页数有错误!');
			return false;//!!
		}*/
		//3.这里正则表达式处理
		//pageNow 这个数必须满足,要以1-9,后面的数是0-9的数
		var reg=/^[1-9](\d)*$/; 
		//reg.test(pageNow) 表示使用reg这个规则，来测试一下pageNow字符串是否合法
		//如果合法 ture,否则 false;
		if(pageNow!=""){
			if(!reg.test(pageNow)){
				alert('输入的跳转页数有错误!');
				//把最后输入截掉
				document.getElementById('pageNow').value=pageNow.substring(0,pageNow.length-1);
				return false;	
			}else{
				
				//格式ok
				if(pageNow>mypageCount){
					alert('输入值过大');
					//把最后输入截掉
					document.getElementById('pageNow').value=pageNow.substring(0,pageNow.length-1);
				}
			}
		}else{
			alert('不能为空');
		}

		
		
		
	}
