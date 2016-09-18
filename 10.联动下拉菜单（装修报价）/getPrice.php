<?php
	header("Content-Type:text/html; charset=utf-8");
	$con = mysql_connect("localhost","root","");
	$province=$_POST['province'];
	$city=$_POST['city'];
	$area=$_POST['area'];
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("house",$con);
	$sql = "select danjia from hP where province='$province' 
	and field='$city'";
	//$sql="select * from hP";
	mysql_query("set names 'utf8'");
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)){
		echo $row[0]*$area."万元";
	}
?>