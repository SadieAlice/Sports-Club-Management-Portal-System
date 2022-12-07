<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
 
  $sql= mysqli_query($conn,"select * from students where email='$email'");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h2 style='background:none; color:red'> This account already exists</h2>";    
  }
  else
  {

      $sql="insert into students values('','$fname','$lname','$email','$pass')";
   
   if(mysqli_query($conn,$sql))
   {
   $msg= "<h2 style='background:none; color:green'>Data Saved Successfully</h2>"; 
    header('location:index.php');
   }
  }
}
?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SPORTS CLUB REGISTRATION PAGE</title>
<link rel="stylesheet" href="style.css">
<style>
*{
	text-transform: none;
}
label{
	background:none;
	color:white;
	font-size:15px;
}
.check{
	padding:2px;
	background:black;
	
}
.form center{
	background:none;
}


</style>
</head>
<body>
	
	<div class="container">
        
<section class="home" id="home">

    <div class="content">
        <h3>Botho University Sports Club Portal</h3>
        <a href="#" class="btn">W E L C O M E ! </a>
    </div>

</section>
<section>
<div class="wrapper1">
            <img src="images/try.png" alt="" class="log">
            
            <div class="form-container">
                <h3>REGISTRATION</h3><br>
                    <form action="" class="form">
					 <center><?php echo @$msg;?></center><br>
                        <input type="text" name="fname" placeholder="Firstname" required>
						<input type="text" name="lname" placeholder="Lastname" required>
                        <input type="email" name="email" placeholder="Email address" required>
                        <input type="password" name="pass"  placeholder="Password" required>
                        <br>
                        <button name="save">Sign Up &nbsp; <span class="fa fa-arrow-right"></span></button>
                </form>
                <p>Already have an account? <a class="navigate-btn" href="index.php">Login here</a></p></div>
        </div>
</section>
	</div>
	
</body>

</html>
