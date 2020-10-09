<?php
include('dbconnect.php');
$milk_id=$_POST['milk_id'];
$depositor_id=$_POST['depositor_id'];
$deposited_date=$_POST['deposited_date'];
$deposited_time=$_POST['deposited_time'];
$quantity=$_POST['quantity'];
$fat_content=$_POST['fat_content'];
$milk_type=$_POST['milk_type'];
$sql="update milk set depositor_id='$depositor_id',deposited_date='$deposited_date',
deposited_time='$deposited_time',quantity='$quantity',fat_content='$fat_content',
milk_type='$milk_type' where milk_id='$milk_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="milk_view.php";
</script>
