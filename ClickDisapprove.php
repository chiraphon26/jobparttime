<?php
include "connect.php";
session_start();

$job_id = $_GET['job_id'];
$sql1 = $pdo->query("DELETE FROM tb_image WHERE job_id = $job_id" );
$sql2 = $pdo->query("DELETE FROM tb_job WHERE job_id = $job_id" );

if($sql2){
    header("location: home_admin.php");
}else{
    echo "ลบข้อมูลไม่สำเร็จ";
    echo mysql_error();
}

?>