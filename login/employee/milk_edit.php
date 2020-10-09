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
		Hallo, Mas Administrator<br>
		<a href="">Lihat website</a> | <a href="">Help</a> | <a href="login.html">Keluar</a>
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
	
		<div class="informasi">
		ini adalah notifikasi pertanda informasi
		</div>
		
		<div class="gagal">
		ini adalah notifikasi pertanda gagal
		</div>
		
		<div class="sukses">
		ini adalah notifikasi pertanda sukses
		</div>
    <?php
	$id=$_REQUEST['id'];
  include('dbconnect.php');
  
  $sql="select * from milk where milk_id='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res);
  ?>
<html>
<body>
<?php include('val.php'); ?>
 <form name="form1" method="post" id="formID" action="milk_update.php">
  <p>
    <input name="milk_id" type="hidden" id="milk_id" value="<?php echo $row['milk_id']; ?>">
</p>
  <table width="343" border="1">
    <tr>
      <td width="156">depositor id </td>
       <td width="171"><select name="depositor_id" id="depositor_id">
        <option>SELECT</option>
		  <?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row1=mysql_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row1['depositor_id']; ?>"
		<?php if($row['depositor_id']==$row1['depositor_id']) { ?> selected <?php } ?>
		><?php echo $row1['depositor_name']; ?></option>
		<?php
		}
		?>
		
      </select></td>
    </tr>
    <tr>
      <td>Depositor Date </td>
      <td><input name="deposited_date" type="date" id="deposited_date" class="validate[required],custom[date]" value="<?php echo $row['deposited_date']; ?>"></td>
    </tr>
    <tr>
      <td>Deposited Time </td>
      <td><input name="deposited_time" type="time" id="deposited_time" class="validate[required]" value="<?php echo $row['deposited_time']; ?>"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required],custom[onlyNumber]" value="<?php echo $row['quantity']; ?>"></td>
    </tr>
    <tr>
      <td>Fat Content </td>
      <td><input name="fat_content" type="text" id="fat_content" class="validate[required],custom[onlyNumber]" value="<?php echo $row['fat_content']; ?>"></td>
    </tr>
    <tr>
      <td>Milk Type</td>
      <td><input name="milk_type" type="text" id="milk_type" class="validate[required],custom[onlyLetter]" value="<?php echo $row['milk_type']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  
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
