<?php
include "connect.php";
session_start();

$job_id = $_GET["job_id"];
$approve ='approve';
$sql = $pdo->query("UPDATE tb_job SET job_status = '$approve' WHERE job_id = '$job_id' ");

if($sql){
    header("location: home_admin.php");
}else{
    echo "แก้ไขข้อมูลไม่สำเร็จ";
}

?>