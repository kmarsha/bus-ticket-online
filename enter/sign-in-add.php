<?php

    include '../connection.php';
    
    $name = @$_POST['name'];
    $user = @$_POST['user'];
    $password = @$_POST['pass'];
    $pass = md5("$password");
    $role = 'pass';
    
    $user_check = mysqli_num_rows(mysqli_query($connection, "select username from user where username='$user'"));
    
    if ($user_check > 0){
        ?>
        <script>
        if (confirm("Sign-in Fail. Your picked username was taken!\nPlease pick another username!\nThank You!")){
            window.location.assign("sign-in.php");
        } else{
            window.location.assign("sign-in.php");
        }
        </script>
<?php
    }else{
        header("location:../user/pass/home-pass.php");
        mysqli_query($connection, "insert into `user`(`fullname`, `username`, `pass`,`role`) values('$name', '$user', '$pass', '$role')");
    }
    
    session_start();
    $_SESSION['nama'] = $name;
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;
    $_SESSION['user_type'] = $role;
    $_SESSION['my_user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

?>