<?php
session_start();
if ($_SESSION['userid']=="")
{
	session_destroy();
	header("Location:index.php");
}
?>
<html>
<head>
<title>Admin Home</title>
<link href="adminstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-image:url('css/bg1.jpg');background-repeat:no repeat; background-attachment:fixed;">
<form>
<div id="wrapper">
<div id="header">
<div id="logo">
</div>
<div id="banner">
Parivartan, Ek Salah
</div>
</div>
<div id="menu">
<h3><ul>
<li><a href="#">HOME</a></li>
<li><a href="notification.php">NOTIFICATION</a></li>
<li><a href="user.php">USER</a></li>
<li><a href="article.php">ARTICLE</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul></h3>
</div>
<div id="main">
</div>
<div id="footer">
<div id="lfooter">Copyright &copy; to Parivartan
</div>
<div id="rfooter">Developed By : Android Batch SPI
</div>
</div>
</div>
</form>
</body>
</html>