<?php
ob_start();
session_start();


require 'header.php';
 require_once 'database/dbh.inc.php';

?>
<style>
body {
    background-image: url("supercars\ 🔥.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    text-align: center;

}

.c {
    width: 20em;
    height: 10em;
    border: none;
    border-radius: 2em;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}



.s {

    font-size: 4em;

}

.e {
    border: none;
    background-color: rgba(255, 255, 255, 0.7);
    /* background-image: linear-gradient(270deg, #b1bfd8 0%, #6782b4 74%); */
    border-radius: 10px;
    width: 10em;
    height: 3em;
    font-size: medium;
    color: black;
    margin-top: 1.5em;
}

.c {

    text-align: center;

}
</style>

<body>


    <form action="contact.php" method="post" name="con">
        <h1 class="s"> contact us</h1>
        <p>
            your feedback will help us to be better

        </p>

        <input type="text" name="comm" class="c" placeholder="please leave your comment">
        <br>
        <input type="submit" value="submit" class="e">


    </form>






</body>

</html>

<?php
// var_dump($_SESSION);
if($_SERVER['REQUEST_METHOD']=='POST' ){
$comm=mysqli_real_escape_string($conn,$_POST['comm']);



$sql="INSERT INTO `users`(`COMM`) VALUES ('$comm')";

$result=mysqli_query($conn,$sql);

}





?>