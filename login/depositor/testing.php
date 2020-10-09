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
<form name="form1" method="post" id="formID" action="testing_insert.php">
  <table width="404" border="1">
    <tr>
      <td>Test Date </td>
      <td><input name="test_date" type="date"  class="validate[required],custom[date]"> </td>
    </tr>
    <tr>
      <td>Milk</td>
      <td><select name="milk_id" id="milk_id">
        
        <?php
$id=$_REQUEST['id'];
  include('dbconnect.php');
  
  $sql="select * from milk where milk_id='$id'";
  $res=mysql_query($sql);
  
  while($row2=mysql_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row2['milk_id']; ?>"><?php echo $row2['milk_type']; ?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Fat Content </td>
      <td><select name="fat_content">
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
      <td>Water Content </td>
      <td><input name="water_content" type="text" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Cost Per Litre </td>
      <td><input name="cost_per_litre" type="text" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
   
   </form>
 </div>
<div class="clear"></div>


<?php include('footer.php');  ?>
