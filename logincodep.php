<?php
session_start();
$userid=$_POST['userid'];
$passwd=$_POST['passwd'];
require('connectp.php');
$query="select usertype from login where Email='$userid' and Password='$passwd'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['userid']=$userid;
	header("Location:adminp.php");
}
else 
	echo "Invalid User!!:-(";
?>
