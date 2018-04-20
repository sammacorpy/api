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
<body style="background-image:url('css/b6.jpg');background-repeat:no repeat; background-attachment:fixed;">
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
<li><a href="homep.php">HOME</a></li>
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
<h2 style="color:blue; text-align:center; margin:0px; padding:40px;">This may help you!</h2>
<table align="center" border="1" cellspacing="0px" cellpadding="10px">
<tr>
<th>Disease</th>
<th>Cure</th>
<th>Dose</th>
<th>Duration</th>
<th>Delete</th>
</tr>
<?php
require('connectp.php');
$res=mysqli_query($con,"select Disease,Cures,Dose,Duration from symptom_checker");
$n=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $n ?></td>
<td><?php echo $row[0] ?></td>
<td><?php echo $row[1] ?></td>
<td><?php echo $row[2] ?></td>
<td><?php echo $row[3] ?></td>
<td><a href="deletecure.php?Disease=<?php echo $row[0] ?>">Delete</a></td>
</tr>
<?php
$n++;
}
?>
</table>
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
