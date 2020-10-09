<?php include('header.php');  ?>

<script language="javascript" src="js/ajax.js"></script>
<script language="javascript">


function calcAmt(){
	var qty = document.getElementById('quantity').value;
	
	var rate = document.getElementById('price_per_litre').value;
	
	if(qty == "") 
	{ 
		return;
	}
	var result = qty*rate;
	document.getElementById('value').value=result;
}
</script>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
<?php include('val.php'); ?>
<form name="form1" method="post" id="formID" action="local_sale_insert.php">
  <table width="317" border="1">
    <tr>
      <td width="171">Sale_Date</td>
      <td width="130"><input type="date" name="sale_date" class="validate[required],custom[date]"></td>
    </tr>
	  <tr>
      <td>Milk Type</td>
      <td><select name="milk_type">
	  <option>Cow</option>
	  <option>Buffalo</option>
	  </select> 

    </tr>
    <tr>
      <td height="29">Quantity</td>
      <td><input type="text" name="quantity" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Price_Per_Litre</td>
      <td><input type="text" name="price_per_litre" class="validate[required],custom[onlyNumber]"></td>
    </tr>
	
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>

   </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>

 