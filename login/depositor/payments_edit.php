

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
  
  $sql="select * from payments where payment_id='$id'";
  $res=mysql_query($sql);
  
  $row=mysql_fetch_array($res)
  ?>
  <?php include('val.php'); ?>

<form name="form1" id="formID" method="post" action="payments_update.php">
  <p>
    <input name="payment_id" type="hidden" id="payment_id" value="<?php echo $row['payment_id']; ?>">
</p>
  <table width="346" height="259" border="1">
    <tr>
      <td width="177">Paid date </td>
      <td width="153"><input name="paid_date" class="validate[required],custom[date]" type="date" id="paid_date" value="<?php echo $row['paid_date']; ?>"></td>
    </tr>
    <tr>
      <td>Depositor id </td>
      <td><select name="depositor_id" id="depositor_id">
        <option>SELECT</option>
		<?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  
  while($row1=mysql_fetch_array($res))
  {
  ?>
  <option value= "<?php echo $row1['depositor_id'];?>"
   <?php if($row['depositor_id']==$row1['depositor_id']) { ?> selected <?php } ?>><?php echo $row1['depositor_name'];?></option>
		<?php
		}
		?>
		
		
       
      </select></td>
    </tr>
    <tr>
      <td>Milk ID </td>
      <td><select name="milk_id" id="milk_id">
        <option>SELECT</option>
			<?php
  include('dbconnect.php');
  
  $sql="select * from milk";
  $res=mysql_query($sql);
  
  while($row2=mysql_fetch_array($res))
  {
  ?> 
        <option value="<?php echo $row2['milk_id']; ?>"
		<?php if($row['milk_id']==$row2['milk_id']) { ?> selected <?php } ?>
		><?php echo $row2['milk_id']; ?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Total Milk Deposit </td>
      <td><input name="total_milk_dep"class="validate[required],custom[onlyNumber]" type="text" id="total_milk_dep" value="<?php echo $row['total_milk_dep']; ?>"></td>
    </tr>
    <tr>
      <td>From Date </td>
      <td><input name="from_date" class="validate[required],custom[date]" type="date" id="from_date" value="<?php echo $row['from_date']; ?>"></td>
    </tr>
	 <tr>
      <td>To Date </td>
      <td><input name="to_date" class="validate[required],custom[date]" type="date" id="to_date" value="<?php echo $row['to_date']; ?>"></td>
    </tr>
    <tr>
      <td>Amount Per Litre </td>
      <td><input name="amount_per_litre" class="validate[required],custom[onlyNumber]" type="text" id="amount_per_litre" value="<?php echo $row['amount_per_litre']; ?>"></td>
    </tr>
    <tr>
      <td>Feed ID </td>
      <td><select name="feed_id" id="feed_id">
        <option>SELECT</option>
			 <?php
  include('dbconnect.php');
  $sql="select * from cattle_feed";
  $res=mysql_query($sql);
  
  while($row3=mysql_fetch_array($res))
  
  {
  ?>
		
        <option value="<?php echo $row3['feed_id']; ?>"
		<?php if($row['feed_id']==$row3['feed_id']) { ?> selected <?php } ?>
		><?php echo $row3['feed_type']; ?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Total Amount </td>
      <td><input name="total_amount" class="validate[required],custom[onlyNumber]" type="text" id="total_amount" value="<?php echo $row['total_amount']; ?>"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td></td>
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
