<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
		
	
<?php include('val.php'); ?>
<form name="form1" method="post" id="formID" action="loans_insert.php">
  <table width="350" border="1">
    <tr>
      <td width="157">depositor_id</td>
      <td width="177"><select name="depositor_id" id="depositor_id">
        <option>SELECT</option>
			 <?php
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['depositor_id']; ?>"><?php echo $row['depositor_name']; ?></option>
      
	  <?php
	  }
	  ?>
	  </select></td>
    </tr>
    <tr>
      <td>Loan_Date</td>
      <td><input type="date" name="loan_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td>Total_Given_Amount</td>
      <td><input type="text" name="total_given_amount" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  
   </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>

