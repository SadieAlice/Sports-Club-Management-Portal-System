<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Club ?"))
		{
		window.location.href='delete_club.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Sport Clubs</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_club" class="btn btn-danger">Add New Club</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Club Name</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from Clubs ");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Club_ID'];	
$club=$res['ClubName'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['ClubName']; ?></td>
		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}

?>	
	
</table>