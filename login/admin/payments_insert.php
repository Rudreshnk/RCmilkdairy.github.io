
<?php 
include('dbconnect.php');
$paid_date=$_POST['paid_date'];
$depositor_id=$_POST['depositor_id'];
$milk_id=$_POST['milk_id'];
$total_milk_dep=$_POST['total_milk_dep'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$amount_per_litre=$_POST['amount_per_litre'];
$feed_id=$_POST['feed_id'];
$total_amount=$_POST['total_amount'];
$sql="insert into payments values(null,'$paid_date','$depositor_id','$milk_id','$total_milk_dep','$from_date','$to_date','$amount_per_litre','$feed_id','$total_amount')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="payments_view.php";
</script>
