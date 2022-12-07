<?php 
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from Coach where Coach_ID='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
if(mysqli_query($conn,"update Coach set Username='$rno',Password='$type',ClubName='$clb' where Coach_ID='$id'")){
	
	header('Location:../Alert_EntrySuccessful.php');	
}else{
	
	header('Location:../Alert_DataEntryFailed.php');	
}
}

?>
<h1>UPDATE COACH</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	
	<tr>	
		<th>UserName</th>
		<td><input type="text"  name="rno"  value="<?php echo $res['Username']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Password</th>
		<td><input type="text" name="type" value="<?php echo $res['Password']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Club Name</th>
		<td><input type="text"  name="clb" value="<?php echo $res['ClubName']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Update Coach Details" name="update"/>
		</td>
	</tr>
</table> 
</form>