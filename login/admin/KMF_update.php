<?php
include('dbconnect.php');
$kmf_id=$_POST['kmf_id'];
$milk_type=$_POST['milk_type'];
$total_litre=$_POST['total_litre'];
$sent_date=$_POST['sent_date'];
$cost_per_litre=$_POST['cost_per_litre'];
$total_amount=$_POST['total_amount'];
$sql="update kmf set kmf_id='$kmf_id', milk_type='$milk_type',total_litre='$total_litre',sent_date='$sent_date',cost_per_litre='$cost_per_litre',total_amount='$total_amount'
where kmf_id='$kmf_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="KMF_view.php";
</script>