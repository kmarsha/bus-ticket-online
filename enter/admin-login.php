<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Primary Log-In</title>
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
        <form method="POST" action="admin-add.php">
            <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
            <div class="form-floating">
                <input name="user" type="text" class="form-control" id="floatingInputUser" placeholder="Username" minlength="4" maxlength="12" required>
                <label for="floatingInputUser">UserName (min. 4 - 12)</label>
            </div>
            <div class="form-floating">
                <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" minlength="4" maxlength="12" required>
                <label for="floatingPassword">Password (min. 4 - 12)</label>
            </div>
            <div class="form-floating">
                <select class="form-control" id="floatingRole" name="role" placeholder="Role" required>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                </select>
                <label for="floatingRole">Role</label>
            </div>

            <div class="checkbox mb-3" style="color: white;">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>
    </main>
    </body>
</html>