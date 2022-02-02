<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Add - Schedule Page</title>
</head>
<style>
    .profile{
        width: 70px;
        height: 70px;
        border-radius: 70px;
        border: 5px solid midnightblue;
        position: relative;
        float: right;
    }

    .jumbotron{
        text-align: center;
        width: 90%;
        margin: 0 auto;
    }
    .jumbotron *{
        color: white;
    }
    .jumbotron h2{
        margin-bottom: 30px;
    }
    .jumbotron p{
        font-size: 20;
    }
</style>
<body style="background-color: rgb(195, 225, 255);">
<div class="container" style="background-color: rgb(195, 225, 255);">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="schedule-admin.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Schedule</a></li>
            <li><a href="transaction-admin.php" class="nav-link px-2 link-dark" style="color: black">Transaction Summary</a></li>
        </ul>
    
        <div class="col-md-3 text-end">
            <a href=""><div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color: midnightblue;"></i></div></a>
        </div>
    </header>
</div>

<div class="container">
    <div class="jumbotron" style="background-color: rgb(130, 165, 235);">
        <?php 
        include '../../connection.php';

        $date = @$_POST['date'];
        $from = @$_POST['from'];
        $to = @$_POST['to'];
        $route = "$from - $to";
        $total_pass = @$_POST['total_pass'];
        $time = @$_POST['time'];
        $myDate = DateTime::createFromFormat('Y-m-d', $date);
        $formatDate = $myDate->format('l, d M Y');
        
        $data = (mysqli_query($connection, "select bus_id from schedule where route = '$route'"));
        $x = mysqli_fetch_array($data);
        $bus_id = $x['bus_id'];
        
        ?>

        <h2>You Will add a schedule with the format below</h2>

        <p><?php echo "Bus id : " . $bus_id; ?></p>
        <p><?php echo "Date of Departure : " . $formatDate . " at " . $time . " WIB"; ?></p>
        <p><?php echo "Capacity : " . $total_pass . " Passengers" ?></p>
            
        </table>
        
        <a href="schedule-add-to-mysqli.php"><button class="w-100 btn btn-lg btn-primary" type="submit" style="max-width: 225px; margin-top: 25px;">Confirm Schedule</button></a>
        
    </div>
</div>

<?php

        $myDate2 = DateTime::createFromFormat('Y-m-d', $date);
        $formatDate2 = $myDate2->format('y-m-d');

        session_start();
        $_SESSION['date'] = $formatDate2;
        $_SESSION['bus_id'] = $bus_id;
        $_SESSION['from'] = $from;
        $_SESSION['to'] = $to;
        $_SESSION['total_pass']= $total_pass;
        $_SESSION['time'] = $time;

        ?>

<?php
include 'footer-admin.php';
?>

</body>
</html>