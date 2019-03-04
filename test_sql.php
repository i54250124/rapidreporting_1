<?php

//加载数据库操作类
include 'db.php';

if(!empty($_GET['id']))
{
	//生成信息
	$order_id = $_GET['id'];
	$insert_data = [
		"id" => $order_id,
		"name" => "666",
		];
	
	//将信息放入队列表
	$db = DB::getIntance();
	$res = $db->insert('test1',$insert_data);
	
	print_r ($res);
	/*
	if($res)
	{
		echo "保存成功";
	}
	
	else
	{
		echo "保存失败";
	}
	*/
}

?>