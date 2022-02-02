<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <title>Success Page</title>
</head>
<style>
    main{
        margin: 200px auto;
        max-width: 800px;
    }
    *{
        text-align: center;
    }
    h2{
        margin-bottom: 50px;
    }
    
</style>
<body class="bg-dark">
<main>
    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="p-5 bg-info rounded-3">
                    <h2>You Succesfully Add New Partner!!</h2>
                    <a href="add-owner.php"><button class="btn btn-outline-dark" onClick="toBack" type="button">Add New User Again</button></a>
                    <a href="../user/owner/home-owner.php"><button class="btn btn-dark" onClick="toHome" type="button">Back to Home</button></a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>