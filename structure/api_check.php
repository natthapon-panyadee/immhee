<?php
	// require_once '/connectDB.php';
session_start();
if (file_exists('../dbconfig.php')) {
    require('../dbconfig.php'); // This is line 38
}
	if (isset($_POST['total'])){
		$total = $_POST['total'];
		$user_id = $_POST['inputid'];

		$dates = DATE('Y-m-d // H:i:s');
		$username = $_SESSION['user'];
		
		$sql = "INSERT INTO menubill ( Idbill, total_price, dates, username) VALUES ( '$user_id', '$total','$dates','$username')";
		echo $sql;
		if($conn->query($sql)){
			echo "สำเร็จ";
		}else{
			echo "ผิดพลาด";
		}
		
	}

?>