<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <title>Ticket Page</title>
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
    }
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    
    .form-signin .form-floating:focus-within {
        z-index: 2;
    }
    
    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    
    .form-signin input[type="number"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
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
    
        <div class="dropdown text-end">
            <a href="#"  id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false"><div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color: rgb(196, 196, 196);"></i></div></a>
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
    <div class="jumbotron" style="background-color: midnightblue;">
        <main class="form-signin">
        <form method="POST" action="registration.php">
            <h1 class="h3 mb-3 fw-normal" style="color: aliceblue;">Buy Bus Ticket Online</h1>
            <div class="form-floating">
                <select class="form-control" id="sell-from" name="from" placeholder="From" required>
                    <option value="Bogor">Bogor</option>
                </select>
                <label for="sell-from">From</label>
            </div>
            <div class="form-floating">
                <select class="form-control" id="sell-to" name="to" placeholder="To" required>
                    <option value="Rambutan">Rambutan</option>
                    <option value="Lebak Bulus">Lebak Bulus</option>
                    <option value="Tanjung Priok">Tanjung Priok</option>
                    <option value="Kudus">Kudus</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Merak">Merak</option>
                    <option value="Pandeglang">Pandeglang</option>
                </select>
                <label for="sell-to">To</label>
            </div>
            <div class="form-floating">
                <input type="number" name="total_pass" class="form-control" id="floatingNumber" placeholder="Total Pass" required>
                <label for="floatingNumber">Total Pass</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registration</button>
        </form>
    </main>
    </div>
</div>

<?php
include 'footer-pass.php';
?>

</body>
</html>