<?php include "connect.php" ?>
    <?php 
    $status = "member"; 
    $stmt = $pdo->prepare("INSERT INTO tb_member VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?)"); 
    $stmt->bindParam(1, $_POST["member_name"]); 
    $stmt->bindParam(2, $_POST["member_ssn"]); 
    $stmt->bindParam(3, $_POST["member_tel"]); 
    $stmt->bindParam(4, $_POST["member_email"]); 
    $stmt->bindParam(5, $_POST["member_address"]); 
    $stmt->bindParam(6, $_POST["member_username"]); 
    $stmt->bindParam(7, $_POST["member_password"]);
    $stmt->bindParam(8, $status); 
    $stmt->execute();   // เพิ่มข้อมูล
    $member_id = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มสำเร็จ 
    echo "<script>location='success_register.php';</script>";?>



<!--<html> 
    <head><meta charset= "UTF - 8 " ></head> 
    echo "<script>location='success.php';</script>";
        <body> เพิ่มสินค้าสำเร็จ รหัสสินค้าใหม่ คือ <?=$member_id?> 
        </body> 
</html>-->