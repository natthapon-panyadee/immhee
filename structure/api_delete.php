<?php 
require_once('../dbconfig.php');
	if (isset($_GET['id'])) {
		$sql = "DELETE FROM menubill WHERE menu_bill = " .$_GET['id'];

		echo $sql;
		if($conn->query($sql)){
			header('location:../admin.php');
			echo "สำเร็จ";

		}else{
			echo "ผิดพลาด";
		}
	}
 ?>