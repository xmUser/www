<?php
	require 'conn.php';
	function insert(){
		$conn = conn();
		$sql = "INSERT INTO userList (name, sex, age, phone, company) VALUES ('新人', '女', '22', '13700001111', '北京***公司')";
		if ($conn->query($sql) === TRUE) {
		    echo "新记录插入成功";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
		$conn->close();
	}
	insert();

?>