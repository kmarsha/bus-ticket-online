<?php

include 'connection.php';

$today = date('y-m-d');
$tmrw = date('y-m-d', strtotime("+1 day", strtotime(date("y-m-d"))));
$aftr_tmrw = date('y-m-d', strtotime("+2 day", strtotime(date("y-m-d"))));

$today_id = date('ymd');
$tmrw_id = date('ymd', strtotime("+1 day", strtotime(date("ymd"))));
$aftr_tmrw_id = date('ymd', strtotime("+2 day", strtotime(date("ymd"))));

$pass_total = 30;

$a = 'A01';
$b = 'B01';
$c = 'C01';
$d = 'D01';
$e = 'E01';
$f = 'F01';
$g = 'G01';

$data1 = mysqli_query($connection, "select * from bus where bus_id = '$a'");
$a_x = mysqli_fetch_array($data1);
$a_f = $a_x['from'];
$a_t = $a_x['track_to'];
$a_z = "$a_f - $a_t";

$data2 = mysqli_query($connection, "select * from bus where bus_id = '$b'");
$b_x = mysqli_fetch_array($data2);
$b_f = $b_x['from'];
$b_t = $b_x['track_to'];
$b_z = "$b_f - $b_t";

$data3 = mysqli_query($connection, "select * from bus where bus_id = '$c'");
$c_x = mysqli_fetch_array($data3);
$c_f = $c_x['from'];
$c_t = $c_x['track_to'];
$c_z = "$c_f - $c_t";

$data4 = mysqli_query($connection, "select * from bus where bus_id = '$d'");
$d_x = mysqli_fetch_array($data4);
$d_f = $d_x['from'];
$d_t = $d_x['track_to'];
$d_z = "$d_f - $d_t";

$data5 = mysqli_query($connection, "select * from bus where bus_id = '$e'");
$e_x = mysqli_fetch_array($data5);
$e_f = $e_x['from'];
$e_t = $e_x['track_to'];
$e_z = "$e_f - $e_t";

$data6 = mysqli_query($connection, "select * from bus where bus_id = '$f'");
$f_x = mysqli_fetch_array($data6);
$f_f = $f_x['from'];
$f_t = $f_x['track_to'];
$f_z = "$f_f - $f_t";

$data7 = mysqli_query($connection, "select * from bus where bus_id = '$g'");
$g_x = mysqli_fetch_array($data7);
$g_f = $g_x['from'];
$g_t = $g_x['track_to'];
$g_z = "$g_f - $g_t";

$time_1 = "06:00";
$time_2 = "08:00";
$time_3 = "07:00";
$time_4 = "10:00";
$time_5 = "07:30";
$time_6 = "09:00";
$time_7 = "10:00";

$id_1 = "$today_id$time_1$f";
$id_2 = "$today_id$time_2$a";
$id_3 = "$tmrw_id$time_3$d";
$id_4 = "$tmrw_id$time_4$e";
$id_5 = "$aftr_tmrw_id$time_5$c";
$id_6 = "$aftr_tmrw_id$time_6$g";
$id_7 = "$aftr_tmrw_id$time_7$b";

mysqli_query($connection, "insert ignore into `schedule`(`departure_id`, `date_of_day`, `bus_id`, `route`, `pass_total`, `pass_today`, `time`) values 
('$id_1', '$today', '$f', '$f_z', '$pass_total', '0' , '06:00 WIB'),
('$id_2', '$today', '$a', '$a_z', '$pass_total', '0' , '08:00 WIB'),
('$id_3', '$tmrw', '$d', '$d_z', '$pass_total', '0', '07:00 WIB'),
('$id_4', '$tmrw', '$e', '$e_z', '$pass_total', '0', '10:00 WIB'),
('$id_5', '$aftr_tmrw', '$c', '$c_z', '$pass_total', '0', '07:30 WIB'),
('$id_6', '$aftr_tmrw', '$g', '$g_z', '$pass_total', '0', '09:00 WIB'),
('$id_7', '$aftr_tmrw', '$b', '$b_z', '$pass_total', '0', '10:00 WIB');");

header('location:add-ticket.php');

?>