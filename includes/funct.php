<?php  require_once("include/function.php"); ?>
 <?php require_once("lib/sessions.php"); ?>
 
<?php 
function Redirect_to($new_location){
	header("Location:".$new_location);
	exit();
}
function login_att($username, $password){
	global $conn;
	$query =mysqli_query($conn, "SELECT * FROM profile WHERE email='$username' and password='$password'");
	if ($result=mysqli_fetch_assoc($query)){
		return $result; 
	}
	else{
		return null; 
	}

}

function login(){
	if (isset($_SESSION["User_id"])){
		return true;
	}
}
function loginids(){
	if (isset($_SESSION["User_idss"])){
		return true;
	}
}
function loginis(){
	if (isset($_SESSION["User_is"])){
		return true;
	}
}
function logins(){
	if (isset($_SESSION["User_ids"])){
		return true;
	}
}
function confirm(){
	if (!login()){
		$_SESSION["ErrorMessage"]="Login Required";
		Redirect_to("login.php");
	}
}
function konfiirm(){
	if (!logins()){
		$_SESSION["ErrorMessage"]="Login Required";
		Redirect_to("login.php");
	}
}
function lonfiirm(){
	if (!loginids()){
		$_SESSION["ErrorMessage"]="Login Required";
		Redirect_to("stafflogin.php");
	}
}
function tonfiirm(){
	if (!loginis()){
		$_SESSION["ErrorMessage"]="Login Required";
		Redirect_to("stafflogin.php");
	}
}
function register(){
	if (isset($_SESSION["Serialnum"])){
       
		return true;
	}
}
function confirm1(){
	if (!register()){
		$_SESSION["ErrorMessage"]="Serial and Pin Number Required";
		Redirect_to("register.php");
	}
}
?>