<?php
    try{
        include "connect.php"; 
        $job_store_name = $_POST["job_store_name"]; 
        $job_commercial_registration = $_POST["job_commercial_registration"]; 
        $job_position = $_POST["job_position"]; 
        $job_amount = $_POST["job_amount"]; 
        $job_working_hours = $_POST["job_working_hours"]; 
        $job_wage_rate = $_POST["job_wage_rate"]; 
        $job_location = $_POST["job_location"];
        $job_skills = $_POST["job_skills"]; 
        $job_contact = $_POST["job_contact"]; 
        $job_work_period = $_POST["job_work_period"]; 
        $job_detail = $_POST["job_detail"]; 
        

    $pdo->beginTransaction();
        
    $pdo->exec("INSERT INTO tb_job VALUES(NULL, '$job_store_name', '$job_commercial_registration', '$job_position','$job_amount','$job_working_hours','$job_wage_rate','$job_location','$job_skills','$job_contact','$job_work_period','$job_detail')");
    $job_id = $pdo->lastInsertID();


    if(is_uploaded_file($_FILES["image"]["tmp_name"])){
        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/upload/$job_id.jpg")){
            $pdo->exec("INSERT INTO tb_image VALUES(NULL, '$job_id', '$job_id')");
            $pdo->lastInsertID();
            echo "Image upload successed.";
            sleep(10);
        }else{
            echo "Image upload failed.";
            sleep(10);
            }
        }
    

    } catch(Exception $e){
        $pdo->rollBack();
        echo "Upload ข่าวหรือประกาศไม่สำเร็จ";
        print_r($e);
    }
?>
    

    