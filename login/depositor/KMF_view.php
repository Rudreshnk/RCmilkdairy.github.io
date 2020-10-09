
<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>KMF Loans</h3>
	<a href="KMF.php"><input type="button" class="button" value="ADD NEW"></a>
	<table class="table table-bordered data" id="sample_1" >
		<thead>
			 <tr class="data">
    <th class="data">KMF_ID</th>
    <th class="data">Milk_Type</th>
    <th class="data">Total_Litre</th>
    <th class="data">Sent_Date</th>
    <th class="data">Cost_Per_Litre</th>
    <th class="data">Total_Amount</th>
	 <th class="data">---</th>
	 
  </tr>
  </thead>
  <tbody>
  
			<?php
  include('dbconnect.php');
  $sql="select * from kmf";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  ?>
  
  <tr class="data">
     <td class="data"><?php echo $row['kmf_id']; ?></td>
    <td class="data"><?php echo $row['milk_type']; ?></td>
    <td class="data"><?php echo $row['total_litre']; ?></td>
    <td class="data"><?php echo $row['sent_date']; ?></td>
    <td class="data"><?php echo $row['cost_per_litre']; ?></td>
    <td class="data"><?php echo $row['total_amount']; ?></td>
	<td class="data"><a href="KMF_delete.php?id=<?php  echo $row['kmf_id'];   ?>">DELETE</a></td>
	
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


