<?php

session_start();

$con=mysqli_connect("localhost","root","","registration");

/*$name=$_POST['name'];
$email=$_POST['email'];
$phoneNo=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password']; */

$email=$_POST['email'];
$password=$_POST['password'];

$query="select * from register where Email='$email' && Password='$password'";

$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);


if($num==1)
{
	$_SESSION['name']=$name;
	echo "success";
	header('location:menu.php');
	
}
else
{
	echo " not success";
	//header('location:login.php');
}




?>