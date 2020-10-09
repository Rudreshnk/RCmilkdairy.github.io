<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
	<h3>Milk Details</h3>
	<a href="milk.php"><input type="button" class="button" value="ADD NEW"></a>
	
	<form name='form1' method="post" id="formID" action="search_milk.php">
  
  <table width="343" border="1">
  
    <tr>
      <td>Start Date </td>
      <td><input name="sd" type="date" id="sd" class="validate[required]"></td>
   
      <td>End Date </td>
      <td><input name="ed" type="date" id="ed" class="validate[required]"></td>
    
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  </form>
	
	<table class="table table-bordered data" id="sample_1" >
		<thead>
			<tr class="data">
    <th class="data">Milk ID </th>
    <th class="data">Depositor ID </th>
    <th class="data">Deposited Date </th>
    <th class="data">Deposited Time </th>
    <th class="data">Quantity</th>
    <th class="data">Fat Content </th>
    <th class="data">Milk Type </th>

	<th class="data">---------</th>
	<th class="data">---------</th>
  </tr>
  </thead>
  <tbody>
			 <?php include('dbconnect.php');
  
  $sql="select * from milk m, depositors d where m.depositor_id=d.depositor_id";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
  $mid=$row['milk_id']; 
  ?>
  <tr>
    <td class="data"><?php echo $row['milk_id']; ?></td>
    <td class="data"><?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['deposited_date']; ?></td>
    <td class="data"><?php echo $row['deposited_time']; ?></td>
    <td class="data"><?php echo $row['quantity']; ?></td>
    <td class="data"><?php echo $row['fat_content']; ?></td>
    <td class="data"><?php echo $row['milk_type']; ?></td>
	<?php 
	$sql1="select * from testing where milk_id='$mid'";
	$res1=mysql_query($sql1);
	if($row1=mysql_fetch_array($res1))
	{
	?>
	<td class="data"><a href="testing_view.php?id=<?php  echo $row['milk_id']; ?>">View Test</a>  <br/>  <a href="payments_view.php?id=<?php  echo $row['milk_id']; ?>">View Payments</a></td>

    <?php } else { ?>
	<td class="data"><a href="testing.php?id=<?php  echo $row['milk_id']; ?>">Make Test</a></td>
	<?php } ?>
	<td class="data"><a href="milk_delete.php?id=<?php  echo $row['milk_id'];   ?>">DELETE</a></td>
	
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
