<?php 
include('../connection.php');

$id=$_GET['FId'];

$sql=mysqli_query($conn,"select * from feedback where FId='$id'");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"delete from feedback where FId='$id'"))
{
header("Location: ../Alert_EntrySuccessful.php");	
}

?>