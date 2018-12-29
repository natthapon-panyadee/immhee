<?php



 if(isset($_POST['inputUsername'])&&isset($_POST['inputPassword'])){
  session_start();
  require_once('../dbconfig.php');
  $sql = "SELECT * FROM userdata WHERE username = '".$_POST['inputUsername']."' AND password = '".md5($_POST['inputPassword'])."'";
  if($result=$conn->query($sql)){
   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
     
     $_SESSION['user'] = $_POST['inputUsername'];
   

     

     date_default_timezone_set("Asia/Bangkok");
     echo "<br> NOW : ".DATE('Y-m-d H:i:s');

      $sql_log="INSERT INTO user_log (user_id,timeLogin) VALUES ('$user_id','".DATE('Y-m-d H:i:s')."')"; 
                  
      echo $sql_log;            
      $result2=mysqli_query($conn,$sql_log);

    }
    echo "เข้าสู่ระบบสำเร็จ";
   }else{
    echo "ชื่อผู้ใช้งาน หรือรหัสผ่าน ไม่ถูกต้อง";
   }

  }else{
   echo "server error";
  }
  $conn->close();
 }


  
?>