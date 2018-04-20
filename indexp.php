<?php
?>
<html>
<head>
<title>E-MEDICATION App admin</title>
<style>
#login
{
	width:500px;
	height:300px;
	background-color: rgba( 255, 255, 255, 0.5);
	margin:200px auto;
}
</style>
</head>
<body bgcolor="powderblue">
<form action="logincodep.php" method="post">
<div id="login">
<h1 style="text-align:center;">E-MEDICATION</h1>
<h2 style="text-align:center; text-decoration:underline;">Admin-Login</h2>
<table align="center">
<tr>
<td>Enter User Id</td>
<td><input type="text" name="userid"/></td>
</tr>
<tr>
<td>Enter Password</td>
<td><input type="password" name="passwd"/></td>
</tr>
<br/>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Login"/></td>
</tr>
</table>
</div>
</form>
</body>
</html>
