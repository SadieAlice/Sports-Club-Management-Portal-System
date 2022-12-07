<?php
session_start();
include('connection.php');
if($_POST) {
	
	$user = $club = '';
	
	$user = mysqli_real_escape_string( $conn,$_POST['username']);
$club = mysqli_real_escape_string( $conn,$_POST['club']);
	
	$sql ="select * from members where Email = '$user' and ClubName='$club' ";
	
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result))
	{
		
		 
	switch ($club){
		case "$club";
		$_SESSION['Email']=$user;
		header("Location: $club/tennishome.php");
		break;
		
		default;
			header('Location:notEnrolled.php');
	    }
			
    }else{
		header('Location:notEnrolled.php');
	}
}
?>


