<?php
include 'include.php';
?>
<html>
<head>
<title>
</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


*{
margin-left:40px;

}

img{
 height:500;
 width:350;
 box-shadow:12px 12px 12px black;
 border:4px solid black;
 margin-top:50px;
 
}
h3
{
margin-top:30px;
margin-bottom:30px;
margin-left:-3px;
margin-bottom:20px;
}

p{
 padding-left:100px;
 padding-right:300px;
 margin-bottom:20px;
}

h3{
 padding-left:100px;
 padding-right:300px;
 
}
button{
background-color:lime;
margin-left:100px;
margin-top:30px;
}
a
{
color:black;
}
a:hover
{
	color:white;
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
</head>

<body>

<table style="margin-top:40px;">
<tr>
<td><img  src="img1.jpg"></td>
<td>
<h3 style="font-size:40px">The Lord of The Rings </h3>
<p style="color:blue; font-size:20px">price $ 1400</p>
<p style="font-size:25px">he Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien.Set in Middle-earth, intended to be Earth at some time in the distant past, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work.</p>

 <button type="button" name="continue" id="continue" class="btn btn-success">
		<a href="cart.php">continue <i class="fa fa-arrow-circle-left"></i></a>
	</button>

<br><br>

</td>
</tr>
</table>

</body>
</html>