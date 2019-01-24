
<?php //ไฟล์นี้ทำตามคลิปในยูทูป
session_start();
include("connect.php");

$member_username = $_POST['member_username'];
$member_password = $_POST['member_password'];

if($member_username == ''){
    echo "Plese check username";
} else if($member_password == ''){
    echo "Plese check password";
} else{
    //เป็นการ query จาก database//
    $sql = mysql_query("SELECT * FROM tb_member 
                        WHERE member_username = '$member_username'
                        AND   member_password = '$member_password' ");
    //นับข้อมูลของ data = count result data
    $records = mysql_num_rows($sql);
    if($records <= 0){
        echo "<script>location='success.php';</script>";
    }else{
        while ($user = mysql_fetch_array($sql)) {
            
            if($user['member_status'] == 1)
            {
                //Admin case
                $_SESSION['ses_id'] = session_id();
                $_SESSION['member_username'] = $user['member_username'];
                $_SESSION['member_status'] = 1;
                //ส่งไปหน้าของ admin
                echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
            } else{ 
                
                //User case
                $_SESSION['ses_id'] = session_id();
                $_SESSION['member_username'] = $user['member_username'];
                $_SESSION['member_status'] = 2;
                //ส่งไปหน้าของ user
                echo "<meta http-equiv='refresh' content='1;URL=user.php'>";

            }


        }
    }
}


?>
