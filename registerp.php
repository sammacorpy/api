<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['Name'];
	$number=$_POST['Mobile_number'];
	$bloodgroup=$_POST['Blood_group'];
	$height=$_POST['Height'];
	$weight=$_POST['Weight'];
	$address=$_POST['Address'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$usertype=$_POST['usertype'];
	
require('connectp.php');
mysqli_query($con,"insert into user values('$name','$number','$bloodgroup','$height','$weight','$address','$email','$password')");
mysqli_query($con,"insert into login values('$email','$password','$usertype')");
echo json_encode(array('error'=>0,'msg'=>'success'));
}
else
{
	echo echo json_encode(array('error'=>1,'msg'=>'something went wrong!!!'));
}
?>
