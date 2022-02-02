<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Dashboard Page</title>
    <script src="../../assets/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
        width: 90%;
        margin: 0 auto;
    }
    table{
        text-align: center;
    }
    .add-schedule{
        margin-top: 50px;
    }
    .add-schedule a{
        color: midnightblue;
    }
    .add-schedule a:hover{
        text-decoration: none;
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
            <li><a href="schedule-owner.php" class="nav-link px-2 link-dark" style="color: black">Schedule</a></li>
            <li><a href="dashboard-owner.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Dashboard</a></li>
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

<div class="container" style="width: 80%; margin: 25px auto; margin-bottom: 50px;">
    <canvas id="myChart" width="100" height="50%"></canvas>
</div>

<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
    type: 'line',
        data: {
            <?php
            $bfr_3_this_month = date('M - y', strtotime("-3 month", strtotime(date("M - y"))));
            $bfr_2_this_month = date('M - y', strtotime("-2 month", strtotime(date("M - y"))));
            $bfr_this_month = date('M - y', strtotime("-1 month", strtotime(date("M - y"))));
            ?>
            labels: ["<?php echo $bfr_3_this_month ?>", "<?php echo $bfr_2_this_month ?>", "<?php echo $bfr_this_month ?>"],
                datasets: [{
                    label: '# of Month',
                    data: [
                        <?php
                        include '../../connection.php';
                        $data1 = mysqli_query($connection, "select * from income where month = '$bfr_3_this_month'");
                        $x_3 = mysqli_fetch_array($data1);
                        $income_bfr_3 = $x_3['incoming'];
                        echo $income_bfr_3;
                        ?>,
                        <?php
                        include '../../connection.php';
                        $data2 = mysqli_query($connection, "select * from income where month = '$bfr_2_this_month'");
                        $x_2 = mysqli_fetch_array($data2);
                        $income_bfr_2 = $x_2['incoming'];
                        echo $income_bfr_2;
                        ?>,
                        <?php
                        include '../../connection.php';
                        $data3 = mysqli_query($connection, "select * from income where month = '$bfr_this_month'");
                        $x_1 = mysqli_fetch_array($data3);
                        $income_bfr = $x_1['incoming'];
                        echo $income_bfr;
                        ?>
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.25)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-m" style="margin-bottom: 50px;">
            <thead>
              <tr>
                <th>Month</th>
                <th>Total Departure</th>
                <th>Total Passanger</th>
                <th>Incoming</th>
              </tr>
            </thead>

            <?php
            $bfr_3_this_month = date('M - y', strtotime("-3 month", strtotime(date("M - y"))));
            $bfr_2_this_month = date('M - y', strtotime("-2 month", strtotime(date("M - y"))));
            $bfr_this_month = date('M - y', strtotime("-1 month", strtotime(date("M - y"))));
            ?>

            <tbody>

            <?php 
            include '../../connection.php';
            $data_1 = mysqli_query($connection, "select * from income where month = '$bfr_3_this_month'");
            $z_1 = mysqli_fetch_array($data_1);
            ?>
              <tr>
                <td><?php echo $bfr_3_this_month; ?></td>
                <td><?php echo $z_1['total_departure']; ?></td>
                <td><?php echo $z_1['total_pass']; ?></td>
                <td><?php echo number_format($z_1['incoming'], 2, ",", "."); ?></td>
              </tr>
            
            <?php 
            include '../../connection.php';
            $data_2 = mysqli_query($connection, "select * from income where month = '$bfr_2_this_month'");
            $z_2 = mysqli_fetch_array($data_2);
            ?>
              <tr>
                <td><?php echo $bfr_2_this_month; ?></td>
                <td><?php echo $z_2['total_departure']; ?></td>
                <td><?php echo $z_2['total_pass']; ?></td>
                <td><?php echo number_format($z_2['incoming'], 2, ",", "."); ?></td>
              </tr>

            <?php 
            include '../../connection.php';
            $data_3 = mysqli_query($connection, "select * from income where month = '$bfr_this_month'");
            $z_3 = mysqli_fetch_array($data_3);
            ?>
              <tr>
                <td><?php echo $bfr_this_month; ?></td>
                <td><?php echo $z_3['total_departure']; ?></td>
                <td><?php echo $z_3['total_pass']; ?></td>
                <td><?php echo number_format($z_3['incoming'], 2, ",", "."); ?></td>
              </tr>

            </tbody>
        </table>
    </div>
</div>

<?php
include 'footer-owner.php';
?>

</body>
</html>