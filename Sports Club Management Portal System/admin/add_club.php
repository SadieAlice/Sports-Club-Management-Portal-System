<?php 


include('connection.php');



if(isset($add))
{
	$sql=mysqli_query($conn,"select * from Clubs where ClubName = '$clb' ");
	if(mysqli_num_rows($sql))
	{
	header('Location:../Alert_AlreadyExist.php');
	}		
	else
	{	
	if(mysqli_query($conn,"insert into Clubs values('','$clb')"))	
	{
		header('Location:../Alert_EntrySuccessful.php');
	}else{
		
		header('Location:../Alert_DataEntryFailed.php');
		}
	}
}
?>
<br><br>
<h1> ADD CLUB</h1>
<form  method="post" enctype="multipart/form-data">

<table class="table table-bordered">
	
	<tr>	
		<th>Club Name</th>
		<td><input type="text" name="clb" class="form-control" required />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Add Club" name="add"/>
		</td>
	</tr>
</table> 
</form>