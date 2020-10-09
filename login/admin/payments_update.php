
<?php 
include('dbconnect.php');
$payment_id=$_POST['payment_id'];
$paid_date=$_POST['paid_date'];
$depositor_id=$_POST['depositor_id'];
$milk_id=$_POST['milk_id'];
$total_milk_dep=$_POST['total_milk_dep'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$amount_per_litre=$_POST['amount_per_litre'];
$feed_id=$_POST['feed_id'];
$total_amount=$_POST['total_amount'];
$sql=" update payments set payment_id='$payment_id',paid_date='$paid_date',depositor_id='$depositor_id',
milk_id='$milk_id',
total_milk_dep='$total_milk_dep',from_date='$from_date',to_date='$to_date',amount_per_litre='$amount_per_litre',
feed_id='$feed_id',total_amount='$total_amount' where payment_id='$payment_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="payments_view.php";
</script>
