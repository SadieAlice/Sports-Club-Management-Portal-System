<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Request?"))
		{
		window.location.href='delete_Request.php?id='+id;	
		}
	}
	
	function addMember(email)
	{
		if(confirm("You want to Accept this Request?"))
		{
		window.location.href='add_Member.php?email='+email;	
		}
	}
	
	
</script>
<table class="table table-striped table-hover">
	<h1>View Requests</h1><hr>
	
	<tr>
		<th>Req No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>ClubName</th>
		<th>Image</th>
		<th>Add Member</th>
		<th>Delete</th>
	</tr>
<?php 


$i=1;
$sql=mysqli_query($conn,"select * from Requests where ClubName = 'BasketBall'");

while($res = mysqli_fetch_assoc($sql))
{	
$id=$res['Req_ID'];	
$fname=$res['Firstname'];
$lname=$res['Lastname'];
$gender	=$res['Gender'];
$email=$res['Email'];
$phone=$res['Phone Number'];
$club=$res['ClubName'];
$img=$res['Image'];
$path="../images/members/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['Firstname']; ?></td>
		<td><?php echo $res['Lastname']; ?></td>
		<td><?php echo $res['Gender']; ?></td>
		<td><?php echo $res['Email']; ?></td>
		<td><?php echo $res['Phone Number']; ?></td>
		<td><?php echo $res['ClubName']; ?></td>
	
	<td><img src="<?php echo $path; ?>" height="50" width="50"></td> 
		<td><center><a href="#"onclick="addMember('<?php echo $email; ?>')"><span class="glyphicon glyphicon-user"style='color:blue'></span></a></center></td>
		<td><center><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></center></td>
	</tr>	
	
<?php 	
}
?>	
	
</table>