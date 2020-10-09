<?php include 'header.php' ?>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 30px;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
<body class="subpage">
<div id="main">
<div id="inner">
<?php include'logo.php' ?>
<div class="top1">

<?php include'menu.php'?>
<div class="top2">
</div>

<div id="content">
<div class="container">
<div class="span6">
<div class="pad_right20">
	
    <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="admin/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="admin/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
<form id="formID" class="form-signin" method="post" action="logcheck.php">
        <h2 class="style1" >Sign in</h2>
        <input name="username" type="text" class="validate[required]" class="input-block-level" placeholder="Enter username">
        <input name="password"type="password" class="validate[required]" class="input-block-level" placeholder="Enter Password">
       <p><a href="forgot_password.php" class="style2">Forgot Password? Click here</a></p>
	    
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>	
	   </div> <!-- /container -->
    <script src="admin/vendors/jquery-1.9.1.min.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
</div>
</div>	
</div>	
</div>

<footer>
<div class="container">
<div class="row">
<div class="span12">
<div class="bot1">
	<div class="row">
		<div class="span3">
			<div class="block1 pad_bottom">
				<div class="logo_wrapper2"><div class="bot_title">Our Address</div></div>
				<p>Gandhi nagar,near sangam circle dharwad</br>Telephone:(0836)2448677<br />
Cell:7259490292<br />
</br></p>
				</div>
		</div>
		<div class="span3">
			<div class="block2 pad_bottom">
				<div class="bot_title">Useful Links</div>
				<ul class="ul0">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="about.php">About Us</a></li>	
				<li><a href="courses.php">Courses</a></li>							
				<li><a href="branches.php">Branches</a></li> 		
				
				</ul>
			</div>
		</div>
		
		<div class="span3">
			<div class="block2 pad_bottom">
				<div class="bot_title">Useful Links</div>
				<ul class="ul0">
				<li><a href="login.php">Login</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="student_registration1.php">Student Registration</a></li>	
				</ul>
			</div>
		</div>
		
		<div class="span3">
			<div class="block3 pad_bottom">
				<div class="bot_title">Courses</div>
				<ul class="ul0">
				  <li><a href="index.php">21 days course</a></li>
				  <li><a href="writesmart.php">write smart</a></li>
				</ul>
			</div>
		</div>
		
	</div>
</div>	
<div class="bot2">
	<div class="pad_bottom">
	<div class="copyright">Copyright © 2014. All rights reserved.</div>
		
	</div>
</div>	
</div>	
</div>	
</div>
</footer>
</div>	
</div>

<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>