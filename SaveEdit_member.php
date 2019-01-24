<?php
    include "connect.php";
    include "header.php";

    
    $member_name = $_POST["member_name"];
    $member_tel = $_POST["member_tel"];
    $member_email = $_POST["member_email"];
    $member_address = $_POST["member_address"];
    $member_username = $_POST["member_username"];
    $member_password = $_POST["member_password"];


    //$member_id = $_POST["member_id"];
    $sql = $pdo->query("UPDATE tb_member SET member_name = '$member_name' 
                                            ,member_tel = '$member_tel' 
                                            ,member_email = '$member_email' 
                                            ,member_address = '$member_address'
                                            ,member_username = '$member_username'
                                            ,member_password = '$member_password'
                                        WHERE member_username = '$member_username' ");

    if($sql){
        echo "อัพเดตข้อมูลสำเร็จ";
    }else{
        echo "แก้ไขข้อมูลไม่สำเร็จ";
    }
?>

<html>

<body>

    <a href="Detail_member.php">กลับไปหน้าข้อมูลส่วนตัว</a>

    <?php
        include "footer.php";
    ?>

</body>

</html>