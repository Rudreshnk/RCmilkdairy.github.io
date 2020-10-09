<?php include('header.php');  ?>

<div id="wrapper">

<?php include('sidebar.php');  ?>

	<div id="rightContent">
		<h3>Loans</h3>
	<a href="loans.php"><input type="button" class="button" value="ADD NEW"></a>
	
	<form name='form1' method="post" id="formID" action="search_loans.php">
  
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
    <th class="data" height="56">Loan_ID</th>
    <th class="data">Depositor_ID</th>
    <th class="data">Loan_Date</th>
    <th class="data">Total_Given_Amount</th>
    <th class="data">Paid_Amount</th>
    <th class="data">Balance_Amount</th>

    <th class="data">Loan_Paid_Date</th>
	  <th class="data">---</th>
	  <th class="data">---</th>
  </tr>
  </thead>
  <tbody>
    <?php
	$i=0;
  include('dbconnect.php');
  $sql="select * from loans l, depositors d where l.depositor_id=d.depositor_id";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  
  {
  $i=$i+1;
  ?>

<tr>
  <td class="data"><?php echo $i; ?></td>
    <td class="data"> <?php echo $row['depositor_name']; ?></td>
    <td class="data"><?php echo $row['loan_date']; ?></td>
    <td class="data"><?php echo $row['total_given_amount']; ?></td>
    <td class="data"><?php echo $row['paid_amount']; ?></td>
	<td class="data"><?php echo $row['balance_amount']; ?></td>

	<td class="data"><?php echo $row['loan_paid_date']; ?></td>
	<td class="data"><a href="loans_edit.php?id=<?php echo $row['loan_id'];   ?>">Make Payments</a></td> 
	<td class="data"><a href="loans_delete.php?id=<?php  echo $row['loan_id'];   ?>">DELETE</a></td>

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
