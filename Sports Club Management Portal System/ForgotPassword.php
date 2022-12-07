<?php 
include('connection.php');
error_reporting(1);
extract($_REQUEST);
if(isset($submit))
{
  $sql=mysqli_query($conn,"select * from students where Email='$email' ");
    if(mysqli_num_rows($sql))
    {
     $res=mysqli_fetch_assoc($sql); 
    $error= "<h3 style='color:yellow'>Your Passwrod is: ".$res['Password']."</h3>"; 
    }
    else
    {
    $error= "<h3 style='color:red'>Invalid  details</h3>"; 
    }  
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Accounts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
*{
align-items: center;
font-family: 'Roboto', sans-serif;
}
body{
    background:#092847;
}


.wrapper {
    width: 95%;
    max-width: 400px;
    background: #121212d8;
	margin-top:30px;
	margin-left:500px;
    padding: 40px 40px;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	
}

.wrapper p{
background:none;
color:#fff;
font-size:1.6rem;
}

.wrapper h1{
color:#85172C}

.wrapper h3{
	color:white;
}
.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.5rem 1rem;
    font-size:1rem;
    color:#fff;
    background:#85172C;
    cursor: pointer;
	
}
.btn:hover{
	background: white;
	color:black;
}
.log {
    height: 150px;	
	width:100px;
	background:none;
}
.wrapper input{
    width: 100%;
    padding:1rem;
    font-size: 1rem;
    color:#fff;
    text-transform: none;
    background:none;
}
.wrapper input:hover{
	background:white;
	color:black;
}

  
  </style>
  </head>
  
<body>

<br><br>
          <form method="post">
		  <div class="wrapper">
		  <img src="images/try.png" width="130" height="160">
          <h1 style=";background:none;" align="center" >Forgot Account Password?</h1> <br>
          <?php echo  @$error; ?><br>
          <h3 style="background:none;">Please Enter your Email below to Find Your Account Password:</h3>
          <input type="Email" name="email"  id="#"placeholder="Email address"required />
          <button type="submit" value="submit" name="submit" class="btn">Check</button>
		 <br> <a style="color:white;" align="left"  href="index.php">Back</a>
		 </div>
        </form><br><br><br><br> 
		
       
  
</body>
</html>
