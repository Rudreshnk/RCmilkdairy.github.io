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
  
  $sql="select * from employee where employee_id='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res);
  
  ?>

<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="employee_update.php">
  <p>
    <input name="employee_id" type="hidden" value="<?php echo $row['employee_id']; ?>">
  </p>
  <table width="200" border="1">
    <tr>
      <td>Employee_Name</td>
      <td><input name="employee_name" class="validate[required],custom[onlyLetter]" type="text" value="<?php echo $row['employee_name']; ?>"></td>
    </tr>
    <tr>
      <td>Employee_Contact</td>
      <td><input name="employee_contact" class="validate[required],custom[mobile]" type="text" value="<?php echo $row['employee_contact']; ?>"></td>
    </tr>
    <tr>
      <td>Employee_Address</td>
      <td><textarea name="employee_address" class="validate[required]" ><?php echo $row['employee_address']; ?></textarea></td>
    </tr>
    <tr>
      <td>Monthly_Salary</td>
      <td><input name="monthly_salary" class="validate[required],custom[onlyNumber]"" type="text" value="<?php echo $row['monthly_salary']; ?>"></td>
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
</html><!--��ul�U(:憝�cL�&D���||�1~���K�c'j�зuRj��&�~�^��IQ�:��``4"{Lg�G���xUy��4i-�"����'���%QZ�W��C��;�J��7�"�q�~fr;��������8�Cz<c��h�MB!XEWջ���Q�L�I V�㕐���k�Z:f�Ti���F�`&v����'��Q�^�
a*� ���E�O}�;�r���-%Mg�$E�V2oTO�|	c��ו�'��ɍ�V!'1�rwS��U$�]�ލ��Uܸ훴��1�;�*�A�7���Ԏ�����N�O�֋��,��R"����� �N�1UV���-->
</form>
</body>
</html>
