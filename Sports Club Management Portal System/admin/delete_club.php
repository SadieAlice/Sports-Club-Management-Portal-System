<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from Clubs where Club_ID='$id' ");
$res=mysqli_fetch_assoc($sql);


if(mysqli_query($conn,"delete from Clubs where Club_ID='$id' "))
{
header('Location:../Alert_EntrySuccessful.php');
}

?>