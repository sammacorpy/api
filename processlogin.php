<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	require('connectp.php');
	$res=mysqli_query($con,"select l.Email,l.usertype,u. from login as u, user as where Email='$email' and Password='$password'");
	if($row=mysqli_fetch_array($res))
	{
		echo json_encode(array('error'=>0,'msg'=>'success','user_detail'=>$row));
	}
	else
	echo json_encode(array('error'=>1,'msg'=>'something went wrong!!!'));
}
else
{
	echo json_encode(array('error'=>2,'msg'=>'server error'));
}
?>
