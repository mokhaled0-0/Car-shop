<?php 

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cars";
$conn1= mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


if(!$conn1){
    die("connection failed". mysqli_connect_error());
} 