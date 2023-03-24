<?php 
    
    require_once("includes/function.php");
    require_once("lib/sessions.php");
    require_once("includes/funct.php");
   // require_once "lib/PHPMailer-master/PHPMailerAutoload.php";
    require_once("functions.php")

    
?>

<?php konfiirm();?>

<?php 
	
			$surname=$_SESSION['surname'];
            $firstname=$_SESSION['firstname'];
			$name=$surname." ".$firstname;
			$places = $_POST['places'];
			//echo $places;
			//exit;
    		$message = $_POST['message'];
			
    		$FILES = $_FILES['images']['name'];
		    $files = $_FILES['images']['size'];
		    $filet = $_FILES['images']['type'];
		    $tmp_image = $_FILES['images']['tmp_name'];
		    
		    $dateupload=date("Y-m-d");
		    
		    $extensions= array("jpg", "png");
		    $array = explode('.', $_FILES['images']['name']);
			$file_ext = strtolower(end($array));
	
    if (in_array($file_ext, $extensions)===false){
            
            $_SESSION["ErrorMessage"]= "Images uploaded must be in PNG or JPG only";
          Redirect_to("shareexp.php");
     }
     
     else if ($files >5242880){
          
            $_SESSION["ErrorMessage"]= "File must not exceed 10MB";
          Redirect_to("shareexp.php");

     }
    else{

			$query = "INSERT INTO experinsert(name, place, message, img, created_on) VALUE ('$name', '$places', '$message', '$FILES', '$dateupload')"; 
            $insert_row = mysqli_query($conn,$query); 
            move_uploaded_file($tmp_image, "alluploaswerqweben/".$FILES);
            
            if ($insert_row>0){

             		
					$_SESSION["SuccessMessage"]= "Information submitted successfully";
          			Redirect_to("shareexp.php");
			}
			else{
					$_SESSION["ErrorMessage"]= "Information not submitted";
          			Redirect_to("shareexp.php");
				}
			
		}
	

?>