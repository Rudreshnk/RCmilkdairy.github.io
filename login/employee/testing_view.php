
<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Dashboard</h3>
	<table class="table table-bordered data" id="sample_1" >
		<thead>
			<tr class="data">
    <th class="data">Test ID </th>

    <th class="data">Test Date </th>
    <th class="data">Milk ID </th>
    <th class="data">Fat Content </th>
    <th class="data">Water Content </th>
    <th class="data">Cost Per Litre </th>
    <th class="data">---</th>
	<th class="data">---</th>
	
  </tr> 
  </thead>
  <tbody>
			 <?php
$id=$_REQUEST['id'];
  include('dbconnect.php');
  
  $sql="select * from testing t,milk m where t.milk_id=m.milk_id and t.milk_id='$id'";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr class="data">
    <td class="data"><?php echo $row['test_id']; ?></td>

    <td class="data"><?php echo $row['test_date']; ?></td>
    <td class="data"><?php echo $row['milk_id']; ?></td>
    <td class="data"><?php echo $row['fat_content']; ?></td>
    <td class="data"><?php echo $row['water_content']; ?></td>
    <td class="data"><?php echo $row['cost_per_litre']; ?></td>
	<td class="data"><a href="testing_delete.php?id=<?php  echo $row['test_id'];   ?>">Delete</a></td>
    <td class="data"><a href="testing_edit.php?id=<?php  echo $row['test_id'];   ?>">Edit</a></td> 
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
