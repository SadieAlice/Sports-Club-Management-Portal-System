<?



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SPORTS CLUB LANDING PAGE</title>
<link rel="stylesheet" href="style.css">
<style>
header navbar ul{
	background:none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
	background:none;
  background-color:#85172C;
}

li {
	 background:none;
  float: left;
}

li a, .dropbtn {
	 background:none;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
	 background:none;
  background-color: #092847;
}

li.dropdown {
	 background:none;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
	 background:none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
	 background:none;
  display: block;


</style>
</head>
<body>

<header class="header">

    <a href="#" class="logo">
        
    </a>

    <nav class="navbar">
	
	<ul>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Management Login</a>
    <div class="dropdown-content">
      <a href="CoachLogin.php">Coach Login</a>
      <a href="AdminLogin.php">Admin Login</a>
    </div>
  </li>
</ul>
    </nav>
	</header>
	
	<div class="container">
        
<section class="home" id="home">

    <div class="content">
        <h3>Botho University Sports Club Portal</h3>
        <a href="#" class="btn">W E L C O M E ! </a>
    </div>

</section>
<section>
<div class="wrapper">
            <img src="images/try.png" alt="" class="log">
            
            <div class="form-container">
                <h3>LOGIN HERE</h3><br>
				
                    <form action="" class="form" method="POST">
                        <input type="text" name="Email" placeholder="Email address"required>
                        <input type="password" name="Password" placeholder="Password" required>
                        <a href="ForgotPassword.php">forgot password?</a>
                        <button name="submit" >LOGIN</button>
                
                <p>Don't have an account yet? <a href="register.php">Create an account here</a></p>
            
			</form></div>
        </div>
</section>
	</div>
	
</body>

</html>
<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])) {
	
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$sql = mysqli_query($conn,"select * from students where Email = '$Email' and Password='$Password' ");
	
	
	if(mysqli_num_rows($sql))
	{
		
		$_SESSION['Email']=$Email;
		header('Location:Mainhomepage.php');
		
		}else 
		{
			header('Location:LoginFailed.php');
		}
			
	}
	


?>



















