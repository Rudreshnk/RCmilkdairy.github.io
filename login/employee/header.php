<?php include('session_validate.php'); 
$uname=$_SESSION['uname'];
?>

<html>
<head>
<title>Admin </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
   <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, <?php echo $uname;?><br>
		 <a href="change_password.php">Change Password</a> \ <a href="../logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>