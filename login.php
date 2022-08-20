<?php

session_start();

error_reporting(0);



//$con=mysqli_connect('localhost','root','','registration');
include 'connect.php';

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$_SESSION['email']=$_POST['email'];
	$_SESSION['password']=$_POST['password'];

	
	$query="select * from register where Email='$email' AND Password='$password'";
	$result=mysqli_query($con,$query);
	

	$num=mysqli_num_rows($result);


	if($num>0)
	{
		header("location:cart.php");
		
	}

	else
	{
		//echo "not success";
		echo "<script>alert('Please register first');</script>";
	}
	
}

 
 
   


?>

<html>


	<head>
		<title>LOGIN</title>
		
		<script>

	function preventBack()
	{
		window.history.forward();
	
	}
	setTimeout("preventBack()",0);
	window.onunload=function(){null;}
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<style>
			*
			{
				margin:0;
				padding:0;
				box-sizing:border-box;
				color:white;
				font-family:Candara;
				
			}
			body
			{
				//background:linear-gradient(to right,#FDE7EA,#CA965C,#FDEFDA);
				//background:linear-gradient(to RIGHT,#3378FF,#C15CFF,#EB4174);
				background:linear-gradient(to right,#3378FF,#9442FE);
			}
			
			form
			{
				text-align:center;
				margin:120px;
				margin-left:500px;
				border:1px solid transparent;
				box-shadow:0.2px 0.8px 0.2px 4px #C15CFF;
				width:30%;
				height:65%;
				padding:5px;
				border-radius:20px;
				//background:linear-gradient(to right,#3378FF,#9442FE);
				background-color:rgba(0,0,0,0.6);
				
			}
			
			label
			{
				padding-right:300px;
				//opacity:0.8;
			}
			
			input
			{
				outline:none;
				border:none;
				background:transparent;
				border-bottom:1px solid white;
				padding-right:200px;
				
			}
			
			#submit
			{
				
				border:1px solid transparent;
				box-shadow:2px 1px 2px 2px #FFE3E3;
				padding:8px;
				color:white;
				font-size:15px;
				margin-top:20px;
				border-radius:10px;
			}
			#submit:hover,#REG:hover
			{
				background:#FC466B;
			}
			
			
			#pass
			{
				padding-right:260px;
			}
			
			h3
			{
				padding-top:17px;
			}
			
			#REG
			{
				border:1px solid transparent;
				box-shadow:2px 1px 1px 1px #FFE3E3;
				padding:10px;
				color:white;
				font-size:15px;
				margin-top:6px;
				border-radius:10px;
				
			}
			
			
		</style>
	</head>


	<body>
	
		<a href="index.php"><h3><i class="fa fa-home"></i>Home</h3></a>
	
		<form action="" method="post">
			
			<h2>LOGIN<h2> <br> <br>
			<label>Email</label> <br> <br>
			<input type="email" name="email" placeholder="ABC@gmail.com" required> <br> <br>
			
			<label for password  id="pass">Password</label> <br> <br>
			<input type="password" name="password" maxlength="10" required >  <br><br>
			
			<input type="submit" name="submit" value="SUBMIT" id="submit">
		
			
			<h3>New Customer?<h3>
		</form>	
		<a href="register.php"><input type="button" name="Register" value="REGISTER" id="REG"></a>
		
	
	</body>


</html>