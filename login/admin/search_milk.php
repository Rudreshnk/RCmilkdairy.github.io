<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Milk Details</h3>
	<?php
	$sd=$_POST['sd'];
	$ed=$_POST['ed'];
	
	if($sd>$ed)
	{
	?>
	<script>
	alert('INVALID RANGE');
	document.location="milk_view.php";
	</script>
	
	<?php
	}
	else
	{
	?>
	
	<table class="table table-bordered data"  >
		<thead>
			<tr class="data">
    <th class="data">Milk ID </th>
    <th class="data">Depositor ID </th>
    <th class="data">Deposited Date </th>
    <th class="data">Deposited Time </th>
    <th class="data">Quantity</th>
    <th class="data">Fat Content </th>
    <th class="data">Milk Type </th>

  </tr>
  </thead>
  <tbody>
			 <?php include('dbconnect.php');
  $tqty=0;
  $sql="select * from milk m, depositors d where m.depositor_id=d.depositor_id and m.deposited_date>='$sd' and m.deposited_date<='$ed'";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  $mid=$row['milk_id']; 
  $qty=$row['quantity'];
  $tqty=$tqty+$qty;
  ?>
  <tr>
    <td class="data"><?php echo $row['milk_id']; ?></td>
    <td class="data"><?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['deposited_date']; ?></td>
    <td class="data"><?php echo $row['deposited_time']; ?></td>
    <td class="data"><?php echo $row['quantity']; ?></td>
    <td class="data"><?php echo $row['fat_content']; ?></td>
    <td class="data"><?php echo $row['milk_type']; ?></td>
	
  </tr>
    <?php
  }
  ?>
  </tbody>

<tr>
<td class="data" colspan="4">Total Quantity</td>
<td class="data" colspan="3"><?php echo $tqty; ?></td>
</tr>
		</table>		
	<?php } ?>
	</div>
<div class="clear"></div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>


<?php include('footer.php');  ?>
