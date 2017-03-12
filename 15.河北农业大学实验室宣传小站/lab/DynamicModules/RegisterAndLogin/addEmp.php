<html>
<head>
<title>添加雇员</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<h1>添加雇员</h1>
<form action="EmpController.php?do=add" method="post">
<table>
<!-- 建议大家这里给text取名的时候，就和数据库的字段保持一致 -->
<tr><td>名字</td><td><input type="text" name="name" /></td></tr>
<tr><td>密码</td><td><input type="password" name="passwd" /></td></tr>
<tr><td>电子邮件</td><td><input type="text" name="email" /></td></tr>

<tr><td><input type="submit" value="添加用户"/></td><td><input type="reset" value="重新填写" /></td></tr>
</table>
</form>
</html>
