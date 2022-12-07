

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
    background:#85172C;
}


.wrapper {
    width: 95%;
    max-width: 400px;
    background: #121212d8;
	margin-top:100px;
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


	
</style>
</head>
<body>

<div class="wrapper"> 
<img src="images/try.png" alt="" class="log">
<p style="color:yellow" >ERROR!</p>
<p>Login Failed...Check Credentials or Request to Join Club!</p>
<a href="javascript:history.go(-1)"onMouuseOver="self.status.referrer;return true" class="btn">Got It!</a>
</div>



</body>
</html>