<?php 
include('connection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from members where Member_ID='$id' and ClubName ='Tennis'");
$res=mysqli_fetch_assoc($sql);


$img=$res['Image'];

unlink("../images/members/$img");

if(mysqli_query($conn,"delete from members where Member_ID='$id' and ClubName ='Tennis'"))
{
header('location:../Alert_EntrySuccessful.php');	
}
else {
	header('location:../Alert_DataEntryFailed.php');
}
?>