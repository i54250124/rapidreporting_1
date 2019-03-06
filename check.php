<?php

include 'db.php';

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '981026';
$db = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $db)
{
	die('连接失败：'.mysqli_error($db));
}
mysqli_query($db, "set names utf8");

mysqli_select_db($db, 'test1');

$sql = "select * from test_sql WHERE cond='2';";
$res = mysqli_query($db,$sql);
$row = $res->fetch_all(MYSQLI_BOTH);

$DB = DB::getIntance();
if(mysqli_num_rows($res)==0)
{
	$waiting = array ('cond' => 0,);
	$lock = array ('cond' =>2,);
	$res_lock = $DB->update('test_sql',$lock,$waiting,2);
	
	/*
	*进行计算
	*/
	
	//判断是否执行完成
	
	//把处理过的更新为已完成
}


mysqli_free_result($res);

mysqli_close($db);

?>