<?php
	require_once '../dbconfig.php';
	session_start();
	if (isset($_POST['menuID'])){
		$menuID = $_POST['menuID'];
		$inputqty = $_POST['inputqty'];


		
		$user_id = $_SESSION['user'];

		$sql = "INSERT INTO bill (menuID, qty,username ) VALUES ('$menuID' ,'$inputqty','$user_id')";
		echo $sql;
		if($conn->query($sql)){
			echo "สำเร็จ";
		}else{
			echo "สมัครสมาชิกผิดพลาด";
		}
		
	}

?>