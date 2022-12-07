<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from trainingschedule where Sid='$id' ");
$res=mysqli_fetch_assoc($sql);


if(mysqli_query($conn,"delete from trainingschedule where Sid='$id' "))
{
header('Location:../Alert_EntrySuccessful.php');	
}

?>