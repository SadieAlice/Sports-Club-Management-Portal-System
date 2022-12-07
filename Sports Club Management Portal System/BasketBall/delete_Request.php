<?php 
include('connection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from Requests where Req_ID='$id'");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"delete from Requests where Req_ID='$id'"))
{
header('location:../Alert_EntrySuccessful.php');	
}
else {
	header('location:../Alert_DataEntryFailed.php');
}
?>