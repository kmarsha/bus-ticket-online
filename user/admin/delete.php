<?php 
include '../../connection.php';
 
$id = $_GET['id'];
 
mysqli_query($connection,"delete from schedule where departure_id = '$id'");
 
header("location:edit-schedule-admin.php");
 
?>