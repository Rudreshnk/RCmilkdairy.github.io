
<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>KMF Loans</h3>
	<a href="KMF.php"><input type="button" class="button" value="ADD NEW"></a>
	
	<form name='form1' method="post" id="formID" action="search_kmf.php">
  
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


