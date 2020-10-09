<?php
include('dbconnect.php');
$depositor_id=$_POST['depositor_id'];
$loan_date=$_POST['loan_date'];
$total_given_amount=$_POST['total_given_amount'];


$loan_paid_date=$_POST['loan_paid_date'];
$sql="insert into loans values(null,'$depositor_id','$loan_date','$total_given_amount','0','$total_given_amount','')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="loans_view.php";
</script>