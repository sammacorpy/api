<?php
session_start();
if($_SESSION['userid']=="")
{
	session_destroy();
	header("Location:indexp.php");
}
?>
<html>
<head>
<title>Admin Home</title>
<link href="stylep.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-image:url('css/b4.jpg');background-repeat:no repeat; background-attachment:fixed;">
<form>
<div id="wrapper">
<div id="header">
<div id="logo">
</div>
<div id="banner">
E-MEDICATION
</div>
</div>
<div id="menu">
<h3><ul>
<li><a href="#">HOME</a></li>
<li><a href="notificationp.php">NOTIFICATION</a></li>
<li><a href="userp.php">USER</a></li>
<li><a href="doctorp.php">DOCTOR</a></li>
<li><a href="listofdocp.php">LISTOFDOC</a></li>
<li><a href="pdp.php">POSSIBLEDISEASE</a></li>
<li><a href="curesp.php">CURES</a></li>
<li><a href="indexp.php">LOGOUT</a></li>
</ul></h3>
</div>
<div id="main">
</div>
<div id="footer">
<div id="lfooter">Copyright &copy; to E-Medication
</div>
<div id="rfooter">Developed By : CKS3
</div>
</div>
</div>
</form>
</body>
</html>