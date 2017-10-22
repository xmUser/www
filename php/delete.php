<?php
	require 'conn.php';
	
	$name = $_GET['name'];
	
	function delete($name){
		$conn = conn();
		
		$sql = "select * from userList where name='". $name. "'";
	    $result  = $conn->query($sql);
	    if ($result->num_rows > 0 ) {
	        $arr = array();
		    while ($row = $result->fetch_assoc()) {
		        array_push($arr,$row);
		    }
		    echo json_encode($arr);
	    }else{
	    	die('没有找到' . $name);
	    }
		
		$newSql = "delete from userList where name='". $name ."'";
	    if ($conn->query($newSql) === TRUE) {
	        echo '删除成功';
	    }else{
	    	echo "Error: " . $newSql . "<br>" . $conn->error;
	    }
		
		$conn->close();
	}
	
	delete($name);

?>