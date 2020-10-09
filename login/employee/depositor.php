<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
		
		
<?php include('val.php'); ?>

<form name="form1" id="formID" method="post" action="depositor_insert.php">
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>Depositor Name </td>
      <td><input type="text" name="depositor_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Depositor Contact</td>
      <td><input type="text" name="depositor_contact" class="validate[required],custom[mobile]"></td>
    </tr>
    <tr>
      <td>Depositor Address </td>
      <td><textarea name="depositor_address" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Depositor Adhar </td>
      <td><input type="text" name="depositor_adhar" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Account Number </td>
      <td><input type="text" name="account_no" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  </form>
  
	</div>
<div class="clear"></div>


<?php include('footer.php');  ?>

