<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap4/bootstrap.min.css">
    <title>Schedule Page</title>
</head>
<style>
.jumbotron{
  width: 90%;
  margin: 20px auto;
}
.jumbotron * {
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
            <li><a href="home.php" class="nav-link px-2 link-light">Home</a></li>
            <li><a href="schedule.php" class="nav-link px-2 link-secondary">Schedule</a></li>
            <li><a href="ticket.php" class="nav-link px-2 link-light">Ticket</a></li>
          </ul>
    
          <div class="col-md-3 text-end">
            <a href="enter/log-in.php"><button type="submit" class="btn btn-outline-primary me-2">Login</button></a>
            <a href="enter/sign-in.php"><button type="submit" class="btn btn-primary">Sign-up</button></a>
            <a href="enter/admin-login.php"><button type="submit" class="btn btn-outline-success">Admin</button></a>
          </div>
        </header>
        <header>
    <div class="page-header min-vh" style="background-image: url(assets/img/inbus-dark.png); background-size: cover; background-position: center; height: 320px;">
        <span class="mask bg-gradient-dark opacity-4"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-9 text-center mx-auto" style="position: absolute; margin: 50px;">
              <h1 class="text mb-4" style="color:  rgb(91, 136, 40);">Buy Bus Ticket Online</h1>
              <p class="lead text-white mb-sm-6 mb-4">We’re constantly trying to make all the Paying and Transaction EASIER. Just for A Few Step, then you will Get 'em.</p>
              <a href="enter/sign-in.php"><button type="button" class="btn btn-danger">Get Started</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="relative" style="height: 36px;overflow: hidden;margin-top: -36px; z-index:2">
        <div class="w-full absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: black;">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
          </svg>
        </div>
      </div>
    </header>
</div>

<div class="container" style="color: aliceblue">
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
                include 'connection.php';
                $no = 1;
                $today = date('y-m-d');
                $data1 = mysqli_query($connection, "select * from schedule where date_of_day = '$today'");
                while($x = mysqli_fetch_array($data1)){
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
                include 'connection.php';
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
                include 'connection.php';
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
include 'footer.php';
?>

</body>
</html>