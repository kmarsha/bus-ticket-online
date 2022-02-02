<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <title>Home Page</title>
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
    .carousel-inner {
        width: 70%;
        height: 60%;
        margin: 0 auto;
    }
    .carousel-inner img{
        width: 100%;
        height: 100%;
    }
    .carousel-control-prev, .carousel-control-next{
        width: 20%;
        height: 100%;
    }
    .jumbotron{
        width: 90%;
        margin: 20px auto;
        background-color: aliceblue;
    }
    .jumbotron li{
        list-style: none;
    }
</style>
<body style="background-color: black;">
<div class="container" style="background-color: black;">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home-pass.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Home</a></li>
            <li><a href="schedule-pass.php" class="nav-link px-2 link-light" style="color: white">Schedule</a></li>
            <li><a href="ticket-pass.php" class="nav-link px-2 link-light" style="color: white">Ticket</a></li>
        </ul>
    
        <div class="dropdown text-end">
            <a href="#" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false"><div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color: rgb(196, 196, 196);"></i></div></a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser">
            <li><a class="dropdown-item" href="home-pass.php">Home</a></li>
            <li><a class="dropdown-item" href="schedule-pass.php">Schedule</a></li>
            <li><a class="dropdown-item" href="ticket-pass.php">Ticket</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../../log-out.php">Log-out</a></li>
          </ul>
        </div>
    </header>
</div>

<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../../assets/img/bus-1.jpg" alt="Bus">
    <div class="carousel-caption">
      <h3>Easy</h3>
      <p>We make all transaction EASIER!</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../../assets/img/bus-3.jpg" alt="Bus">
    <div class="carousel-caption">
    <h3>Fast</h3>
    <p>We make all transaction FASTER!</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../../assets/img/bus-4.jpg" alt="Bus">
    <div class="carousel-caption">
      <h3>Gratifying</h3>
      <p>We make all transaction can GRATIFYING you!</p>
    </div>
  </div>
</div>

<hr>

<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
</div>

<div class="container">
<div class="jumbotron" style="background-color: midnightblue; color: aliceblue;">
    <h1>Order Ticket Nows</h1>
    <h4>Easy, Faster, and Gratifying</h4>
</div>

<div class="jumbotron" style="background-color: midnightblue; color: aliceblue;">
    <h1>Track</h1>
    <ul>
        <li>Rambutan</li>
        <li>Lebak Bulus</li>
        <li>Tanjung Priok</li>
        <li>Kudus</li>
        <li>Tangerang</li>
        <li>Merak</li>
        <li>Pandeglang</li>
    </ul>
</div>
</div>

<?php
include 'footer-pass.php';
?>

</body>
</html>