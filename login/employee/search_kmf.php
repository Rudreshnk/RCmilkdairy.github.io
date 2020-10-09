
<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>KMF Loans</h3>

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
    <th class="data">KMF_ID</th>
    <th class="data">Milk_Type</th>
    <th class="data">Total_Litre</th>
    <th class="data">Sent_Date</th>
    <th class="data">Cost_Per_Litre</th>
    <th class="data">Total_Amount</th>
	
	 
  </tr>
  </thead>
  <tbody>
  
			<?php
			$tamt=0;
  include('dbconnect.php');
  $sql="select * from kmf where sent_date>='$sd' and sent_date<='$ed'";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
   $ta=$row['total_amount'];
  $tamt=$tamt+$ta;
  ?>
  
  <tr class="data">
     <td class="data"><?php echo $row['kmf_id']; ?></td>
    <td class="data"><?php echo $row['milk_type']; ?></td>
    <td class="data"><?php echo $row['total_litre']; ?></td>
    <td class="data"><?php echo $row['sent_date']; ?></td>
    <td class="data"><?php echo $row['cost_per_litre']; ?></td>
    <td class="data"><?php echo $row['total_amount']; ?></td>
	
	 </tr>
	<?php
  }
  ?>
       </tbody>
	   
	   <tr>
<td class="data" colspan="5">Total Amount</td>
<td class="data"><?php echo $tamt; ?></td>
</tr>
	   
		</table>		
		<?php
		}
		?>
	
	</div>
<div class="clear"></div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>

<?php include('footer.php');  ?>


