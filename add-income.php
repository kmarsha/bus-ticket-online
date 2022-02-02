<?php

include 'connection.php';

$bfr_3_this_month = date('M - y', strtotime("-3 month", strtotime(date("M - y"))));
$bfr_2_this_month = date('M - y', strtotime("-2 month", strtotime(date("M - y"))));
$bfr_this_month = date('M - y', strtotime("-1 month", strtotime(date("M - y"))));
$this_month = date('M - y');

mysqli_query($connection, "insert ignore into `income`(`month`, `total_departure`, `total_pass`, `incoming`) values
('$this_month', '38', '250', '475000000'),
('$bfr_this_month', '74', '430', '1591000000'),
('$bfr_2_this_month', '62', '445', '1379500000'),
('$bfr_3_this_month', '64', '436', '1295200000');");

header("location:home.php");

?>