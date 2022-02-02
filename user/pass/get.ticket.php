<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>This Your Ticket</title>
</head>
<style>
    main{
        margin: 70px auto;
    }
    h2{
        text-align: center;
    }
    *{
        text-align: right;
    }
    td{
        text-align: left;
    }
</style>
<body class="bg-dark">
    <main>
        <div class="container py-4">
            <div class="p-5 bg rounded-3" style="background-color: cornflowerblue;">
            
            <div class="bg">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <h2>Bus Ticket Online</h2>
                    </a>
                    <div class="bus">
                        <i class="fas fa-bus-alt" style="font-size: 0.5rem; opacity: 20%;"></i>
                        <i class="fas fa-bus-alt" style="font-size: 1rem; opacity: 40%;"></i>
                        <i class="fas fa-bus-alt" style="font-size: 2rem; opacity: 60%;"></i>
                        <i class="fas fa-bus-alt" style="font-size: 3rem; opacity: 80%;"></i>
                        <i class="fas fa-bus-alt" style="font-size: 4rem;"></i>
                    </div>
                </header>
                <h2 style="margin-bottom: 20px;">Ticket</h2>
                
                <div class="row align-itmes-md-stretch">
                    <div class="col-md-4">
                        <table cellpadding="5">

                            <?php
                                include '../../connection.php';
                                session_start();
                                $user = $_SESSION['user'];
                                $date = $_SESSION['date'];
                                $time = $_SESSION['time'];
                                $data = mysqli_query($connection, "select * from ticket where username_pass = '$user' && departure_date = '$date' && departure_time = '$time'");
                                $x = mysqli_fetch_array($data);
                                $name = $x['name_pass'];
                                $phone = $x['phonenumber'];
                                $total_pass = $x['total_pass'];
                                $from = $x['from'];
                                $to = $x['track_to'];
                                $bus_code = $x['bus_code'];
                                $total_pay = $x['total_pay'];
                            ?>
                            <tr>
                                <td><b>Name</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $name ?></td>
                            </tr>
                            <tr>
                                <td><b>Username</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $user ?></td>
                            </tr>
                            <tr>
                                <td><b>Phone Number</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $phone ?></td>
                            </tr>
                            <tr>
                                <td><b>Track From</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $from ?></td>
                            </tr>
                            <tr>
                                <td><b>To</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $to ?></td>
                            </tr>
                            <tr>
                                <td><b>Total Passenggers</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $total_pass ?></td>
                            </tr>
                            <tr>
                                <td><b>Total Pay</b></td>
                                <td><b>:</b></td>
                                <td><?php echo "Rp. " . number_format($total_pay, 2, "," , ".") ?></td>
                            </tr>
        
                        </table>
                    </div>

                    <div class="col-md-1">
                        <img src="../../assets/img/bus-stop.png" style="width: 70px; height: 70px;">
                    </div>

                    <div class="col-md-2">
                        <img src="../../assets/img/destination.png" style="width: 200px; height: 210px; opacity: 75%;">
                    </div>

                    <div class="col-md-1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <img src="../../assets/img/bus-stop.png" style="width: 70px; height: 70px;">
                    </div>
    
                    <div class="col-md-4">
                        <table cellpadding="5">
                            <tr>
                                <td><b>Bus Code</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $bus_code ?></td>
                            </tr>
                            <tr>
                                <td><b>Date of Departure</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $date ?></td>
                            </tr>
                            <tr>
                                <td><b>Time of Departure</b></td>
                                <td><b>:</b></td>
                                <td><?php echo $time ?></td>
                            </tr>
                        </table>
                    </div>

                    <p style="font-size: 12;">Note : You can Print this Ticket or just Show it to the Officer on the Bus</p>
                </div>
                
                <a href="ticket-pass.php"><button class="btn btn-primary" type="button">Buy Ticket Again</button></a>
                <a href="home-pass.php"><button class="btn btn-outline-primary" type="button">Done</button></a>
            </div>
            </div>
        </div>
    </main>
</body>
</html>