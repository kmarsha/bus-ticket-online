<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New-Owner</title>
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="acc.css">
</head>
<style>
    h1{
        color: white;
    }
</style>
<body>
    <main class="form-signin">
        <form method="POST" action="add-owner-to.php">
            <h1 class="h3 mb-3 fw-normal">Please Fill this Form</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingInputName" placeholder="Name" pattern="[A-Za-z_]+$" required>
                <label for="floatingInputName">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="user" class="form-control" id="floatingInputUser" placeholder="Username" required minlength="4" maxlength="12">
                <label for="floatingInputUser">UserName (Can Change everytime)</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required minlength="4" maxlength="12">
                <label for="floatingPassword">Password (Can Change everytime)</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Add New-Owner</button>
            <p class="mt-5 mv-3 text-muted">Are you wanna add New Admin? <a href="add-admin.php">Please click here</a></p>
            <p class="mt-5 mb-3 text-muted">Want canceling this step? <a href="javascript:window.history.go(-1);">Klik this</a></p>
        </form>
    </main>

</body>
</html>