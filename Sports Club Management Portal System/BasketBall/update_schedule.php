<?php 
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from trainingschedule where Sid='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
if(mysqli_query($conn,"update trainingschedule set ClubName='$clb', TrainingType='$rno',Location='$type',FirstSession='$price',SecondSession='$details',TrainingDate='$date' where Sid='$id' "))
{
	header('Location:../Alert_EntrySuccessful.php');	
}else {
	
	header('Location:../Alert_DataEntryFailed.php');	
}
}

?>
<h1>UPDATE TRAINING SCHEDULE</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Club Name</th>
		<td><input type="text"  name="clb"  value="BasketBall" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Training Type</th>
		<td><input type="text"  name="rno"  value="<?php echo $res['TrainingType']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Location</th>
		<td><input type="text" name="type" value="<?php echo $res['Location']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>First Session</th>
		<td><input type="text" name="price"  value="<?php echo $res['FirstSession']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Second Session</th>
		<td><input type="text" name="details"  value="<?php echo $res['SecondSession']; ?>" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Training Date</th>
		<td><input type="date" name="date"  value="<?php echo $res['TrainingDate']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Update Schedule Details" name="update"/>
		</td>
	</tr>
</table> 
</form>