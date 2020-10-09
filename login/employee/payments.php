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
<form name="form1" method="post" id="formID" action="payments_insert.php">
  <table width="346" height="259" border="1">
    <tr>
      <td width="177">Paid Date </td>
      <td width="153"><input name="paid_date" type="date" id="paid_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td>Depositor ID </td>
      <td><select name="depositor_id" id="depositor_id">
        <option>SELECT</option>
		<?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row1=mysql_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row1['depositor_id']; ?>"><?php echo $row1['depositor_name']; ?></option>
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
        <option value="<?php echo $row2['milk_id']; ?>"><?php echo $row2['milk_id']; ?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Total Milk Deposited </td>
      <td><input name="total_milk_dep" type="text" id="total_milk_dep" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>From Date </td>
      <td><input name="from_date" type="date" id="from_date" class="validate[required],custom[date]"></td>
    </tr>
	 <tr>
      <td>To Date </td>
      <td><input name="to_date" type="date" id="to_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td>Amount Per Litre </td>
      <td><input name="amount_per_litre" type="text" id="amount_per_litre" class="validate[required],custom[onlyNumber]"></td>
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
		
		
        <option value="<?php echo $row3['feed_id']; ?>"><?php echo $row3['feed_type']; ?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Total Amount </td>
      <td><input name="total_amount" type="text" id="total_amount" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      
	  
    </tr>
  </table>
  
   </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>
