<?php
include('dbconnect.php');
$milk_type=$_POST['milk_type'];
$total_litre=$_POST['total_litre'];
$sent_date=$_POST['sent_date'];
$cost_per_litre=$_POST['cost_per_litre'];

$total_amount=$total_litre*$cost_per_litre;
$sql="insert into KMF values(null,'$milk_type','$total_litre','$sent_date','$cost_per_litre','$total_amount')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="KMF_view.php";
</script>