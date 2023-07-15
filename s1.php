<?php
$servername = "localhost";
$username = "root";
$password = "";
$db       = "search";
// Create connection
$conn = new mysqli($servername, $username, $password , $db);
 
// Check connection
if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
}?>

<?php require 'header.php'?>

<link rel="stylesheet" href="css/s1.css">
<body>
    

<h1 class class="title"> search results</h1>
    
<div class="sr">
    <?php 
    $n=mysqli_real_escape_string($conn,$_GET['name']);
    $l=mysqli_real_escape_string($conn,$_GET['loc']);
    $sql = "SELECT cars.id, cars.loc,cars.discription, cars.`NAME`, ratingg.car_rate FROM cars LEFT JOIN ratingg ON cars.id = ratingg.cs_id WHERE NAME='$n '";
    $result = $conn->query($sql);
    
    $cs_details=null;
    
    if (!empty($result) && $result->num_rows > 0) {
        // output data of each row
        $result = $result->fetch_array();
        $cs_details = $result;
        echo "<div> <h3 class='l'>
                ".$cs_details['NAME']."</h3>
                ".$cs_details['LOCATION']."</h3>
                <br>    
                ".$cs_details['discription']."</h3>
        
                </div>";

    
    }
    //take the ratedindex
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['key'])){
        $rate_value = $_POST['key'];
        $cs_id      = $cs_details['id']; 
        var_dump($cs_id);  
        if(isset($cs_details['car_rate'])){
            $sql = "UPDATE ratingg SET car_rate= '$rate_value'    WHERE cs_id='$cs_id' ";
          
            $result = $conn->query($sql);
            //check if the db is updated
           if($conn -> affected_rows > 0){ 
                //updated
                echo "updated";
            
           }
           else{ echo 'not updated'; }




        }
        else{
            $sql = "INSERT INTO  ratingg ( car_rate , cs_id )  VALUES ($rate_value,$cs_id) ";
            $result = $conn->query($sql);
            var_dump($sql);
            if($conn -> affected_rows > 0){ 
                //Inserted
                echo "Inserted";
            
           }
           else{ echo 'not Inserted'; }

        }


    }
    
    

    // $n=mysqli_real_escape_string($conn1,$_GET['name']);
    // $l=mysqli_real_escape_string($conn1,$_GET['loc']);
    // $sql="SELECT * FROM cars LEFT JOIN rating ON cars.id = rating.cs_id WHERE NAME='$n ' AND LOCATION='$l' ";
    

    // $result=mysqli_query($conn1,$sql);
    // $queryres=mysqli_num_rows($result);
    // if ($queryres>0){
    //     while ($row=mysqli_fetch_assoc($result)){

    //         echo "<div> <h3>
    //         ".$row['NAME']."</h3>
    //         ".$row['LOCATION']."</h3>
    //         ".$row['car_rate']."
    //         </div>";
    //     }
       
    // }
    // // $car_rate=mysqli_fetch_assoc($result);
    
    // $rate = $result->fetch_all(MYSQLI_ASSOC);
    // var_dump($rate);
    
    
    ?></div>
    <div class="rating">
    <span class="fa fa-star fa-2x" data-index="0"></span>
    <span class="fa fa-star fa-2x" data-index="1"></span>
    <span class="fa fa-star fa-2x" data-index="2" ></span>
    <span class="fa fa-star fa-2x" data-index="3"></span>
    <span class="fa fa-star fa-2x" data-index="4"></span>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script>
        var ratedindex=-1;
           $(document).ready(function(){
               resetcolor();
               var recall_result= parseInt(<?php echo isset($cs_details['car_rate']) ? $cs_details['car_rate'] : -1 ; ?>) ;

               ratedindex = recall_result;
               if(recall_result != null)
                setstars(parseInt(recall_result));
               $('.fa-star').on('click',function(){
                   ratedindex=parseInt($(this).data('index'));
                    $.ajax({
                        url: "s1.php?name=<?php echo $cs_details['NAME']; ?>&loc=<?php echo $cs_details['LOCATION']; ?>",
                        data: { key : ratedindex },
                        method: "POST",
                        success: function(data) {
                        location.reload();
                        }
                    });   
               });
               $('.fa-star').ready(function(){
                   $('.fa-star').mouseover(function(){
                    resetcolor()
                      
                       var currentindex= parseInt($(this).data('index'));
                       setstars(currentindex);
                    //    for(var i=0; i<= currentindex;i++)
                    //         $('.fa-star:eq('+i+')').css('color','yellow');
                   }); 
               });
               $('.fa-star').ready(function(){
                   $('.fa-star').mouseleave(function(){
                    
                    resetcolor();
                       if(ratedindex!=-1)
                            setstars(ratedindex);
                    //    for(var i=0; i<= ratedindex;i++)
                    //         $('.fa-star:eq('+i+')').css('color','yellow');

                   }); 
               });

        });
        function setstars(max){
            for(var i=0; i<= max;i++)
                            $('.fa-star:eq('+i+')').css('color','#3498db');
        }
        function resetcolor(){
            
            $('.fa-star').css('color','black');
           

        }
      
        
    </script>

</body>
