<?php
$email=$_GET['email'];
require('connectp.php');
mysqli_query($con,"delete from registration where Email='$email'");
echo "<script>
        alert('Record Deleted!!');
        window.location.href='userp.php';
	  </script>";
?>
