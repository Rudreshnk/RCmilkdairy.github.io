<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
	
		
<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="KMF_insert.php">
  <table width="340" height="169" border="1">
    	  <tr>
      <td>Milk Type</td>
      <td><select name="milk_type">
	  <option>Cow</option>
	  <option>Buffalo</option>
	  </select> 

    </tr>
    <tr>
      <td>Total_Litre</td>
      <td><input type="text" name="total_litre" class="validate[required],custom[onlyNumber]"></td>
    </tr> 
    <tr>
      <td>Sent_Date</td>
      <td><input type="date" name="sent_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td height="26">Cost_Per_Litre</td>
      <td><input type="text" name="cost_per_litre" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="37" colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>  
   </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>

