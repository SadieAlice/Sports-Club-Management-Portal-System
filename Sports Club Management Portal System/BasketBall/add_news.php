<?php 


include('connection.php');



if(isset($add))
{
	$sql=mysqli_query($conn,"select * from News where ClubName = '$clb' and Title='$htn'");
	if(mysqli_num_rows($sql))
	{
	header('Location:../Alert_AlreadyExist.php');
	}		
	else
	{	
	if(mysqli_query($conn,"insert into News values('','$clb','$htn','$rno')"))	
	{
		header('Location:../Alert_EntrySuccessful.php');
	}else{
		
		header('Location:../Alert_DataEntryFailed.php');
		}
	}
}
?>
<br><br>
<h1> ADD NEWS</h1>
<form  method="post" enctype="multipart/form-data">

<table class="table table-bordered">
	
	<tr>	
		<th>Club Name</th>
		<td><input type="text" name="clb" value= "BasketBall" class="form-control" required />
		</td>
	</tr>
	<tr>	
		<th>Title</th>
		<td><input type="text" name="htn" class="form-control" required />
		</td>
	</tr>
	
	<tr>	
		<th>News</th>
		<td><textarea name="rno"  class="form-control" required ></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Add News" name="add"/>
		</td>
	</tr>
</table> 
</form>