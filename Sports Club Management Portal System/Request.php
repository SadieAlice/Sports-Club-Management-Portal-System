
<?php
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost","root","","botho_sports_club_db") or die('DATABASE connection failed');
if(isset($_POST))
{	
	$Req = $fname = $lname = $sex = $hemail = $phone = $club = $img = '';
	
$fname = mysqli_real_escape_string( $conn,$_POST['fname']);
$lname = mysqli_real_escape_string( $conn, $_POST['lname']);
$sex = mysqli_real_escape_string( $conn, $_POST['sex']);
$hemail = mysqli_real_escape_string( $conn, $_POST['hemail']);
$phone = mysqli_real_escape_string( $conn, $_POST['phone']);
$club = mysqli_real_escape_string( $conn, $_POST['club']); 
	
	$result=mysqli_query($conn,"select * from Requests where Email='$hemail' and ClubName='$club'");
	if(mysqli_num_rows($result))
	{
		header("Location: Alert_AlreadyExist.php");
	
	
	}
    else {
		$img = '';
		$img=$_FILES['img']['name'];
		$sql = "INSERT INTO `requests`(`Firstname`, `Lastname`, `Gender`, `Email`, `Phone Number`, `ClubName`, `Image`) VALUES ('$fname','$lname','$sex','$hemail',$phone,'$club','$img')";
		move_uploaded_file($_FILES['img']['tmp_name'],"images/members/".$_FILES['img']['name']);
		$insert = mysqli_query($conn,$sql);
		  if(!$insert) {
			 
			// header("Location: Alert_DataEntryFailed.php");
		  }
		  else {
			  header("Location: Alert_EntrySuccessful.php");
			  
		  }				
				
	}
	
	
$resultSet=mysqli_query($conn,"select ClubName from Clubs");
if($resultSet){

?>

<!Doctype html>

<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB REQUESTS</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">
<style>
.form-control {
	background:white;
	color:black;
}
.form-control:hover {
	background-color:white;
	text-color:black;
}
p{
	background:none;
	color:yellow;
}

</style>
</head>
<div class="auto-style10">
<a href="Logout.php" class="btn btn-primary" align="left" style="margin-top:10px; position:left;">LOGOUT</a>
</div>
<div class="auto-style" align="right" style="margin-right:20px; margin-top:.2px;">
<p style="color:white;font-size:2rem; "> <?php echo 'Logged in as..'. $_SESSION['Email']; ?></p>
</div>
<center>
<div id="frmRegistration" align="">
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	<img src="images/try.png"width="90px"height="140px"style="margin-top:7px;">
	<h1>CLUB REQUEST PORTAL</h1>
	<h4> Make your request and join us!</h4><br>
	
	<div class="form-group">
    <label class="control-label col-sm-4" for="fname">FirstName:</label>
    <div class="col-sm-4">
      <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter FirstName" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="lname">LastName:</label>
    <div class="col-sm-4">
      <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter LastName" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="hemail">Gender:</label>
    <div class="col-sm-4">
      <input type="text" name="sex"  class="form-control" id="sex" placeholder="Enter Gender" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="hemail">Email:</label>
    <div class="col-sm-4">
      <input type="email" name="hemail"  class="form-control" id="hemail" value="<?php echo $_SESSION['Email']; ?>" required>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-4" for="phone">Phone Number:</label>
    <div class="col-sm-4">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="club">Club Name:</label>
    <div class="col-sm-4">
	<select class="form-control" name="club" id="club" placeholder="Select Club Name" required>
	<?php
	while($rows = $resultSet->fetch_assoc())
	{
		$club = $rows['ClubName'];
		echo "<option value = '$club'>$club</option>";
	}
}

	?>
	</select>
	
	</div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="img">Your Image:</label>
    <div class="col-sm-4"> 
      <input type="file" name="img"  class="form-control" id="img" placeholder="choose file" required>
    </div>
  </div>
  
  
  <p>An email will be sent to you to notify you of your enrollment. Thank you for your request application!</p>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-danger">Submit</button>&nbsp;&nbsp;
	   <a href="Mainhomepage.php" class="btn btn-danger">Back</a>
    </div>
  </div>
  

</form>
<?php } ?>
</div>
</center>
</html>