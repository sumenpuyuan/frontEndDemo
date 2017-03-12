<html>
<head>
<title>修改雇员</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<?php 

	require_once 'EmpService.class.php';
	//获取id,并查询该用户的信息
	$id=$_GET['id'];
	//通过EmpService来获取该用户信息
	$empService=new EmpService();
	$arr=$empService->getEmpById($id);
	
?>
<h1>修改雇员</h1>
<form action="EmpController.php?do=update" method="post">
<table>
<!-- 建议大家这里给text取名的时候，就和数据库的字段保持一致 -->
<!--  
input type="hidden" name="id" value="?php echo $id?" /-->
<tr><td>id</td><td><input type="text" name="id" readonly="readonly" value="<?php echo $id?>" /></td></tr>
<tr><td>名字</td><td><input type="text" name="name" value="<?php echo $arr[0]['name']?>" /></td></tr>
<tr><td>电子邮件</td><td><input type="text" name="email"  value="<?php echo $arr[0]['email']?>"/></td></tr>

<tr><td><input type="submit" value="修改用户"/></td><td><input type="reset" value="重新填写" /></td></tr>
</table>
</form>
</html>
