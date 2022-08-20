<html>

	<head>
		<title>Admin access</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<style>
		
		body
		{
			background: url('https://images.unsplash.com/photo-1614850715649-1d0106293bd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFja2dyb3VuZCUyMGNvdmVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80');
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-size:100% 100%
		}
		h1
		{
			margin-left:700px;
			margin-top:200px;
			font-size:60px;
			font-family: cursive;
			color:#C70039;
			border:1px solid transparent;
			padding:20px;
			width:700px;
			box-shadow:0.3px 1px 3px 4px rgba(0,0,0,0.3);
			border-radius:10px;
			
		}
		
		ol >li
		{
			display:inline;
			float:right;
			border:1px solid transparent;
			font-size:30px;
			margin-right:300px;
		}
		
		#order
		{
			margin-left:400px;
			margin-top:20px;
		}
		#order1
		{
			margin-right:-300px;
			margin-top:20px;
		}
		a:link
		{
			text-decoration:none;
		}
		</style>
	</head>

	<body>
	
		<h1>&nbsp WELCOME ADMIN!</h1>
	
		<div class="conatiner">
			
			<ol>
				<li id="order"><a href="order.php"><button class="btn btn-secondary btn-lg">Orders</button></a></li>
				<li id="order1"><a href="message.php"><button class="btn btn-success btn-lg">Messages</button></a></li>
			
			</ol>
		
		</div>
	
		<img src="https://i.pinimg.com/originals/f9/03/36/f903365dbd8d00233f899377a6524b05.gif"
		 alt="message" width="400px" height="200px">
	
	</body>

</html>