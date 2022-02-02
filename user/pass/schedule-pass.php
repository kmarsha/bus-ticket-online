<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <title>Schedule Page</title>
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
        width: 90%;
        margin: 0 auto;
    }
    .jumbotron *{
        text-align: center;
        color: aliceblue;
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
            <li><a href="schedule-pass.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Schedule</a></li>
            <li><a href="ticket-pass.php" class="nav-link px-2 link-light" style="color: white">Ticket</a></li>
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
    <div class="jumbotron" style="background-color: midnightblue; color: aliceblue;">
        <div class="day">
            <h3>Today</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bus</th>
                            <th scope="col">Route</th>
                            <th scope="col">Total Pasenggers</th>
                            <th scope="col">Time Departure</th>
                        </tr>
                    </thead>
                        
                    <?php
                    include '../../connection.php';
                    $no = 1;
                    $today = date('y-m-d');
                    $data = mysqli_query($connection, "select * from schedule where date_of_day = '$today'");
                    while($x = mysqli_fetch_array($data)){
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['bus_id']; ?></td>
                            <td><?php echo $x['route']; ?></td>
                            <td><?php echo $x['pass_total']; ?></td>
                            <td><?php echo $x['time']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        </div>

        <div class="day">
            <h3>Tommorow</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bus</th>
                            <th scope="col">Route</th>
                            <th scope="col">Total Pasenggers</th>
                            <th scope="col">Time Departure</th>
                        </tr>
                    </thead>
                        
                    <?php
                    include '../../connection.php';
                    $no = 1;
                    $tmrw = date('y-m-d', strtotime("+1 day", strtotime(date("y-m-d"))));
                    $data2 = mysqli_query($connection, "select * from schedule where date_of_day = '$tmrw'");
                    while($y = mysqli_fetch_array($data2)){
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $y['bus_id']; ?></td>
                            <td><?php echo $y['route']; ?></td>
                            <td><?php echo $y['pass_total']; ?></td>
                            <td><?php echo $y['time']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        </div>

        <div class="day">
            <h3>Day After Tommorow</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bus</th>
                            <th scope="col">Route</th>
                            <th scope="col">Total Pasenggers</th>
                            <th scope="col">Time Departure</th>
                        </tr>
                    </thead>
                        
                    <?php
                    include '../../connection.php';
                    $no = 1;
                    $aft_tmrw = date('y-m-d', strtotime("+2 day", strtotime(date("y-m-d"))));
                    $data3 = mysqli_query($connection, "select * from schedule where date_of_day = '$aft_tmrw'");
                    while($z = mysqli_fetch_array($data3)){
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $z['bus_id']; ?></td>
                            <td><?php echo $z['route']; ?></td>
                            <td><?php echo $z['pass_total']; ?></td>
                            <td><?php echo $z['time']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php
include 'footer-pass.php';
?>

</body>
</html>