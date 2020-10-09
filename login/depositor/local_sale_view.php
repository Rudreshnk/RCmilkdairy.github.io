<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>Local Sales</h3>
	<a href="local_sale.php"><input type="button" class="button" value="ADD NEW"></a>
	<table class="table table-bordered data" id="sample_1" >
		<thead>
			 <tr class="data">
    <th class="data">Sale_ID</th>
    <th class="data">Sale_Date</th>
	<th class="data">Milk Type</th>
    <th class="data">Quantity</th>
    <th class="data">Price_Per_Litre</th>
    <th class="data">Amount</th>
	<th class="data">-----</th>

  </tr>
  </thead>
  <tbody>
			  <?php
  include('dbconnect.php');
  $sql="select * from local_sale";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  ?>
  <tr>
   <td class="data"><?php echo $row['sale_id']; ?></td>
    <td class="data"><?php echo $row['sale_date']; ?></td>
	<td class="data"><?php echo $row['milk_type']; ?></td>
    <td class="data"><?php echo $row['quantity']; ?></td>
    <td class="data"><?php echo $row['price_per_litre']; ?></td>
    <td class="data"><?php echo $row['amount']; ?></td>
	<td class="data"><a href="local_sale_delete.php?id=<?php  echo $row['sale_id'];   ?>">DELETE</a></td>

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
