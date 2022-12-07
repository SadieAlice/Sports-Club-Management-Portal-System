<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Coach ?"))
		{
		window.location.href='delete_coach.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Sport Club Coaches</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_coach" class="btn btn-danger">Add New Coach</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>UserName</th>
		<th>Password</th>
		<th>Club Name</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from Coach ");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Coach_ID'];	
$user=$res['Username'];
$pass=$res['Password'];
$club=$res['ClubName'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['Username']; ?></td>
			<td><?php echo $res['Password']; ?></td>
		<td><?php echo $res['ClubName']; ?></td>

		<td><a href="dashboard.php?option=update_news&id=<?php echo $id;?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}

?>	
	
</table>