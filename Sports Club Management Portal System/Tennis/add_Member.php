<?php 

error_reporting();
include('connection.php');
if(isset($_GET['email'])){
$email=$_GET['email'];

$sql=mysqli_query($conn,"select * from Requests where Email='$email' and ClubName='Tennis'");


$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"insert into members select * from Requests where Email='$email' and ClubName='Tennis'"))
	
{
	header('location:../Alert_EntrySuccessful.php');	
}
else {
	
	header('location:../Alert_DataEntryFailed.php');
}
}
?>