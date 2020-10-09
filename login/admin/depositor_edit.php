<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hello, Administrator<br>
		<a href=""></a> | <a href="">Help</a> | <a href="login.html"></a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.html">Dashboard</a></li>
		<li><a href="tabel.html">Tabel</a></li>
		<li><a href="form.html">Form</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Form</h3>
	
		
 <?php
  $id=$_REQUEST['id'];
  include('dbconnect.php');
  
  $sql="select * from depositors where depositor_id='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res);
  
  ?>
<?php include('val.php'); ?>



<form name="form1" id="formID" method="post" action="depositor_update.php">
 
  <p>
    <input name="depositor_id" type="hidden" value="<?php echo $row['depositor_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td>Depositor Name </td>
      <td><input name="depositor_name" class="validate[required],custom[onlyLetter]"type="text" value="<?php echo $row['depositor_name']; ?>">
    </tr>
    <tr>
      <td>Depositor Contact</td>
      <td><input name="depositor_contact"class="validate[required],custom[mobile]" type="text" value="<?php echo $row['depositor_contact']; ?>">
    </tr>
    <tr>
      <td>Depositor Address </td>
      <td><textarea name="depositor_address" class="validate[required]" ><?php echo $row['depositor_address']; ?></textarea></td>
    </tr>
    <tr>
      <td>Depositor Adhar </td>
      <td><input name="depositor_adhar" class="validate[required],custom[onlyNumber]" type="text" value="<?php echo $row['depositor_adhar']; ?>"></td>
    </tr>
    <tr>
      <td>Account Number </td>
      <td><input name="account_no" class="validate[required],custom[onlyNumber]" type="text" value="<?php echo $row['account_no']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <p>&nbsp;</p>

</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
</div>
</div>
</body>
</html><!--??ul?U(:??cL?&D???||?1~???K?c'j??uRj??&?~?^??IQ?:??``4"{Lg?G???xUy??4i-?"????'???%QZ?W??C??;?J??7?"?q?~fr;????????8?Cz<c??h?MB!XEW????Q?L?I V?????k?Z:f?Ti???F?`&v????'??Q?^?
a*? ???E?O}?;?r???-%Mg?$E?V2oTO?|	c????'????V!'1?rwS??U$?]????U????1?;?*?A?7?????????N?O????,??R"????? ?N?1UV???-->
</form>

</body>
</html>
