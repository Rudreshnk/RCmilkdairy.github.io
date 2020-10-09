<?php
include('dbconnect.php');
$sale_date=$_POST['sale_date'];
$quantity=$_POST['quantity'];
$price_per_litre=$_POST['price_per_litre'];
$milk_type=$_POST['milk_type'];

$amt=$quantity*$price_per_litre;
$sql="insert into local_sale values(null,'$sale_date','$milk_type','$quantity','$price_per_litre','$amt')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="local_sale_view.php";
</script>