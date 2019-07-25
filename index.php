<?php
session_start();

if(isset($_SESSION["uname"]))
{
echo "<h1 align='center'>you are already login</h1>";
exit();
}
?>
<html>
<head>
<title>time pass</title></head>
<body bgcolor="gray" TEXT="white" >
<h1><center>TIME PASS!!!</center></h1>
<form  method="post">
<table border="3" align="center" style="margin-top:200px;">
<tr>
<td>USERNAME</td>
<td><input type="text" name="usr"/></td>
</tr>

<tr>
<td>PASSWORD</td>
<td><input type="password" name="pswd"/></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="login"/></td>
</tr>
</table>
</form>
</body>

</html>
<?php

$_SESSION["uname"] = $_POST['usr'];
$_SESSION["pass"] = $_POST['pswd'];
$_SESSION["sub"] = $_POST['login'];
if(isset($_SESSION["sub"]))
{
	header('location:slog.php');
}	
	
?>