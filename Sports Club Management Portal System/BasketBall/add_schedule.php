<?php 

 /*$fname = mysqli_real_escape_string( $conn, $_POST['firstname']);*/

include('connection.php');



if(isset($add))
{
	$sql=mysqli_query($conn,"select * from trainingschedule where ClubName = '$clb' and TrainingType='$htn'");
	if(mysqli_num_rows($sql))
	{
	header('Location:../Alert_AlreadyExist.php');
	}		
	else
	{	
	if(mysqli_query($conn,"insert into trainingschedule values('','$clb','$htn','$rno','$type','$price','$details')"))	
	{
		header('Location:../Alert_EntrySuccessful.php');
	}else{
		
		header('Location:../Alert_DataEntryFailed.php');
		}
	}
}
?>
<br><br>
<h1> ADD TRAINING SCHEDULE</h1>
<form  method="post" enctype="multipart/form-data">

<table class="table table-bordered">
	
	<tr>	
		<th>Club Name</th>
		<td><input type="text" name="clb" value= "BasketBall" class="form-control" required />
		</td>
	</tr>
	<tr>	
		<th>Training Type</th>
		<td><input type="text" name="htn" class="form-control" required />
		</td>
	</tr>
	
	<tr>	
		<th>Location</th>
		<td><input type="text" name="rno"  class="form-control" required />
		</td>
	</tr>
	
	<tr>	
		<th>First Session</th>
		<td><input type="text" name="type"  class="form-control" required />
		</td>
	</tr>
	
	<tr>	
		<th>Second Session</th>
		<td><input type="text" name="price"  class="form-control" required />
		</td>
	</tr>
	
	<tr>	
		<th>Training Date</th>
		<td><input name="details"  type="date" class="form-control" required />
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Add Schedule" name="add"/>
		</td>
	</tr>
</table> 
</form>