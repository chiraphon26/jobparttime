<?php
    try{
        session_start();
        include "connect.php";
        //$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
        $pdo->beginTransaction();
        $stmt = $pdo->prepare("SELECT*FROM tb_member  WHERE member_username = ? AND member_password = ? AND member_status LIKE 'member%'");
        $stmt->bindValue(1, $_POST["member_username"]);
        $stmt->bindValue(2, $_POST["member_password"]);
        $stmt->execute();
        $row = $stmt->fetch();

        if($row){
            $_SESSION['member_username'] = $row['member_username'];
            $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
            header("location: $HTTP_REFERER");
            //echo "Hello";
            //header("location: homee.php");
        }
        else{
            $stmt = $pdo->prepare("SELECT*FROM tb_admin WHERE admin_username = ? AND admin_password = ?");
            $stmt->bindValue(1, $_POST["member_username"]);
            $stmt->bindValue(2, $_POST["member_password"]);
            $stmt->execute();
            $row = $stmt->fetch();
        
            if($row){
                $_SESSION['admin_username'] = $row['admin_username'];
                header("location: home_admin.php");
            }else{
                echo "Username and Password seems incorrect.";
            }
        }
    }
    catch(Exception $e){
        $pdo->rollBack();
        echo "ไม่สามารถเข้าสู่ระบบได้";
        print_r($e);
    }  
?>