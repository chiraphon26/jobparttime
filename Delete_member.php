<?php
include "connect.php"; 
session_start();

$member_id = $_GET['member_id'];
$sql = $pdo->query("DELETE FROM tb_member WHERE member_id = $member_id ");

if($sql){

    $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
    header("location: $HTTP_REFERER");
    
} else{
    echo mysql_error();
    
}
	
	
?>