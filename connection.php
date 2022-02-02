<?php
$connection = mysqli_connect("localhost","root","","db_project");

if (mysqli_connect_errno()){
    echo "Database Connection Was Failed : " . mysqli_connect_error();
}

?>