<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Schedule ?"))
		{
		window.location.href='delete_schedule.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Training Schedule</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-danger">Add New Schedule</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>ClubName</th>
		<th>Training Type</th>
		<th>Location</th>
		<th>First Session</th>
		<th>Second Session</th>
		<th>Training Date</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from trainingschedule where ClubName='Tennis'");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Sid'];	
$club=$res['ClubName'];
$type=$res['TrainingType'];
$loc=$res['Location'];
$fses=$res['FirstSession'];
$Lses=$res['SecondSession'];
$date=$res['TrainingDate'];
?>

<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['ClubName']; ?></td>
		<td><?php echo $res['TrainingType']; ?></td>
		<td><?php echo $res['Location']; ?></td>
		<td><?php echo $res['FirstSession']; ?></td>
		<td><?php echo $res['SecondSession']; ?></td>
		<td><?php echo $res['TrainingDate']; ?></td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id;?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}

?>	
	
</table>