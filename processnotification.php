<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
require('connectp.php');
$res=mysqli_query($con,"select description from notification");
$number_of_rows=mysqli_num_rows($res);
$temp_array=array();
if($number_of_rows>0)
{
	while($row=mysqli_fetch_assoc($res))
	{
		$temp_array[]=$row;
	}
}
header('Content-Type:application/json');
echo json_encode(array('error'=>0,'msg'=>'success',"notification"=>$temp_array));    // converts the value of temp_array into json. bridge b/w server and user.

}
else
	echo json_encode(array('error'=>1,'msg'=>'something went wrong'));
?>
