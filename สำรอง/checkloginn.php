<?php
    include "connect.php";
    if(isset($_GET["member_username"]) && isset($_GET["member_password"])){
        $stmt = $pdo->prepare("SELECT*FROM tb_member WHERE member_sername = ? AND Password = ? AND member_status LIKE 'member'");
        $stmt->bindValue(1, $_GET["member_username"]);
        $stmt->bindValue(2, $_GET["member_password"]);
        //$stmt->bindValue(3, "member%");
        $stmt->execute();
        $row = $stmt->fetch();
        if($row){
            echo "okay";
        }else{
            $stmt = $pdo->prepare("SELECT*FROM tb_member WHERE member_sername = ? AND Password = ? AND member_status LIKE 'admin'");
            $stmt->bindValue(1, $_GET["member_username"]);
            $stmt->bindValue(2, $_GET["member_password"]);
            $stmt->execute();
            $row = $stmt->fetch();

            if($row){
                echo "okay";
            }else{
                echo "denied";
            }
        }
    }
?>