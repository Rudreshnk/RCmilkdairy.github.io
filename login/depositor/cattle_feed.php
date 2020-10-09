<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
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
	

<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="cattle_feed_insert.php">
  <table width="200" border="1">
    <tr>
      <td width="101">Depositor_ID</td>
      <td width="83"><select name="depositor_id" id="depositor_id">
        <option>SELECT</option>
        <?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row1=mysql_fetch_array($res))
  {
  ?>
        <option value= "<?php echo $row1['depositor_id'];?>"><?php echo $row1['depositor_name'];?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Feed_Type</td>
      <td><input type="text" name="feed_type" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Given_Date</td>
      <td><input type="date" name="given_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input type="text" name="quantity" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Feed_Amount</td>
      <td><input type="text" name="feed_amount"class="validate[required],custom[onlyNumber]" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
	</div>
<div class="clear"></div>


<?php include('footer.php');  ?>

