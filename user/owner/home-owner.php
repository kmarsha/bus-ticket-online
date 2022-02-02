<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Home Page</title>
</head>
<style>
    .profile{
        width: 70px;
        height: 70px;
        border-radius: 70px;
        border: 5px solid  rgb(14, 14, 58);
        position: relative;
        float: right;
    }
    .jumbotron{
        width: 90%;
        margin: 0 auto;
        margin-bottom: 25px;
    }
    a:hover{
        text-decoration: none;
        color: midnightblue;
    }
</style>
<body style="background-color: rgb(121, 255, 217);">
<div class="container" style="background-color: rgb(121, 255, 217);">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home-owner.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Home</a></li>
            <li><a href="schedule-owner.php" class="nav-link px-2 link-dark" style="color: black">Schedule</a></li>
            <li><a href="dashboard-owner.php" class="nav-link px-2 link-dark" style="color: black">Dashboard</a></li>
            <li><a href="transaction-owner.php" class="nav-link px-2 link-dark" style="color: black">Transaction Summary</a></li>
        </ul>
    
        <div class="dropdown text-end">
            <a href="#" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false"><div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color:  rgb(14, 14, 58);"></i></div></a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser">
            <li><a class="dropdown-item" href="home-owner.php">Home</a></li>
            <li><a class="dropdown-item" href="schedule-owner.php">Schedule</a></li>
            <li><a class="dropdown-item" href="dashboard-owner.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="transaction-owner.php">Transaction Summary</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../pass/home-pass.php">Preview Passanger</a></li>
            <li><a class="dropdown-item" href="../admin/schedule-admin.php">Preview Admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../../log-out.php">Log-out</a></li>
          </ul>
        </div>
    </header>
</div>

<div class="container">
    <a href="schedule-owner.php">
        <div class="jumbotron" style="background-color: rgb(0, 200, 143);">
            <h1>Cek Schedule</h1>
            <h3>Today, Tommorow & Day After Tommorow</h3>
        </div>
    </a>
    <a href="dashboard-owner.php">
        <div class="jumbotron" style="background-color: rgb(0, 200, 143);">
            <h1>Go To Dashboard</h1>
            <h3>Check Income for a Month</h3>
        </div>
    </a>
    <a href="transaction-owner.php">
        <div class="jumbotron" style="background-color: rgb(0, 200, 143);">
            <h1>Go To Summary Transaction</h1>
            <h3>Check our Passengers</h3>
        </div>
    </a>
</div>

<?php
include 'footer-owner.php';
?>

</body>
</html>