<?php
if(isset($_POST["submit"])){
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(emptyinputlogin($username,$password)!== false){
        header("location:..\login.php?error=emptyinput");
        exit();
    
    }

    loginuser($conn,$username,$password);

}

else{
    header("location:..\login.php");
        exit(); 

}