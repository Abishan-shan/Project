<?php

session_start();
//$con=mysqli_connect('localhost','root','','registration');
include "connect.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['Shipaddress'];
	$total=$_POST['hidden'];
	$Bname=$_POST['h1'];
	
	

	
	$query1="select * from register";
			
			$result1=mysqli_query($con,$query1);
			
			while($row=mysqli_fetch_array($result1))
			{
				$id=$row['id'];
				$em=$row['Email'];

				if( $_SESSION['email']==$em)
				{

				$query="insert into orders(id,Name,ShipAddress,Total,Bookname) values('$id','$name','$address','$total','$Bname')";
				$result=mysqli_query($con,$query);
				header("location:success.php");
				
				}

				else{
					continue;
				}
			}

			
			//echo '<script>window.location="viewCart.php"</script>';
	


	/*else
	{
		
		//echo '<script>alert("enter your correct register name")</script>';
        echo '<script>window.location="viewCart.php"</script>';
		
	} */
}



?>