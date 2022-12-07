<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports club homepage</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!--materialize link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">
	
	<style>
	table, th, td{
    align-items: center;
		text-align:center;
		border: 1px solid white;
	}
	table{
		color:white;
  border-collapse: collapse;
		 font-weight: lighter;
		font-size:3rem;
}
table img{
	Height:100px;
	width: 150px;
}

table th{
	width:100px;
	
}
tr{
	 text-align: left;
}
th, td{
	  border-bottom: 1px solid #ddd;
	padding: 15px;
 

	width:600px;
}
tr:hover {background-color: #85172C;}

.box-container .table th{
	color:white;
	
}
	
	</style>

</head>
<body>
  
 
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="../images/try.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Club home</a>
		<a href="#menu">Our Team</a>
        <a href="#about">News</a>
		<a href="#review">Training Schedule</a>
		<a href="../Mainhomepage.php">Exit Club</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
	<div>
        <p style="color:white; font-size:1.5rem;" ><?php echo "Welcome...".  $_SESSION['Email']; ?></p>
    </div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div>
		<a href="../Logout.php">
		<img style="height:30px; width:30px" src="../images/logout.jpg"/>
        </a>
		</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->


<div class="row">

<section class="home" id="home">
<div class="wrapper">
<div class="txt">Our Team Is</div>
<ul class="run-text">
	<li><span>The BasketBall Club Team.</span></li>
	<li><span>Motivated...</span></li>
	<li><span>Trained...</span></li>
	<li><span>Ready...</span></li>
</ul>
</div>

</section>
</div>

<!-- home section ends -->


<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>TEAM</span> </h1>
<br>
<div style="overflow-y: auto; height:500px;">
<table>

	<tr style="height:40" style="color: white;">
		
		<th>Member's Picture</th>
		<th>Member's Name</th>
	</tr>


    <?php 
$conn = mysqli_connect("localhost","root","","botho_sports_club_db") or die('DATABASE connection failed');

$i=1;
$query= mysqli_query($conn,"Select Firstname, Image from members where ClubName='BasketBall'");
		
		while($res=mysqli_fetch_assoc($query))
		{
			
			$image_text=$res['Firstname'];
			$img = $res['Image'];
		    $path="../images/members/$img";
			
?>
<tr>
		<td style="display:none;"><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="100" height="100"/></td>
		<td style="width='50'; height='50' "><?php echo "$image_text" ?></td>

	</tr>
	
			
			<?php
	}
	 ?>
	 </table>
	 </div>
	 
</section>

<!-- clubs section ends -->

<!-- about section starts  -->

<section class="about" id="about" style="height:700px;" >

    <h1 class="heading"> <span>Club</span> NEWS </h1>

    <div class="row" style="height:400px;">

        <div class="image" width="300px"height="500px">
            <img src="../images/sport3.png" alt="" width="200px"height="300px">
        </div>

        <div class="content">
            <h3>Want to know more about our Sport Club?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="ViewNews.php" class="btn" style="height:50px;">Read more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> TRAINING <span>SCHEDULE</span> </h1>

    <div class="box-container" style="overflow-y: auto; height:250px;" >

        <table class="table table-bordered table-striped table-hover">
	<tr style="height:40">
		
		<th>Training Type</th>
		<th>Location</th>
		<th>First Session</th>
		<th>Second Session</th>
		<th>Training Date</th>
	</tr>
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from trainingschedule where ClubName='BasketBall'");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Sid'];	
$club=$res['ClubName'];
$type=$res['TrainingType'];
$loc=$res['Location'];
$fses=$res['FirstSession'];
$Lses=$res['SecondSession'];
$date=$res['TrainingDate'];
?>

<tr>
		<td style="display:none;" ><?php echo $i;$i++; ?></td>
		<td><?php echo $res['TrainingType']; ?></td>
		<td><?php echo $res['Location']; ?></td>
		<td><?php echo $res['FirstSession']; ?></td>
		<td><?php echo $res['SecondSession']; ?></td>
		<td><?php echo $res['TrainingDate']; ?></td>

	</tr>	
<?php 	
}

?>	
	
</table>

    </div>

</section>

<!-- review section ends -->




<!-- footer section starts  -->
<br><br><br><br>
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">Club home</a>
        <a href="#">Our Team</a>
        <a href="#">News</a>
        <a href="#">Training Schedule</a>
    </div>

    <div class="credit">created by <span>Ms. Keneilwe Alice Makoba</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>