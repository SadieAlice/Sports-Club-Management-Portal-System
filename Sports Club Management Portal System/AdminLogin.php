<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="" method="post">
<img src="images/try.png" alt="" class="log">
  <br>          
  <h1>Admin Login</h1>
  
  <input type="text" name="username" placeholder="Email" required>
  <input type="password" name="Password" placeholder="Password" required>
  <input type="submit" name="submit" value="LOGIN">
  <a href="index.php">Back</a>
</form>


  </body>
</html>
<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])) {
	
	$user = $_POST["username"];
	$pass = $_POST["Password"];
	$sql = mysqli_query($conn,"select * from administrator where Username = '$user' and Password='$pass' ");
	
	
	if(mysqli_num_rows($sql))
	{
		
		$_SESSION['Email']=$user;
		header('Location:admin/dashboard.php');
		
		}else 
		{
			header('Location:LoginFailed.php');
		}
			
	}
?>
