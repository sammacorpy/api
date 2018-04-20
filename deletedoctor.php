<?php
$email=$_GET['Email'];
require('connectp.php');
mysqli_query($con,"delete from doctor where Email='$email'");
echo "<script>
        alert('Record Deleted!!');
        window.location.href='doctorp.php';
	  </script>";
?>
