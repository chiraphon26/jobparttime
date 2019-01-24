<?php include "connect.php" ?>
    <?php 
    
    $stmt = $pdo->prepare("INSERT INTO tb_question VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?,
                                                            ?, ?, ?, ?, ?, ?)"); 
    $stmt->bindParam(1, $_POST["question_1"]); 
    $stmt->bindParam(2, $_POST["question_2"]); 
    $stmt->bindParam(3, $_POST["question_3"]); 
    $stmt->bindParam(4, $_POST["question_4"]); 
    $stmt->bindParam(5, $_POST["question_5_1"]); 
    $stmt->bindParam(6, $_POST["question_5_2"]);
    $stmt->bindParam(7, $_POST["question_5_3"]); 
    $stmt->bindParam(8, $_POST["question_5_4"]);
    $stmt->bindParam(9, $_POST["question_5_5"]); 
    $stmt->bindParam(10, $_POST["question_5_6"]);  
    $stmt->bindParam(11, $_POST["question_6_1"]);
    $stmt->bindParam(12, $_POST["question_6_2"]); 
    $stmt->bindParam(13, $_POST["question_6_3"]); 
    $stmt->bindParam(14, $_POST["question_6_4"]);
    $stmt->bindParam(15, $_POST["question_6_5"]); 
 
    $stmt->execute();   // เพิ่มข้อมูล
    $question_id = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มสำเร็จ 
    echo "<script>location='home.php';</script>";?>