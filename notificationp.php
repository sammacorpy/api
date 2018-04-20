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
<form method="post" action="addnotification.php">
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
<h2 style="color:blue; text-align:center; margin:0px; padding:40px;">What's new!!</h2>
<table align="center" cellspacing="10px">
<tr>
<td>Enter Notification</td>
<td><textarea name="description"></textarea></td>
</tr>
<td></td></tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Submit"/></td>
</tr>
</table>
<br/><br/><br/>
<h2 style="color:blue; text-align:center; padding:20px">View All Notifications</h2>
<table align="center" border="1" cellspacing="0px" cellpadding="10px">
<tr>
<th>S.No.</th>
<th>Description</th>
<th>Delete</th>
</tr>
<?php
require('connectp.php');
$res=mysqli_query($con,"select * from notification");
$n=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $n ?></td>
<td><?php echo $row[1] ?></td>
<td><a href="deletenotification.php?id=<?php echo $row[0] ?>">Delete</a></td>
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
</form>
</body>
</html>
