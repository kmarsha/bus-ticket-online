<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="shortcut icon" href="assets/img/bus.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="acc.css">
</head>
<style>
    h1{
        color: white;
    }
</style>
<body style="background-color: rgb(56, 56, 56);">
        <main class="form-signin">
        <form method="POST" action="log-in-add.php">
            <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
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
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            <p class="mt-5 mb-3 text-muted">Don't have an account yet? <a href="sign-in.php">Sign in</a></p>
            <p class="mt-5 mb-3 text-muted">If you're an Admin or an Owner, <a href="admin-login.php">Log in Here</a></p>
        </form>
    </main>
    
    </body>
</html>