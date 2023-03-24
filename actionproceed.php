<?php  require_once("include/function.php");?>
<?php require_once("lib/sessions.php");?>
<?php require_once("includes/funct.php");?>
<?php require_once("functions.php");?>

<?php

    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
   $phoneno = $_POST['phoneno'];
   $continent = $_POST['continent'];
   $country = $_POST['country'];
    
    $password = $_POST['password'];
    $passcon = $_POST['conpassword'];
    $regdate=date("Y-m-d");
    if (empty($surname) || empty($firstname) || empty($phoneno) || empty($email) || empty($continent) || empty($country) || empty($passcon)){
  $_SESSION["ErrorMessage"]= "All Fields must be filled out";
  Redirect_to("register.php");
    }    
    elseif(checkUserByStaffname($email)){
      $_SESSION["SuccessMessage"] = "Email already Exist, Proceed to login page";
      Redirect_to("register.php");
    }
    else if ($password!=$passcon){
        $_SESSION["ErrorMessage"] = 'Confirm Password do not match with Password';
      Redirect_to("register.php");
         
     }
   else{
        $query = "INSERT INTO profile (surname, firstname, email, phoneno, continent, country, password, created_on) VALUE ('$surname', '$firstname', '$email', '$phoneno', '$continent', '$country',  '$password', '$regdate')"; 
            $insert_row = mysqli_query($conn,$query); 
           if ($insert_row>0){
                 
                 
                    $_SESSION["SuccessMessage"]= "Account Created successfully, Please login to start sharing your experience with us";
                 Redirect_to("login.php");
            }
            else{
                
                 $_SESSION["ErrorMessage"]= "Error! Not Submitted";
                Redirect_to("register.php");
            }
         }


?>
