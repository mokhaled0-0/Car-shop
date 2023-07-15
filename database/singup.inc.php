<?php

if(isset($_POST["submit"])){

    include_once 'dbh.inc.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordrepeat=$_POST['passwordrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyinputsingup($username, $email, $password, $passwordrepeat)!== false){
        header("location:..\singup.php?error=emptyinput");
        exit();
    
    }
    if(invalidusername($username)!== false){
        header("location:..\singup.php?error=invalidusername");
        exit();
    
    }
    if(invalidemail($email)!== false){
        header("location:..\singup.php?error=invalidemail");
        exit();
    
    }
    if(passwordmatch($password,$passwordrepeat)!== false){
        header("location:..\singup.php?error=passworddon'tmatch");
        exit();
    
    }
    if(username_email_eexits($conn,$username, $email)!== false){
        header("location:..\singup.php?error=usernametaken");
        exit();
    
    }

    createuser($conn,$username, $email, $password );


}
    else{ header("location:..\singup.php");  exit();}



    $sql= "INSERT INTO loginsystem.users (username, email, password) VALUES('$username','$email','$password');";


    mysqli_query($conn,$sql);

   

