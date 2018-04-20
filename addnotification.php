<?php
$description=$_POST['description'];
require('connectp.php');
mysqli_query($con,"insert into notification(description) values('$description')");
echo "<script>  alert('Notification Saved!!'); window.location.href='notificationp.php';  </script>";
?>
