<?php
include('connection.php');
?>
<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this User ?"))
		{
		window.location.href='delete_user.php?Std_ID='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>User Mangement</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Delete</th>
	</tr>
<?php 


$i=1;
$sql=mysqli_query($conn,"select * from students");

while($res = mysqli_fetch_assoc($sql))
{
$id=$res['Std_ID'];	
$name=$res['Firstname'];
$lname=$res['Lastname'];
$email=$res['Email'];
$pass=$res['Password'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['Firstname']; ?></td>
		<td><?php echo $res['Lastname']; ?></td>
		<td><?php echo $res['Email']; ?></td>
		<td><?php echo $res['Password']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>