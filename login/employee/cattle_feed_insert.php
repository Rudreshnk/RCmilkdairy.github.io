<?php
include('dbconnect.php');
$depositor_id=$_POST['depositor_id'];
$feed_type=$_POST['feed_type'];
$given_date=$_POST['given_date'];
$feed_amount=$_POST['quantity'];
$quantity=$_POST['feed_amount'];
$sql="insert into cattle_feed values(null,'$depositor_id','$feed_type','$given_date','$quantity','$feed_amount')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="cattle_feed_view.php";
</script>