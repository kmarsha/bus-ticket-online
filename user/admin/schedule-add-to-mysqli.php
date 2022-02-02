<?php

include '../../connection.php';

session_start();
$date = $_SESSION['date'];
$bus_id = $_SESSION['bus_id'];
$from = $_SESSION['from'];
$to = $_SESSION['to'];
$route = "$from - $to";
$total_pass = $_SESSION['total_pass'];
$time = $_SESSION['time'];

$myDate = DateTime::createFromFormat('Y-m-d', $date);
$formatDate = $myDate->format('ymd');

$departure_id = "$formatDate$time$bus_id";

mysqli_query($connection, "insert into `schedule`(`departure_id`, `date_of_day`, `bus_id`, `route`, `pass_total`, `pass_today`, `time`) values 
('$departure_id', '$date', '$bus_id', '$route', '$total_pass', '0', '$time WIB')");

$formatDate2 = $myDate->format('M - y');

$data = mysqli_query($connection, "select * from income where `month` = '$formatDate2'");
$x = mysqli_fetch_array($data);
$total_d = $x['total_departure'];
$total_departure = $total_d + 1;

mysqli_query($connection, "update income set `total_departure` = '$total_departure' where `month` = '$formatDate2'");

header("location:final-add-schedule-admin.php");

?>