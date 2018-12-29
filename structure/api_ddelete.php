<?php 
require_once('../dbconfig.php');
	if (isset($_GET['id'])) {
		$sql = "DELETE FROM bill WHERE Idbill = " .$_GET['id'];

		echo $sql;
		if($conn->query($sql)){
			header('location:../shopping-cart.php');
			echo "สำเร็จ";

		}else{
			echo "ผิดพลาด";
		}
	}
 ?>