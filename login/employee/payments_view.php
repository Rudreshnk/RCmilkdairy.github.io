<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Dashboard</h3>
	<table class="table table-bordered data" id="sample_1" >
	<thead>
		
			<tr class="data">

    <th class="data" height="50">Paid_Date</th>

    <th class="data">Milk_Id</th>
    <th class="data">Total_Milk_Deposit</th>
    <th class="data">Amount_Per_Litre</th>

    <th class="data">Total_Amount</th>

  </tr>
  </thead>
  <tbody>
			 <?php include('dbconnect.php');
$id=$_REQUEST['id'];  
  $sql="select * from payments p, milk m where p.milk_id=m.milk_id and p.milk_id='$id'";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr class="data">

    <td class="data"><?php echo $row['paid_date']; ?></td>

    <td class="data"><?php echo $row['milk_id']; ?></td>
    <td class="data"><?php echo $row['total_milk_dep']; ?></td>
    <td class="data"><?php echo $row['amount_per_litre']; ?></td>

    <td class="data"><?php echo $row['total_amount']; ?></td>

  </tr>
   <?php
  }
  ?>
  </tbody>

		</table>		
	</div>
<div class="clear"></div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>



<?php include('footer.php');  ?>
