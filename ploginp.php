<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$contactno=$_POST['contactno'];
	$password=$_POST['password'];
	require('connect.php');
	$res=mysqli_query($con,"select usertype from login where contactno='$contactno' and password='$password'");
	if($row=mysqli_fetch_array($res))
	{
		echo "valid";
	}
	else
		echo "invalid";
}
else
{
	echo "Something went wrong";
}
?>
