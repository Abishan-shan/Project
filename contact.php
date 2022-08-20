<?php

	//$con=mysqli_connect('localhost','root','','registration');
	include 'connect.php';
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pno=$_POST['pno'];
		$message=$_POST['msg'];
	
		$query="insert into message values('$name','$email','$pno','$message')";
		
		$result=mysqli_query($con,$query);
	
		header("location:contact.php");
	}
?>




<html>



	<head>
	<title>Say Something!</title>
	<style>
	
			*
			{
				margin:0;
				padding:0;
				box-sizing:border-box;
				color:black;
				font-family:Candara;
				//position:fixed;
			}
	
	
		body
		{
			background-image: url('https://media.istockphoto.com/photos/open-book-hardback-books-on-wooden-table-back-to-school-copy-space-picture-id1296515877?b=1&k=20&m=1296515877&s=170667a&w=0&h=bBk4ueJe-k_SPDbAmfXPiBM3IktSgEOWS53wqcyDBH0=');
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-size:100% 30%;
			
		}
			
		textarea
		{
			color:white;
			padding-top:15px;
		}
		p
		{
			padding-left:50%;
			padding-bottom:30px;
			color:white;
			font-size:50px;
			font-family:Cursive;
			position:fixed;
			margin-top:70px;
		}
		
		form
		{
			padding:10px;
			padding-top:20px;
			padding-left:10px;
			border:2px solid rgba(0,0,0,0.3);
			border-radius:5px;
			width:30%;
			height:60%;
			margin-left:500px;
			margin-top:250px;
			background: #F9F3EE;
			position:fixed;
			//background-image: url('https://media.gettyimages.com/photos/open-book-hardback-books-on-wooden-table-back-to-school-copy-space-picture-id1132284113?b=1&k=20&m=1132284113&s=170667a&w=0&h=k7l5y1moiAkQPDJOVyN7NXwhypZOG7uSi4OXvy5yfVw=');
			
		}
		
		input
		{
			margin-left:40px;
			border:3px solid #F9F3EE;
			outline:none;
			border-radius:9px;
			padding-right:200px;
			padding-left:20px;
			background: rgba(0,0,0,0.3);
			height:40px;
			color:#F9F3EE;
			position:fixed;
		}
		
		textarea
		{
			border:3px solid #F9F3EE;
			border-radius:9px;
			padding-right:65px;
			padding-left:20px;
			margin-left:40px;
			background: rgba(0,0,0,0.3);
			outline:none;
			position:fixed;
		}
		h1
		{
			padding-top:-40px;
			margin-left:100px;
			font-family:Candara;
			position:fixed;
		}
		#submit
		{
			padding-right:15px;
			margin-left:180px;
			margin-top:90px;
			padding-left:15px;
		}
		
		#submit:hover
		{
			background: rgba(0,0,0,0.6);
		}
		
		
	</style>
	<head>



	<body>


		<p>CONTACT</p>
		
		<form action=" " method="post">
		<h1>SAY SOMETHING!</h1><br><br><br>
			<input type="text" placeholder="Enter your name" name="name" required> <br><br><br>
			<input type="email" placeholder="Enter your email" name="email" required> <br><br><br>
			<input type="number" placeholder="Enter your number" name="pno" required> <br><br> <br>
			<textarea cols="40" rows="6" name="msg"></textarea> <br><br>
			<input type="submit" value="send" id="submit" name="submit" required>
		</form>
		
		<br><br><br><br>
	
		
	</body>





</html>