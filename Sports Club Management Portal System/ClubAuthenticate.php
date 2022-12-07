<?php
session_start();
$conn = mysqli_connect("localhost","root","","botho_sports_club_db") or die('DATABASE connection failed');
if(isset($_POST))
{

$resultSet=mysqli_query($conn,"select ClubName from Clubs");
if($resultSet){

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CLUB AUTHENTICATION PORTAL</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
 <div class="auto-style10">
<a href="Logout.php" class="btn btn-primary" style="margin-top:10px; position:left;">LOGOUT</a>
</div> 
<div class="auto-style" align="right" style="margin-right:20px; margin-top:.2px;">
<p style="color:white; font-size:2rem;"> <?php echo 'Logged in as..'. $_SESSION['Email']; ?></p>
</div>

<form class="box" action="Authenticate.php" method="post">
<img src="images/try.png" alt="" class="log">
  <br>          
  <h1>CLUB ACCESS AUTHENTICATION PORTAL</h1>
  
  <input type="text" name="username" value="<?php echo $_SESSION['Email']; ?>" required>
  <select style="color:grey; background:none; font-size:15px; border:1px solid white; border-radius:40px; border-padding:10px;  margin: 8px 0;
    padding: 0 10px;" class="form-control" name="club" id="club"  required >
	<option>Select Club Name</option>
	<?php 
	while($rows = $resultSet->fetch_assoc())
	{
		$club = $rows['ClubName'];
		echo "<option value = '$club'>$club</option>";
	}
}

}

	?>
	</select>
	
  <input type="submit" name="submit" value="GO">
  <h4>Want to Join?</h4><a href="Request.php">Request to Join Here</a><br><br>
  <a href="Mainhomepage.php">Back</a>
</form>


  </body>
</html>
