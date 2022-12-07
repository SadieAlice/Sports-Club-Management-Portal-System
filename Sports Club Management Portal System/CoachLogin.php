<?php
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
    <title>Coach Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="CoachLogin_code.php" method="post">
<img src="images/try.png" alt="" class="log">
  <br>          
  <h1>COACH Login</h1>
  
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  
    <br>
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

	?>
	</select>
	
	<br>
    <input type="submit" name="submit" value="LOGIN">
  <br>
  <a href="index.php">Back</a>
</form>
<?php } ?>

  </body>
</html>














