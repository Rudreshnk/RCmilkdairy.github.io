<?php
session_start();

include('connection.php');
$pass = $_GET['password'];
$sql = "select * from login where user_name = '".$_SESSION['uname']."' and password = '".$pass."'";
$res = mysql_query($sql);
if(mysql_num_rows($res)>0)
{
	echo "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"1\" /><font color=\"green\">Correct Password...</font>";
} else
{
	echo "<input type=\"hidden\" id=\"status\" name=\"status\" value=\"\" /><font color=\"red\">Incorrect Password...</font>";
}
?>