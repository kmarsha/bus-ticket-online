<?php

include '../../connection.php';

$id = $_POST['id'];
$date = $_POST['date'];
$time = $_POST['time'];
$myDate = DateTime::createFromFormat('Y-m-d', $date);
$formatDate = $myDate->format('y-m-d');

mysqli_query($connection, "update schedule set date_of_day = '$formatDate', time = '$time WIB' where departure_id = '$id'");

header("location:edit-schedule-admin.php");


?>