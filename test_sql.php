<?php

//加载数据库操作类
include 'db.php';

if(!empty($_FILES['up_file']['name']))
{
	//生产ID（暂做随机数处理）
	$order_id = rand(10000,99999);
	
	//储存文件
	$file=$_FILES["up_file"];
	move_uploaded_file($file['tmp_name'],$file['name']);
	
	/*
	*创建名为ID的文件夹
	*将文件从根目录拷贝至该文件夹
	*将根目录下的文件删除
	*/
	
	
	
	
	
	//生成信息
	$insert_data = [
		"id" => $order_id,
		"cond" => "0",
		];
	
	
	//将信息放入队列表
	$db = DB::getIntance();
	$res = $db->insert('test_sql',$insert_data);
	
	
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