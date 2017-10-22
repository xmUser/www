<?php
	require 'conn.php';
	function query(){
		$conn = conn();
		$sql = "select * from userlist order by age";
	    $res = $conn->query($sql);
	    if (!$res) {
	        die("sql error:\n" . $conn->error);
	    }
	    $arr = array();
	    while ($row = $res->fetch_assoc()) {
	        array_push($arr,$row);
	    }
	    
	    print_r(json_encode($arr));
	
	    $res->free();
	    $conn->close();
	}
	
	query();

?>