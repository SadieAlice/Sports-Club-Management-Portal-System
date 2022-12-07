<?php
include('connection.php');
?>
<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='delete_feedback.php?FId='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>Feedback</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
<?php 


$i=1;
$sql=mysqli_query($conn,"select * from Feedback");

while($res = mysqli_fetch_assoc($sql))
{
$id=$res['FId'];	
$name=$res['Name'];
$email=$res['Email'];
$mobile	=$res['Phone'];
$message=$res['Message'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['Name']; ?></td>
		<td><?php echo $res['Email']; ?></td>
		<td><?php echo $res['Phone']; ?></td>
		<td><?php echo $res['Message']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>