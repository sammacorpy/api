<?php
$disease=$_GET['disease'];
require('connectp.php');
mysqli_query($con,"delete from symptom_checker where Disease='$disease'");
echo "<script>
        alert('Record Deleted!!');
        window.location.href='curesp.php';
	  </script>";
?>
