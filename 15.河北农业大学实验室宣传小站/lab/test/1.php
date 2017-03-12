<?php
$con = mysql_connect("localhost", "zhoushao", "Zhou74110");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("zhoushao_labuser",$con);
$sql = "SELECT * from emp WHERE name='lvxuejie'";
$result = mysql_query($sql,$con);
var_dump($result);
print_r(mysql_fetch_array($result));

mysql_close($con);
?>