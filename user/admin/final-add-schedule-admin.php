<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Schedule Add Succesfully</title>
</head>
<style>
    .profile{
        width: 70px;
        height: 70px;
        border-radius: 35px;
        border: 5px solid midnightblue;
        position: relative;
        float: right;
    }
    .jumbotron{
        text-align: center;
        width: 90%;
        margin: 0 auto;
    }
    .jumbotron h1{
        margin-bottom: 50px;
    }
    button{
        max-width: 50%;
    }
    .btn-outline-costum{
        border-color: rgb(168, 198, 248);
    }
    .btn-outline-costum:hover{
        background-color: rgb(168, 198, 248); 
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
    <div class="jumbotron" style="background-color: rgb(114, 154, 235);">
        <h1 style="color: white;">You Succesfully Add New Schedule!!</h1>
        <a href="schedule-admin.php"><button class="w-100 btn btn-lg btn-costum" type="submit" style="background-color: rgb(168, 198, 248); margin-bottom: 25px;">Done</button></a>
        <a href="add-schedule-admin.php"><button class="w-100 btn btn-lg btn-outline-costum" type="submit" style="border-color: rgb(168, 198, 248);">Add Schedule Again</button></a>
    </div>
</div>

<?php
include 'footer-admin.php';
?>

</body>
</html>