<?php session_start(); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];	
	include('dbconnect.php');
	$sql="select * from login where username='$username' and password='$password'";
	$res=mysql_query($sql);
	if($row=mysql_fetch_array($res))
	{
	$type=$row["user_type"];
	
	$_SESSION["uname"]=$username;
	
	if($type=="admin")
	{
	?>
	<script>
	document.location="admin/home.php";
	</script>
	<?php
	}
	
	else if($type=="employee")
	{
	?>
	<script>
	document.location="employee/home.php";
	</script>
	<?php
	}
	
		else if($type=="depositor")
	{
	?>
	<script>
	document.location="depositor/home.php";
	</script>
	<?php
	}
}
	
	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>