<?php
//作者QQ：2698295603 淘宝：https://zaixuasd.taobao.com/  致力于金融数据
error_reporting(0);
include 'db.php';
 $conn = @mysql_connect($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd);
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db($cfg_dbname, $conn);
mysql_query("set names 'utf8'");
$db1='CU1609';
$db2='AG1612';
$db3='AU0';
	$sql_1 = "select name,price,diff,diffRate,jinkai,zuoshou,zuidi,zuigao,time from CU1609 WHERE id =(SELECT MAX(id) FROM  CU1609)";
			//echo $sql_1;
$result = mysql_query($sql_1,$conn);
echo json_encode(mysql_fetch_row($result));
mysql_close($conn);

?>