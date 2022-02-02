<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="acc.css">
</head>
<style>
    h1{
        color: white;
    }
</style>
<body style="background-color: rgb(56,56,56);">
    <main class="form-signin">
        <form method="POST" action="sign-in-add.php">
            <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingInputName" placeholder="Name" pattern="[A-Za-z_]+$" required>
                <label for="floatingInputName">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="user" class="form-control" id="floatingInputUser" placeholder="Username" required minlength="4" maxlength="12">
                <label for="floatingInputUser">UserName (min. 4 - 12)</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required minlength="4" maxlength="12">
                <label for="floatingPassword">Password (min. 4 - 12)</label>
            </div>

            <div class="checkbox mb-3" style="color: white;">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Already have an account? <a href="log-in.php">Log in</a></p>
        </form>
    </main>
</body>
</html>