<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Cattle Feed</h3>
	<a href="cattle_feed.php"><input type="button" class="button" value="ADD NEW"></a>
		<table class="table table-bordered data" id="sample_1" >
			<thead>
			<tr class="data">
     <th class="data" height="30">Feed_ID</th> 
    <th class="data" height="30">Depositor_ID</th>
    <th class="data">Feed_Type</th>
    <th class="data">Given_Date</th>
    <th class="data">Quantity</th>
    <th class="data">Feed_Amount</th>
	<th class="data">---</th>
	<th class="data">---</th>
  </tr>
  </thead>
  
  		<?php
  include('dbconnect.php');
  $sql="select * from cattle_feed cf,depositors d where cf.depositor_id=d.depositor_id";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  ?>
  <tbody>
			<tr class="data" >
     <td class="data"><?php echo $row['feed_id']; ?></td>
    <td class="data"><?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['feed_type']; ?></td>
    <td class="data"><?php echo $row['given_date']; ?></td>
    <td class="data"><?php echo $row['quantity']; ?></td>
    <td class="data"><?php echo $row['feed_amount']; ?></td>
	<td class="data"><a href="cattle_feed_delete.php?id=<?php  echo $row['feed_id'];   ?>">DELETE</a></td>
	<td class="data"><a href="cattle_feed_edit.php?id=<?php  echo $row['feed_id'];   ?>">EDIT</a></td>
  </tr>
  </tbody>
  <?php
  }
  ?>

		</table>		
		
	</div>
<div class="clear"></div>

   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>

<?php include('footer.php');  ?>


