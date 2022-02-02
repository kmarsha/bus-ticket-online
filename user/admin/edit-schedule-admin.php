<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
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
        border: 5px solid midnightblue;
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
    .action{
        margin-top: 50px;
        margin: 0 auto;
    }
    .btn{
        max-width: 50%;
    }
    .btn-outline-costum{
        border-color: rgb(168, 198, 248);
    }
    .btn-outline-costum:hover{
        background-color: rgb(168, 198, 248); 
    }
    table a{
        color: midnightblue;
    }
    h6 a{
        color: midnightblue;
    }
    h6 a:hover{
        text-decoration: none;
        color: midnightblue;
    }
</style>
<body style="background-color: rgb(195, 225, 255);">
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h2>Bus Ticket Online</h2>
        </a>
    
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="schedule-admin.php" class="nav-link px-2 link-secondary" style="color: #6c757d">Schedule</a></li>
            <li><a href="transaction-admin.php" class="nav-link px-2 link-dark" style="color: black">Transaction Summary</a></li>
        </ul>

        <div class="dropdown text-end">
            <a href="#"  id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false"><div class="profile"><i class="bi bi-person" style="font-size: 3.8em; color: midnightblue;"></i></div></a>
        </div>
    
    </header>
</div>

<div class="container">
    <div class="jumbotron" style="background-color: rgb(125, 175, 255);">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date of Departure</th>
                    <th scope="col">Bus</th>
                    <th scope="col">Route</th>
                    <th scope="col">Total Pasenggers</th>
                    <th scope="col">Time Departure</th>
                    <th colspan="2" scope="col">Action</th>
                </tr>
            </thead>
                            
            <?php
            include '../../connection.php';
            $no = 1;
            $data = mysqli_query($connection, "select * from schedule");
            while($x = mysqli_fetch_array($data)){
            $date = $x['date_of_day'];
            $myDate = DateTime::createFromFormat('y-m-d', $date);
            $formatDate = $myDate->format('l, d M Y');
            ?>

            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $formatDate; ?></td>
                    <td><?php echo $x['bus_id']; ?></td>
                    <td><?php echo $x['route']; ?></td>
                    <td><?php echo $x['pass_total']; ?></td>
                    <td><?php echo $x['time']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $x['departure_id']; ?>">EDIT</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $x['departure_id']; ?>">DELETE</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>

        <h5 style="text-align: right;">Add other schedule?</h5>
        <h6 style="text-align: right;"><a href="add-schedule-admin.php">Click here</a></h6>
    </div>
</div>

<?php

include 'footer-admin.php';

?>

</body>
</html>