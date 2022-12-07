<?php 
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from News where Nid='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
if(mysqli_query($conn,"update News set ClubName='$clb', Title='$rno',News='$type' where Nid='$id' ")){
	
	header('Location:../Alert_EntrySuccessful.php');	
}else{
	
	header('Location:../Alert_DataEntryFailed.php');	
}
}

?>
<h1>UPDATE NEWS</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Club Name</th>
		<td><input type="text"  name="clb"  value="BasketBall" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Title</th>
		<td><input type="text"  name="rno"  value="<?php echo $res['Title']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>News</th>
		<td><textarea type="text" name="type" value="<?php echo $res['News']; ?>"  class="form-control"> </textarea>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-danger" value="Update News Details" name="update"/>
		</td>
	</tr>
</table> 
</form>