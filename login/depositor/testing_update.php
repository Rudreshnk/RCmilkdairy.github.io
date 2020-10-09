<?php
include('dbconnect.php');
$test_id=$_POST['test_id'];
$depositor_id=$_POST['depositor_id'];
$test_date=$_POST['test_date'];
$milk_id=$_POST['milk_id'];
$fat_content=$_POST['fat_content'];
$water_content=$_POST['water_content'];
$cost_per_litre=$_POST['cost_per_litre'];
$sql="update testing set test_id='$test_id',depositor_id='$depositor_id',test_date='$test_date',milk_id='$milk_id',
fat_content='$fat_content',water_content='$water_content',cost_per_litre='$cost_per_litre' where test_id='$test_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="testing_view.php";
</script>
