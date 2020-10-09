<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>Loans</h3>
	
	
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
	
	
	
	<table class="table table-bordered data" >
		<thead>
			<tr class="data">
    <th class="data" height="56">Loan_ID</th>
    <th class="data">Depositor_ID</th>
    <th class="data">Loan_Date</th>
    <th class="data">Total_Given_Amount</th>
    <th class="data">Paid_Amount</th>
    <th class="data">Balance_Amount</th>

    <th class="data">Loan_Paid_Date</th>
	  
  </tr>
  </thead>
  <tbody>
    <?php
	$i=0;
	$tg1=0;
	$pg1=0;
	$bg1=0;
  include('dbconnect.php');
  $sql="select * from loans l, depositors d where l.depositor_id=d.depositor_id and l.loan_date>='$sd' and l.loan_date<='$ed'";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  $i=$i+1;
  
  $tg=$row['total_given_amount'];
  $tg1=$tg1+$tg;
  
   $pg=$row['paid_amount'];
  $pg1=$pg1+$pg;
  
  
   $bg=$row['balance_amount'];
  $bg1=$bg1+$bg;
  
  ?>

<tr>
  <td class="data"><?php echo $i; ?></td>
    <td class="data"> <?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['loan_date']; ?></td>
    <td class="data"><?php echo $row['total_given_amount']; ?></td>
    <td class="data"><?php echo $row['paid_amount']; ?></td>
	<td class="data"><?php echo $row['balance_amount']; ?></td>

	<td class="data"><?php echo $row['loan_paid_date']; ?></td>
	
	 </tr>
	<?php
  }
  ?>
  </tbody>
  
  <tr>
<td class="data" colspan="3">Total</td>
<td class="data"><?php echo $tg1; ?></td>
<td class="data"><?php echo $pg1; ?></td>
<td class="data"><?php echo $bg1; ?></td>
</tr>
		</table>		
		
		
		<?php }  ?>
	</div>
<div class="clear"></div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>

<?php include('footer.php');  ?>
