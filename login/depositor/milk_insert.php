<?php
include('dbconnect.php');
$depositor_id=$_POST['depositor_id'];
$deposited_date=$_POST['deposited_date'];
$deposited_time=$_POST['deposited_time'];
$quantity=$_POST['quantity'];
$fat_content=$_POST['fat_content'];
$milk_type=$_POST['milk_type'];
$sql="insert into milk values(null,'$depositor_id','$deposited_date','$deposited_time','$quantity','$fat_content','$milk_type')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="milk_view.php";
</script>
