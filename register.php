
<html>


	<head>
		<title>REGISTER</title>
		
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
				background:linear-gradient(to right,#3F5EFB,#FC466B);
				//background:linear-gradient(to RIGHT,#3378FF,#C15CFF,#EB4174);
				//background-color:rgba(0,0,0,0.6);
			}
			
			form
			{
				text-align:center;
				margin:10px;
				margin-left:500px;
				border:1px solid transparent;
				box-shadow:0.2px 0.8px 0.2px 4px #C15CFF;
				width:30%;
				height:95%;
				padding:5px;
				border-radius:20px;
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
				font-size:15px;
				
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
			
			#pass
			{
				padding-right:260px;
			}
			
			h3
			{
				padding-top:17px;
			}
			#pno
			{
				padding-left:30px;
			}
			
			#add
			{
				padding-left:20px;
			}
			#email
			{
				padding-left:-5px;
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
			
			#REG:hover
			{
				border:1px solid transparent;
				box-shadow:2px 1px 1px 1px #FFE3a2;
				background:#FC466B;
			}
			
			
		</style>
	</head>


	<body>
	
		
	
		<form action="valid.php" method="post">
			
			<h2>REGISTER<h2> <br>
			<label>Name</label> <br> <br>
			<input type="text" name="name" required> <br> <br>
			
			
			<label id="email">Email</label> <br> <br>
			<input type="email" name="email" placeholder="ABC@gmail.com" required> <br> <br>
			
			<label id="pno">Phone-No</label> <br> <br>
			<input type="number" name="phone"  required maxlength="10"> <br> <br>
			
			<label id="add">Address</label> <br> <br>
			<input type="text" name="address" required maxlength="20"> <br> <br>
			
			<label id="pass">Password</label> <br> <br>
			<input type="password" name="password" maxlength="10" required > <br><br>
			
			
			
			<input type="submit" name="register" value="REGISTER" id="REG">
	
		</form>	
		
		
	
	</body>


</html>