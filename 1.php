<?php
	try{
		$db = new PDO('mysql:dbname=test;host=localhost','root','lijiang');
	}catch (PDOException $e){
		echo '数据库连接失败：'.$e->getMessage();
		exit;
	}
	$query = "update contancInfo set phone='sdfsdf' where name='gaomen'";
	$affected = $db->exec($query);






