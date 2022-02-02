<?php

    include '../connection.php';

    $name = @$_POST['name'];
    $user = @$_POST['user'];
    $password = @$_POST['pass'];
    $pass = md5("$password");
    $role = 'owner';

    $user_check = mysqli_num_rows(mysqli_query($connection, "select username from user where username='$user'"));

    if ($user_check > 0){
        ?>
        <script>
        if (confirm("Add user Fail. Your picked username was taken!\nPlease pick another username!\nThank You!")){
            window.location.assign("add-owner.php");
        } else{
            window.location.assign("add-owner.php");
        }
        </script>
<?php
    }else{
        header("location:add-succesfully-owner.php");
        mysqli_query($connection, "insert into `user`(`fullname`, `username`, `pass`,`role`) values('$name', '$user', '$pass', '$role')");
    }

?>