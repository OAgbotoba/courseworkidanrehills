<?php
	
	
	/*function getUserData($username)
	{
		$array= array();
		$query= "SELECT surname, firstname, username FROM userdata WHERE username='$_SESSION['username']' or email='$_SESSION['username']')";
		$result=mysqli_query($con, $query);
		if (!$result)
		return false;
		$row=mysqli_fetch_array($result);
		echo ''.$row['surname'].'';
		
	}
	*/
	function logged_in()
	{
		if (isset($_SESSION['username']) || isset($_COOKIE['username']))
		{
			return false;
		}
		else {
			return true;
		}
	}
	
?>