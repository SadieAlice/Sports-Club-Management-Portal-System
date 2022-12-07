<?php
include('connection.php');
?>
<!Doctype>
<html  lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    max-width: 1000px;
    background: #121212d8;
	margin-top:100px;
	margin-left:225px;
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
table, th, td{
    align-items: center;
		text-align:center;
		border: .1px white;
	}
	table{
		color:white;
  border-collapse: collapse;
		 font-weight: lighter;
		font-size:1.5rem;
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
	padding: 5px;
 

	width:600px;
}
tr:hover {background-color: #85172C;}

.box-container .table th{
	color:white;
	
}


	
</style>
</head>
<body>
<form action="" method="POST" >
<div class="wrapper"> 
<a  href="javascript:history.go(-1)"onMouuseOver="self.status.referrer;return true" style="color:white;">Back</a><br>
<img src="../images/try.png" alt="" class="log">
<h1 style="color:white">CLUB NEWS</h1>
<br>
<table class="table table-bordered table-striped table-hover">
	<!--<tr style="height:40">
		
		<th>Title</th>
		<th>News</th> 
	</tr>-->
<?php 
$i=1; 	
$sql=mysqli_query($conn,"select * from News where ClubName='Tennis'");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['Nid'];	
$club=$res['ClubName'];
$img=$res['Title'];
$news=$res['News'];	
?>

<tr>
		<td style="display:none;" ><?php echo $i;$i++; ?></td>
		<th style="color:yellow" ><?php echo $res['Title']; ?></th></tr>
		<tr>
			<td><?php echo $res['News']; ?></td> </tr>
			<tr>
			<td> 
			<br><br><br><br></td>
			</tr>

		
<?php 	
}

?>	
	
</table>


<a  href="javascript:history.go(-1)"onMouuseOver="self.status.referrer;return true" class="btn">Got It!</a>
</div>
</form>


</body>
</html>