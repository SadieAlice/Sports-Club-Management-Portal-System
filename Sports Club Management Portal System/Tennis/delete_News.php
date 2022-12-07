<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from News where Nid='$id' and ClubName = 'Tennis' ");
$res=mysqli_fetch_assoc($sql);


if(mysqli_query($conn,"delete from News where Nid='$id' "))
{
header('Location:../Alert_EntrySuccessful.php');
}

?>