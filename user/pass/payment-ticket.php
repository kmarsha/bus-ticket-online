<?php

$user = @$_POST['user'];
$phone = @$_POST['phone'];
session_start();
$from = $_SESSION['from'];
$to = $_SESSION['to'];
$route = $_SESSION['route'];
$total_pass = $_SESSION['total_pass'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$fare = $_SESSION['fare'];
$payment_method = @$_POST['paymentMethod'];
$card_name = @$_POST['ccname'];
$card_number = @$_POST['ccnumber'];
$cc_expiration = @$_POST['expiration'];
$cc_cvv = @$_POST['cvv'];
$date_day = $_SESSION['date_d'];

$_SESSION['user'] = $user;

include '../../connection.php';

$data1 = mysqli_query($connection, "select fullname from user where username = '$user'");
$x = mysqli_fetch_array($data1);
$fullname = $x['fullname'];

$data2 = mysqli_query($connection, "select bus_id from bus where track_to = '$to'");
$y = mysqli_fetch_array($data2);
$bus_code = $y['bus_id'];

$myDate = DateTime::createFromFormat('l, d M Y', $date);
$formatDate = $myDate->format('Ymd');

mysqli_query($connection, "insert into `ticket` (`name_pass`, `username_pass`, `phonenumber`, `total_pass`, `from`, `track_to`, `bus_code`, `departure`, `departure_date`, `departure_time`, `payment`, `total_pay`) values
 ('$fullname', '$user', '$phone', '$total_pass', '$from', '$to', '$bus_code', '$formatDate - $time - $user', '$date', '$time', '$payment_method - $card_name - $card_number', '$fare');");

$data3 = mysqli_query($connection, "select pass_total from schedule where date_of_day = '$date_day'");
$z = mysqli_fetch_array($data3);
$pass_total = $z['pass_total'];
$pass_day = $pass_total - $total_pass;

mysqli_query($connection, "update schedule set `pass_total` = '$pass_day', `pass_today` = '$total_pass' where `bus_id` = '$bus_code' && `date_of_day` = '$date_day' && `time` = '$time'");

$myDate2 = DateTime::createFromFormat('l, d M Y', $date);
$formatDate2 = $myDate2->format('M - y');

$data4 = mysqli_query($connection, "select * from income where month = '$formatDate2'");
$a = mysqli_fetch_array($data4);
$pass_total2 = $a['total_pass'];
$pass_income = $pass_total2 - $total_pass;
$income = $a['incoming'];
$incoming = $income + $fare;

mysqli_query($connection, "update income set `total_pass` = '$pass_income' , `incoming` = '$incoming' where `month` = '$formatDate'");

header('location:get.ticket.php');


?>