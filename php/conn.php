<?php 
	
	header('Content-Type: application/json');
	header('Content-Type: text/html;charset=utf-8');
	
	function conn(){
		$mysql_conf = array(
		    'host'    => '127.0.0.1:3306', 
		    'db'      => 'dg', 
		    'db_user' => 'root', 
		    'db_pwd'  => '1234', 
		);

		$conn = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
    
		if ($conn->connect_errno) {
		    die("could not connect to the database:\n" . $conn->connect_error);//诊断连接错误
		}
    
		$conn->query("set names 'utf8';");//编码转化
		$select_db = $conn->select_db($mysql_conf['db']);
    
		if (!$select_db) {
		    die("could not connect to the db:\n" .  $conn->error);
		}

		return $conn;
	}
	conn();

?>
