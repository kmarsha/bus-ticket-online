<?php

include 'connection.php';

$today = date('l, d M Y');
$pass_1 = date('l, d M Y', strtotime("-7 day", strtotime($today)));
$myDate_1 = DateTime::createFromFormat('l, d M Y', $pass_1);
$formatDate_1 = $myDate_1->format('Ymd');

$pass_2 = date('l, d M Y', strtotime("-7 day", strtotime($today)));
$myDate_2 = DateTime::createFromFormat('l, d M Y', $pass_2);
$formatDate_2 = $myDate_2->format('Ymd');

$pass_3 = date('l, d M Y', strtotime("-7 day", strtotime($today)));
$myDate_3 = DateTime::createFromFormat('l, d M Y', $pass_3);
$formatDate_3 = $myDate_3->format('Ymd');

$pass_4 = date('l, d M Y', strtotime("-6 day", strtotime($today)));
$myDate_4 = DateTime::createFromFormat('l, d M Y', $pass_4);
$formatDate_4 = $myDate_4->format('Ymd');

$pass_5 = date('l, d M Y', strtotime("-6 day", strtotime($today)));
$myDate_5 = DateTime::createFromFormat('l, d M Y', $pass_5);
$formatDate_5 = $myDate_5->format('Ymd');

$pass_6 = date('l, d M Y', strtotime("-6 day", strtotime($today)));
$myDate_6 = DateTime::createFromFormat('l, d M Y', $pass_6);
$formatDate_6 = $myDate_6->format('Ymd');

$pass_7 = date('l, d M Y', strtotime("-5 day", strtotime($today)));
$myDate_7 = DateTime::createFromFormat('l, d M Y', $pass_7);
$formatDate_7 = $myDate_7->format('Ymd');

$pass_8 = date('l, d M Y', strtotime("-5 day", strtotime($today)));
$myDate_8 = DateTime::createFromFormat('l, d M Y', $pass_8);
$formatDate_8 = $myDate_8->format('Ymd');

$pass_9 = date('l, d M Y', strtotime("-5 day", strtotime($today)));
$myDate_9 = DateTime::createFromFormat('l, d M Y', $pass_9);
$formatDate_9 = $myDate_9->format('Ymd');

$pass_10 = date('l, d M Y', strtotime("-4 day", strtotime($today)));
$myDate_10 = DateTime::createFromFormat('l, d M Y', $pass_10);
$formatDate_10 = $myDate_10->format('Ymd');

$pass_11 = date('l, d M Y', strtotime("-4 day", strtotime($today)));
$myDate_11 = DateTime::createFromFormat('l, d M Y', $pass_11);
$formatDate_11 = $myDate_11->format('Ymd');

$pass_12 = date('l, d M Y', strtotime("-4 day", strtotime($today)));
$myDate_12 = DateTime::createFromFormat('l, d M Y', $pass_12);
$formatDate_12 = $myDate_12->format('Ymd');

$pass_13 = date('l, d M Y', strtotime("-4 day", strtotime($today)));
$myDate_13 = DateTime::createFromFormat('l, d M Y', $pass_13);
$formatDate_13 = $myDate_13->format('Ymd');

$pass_14 = date('l, d M Y', strtotime("-3 day", strtotime($today)));
$myDate_14 = DateTime::createFromFormat('l, d M Y', $pass_14);
$formatDate_14 = $myDate_14->format('Ymd');

$pass_15 = date('l, d M Y', strtotime("-3 day", strtotime($today)));
$myDate_15 = DateTime::createFromFormat('l, d M Y', $pass_15);
$formatDate_15 = $myDate_15->format('Ymd');

$pass_16 = date('l, d M Y', strtotime("-3 day", strtotime($today)));
$myDate_16 = DateTime::createFromFormat('l, d M Y', $pass_16);
$formatDate_16 = $myDate_16->format('Ymd');

$pass_17 = date('l, d M Y', strtotime("-3 day", strtotime($today)));
$myDate_17 = DateTime::createFromFormat('l, d M Y', $pass_17);
$formatDate_17 = $myDate_17->format('Ymd');

$pass_18 = date('l, d M Y', strtotime("-2 day", strtotime($today)));
$myDate_18 = DateTime::createFromFormat('l, d M Y', $pass_18);
$formatDate_18 = $myDate_18->format('Ymd');

$pass_19 = date('l, d M Y', strtotime("-2 day", strtotime($today)));
$myDate_19 = DateTime::createFromFormat('l, d M Y', $pass_19);
$formatDate_19 = $myDate_19->format('Ymd');

$pass_20 = date('l, d M Y', strtotime("-2 day", strtotime($today)));
$myDate_20 = DateTime::createFromFormat('l, d M Y', $pass_20);
$formatDate_20 = $myDate_20->format('Ymd');

$pass_21 = date('l, d M Y', strtotime("-2 day", strtotime($today)));
$myDate_21 = DateTime::createFromFormat('l, d M Y', $pass_21);
$formatDate_21 = $myDate_21->format('Ymd');

$pass_22 = date('l, d M Y', strtotime("-2 day", strtotime($today)));
$myDate_22 = DateTime::createFromFormat('l, d M Y', $pass_22);
$formatDate_22 = $myDate_22->format('Ymd');

$pass_23 = date('l, d M Y', strtotime("-1 day", strtotime($today)));
$myDate_23 = DateTime::createFromFormat('l, d M Y', $pass_23);
$formatDate_23 = $myDate_23->format('Ymd');

$pass_24 = date('l, d M Y', strtotime("-1 day", strtotime($today)));
$myDate_24 = DateTime::createFromFormat('l, d M Y', $pass_24);
$formatDate_24 = $myDate_24->format('Ymd');

$pass_25 = date('l, d M Y', strtotime("-1 day", strtotime($today)));
$myDate_25 = DateTime::createFromFormat('l, d M Y', $pass_25);
$formatDate_25 = $myDate_25->format('Ymd');

$pass_26 = date('l, d M Y', strtotime("-1 day", strtotime($today)));
$myDate_26 = DateTime::createFromFormat('l, d M Y', $pass_26);
$formatDate_26 = $myDate_26->format('Ymd');


mysqli_query($connection, "insert ignore into `ticket` (`name_pass`, `username_pass`, `phonenumber`, `total_pass`, `from`, `track_to`, `bus_code`, `departure`, `departure_date`, `departure_time`, `payment`, `total_pay`) values
('Marsha', 'mars', '081283885955', 3, 'Bogor', 'Lebak Bulus', 'B01', '$formatDate_1 - 10:00 WIB -  mars', '$pass_1', '10:00 WIB', 'Digital Card - DANA - 8059081283885955', '48000'),
('Farel', 'farel01', '081234567890', 7, 'Bogor', 'Tanjung Priok', 'C01', '$formatDate_2 - 10:00 WIB - farel01', '$pass_2', '12:00 WIB', 'Digital Card - DANA - 8059081234567890', '112000'),
('Cakra', 'cakra01', '081293897401', 4, 'Bogor', 'Kudus', 'D01', '$formatDate_3 - 10:00 WIB - cakra01', '$pass_3', '08:00 WIB', 'Credit Card - BNI - 009081293897401', '860000'),
('Talita', 'talita99', '089124078157', 9, 'Bogor', 'Tangerang', 'E01', '$formatDate_4 - 10:00 WIB - talita99', '$pass_4', '09:00 WIB', 'Credit Card - BCA - 014089124078157', '270000'),
('Reza', 'reza01', '081497025701', 11, 'Bogor', 'Lebak Bulus', 'B01', '$formatDate_5 - 10:00 WIB - reza01', '$pass_5', '11:00 WIB', 'Credit Card - BRI - 002081497025701', '176000'),
('Adam', 'adam09', '081957410160', 23, 'Bogor', 'Merak', 'F01', '$formatDate_6 - 10:00 WIB - adam09', '$pass_6', '07:00 WIB', 'Digital Card - OVO - 39358081957410160', '920000'),
('Angel', 'angel01', '081093485906', 2, 'Bogor', 'Kudus', 'D01', '$formatDate_7 - 10:00 WIB - angel01', '$pass_7', '08:00 WIB', 'Credit Card - BNI - 009081093485906', '430000'),
('Renata', 'renata11', '081923758101', 1, 'Bogor', 'Tanjung Priok', 'C01', '$formatDate_8 - 10:00 WIB - renata11', '$pass_8', '13:00 WIB', 'Credit Card - Mandiri - 008081923758101', '16000'),
('Sinta', 'sinta34', '081912759101', 12, 'Bogor', 'Merak', 'F01', '$formatDate_9 - 10:00 WIB - sinta34', '$pass_9', '15:00 WIB', 'Digital Card - DANA - 8059081912759101', '480000'),
('Tari', 'tari01', '081937485917', 7, 'Bogor', 'Pandeglang', 'G01', '$formatDate_10 - 10:00 WIB - tari01', '$pass_10', '11:00 WIB', 'Credit Card - BCA - 014081937485917', '280000'),
('Jessica', 'jessica09', '081394869111', 4, 'Bogor', 'Tangerang', 'E01', '$formatDate_11 - 10:00 WIB - jessica09', '$pass_11', '06:00 WIB', 'Credit Card - BNI - 009081394869111', '120000'),
('Sela', 'sela09', '082984922002', 2, 'Bogor', 'Rambutan', 'A01', '$formatDate_12 - 10:00 WIB - sela09', '$pass_12', '08:00 WIB', 'Credit Card - BRI - 002082984922002', '30000'),
('Eka', 'eka51', '089137849578', 1, 'Bogor', 'Merak', 'F01', '$formatDate_13 - 10:00 WIB - eka51', '$pass_13', '10:00 WIB', 'Digital Card - OVO - 39358089137849578', '40000'),
('Balqis', 'balqis11', '081903478590', 8, 'Bogor', 'Tanjung Priok', 'C01', '$formatDate_14 - 10:00 WIB - balqis11', '$pass_14', '07:30 WIB', 'Credit Card - BNI - 009081903478590', '128000'),
('Nissa', 'nissa11', '081394785014', 14, 'Bogor', 'Kudus', 'D01', '$formatDate_15 - 10:00 WIB - nissa11', '$pass_15', '10:30 WIB', 'Credit Card - Mandiri - 008081394785014', '3010000'),
('Cindy', 'cindy09', '081349583475', 22, 'Bogor', 'Tangerang', 'E01', '$formatDate_16 - 10:00 WIB - cindy09', '$pass_16', '09:45 WIB', 'Credit Card - BNI - 009081349583475', '660000'),
('Yanti', 'yanti11', '089459275692', 16, 'Bogor', 'Pandeglang', 'G01', '$formatDate_17 - 10:00 WIB - yanti11', '$pass_17', '10:45 WIB', 'Credit Card - BCA - 014089459275692', '640000'),
('Fina', 'fina11', '082948591761', 30, 'Bogor', 'Lebak Bulus', 'B01', '$formatDate_18 - 10:00 WIB - fina11', '$pass_18', '10:00 WIB', 'Digital Card - DANA - 8059082948591761', '480000'),
('Saputri', 'saputri11', '082394785910', 5, 'Bogor', 'Kudus', 'D01', '$formatDate_19 - 10:00 WIB - saputri11', '$pass_19', '07:00 WIB', 'Credit Card - Mandiri - 008082394785910', '860000'),
('Yuli', 'yuli07', '081349681971', 9, 'Bogor', 'Rambutan', 'A01', '$formatDate_20 - 10:00 WIB - yuli07', '$pass_20', '05:30 WIB', 'Digital Card - DANA - 8059081349681971', '135000'),
('Adila', 'adila88', '081904786917', 11, 'Bogor', 'Tanjung Priok', 'C01', '$formatDate_21 - 10:00 WIB - adila88', '$pass_21', '08:00 WIB', 'Credit Card - BNI - 009081904786917', '176000'),
('Aqila', 'aqila09', '081930468917', 1, 'Bogor', 'Rambutan', 'A01', '$formatDate_22 - 10:00 WIB - aqila09', '$pass_22', '11:00 WIB', 'Credit Card - BCA - 014081930468917', '15000'),
('Aries', 'aries09', '081934067134', 2, 'Bogor', 'Tangerang', 'E01', '$formatDate_23 - 10:00 WIB - aries09', '$pass_23', '12:30 WIB', 'Credit Card - Mandiri - 008081934067134', '60000'),
('Mila', 'mila99', '081390485197', 4, 'Bogor', 'Rambutan', 'A01', '$formatDate_24 - 10:00 WIB - mila99', '$pass_24', '07:00 WIB', 'Digital Card - OVO - 39358081390485197', '60000'),
('Jess', 'jess01', '081394067811', 26, 'Bogor', 'Lebak Bulus', 'B01', '$formatDate_25 - 10:00 WIB - jess01', '$pass_25', '09:00 WIB', 'Credit Card - BNI - 009081394067811', '416000'),
('Iskandar', 'iskandar11', '081934689716', 7, 'Bogor', 'Merak', 'F01', '$formatDate_26 - 10:00 WIB - iskandar11', '$pass_26', '10:00 WIB', 'Credit Card - BRI - 002081934689716', '280000');");

header("location:add-income.php");

?>