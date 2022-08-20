<?php
session_start();
	
if(!isset($_SESSION['email']))
       {
        header("location:login.php");
   
       }

	   //echo "<script>alert($_SESSION['email'])</script>";
?>


<html>


	<head>
	
		<title>PaymentSuccess</title>
		<style>
		
			body
			{
				color:gray;
			}
			img
			{
				padding:200px;
				margin-left:300px;
				margin-top:-100px;
				
			}
			h1
			{
				margin-top:-200px;
				margin-left:480px;
			}
			h3
			{
				margin-left:580px;
			}
		
		</style>
	</head>
	
	
	
	<body>
	
		
		<img src="https://i.pinimg.com/originals/0d/e4/1a/0de41a3c5953fba1755ebd416ec109dd.gif" alt="paymentSuccess">
	
		
		<h1>Transaction Completed Successfully<h2>
		<h3>&emsp; Thankyou for your billing.<h3>
	</body>



</html>