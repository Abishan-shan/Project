<?php

session_start();


include 'connect.php';
//$con=mysqli_connect("localhost","root","","registration");

$query="select * from cart";

$result=mysqli_query($con,$query);


	
if(!isset($_SESSION['email']))
{
 header("location:login.php");

}

?>




<html>

	<head>
		<title>cart</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
		
		
	<style>
		
					*
			{
				margin:0;
				padding:0;
			}
			
			body
			{
				//background:linear-gradient(to right,#A2A9AA,#D09FAF);
				background:linear-gradient(to right,#A2A9AA,#F0EBE3);
			}
			
			.h1
			{
				position:fixed;
				text-align:center;
				border:1px solid #46757B;
				width:100%;
				height:12%;
				//background-color:white;
				margin-left:-1px;
				margin-top:-12px;
				padding-top:60px;
				//background-image: url('https://media.istockphoto.com/photos/open-book-hardback-books-on-wooden-table-back-to-school-copy-space-picture-id1132284166?b=1&k=20&m=1132284166&s=170667a&w=0&h=vJjvsm2i33AHkEwPi8oN2sBi_kCCXYsPviTk5ibleaE=');
				background-repeat:no-repeat;
				background-attachment:fixed;
				background-size:100% 50%;
background-image: url('https://thumbs.dreamstime.com/b/row-stack-colorful-books-plain-background-40428095.jpg');
				border-bottom:none;
				font-family:cursive;
				font-size:20px;
			}
		
			.img img
			{
				height:250px;
				width:255px;
				border-radius:2px;
				
			}
			
			
			.cards
			{
				display:inline-block;
				padding:60px;
				margin-top:30px;
				margin-left:90px;
				letter-spacing:0.1em;
				margin-bottom:-95px;
				
				
			}
			.title
			{
				//border:1px solid #ddd;
				box-shadow:0.3px 1px 1px 1px #F0EBE3; 
				margin-top:-5px;
				padding-bottom:10px;
				text-align:center;
				background-color:white;
				border-radius:4px;
				border-top-left-radius:0px;
				border-top-right-radius:0px;
				
			}
			
			p
			{
				text-align:left;
				font-size:15px;
				cursor:pointer;
			}
			input
			{
				outline:none;
				border:none;
				background:linear-gradient(to right,#A2A9AA,#D09FAF);
				border-radius:4px;
				height:25px;
				margin-top:5px;
				margin-bottom:5px;
				
			}
			input:hover
			{
				color:white;
				background:linear-gradient(to left,#CFD2CF,#66BFBF);
				cursor:pointer;
			}
			#o1
			{
				width:35%;
				margin-right:15px;
				outline:none;
				border:none;
				border-radius:3px;
				box-shadow:0.3px 1px 1px 1px gray;
				background-color:yellow;
				margin-top:5px;
			}
			
			#o1:hover
			{
				background-color:#7D9D9C;
				cursor:pointer;
			}
			
			#img1
			{
				margin-top:80px;
			}
		
			
			a
			{
				margin-left:20px;
				color:black;
			}
	
			#logout
			{
				margin-right:100px;
				float:right;
				margin-top:-90px;
				padding:4px;
				padding-left:3px;
				border-radius:7px;
				border:none;
				background-color:yellow;
				box-shadow:0.9px 1px 2px 1px yellow;
				font-weight:bold;
			}
			#logout:hover
			{
				background-color:red;
			}
			
			button
			{
				width:110px;
				height:40px;
			}
			#logout a
			{
				text-decoration:none;
				
			}
	
	
	</style>
	<script>

	function preventBack()
	{
		window.history.forward();
	
	}
	setTimeout("preventBack()",0);
	window.onunload=function(){null;}
	</script>
	
	<body>
	<div class="h1">
		<h1>BOOK STORE</h1>
		<button type="button" name="logout" id="logout" class="btn btn-primary">
		<a href="logout.php">LOG0UT</a>
		</button>
		
	</div>	
<?php
while($row=mysqli_fetch_array($result))
{
	$id=$row['id'];
	$image=	$row['Image'];
	$name=$row['Name'];
	$prize=$row['Prize'];
	$link=$row['Link'];
?>	
		
	
	<form action="viewCart.php" method="post" class="cards">
		<div  id="img1">
			<div class="img">
				 <?php echo "<img src='$image'>";?> 
				
			</div>
			
			<div class="title">
				<h4><?php echo $id;?></h4>
				<h3><?php echo $name;?><h3>
				<a href="<?php echo $link ?>" style="color:blue;font-size:15px"> Readmore..</a> <br>
				<input type="number"  name="quantity"  value="1"> 
				<p style="color:red">&emsp;&emsp;&emsp;&emsp;&emsp; $<?php echo "&nbsp;".$prize;?> </p>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<input type="hidden" name="name" value="<?php echo $name;?>">
				<input type="hidden" name="prize" value="<?php echo $prize;?>">
		<button type="submit" name="submit" value="submit" id="o1"  class="btn btn-warning">ADDCart
		<i class="fa fa-shopping-cart"></i>
		</button>
			</div>
			
		</div>
	</form>
		
<?php }; ?>			
	
	</body>

</html>