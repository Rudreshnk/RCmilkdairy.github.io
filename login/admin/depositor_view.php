<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Depositors</h3>
	<a href="depositor.php"><input type="button" class="button" value="ADD NEW"></a>
		<table class="table table-bordered data" id="sample_1" >
<thead>
			<tr class="data">
    <th class="data"> Depositor ID</th>
    <th class="data">Depositor Name</th>
    <th class="data" >Depositor Contact</th>
    <th class="data">Depositor Address</th>
    <th class="data">Depositor Adhar </th>
    <th class="data">Account No </th>
	<th class="data">---</th>
	<th class="data">---</th>
  </tr>
  </thead>
  <tbody>
			<?php
			$i=0;
  include('dbconnect.php');
  
  $sql="select * from depositors";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  $i=$i+1;
  ?>
  <tr>
    <td class="data"><?php echo $i; ?></td>
    <td class="data"><?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['depositor_contact']; ?></td>
    <td class="data"><?php echo $row['depositor_address']; ?></td>
    <td class="data"><?php echo $row['depositor_adhar']; ?></td>
    <td class="data"><?php echo $row['account_no']; ?></td>
	<td class="data"><a href="depositor_delete.php?id=<?php  echo $row['depositor_id'];   ?>">Delete</a></td>
	<td class="data"><a href="depositor_edit.php?id=<?php  echo $row['depositor_id'];   ?>">edit</a></td>
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



