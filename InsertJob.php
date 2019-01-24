<?php 
include "connect.php";
    try{
        
        $status = "disapprove";  
    $stmt = $pdo->prepare("INSERT INTO tb_job VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
    $stmt->bindParam(1, $_POST["job_store_name"]); 
    $stmt->bindParam(2, $_POST["job_commercial_registration"]); 
    $stmt->bindParam(3, $_POST["job_position"]); 
    $stmt->bindParam(4, $_POST["job_amount"]); 
    $stmt->bindParam(5, $_POST["job_working_hours"]); 
    $stmt->bindParam(6, $_POST["job_wage_rate"]); 
    $stmt->bindParam(7, $_POST["job_location"]); 
    $stmt->bindParam(8, $_POST["job_skills"]); 
    $stmt->bindParam(9, $_POST["job_contact"]); 
    $stmt->bindParam(10, $_POST["job_work_period"]); 
    $stmt->bindParam(11, $_POST["job_detail"]);
    $stmt->bindParam(12, $status);
    $stmt->bindParam(13, $_POST["job_type"]); 
    $stmt->execute();   // เพิ่มข้อมูล
    $job_id = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มสำเร็จ 

    
    if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/upload/$job_id.jpg")){
            $pdo->exec("INSERT INTO tb_image VALUES(NULL, '$job_id', $job_id)");
            $pdo->lastInsertID();
            echo "<script>location = 'success_postjob.php';</script>";
            sleep(1);
        }else{
            echo "Image upload failed.";
            sleep(1);
            }
        }

    } catch(Exception $e){
        $pdo->rollBack();
        echo "Upload ข่าวหรือประกาศไม่สำเร็จ";
        print_r($e);
    }
?>