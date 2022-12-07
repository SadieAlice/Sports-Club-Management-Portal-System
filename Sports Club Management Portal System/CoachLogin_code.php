<?php
session_start();
include('connection.php');
if($_POST) {
	
	$user = $pass = $club = '';
	
	$user = mysqli_real_escape_string( $conn,$_POST['username']);
$pass = mysqli_real_escape_string( $conn,$_POST['password']);
$club = mysqli_real_escape_string( $conn,$_POST['club']);
	
	$sql ="select * from Coach where Username = '$user'and Password='$pass' and ClubName='$club' ";
	
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result))
	{
		
		 
	switch ($club){
		case "$club";
		$_SESSION['Email']=$user;
		header("Location: $club/dashboard.php");
		break;
		
		default;
			header('Location:LoginFailed.php');
	    }
			
    }else{
		header('Location:LoginFailed.php');
	}
}
?>


