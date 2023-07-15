<?php
include 'database/sdb.php';
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
    <title>Document</title>
    <link rel="stylesheet" href="css/search1.css">
</head>
<body>

    


<h1 class="search"> Search page</h1>
<div class="sr">
<?php
    if(isset($_POST['ss'])){
        $search= mysqli_real_escape_string($conn1,$_POST['search']);
        $sql="SELECT * FROM cars WHERE name LIKE '%$search%' OR loc LIKE '%$search%' ;";
        $result=mysqli_query($conn1,$sql);
        $qr=mysqli_num_rows($result);
         echo "<h2  class='search'> there are ".$qr." results</h2>";

        if($qr>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='pack'> <a  href='s1.php? name=".$row['name']." &loc=".$row['loc']."' ><div> <h3>
                ".$row['name']."</h3>
                ".$row['loc']."</h3>
                </div></a></div>";

            }

        }
        else{ echo '<p class="pack">There are no results matching your search...</p>';}

    }


?>

</div>
   </script>

</body>

</html>