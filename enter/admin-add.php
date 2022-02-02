<?php

include '../connection.php';

$user = @$_POST['user'];
$password = @$_POST['pass'];
$pass = md5("$password");
$role = @$_POST['role'];
session_start();
$_SESSION['user_type'] = $role;

$data1 = mysqli_query($connection, "select * from user where Role = 'admin'");
$x = mysqli_fetch_array($data1);

$data2 = mysqli_query($connection, "select * from user where Role = 'Owner'");
$y = mysqli_fetch_array($data2);

if ($role == "admin"){
    if($user == $x['username'] && $pass == $x['pass']){
        header("location:../user/admin/schedule-admin.php");
    } elseif($user == $x['username'] || $pass == $x['pass']){
        ?>
        <script>
        if (confirm("Login Fail.\nPlease check your username and password again!")){
            window.location.assign("admin-login.php");
        } else{
            window.location.assign("admin-login.php");
        }
        </script>
        <?php
    } else {
        ?>
        <script>
        if (confirm("Login Fail. Please check your username and password again!\nPlease choose the right Role!\nThank You!")){
            window.location.assign("admin-login.php");
        } else{
            window.location.assign("admin-login.php");
        }
        </script>
    <?php
    }
} elseif($role == "owner"){
    if($user == $y['username'] && $pass == $y['pass']){
        header("location:../user/owner/home-owner.php");
    } elseif($user == $y['username'] || $pass == $y['pass']){
        ?>
        <script>
        if (confirm("Login Fail.\nPlease check your username and password again!")){
            window.location.assign("admin-login.php");
        } else{
            window.location.assign("admin-login.php");
        }
        </script>
        <?php
    } else {
        ?>
        <script>
        if (confirm("Login Fail. Please check your username and password again!\nPlease choose the right Role!\nThank You!")){
            window.location.assign("admin-login.php");
        } else{
            window.location.assign("admin-login.php");
        }
        </script>
    <?php
    }
}

$_SESSION['my_user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

?>