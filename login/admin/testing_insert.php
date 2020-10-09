<?php
include('dbconnect.php');

$test_date=$_POST['test_date'];
$milk_id=$_POST['milk_id'];
$fat_content=$_POST['fat_content'];
$water_content=$_POST['water_content'];
$cost_per_litre=$_POST['cost_per_litre'];

  $sql="select * from milk where milk_id='$milk_id'";
  $res=mysql_query($sql);
  $row=mysql_fetch_array($res);
  $qty=$row['quantity'];
  
  $amt=$cost_per_litre*$qty;
  
$sql="insert into testing values(null,'$test_date','$milk_id','$fat_content','$water_content','$cost_per_litre')";
mysql_query($sql);

$sql1="insert into payments values(null,'$test_date','$milk_id','$qty','$cost_per_litre','$amt')";
mysql_query($sql1);

?>
<script>
alert("values inserted");
document.location="milk_view.php";
</script>



