<?php
	require 'conn.php';
	
	$name = $_GET['name'];
	$age = $_GET['age'];
	
	function update($name, $age){
		$conn = conn();
		
		$sql = "update userList set age='". $age ."' where name='". $name ."'";
		$result = $conn->query($sql);
		if($result){
			echo '更新成功';
		}else{
			die('Error:' . $sql. "<br>" . $conn->error);
		}
	
		$conn->close();
	}
	update($name, $age);
	
?>