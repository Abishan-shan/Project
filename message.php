<html>


	<head>
		<title>MessageView</title>
		
		<style>
		
			*
			{
				padding:0;
				margin:0;
				box-sizing:border-box;
				
			}
			
		body
		{
			background-image: url('https://media.istockphoto.com/photos/open-book-hardback-books-on-wooden-table-back-to-school-copy-space-picture-id1296515877?b=1&k=20&m=1296515877&s=170667a&w=0&h=bBk4ueJe-k_SPDbAmfXPiBM3IktSgEOWS53wqcyDBH0=');
			background-attachment:fixed;
			background-repeat:no-repeat;
			background-size:100% 30%;
			font-family: Cursive, Helvetica, sans-serif;
			
			
		}
		h1
		{
			color:white;
			margin-left:800px;
			margin-top:100px;
			font-size:40px;
		}
		.con
		{
			width:fit-content;
		}		
		
		.container
		{
			overflow:scroll;
			overflow-x:hidden;
			max-height:450px;
			margin-top:100px;
			position:fixed;
		}

			table
			{
				margin-left:280px;
				border:1px solid #ddd;
				font-size:15px;
			}
		
			th
			{
				width:220px;
				height:100px;
				outline:none;
				border:1px solid #18978F; 
				position:sticky;
				top:0px;
				background-color:#18978F;
				font-size:20px;
			}
			td
			{
				width:150px;
				height:100px;
				text-align:center;
				outline:none;
				border:none;
				
			}
			tr:nth-child(odd)
			{
				background-color:#f2f2f2;
				outline:none;
				border:1px solid #E4DCCF;
				
			}
			
		
		</style>
	</head>


	
	
	<body>

		<h1>Messages From Users</h1>
	
<div class="con">	
	<div class="container">
		<table border="4px" cellspacing="0">
		
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>PhoneNo</th>
				<th>Message</th>
			</tr>
		
		<?php	
			//$con=mysqli_connect('localhost','root','','registration');
			include 'connect.php';
			$query="select * from message";
			
			$result=mysqli_query($con,$query);
			
			while($row=mysqli_fetch_array($result))
			{
				$name=$row['Name'];
				$email=$row['Email'];
				$pno=$row['PhoneNo'];
				$message=$row['Message'];
		?>
		
			<tr>
			
				<td> <?php echo $name;  ?>  </td>
				<td><?php echo $email;  ?> </td>
				<td><?php echo $pno; ?> </td>
				<td><?php echo $message; ?> </td>
			
			</tr>
			<?php }; ?> 
			
	</div>
</div>

	</body>


</html>