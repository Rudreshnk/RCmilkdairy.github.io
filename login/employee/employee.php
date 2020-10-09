<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
		
<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="employee_insert.php">
  <table width="200" border="1">
    <tr>
      <td>Employee_Name</td>
      <td><input type="text" name="employee_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Employee_Contact</td>
      <td><input type="text" name="employee_contact" class="validate[required],custom[mobile]"></td>
    </tr>
    <tr>
      <td>Employee_Address</td>
      <td><textarea name="employee_address" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Monthly_Salary</td>
      <td><input type="text" name="monthly_salary" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>

