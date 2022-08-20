<?php

session_start();



?>
<html>
	
	<head>
		<title>BOOK Shop</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
		
			
			body
			{
			background-image: url('https://www.quercusbooks.co.uk/wp-content/uploads/2019/01/Spines-website-asset-new-logo.jpg?resize=1920%2C560');
			// background-image: url('https://c0.wallpaperflare.com/preview/326/615/805/boston-usa-books-library.jpg');
			 background-repeat:no-repeat;
			 background-attachment: fixed;
			 background-size: 100% 70%;
			 background-position:center;
			 
			}
			
			#container
			{
				
				display:grid;
				grid-template-columns:repeat(5,1fr);
				grid-template-rows:40px;
				
			}
			
			input
			{
				width:310px;
				height:80px;
				//background-color:#203239;
				border:1px solid transparent;
				box-shadow:0.1px 1px 2px 2px white;
				//background-color:transparent;
				//background:linear-gradient(to right,#FEB139,#827397);
				margin-top:5px;
				margin-left:-15px;
				color:black;
				font-family:Candara;
				font-weight:bold;
				font-size:20px;
				cursor:pointer;
				border-radius:20px;
			}
			
			input:hover
			{
				width:310px;
				height:80px;
				background-color: #FEFBE7;
				background:linear-gradient(to right,#F2F2F2,#16003b);
				border:1px solid  #EEEEEE;
				color:#1C0A00;
				font-family:Candara;
				font-weight:bold;
				
				
			}
			a:link
			{
				text-decoration:none;
			}
			
			
			i
			{
				width:200px;
				height:80px;
				//background-color:#203239;
				//border:1px solid #203239;
				color:#FDEFF4;
				font-family:Candara;
				font-weight:bold;
				font-size:30px;
				padding:15px;
				padding-left:80px;
				cursor:pointer;
				
			}
			.item5
			{
			cursor:pointer;
			
			}
			.item1
			{
				margin-left:200px;
				margin-right:18px;
			}
			
			.item4
			{
				margin-left:18px;
			}
			nav
			{height:60%;
			background-color:#F2F2F2;
			position:fixed;
			overflow:auto;
			margin-top:65px;
			margin-left:-20px;
			
			}
			
			nav a
			{
				color:white;
				font-size:20px;
				padding:10px;
				
			}
			
			#m1
			{
				margin-top:70px;
			}
			
			.fa
			{  
				padding: 20px;  
				text-align: center;  
				margin: 5px 2px;  
				font-size: 30px;  
				width: 50px;
						
			}  
			.fa-linkedin 
			{  
				background: #007bb5;  
				color: white; 
				margin-top:230px;	
				
			}  
			
			.fa-facebook 
			{  
				background: #3B5998;  
				color: white; 
				margin-left:550px;
				margin-right:60px;		
							
			}  
				
			.fa-instagram 
			{  
				background: #125688;  
				color: white; 
				margin-right:60px;
				
			}  
			nav a input
			{
				box-shadow:1px 1px 1px 1px transparent;
				margin-right:-10px;
				margin-top:-30px;
			}
			#style
			{
				color:rgba(10,10,0,0.3);
			}
			
			h1
			{
				margin-top:220px;
				margin-left:1080px;
				line-height:1.5em;
				color:white;
				font-family:cursive;
				background: -webkit-linear-gradient(white,#F4BFBF,white);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			h2
			{
				position:fixed;
				margin-top:-400px;
				margin-left:150px;
				font-family:arial;
				font-weight:italic;
				line-height:1.5em;
				font-size:30px;
				background: -webkit-linear-gradient(#570A57, #A91079);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			.cont
			{
					position:fixed;
			}
		</style>
	</head>
	
	
	<body>
	
		<nav class="w3-sidebar" style="display:none;z-index:2;width:20%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" id="m1"><input type="button" value="CLOSE MENU"></a>
  <a href="admin_login.php" onclick="w3_close()"><input type="button" value="ADMIN-LOGIN" id="m2"></a>
  <a href="login.php" target="post" onclick="w3_close()"><input type="button" value="LOGIN" id="m3"></a>
  
</nav>
		
		
		<div id="container">
			<div class="item5"><i id="style" class="fa fa-bars" style="font-size:40px;" onclick="w3_open()"></i></div>
			<div class="item1"><a href="index.php" method="post"><input type="button" value="HOME"></a></div>
<!--<div class="item2"><a href="cart.php" method="post"><input type="button" name="menu" value="MENU"></a></div> -->
			<div class="item3"><a href="about.php" method="post"><input type="button" value="ABOUT"></a></div>
			<div class="item4"><a href="contact.php" method="post"><input type="button" value="CONTACT" id="contact"></a></div>
			
		</div>
		
		<h1>"Place is  not a place <br>&nbsp; until it  has a book <br>&nbsp;store"</h1>
		<h2>BOOKOE</h2>
	
	<div class="cont">	
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-instagram"></a>  
		<a href="#" class="fa fa-linkedin"></a> 
	</div>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "grid";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>	
			
	
	</body>

</html>