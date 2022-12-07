<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this News ?"))
		{
		window.location.href='delete_News.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Club News</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_news" class="btn btn-danger">Add News</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Club Name</th>
		<th>Title</th>
		<th>News</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from News where ClubName = 'BasketBall'");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Nid'];	
$club=$res['ClubName'];
$img=$res['Title'];
$news=$res['News'];	
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['ClubName']; ?></td>
		<td><?php echo $res['Title']; ?></td>
			<td><?php echo $res['News']; ?></td>

		<td><a href="dashboard.php?option=update_news&id=<?php echo $id;?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}

?>	
	
</table>