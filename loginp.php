<?php
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
echo "Invalid username or password";
}
if($msg==2)
{
echo "Logout Sucessfully";
}
if($msg==3)
{
echo "Pagal samjhe ho kya pehle login kro !!!!";
}
?>
<h2>Login form</h2>
<form action="logcode.php" method="post">
Username<input type="text" name="user"/>
<br/>
Password<input type="password" name="pass"/>
<br/>
<input type="submit" value="Login"/>
</form>