<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Employee Details</h3><a href="employee.php"><input type="button" class="button" value="ADD NEW"></a>
		<table class="table table-bordered data" id="sample_1" >
 <thead>			
			<tr class="data">
    <th class="data">Employee_ID</th>
    <th class="data">Employee_Name</th>
    <th class="data">Employee_Contact </th>
    <th class="data">Employee_Address</th>
    <th class="data">Monthly_Salary </th>
	<th class="data">---</th>
	<th class="data">---</th>
  </tr>
  </thead>
  <tbody>
			 <?php
  include('dbconnect.php');
  $sql="select * from employee";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  ?>

  <tr>
  
    <td class="data"><?php echo $row['employee_id']; ?></td>
    <td class="data"><?php echo $row['employee_name']; ?></td>
    <td class="data"><?php echo $row['employee_contact']; ?></td>
    <td class="data"><?php echo $row['employee_address']; ?></td>
    <td class="data"><?php echo $row['monthly_salary']; ?></td>
	<td class="data"><a href="employee_delete.php?id=<?php  echo $row['employee_id'];   ?>">DELETE</a></td>
	<td class="data"><a href="employee_edit.php?id=<?php  echo $row['employee_id'];   ?>">EDIT</a></td>
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


