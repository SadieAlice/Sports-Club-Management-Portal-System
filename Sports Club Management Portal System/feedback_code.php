<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$db = "botho_sports_club_db";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
	echo " Database Connection Error!";
}
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $msg = $_POST['msg'];
 
 $result=mysqli_query($con,"select * from feedback where Email='$email' and Message='$msg'");
	if(mysqli_num_rows($result))
	{
		header("Location: Alert_AlreadyExist.php");
	
	
	}
    else {
 
  $qry = "INSERT INTO `feedback`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$name','$email',$phone,'$msg')";
  $insert = mysqli_query($con,$qry);
  if(!$insert) {
	  header("Location: Alert_DataEntryFailed.php");
  }
  else {
	 header("Location: Alert_EntrySuccessful.php");
  }
	}
?>