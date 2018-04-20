<?php
$id=$_GET['id'];
require('connectp.php');
mysqli_query($con,"delete from notification where id='$id'");
echo "<script> alert('Notification Deleted!!'); window.location.href='notificationp.php';</script>";

?>
