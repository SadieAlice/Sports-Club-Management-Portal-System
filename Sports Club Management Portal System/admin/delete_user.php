<?php 
include('../connection.php');

$id=$_GET['Std_ID'];

$sql=mysqli_query($conn,"select * from students where Std_ID='$id'");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"delete from students where Std_ID='$id'"))
{
header("Location: ../Alert_EntrySuccessful.php");	
}

?>