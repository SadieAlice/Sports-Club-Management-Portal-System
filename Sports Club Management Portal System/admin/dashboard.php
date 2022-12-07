<?php 

 extract($_REQUEST);
include('connection.php');
include('header2.php');
/*$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index.php');
} */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background:#121212d8;
    }
	 .navbar a{
	   color:white;
	   
	 }
	.sidebar {
		background:#121212d8;
		display: flex;
		padding:40px;
		margin-top:46px;
		font-size:1.5rem;
		font-family: 'Roboto', sans-serif;
	}
	
	.sidebar a{
	color:white;	
	}
	.sidebar a:hover{
		color:#85172C;
	}
  </style>
  </head>
  <body>

<br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <!--<li><a href="dashboard.php?option=update_password">Update My Password</a></li>-->
			

		<div style="color:white; font-size:1.5rem; margin-top:30px; margin-right:62px;" ><?php echo "Welcome...".  $_SESSION['Email']; ?></div><br><br>
            <li><a href="dashboard.php?option=hotels">Coach Registration</a></li>
      <li><a href="dashboard.php?option=user_registration">User Management</a></li>
	  <li><a href="dashboard.php?option=club">Manage Clubs</a></li>
	  <li><a href="dashboard.php?option=feedback">Feedback</a></li>
          </ul>
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('adminportal.php');	
}
else
{
	if($opt=="feedback")
	{
	include('feedback.php');	
	}
	else if($opt=="hotels")
	{
	include('CoachManage.php');	
	}
	else if($opt=="club")
	{
	include('clubManage.php');	
	}
	else if($opt=="add_coach")
	{
	include('add_coach.php');	
	}
	else if($opt=="add_club")
	{
	include('add_club.php');	
	}
	else if($opt=="delete_room")
	{
	include('delete_room.php');	
	}
  
  else if($opt=="update_news")
  {
    include('update_coach.php');
  }
  else if($opt=="user_registration")
  {
    include('userManage.php');
  }
}
?>
          
        </div>
      </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
