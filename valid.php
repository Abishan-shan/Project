<?php



//$con=mysqli_connect("localhost","root","","registration");

include 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phoneNo=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];


$query="select * from register where Email='$email'";

$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);


if($num>0)
{
	//echo "email and password is already taken";
	echo "<script>alert('The email id is already accessed');</script>";
	header('location:register.php');
	
}
else
{
	$reg="insert into register(Name,Email,PhoneNo,Address,Password) values('$name','$email','$phoneNo','$address','$password')";
	mysqli_query($con,$reg);
	echo "success";
	header('location:login.php');
	
	
}




?>