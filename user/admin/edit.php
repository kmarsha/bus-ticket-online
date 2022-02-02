<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap.min.css">
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
    .info{
        margin-top: 10px;
        border-radius: 10px;
        padding-left: 8px;
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
    <main class="form-signin">
        <form method="POST" action="update.php">
            <h1 class="h3 mb-3 fw-normal" style="color: aliceblue;">Edit Schedule</h1>

            <?php

            include '../../connection.php';
            $id = $_GET['id'];
            $data = mysqli_query($connection, "select * from schedule where departure_id = '$id'");
            while($x = mysqli_fetch_array($data)){
            $date = $x['date_of_day'];
            $myDate = DateTime::createFromFormat('y-m-d', $date);
            $formatDate = $myDate->format('l, d-M-Y');
            ?>
            <div class="form-floating">
                <input type="hidden" name="id" value="<?php echo $x['departure_id']; ?>">
                <input type="date" name="date" class="form-control" id="floatingDate" placeholder="Date of Departure" value="<?php echo $formatDate ?>" required>
                <label for="floatingDate">Date (<?php echo $formatDate ?>)</label>
            </div>
            <div class="form-floating">
                <input type="time" name="time" class="form-control" id="floatingInputTime" placeholder="Time" value="<?php echo $x['time'] ?>" required>
                <label for="floatingInputTime">Time (<?php echo $x['time'] ?>)</label>
            </div>

            <hr>
            
            <div class="info">
            <b><em><p>Route : <?php echo $x['route'] ?> <br>
            Total Pass : <?php echo $x['pass_total'] ?></p></em></b>
            </div>

            <hr>

            <p>Note : You can't change route & total pass</p>

            <button class="w-30 btn btn-lg btn-primary" type="submit">Registration</button>
            <a href="javascript:window.history.go(-1);"><button class="w-30 btn btn-lg btn-primary" type="button">Cancel</button></a>
        </form>
        <?php
            }
        ?>
    </main>
</div>
</div>

<?php

include 'footer-admin.php';

?>

</body>
</html>