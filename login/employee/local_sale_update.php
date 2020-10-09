<?php
include('dbconnect.php');
$sale_id=$_POST['sale_id'];
$sale_date=$_POST['sale_date'];
$quantity=$_POST['quantity'];
$price_per_litre=$_POST['price_per_litre'];
$amount=$_POST['amount'];
$sql="update local_sale set sale_id='$sale_id',sale_date='$sale_date',quantity='$quantity',
price_per_litre='$price_per_litre',amount='$amount' where sale_id='$sale_id'";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="local_sale_view.php";
</script>