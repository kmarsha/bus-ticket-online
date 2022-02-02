<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Registration - Ticket Page</title>
</head>
<style>
    .profile{
        width: 70px;
        height: 70px;
        border-radius: 70px;
        border: 5px solid rgb(196,196,196);
        position: relative;
        float: right;
    }
    .jumbotron{
        text-align: center;
        width: 90%;
        padding: 15px;
        margin: 0 auto;
    }
    
    .jumbotron:focus-within {
        z-index: 2;
    }
</style>
<body style="background-color: black;">
<div class="container" style="background-color: black;">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home-pass.php" class="nav-link px-2 link-light" style="color: white">Home</a></li>
            <li><a href="schedule-pass.php" class="nav-link px-2 link-light" style="color: white">Schedule</a></li>
            <li><a href="ticket-pass.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Ticket</a></li>
        </ul>
    
        <div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color: rgb(196, 196, 196);"></i></div>
    </header>
</div>

<div class="container">
    <div class="jumbotron" style="background-color:  rgb(22, 22, 182); color: white">
        <?php

            include '../../connection.php';

            $from = @$_POST['from'];
            $to = @$_POST['to'];
            $total_pass = @$_POST['total_pass'];

            $route = "$from - $to";

            $data1 = mysqli_query($connection, "select * from schedule where route = '$route'");
            $x = mysqli_fetch_array($data1);
            $myDate = DateTime::createFromFormat('y-m-d', $x['date_of_day']);
            $formatDate = $myDate->format('l, d M Y');
            $time = $x['time']; ?>

            <h2><?php echo "Track From " . $from . " To " . $to . " with " . $x['pass_total'] . " leftovers passengers <br>"; ?></h2>

            <h2><?php echo "Time of Departure " . $formatDate . " On " . $time . "<br>"; ?></h2>
            
        <?php
            $data2 = mysqli_query($connection, "select * from `bus` where track_to = '$to'");
            $y = mysqli_fetch_array($data2);
            $fare = $y['fare'] * $total_pass;
        ?>

            <h2><?php echo "Fare for " . $total_pass . " Passengers is Rp. " . number_format($fare, 2, "," , "."); ?></h2>

            <hr>

            <p style="font-size: 30;">Please Confirm to go to the next step</p>
            <a href="confirm-ticket.php"><button class="w-100 btn btn-lg btn-primary" type="submit" style="max-width: 120px;">Confirm</button></a>

        <?php

            session_start();
            $_SESSION['from'] = $from;
            $_SESSION['to'] = $to;
            $_SESSION['route'] = $route;
            $_SESSION['total_pass'] = $total_pass;
            $_SESSION['date'] = $formatDate;
            $_SESSION['time'] = $time;
            $_SESSION['fare'] = $fare;
            $_SESSION['date_d'] = $x['date_of_day'];

        ?>
        
    </div>
</div>

<?php
include 'footer-pass.php';
?>

</body>
</html>