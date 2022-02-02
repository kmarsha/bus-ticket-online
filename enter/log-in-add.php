<?php

include '../connection.php';

$data = mysqli_query($connection, "select * from user");
$x = mysqli_fetch_array($data);

$user = @$_POST['user'];
$password = @$_POST['pass'];
$pass = md5("$password");
$user_type = "pass";

$_SESSION['user_type'] = $user_type;
$_SESSION['my_user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

if ($user == $x['username'] & $pass == $x['pass']){
    header("location:../user/pass/home-pass.php");
}elseif($user == $x['username'] || $pass == $x['pass']){
    echo '<script>alert("Login Fail. Please check your username and password again!
    \nIf you don\'t have any account Please Sign-in First!\nThank You!")</script>';
}
?>