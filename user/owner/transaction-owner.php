<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <title>Summary Page</title>
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
        text-align: center;
        margin: 0 auto;
    }
    table{
        text-align: center;
        color: black;
    }
    h5{
        text-align: left;
    }
    span{
        font-size: 15;
    }
    .form-date{
        max-width: 450px;
        padding: 15px;
    }
</style>
<body style="background-color: rgb(121, 255, 217);">
<div class="container" style="background-color: rgb(121, 255, 217);">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home-owner.php" class="nav-link px-2 link-dark" style="color: black">Home</a></li>
            <li><a href="schedule-owner.php" class="nav-link px-2 link-secondary" style="color: black">Schedule</a></li>
            <li><a href="dashboard-owner.php" class="nav-link px-2 link-dark" style="color: black">Dashboard</a></li>
            <li><a href="transaction-owner.php" class="nav-link px-2 link-dark" style="color: #6c757d">Transaction Summary</a></li>
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
    <div class="jumbotron" style="background-color: rgb(0, 200, 143);">
    <?php
    $today = date('l, d M Y');
    $day = date('l, d M Y', strtotime("-7 day", strtotime($today)));
    ?>
    <h5>Started from <?php echo $day ?></h5>
    <h5 style="margin-bottom: 20px;">until <?php echo $today ?></h5>

        <main class="form-date">
        <form method="get" style="text-align: left;">
        <div class="form-inline">
        <p>If you want to see some schedule in some date <br>
        Use this action below!</p>
        <div class="form-floating">
			<input type="date" name="date" class="form-control" id="floatingDate" required>
            <label for="floatingDate">Filter Date</label>
        </div>
        <button class="w-10 btn btn-lg btn-success" type="submit" style="margin-left: 15px;">Filter</button>
        <a href="javascript:window.history.go(-1);"><button class="w-10 btn btn-lg btn-success" type="button" style="margin-left: 15px;">Back</button></a>
        </div>
		</form>
        </main>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Passenger Name</th>
                <th colspan="3" scope="col">Route</th>
                <th scope="col">Total Pasenggers</th>
            </tr>
        </thead>

        <?php

        include '../../connection.php';

        $no = 1;
        
        if(isset($_GET['date'])){
            $date = $_GET['date'];
            $myDate = DateTime::createFromFormat('Y-m-d', $date);
            $formatDate = $myDate->format('l, d M Y');
			$data = mysqli_query($connection, "select * from ticket where departure_date = '$formatDate'");
		}else{
			$data = mysqli_query($connection, "select * from ticket");
        }

        while($x = mysqli_fetch_array($data)){
            $date = $x['departure_date'];
            $time = $x['departure_time'];
            $name = $x['name_pass'];
            $total_pass = $x['total_pass'];
            $from = $x['from'];
            $track_to = $x['track_to'];

        ?>

        <tbody>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $from; ?></td>
                <td>-</td>
                <td><?php echo $track_to; ?></td>
                <td><?php echo $total_pass; ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    </div>
</div>

<?php

include 'footer-owner.php';

?>

</body>
</html>