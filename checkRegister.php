<?php
    include "connect.php";
    
    if(isset($_GET["member_username"])){
        $stmt = $pdo->prepare("SELECT member_username FROM tb_member WHERE member_username = ?");
        $stmt->bindValue(1, $_GET["member_username"]);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row){
            echo "fail";
        }else{
            echo "pass";
        }
    }
   

    if(isset($_GET["member_ssn"])){
        $stmt = $pdo->prepare("SELECT member_ssn FROM tb_member WHERE member_ssn = ?");
        $stmt->bindValue(1, $_GET["member_ssn"]);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row){
            echo "fail";
        }else{
            echo "pass";
        }
    }
    
?>