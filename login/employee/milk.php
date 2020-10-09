<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>
	<div id="rightContent">
	<h3>Form</h3>
	
		
<?php include('val.php'); ?>

<form name='form1' method="post" id="formID" action="milk_insert.php">
  
  <table width="343" border="1">
    <tr>
      <td width="156">Depositor Account No </td>
      <td width="171"><input name="acc_no" type="text" id="acc_no" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Deposited Date </td>
      <td><input name="deposited_date" type="date" id="deposited_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td>Deposited Time </td>
      <td><input name="deposited_time" type="text" id="deposited_time" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Fat Content </td>
      <td><select name="fat_content" id="fat_content">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
            </select></td>
    </tr>
    <tr>
      <td>Milk Type</td>
      <td><select name="milk_type">
	  <option>Cow</option>
	  <option>Buffalo</option>
	  </select> 

    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>
