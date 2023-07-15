 <?php 
function emptyinputsingup($username, $email, $password, $passwordrepeat){

    $result;

if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat))
{ $result=true;}
else{ $result=false;}
return $result;


}

function invalidusername($username){

    $result;
    
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    { $result=true;}
    else{ $result=false;}
    return $result;
    
    
    }

    function invalidemail($email){

       $result;
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        { $result=true;}
        else{ $result=false;}
        return $result;
        
        
        }

        function passwordmatch($password,$passwordrepeat){

           $result;
            
            if($password!=$passwordrepeat)
            { $result=true;}
            else{ $result=false;}
            return $result;
            
            
            }

            function username_email_eexits($conn,$username, $email){

              $sql="SELECT * FROM loginsystem WHERE username = ? or email = ?;";
              $stmt=mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$sql)){
                  header("location:..\singup.php?error=faliure");
                exit();}
                
                
                mysqli_stmt_bind_param($stmt,"ss",$username,$email);
                mysqli_stmt_execute($stmt);

                $result_data=mysqli_stmt_get_result($stmt);
                
                if($row=mysqli_fetch_assoc($result_data)){ return $row;}

                else{
                     $result=false;
                     return $result;
                }
            
                mysqli_stmt_close($stmt); 
            }

            function  createuser($conn,$username, $email, $password ){

                $sql="INSERT INTO loginsystem(username,email,password) VALUES(?,?,?);";
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("location:..\singup.php?error=faliure");
                  exit();}
                  
                  
                  mysqli_stmt_bind_param($stmt,"sss",$username,$email, $password);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_close($stmt); 
  
                  header("location:..\login.php");
                  exit();
              }

              function emptyinputlogin($username, $password){

               $result;
                
                if(empty($username)  || empty($password) )
                { $result=true;}
                else{ $result=false;}
                return $result;
                
                
                }

                function loginuser($conn,$username,$password){                   
                    $unexits=username_email_eexits($conn,$username, $username);

                    if($unexits===false){

                    header("location:..\singup.php?error=wrongusername");     
                    exit();

                    }
                    $checkpassword= password_verify($password,$password);
                
                    if($checkpassword===true){
                        header("location:..\login.php?error=wrongpassword");     
                        exit();

                    }
                    elseif($checkpassword===false){
                         session_start();
                        $_SESSION["id"]=$unexits["id"];
                        $_SESSION["username"]=$unexits["username"];
                        header("location:..\home.php");     
                        exit();

                    }



                }





