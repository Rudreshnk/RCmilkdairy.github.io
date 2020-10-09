<?php
include('dbconnect.php');
$feed_id=$_POST['feed_id'];
$depositor_id=$_POST['depositor_id'];
$feed_type=$_POST['feed_type'];
$given_date=$_POST['given_date'];
$quantity=$_POST['quantity'];
$feed_amount=$_POST['feed_amount'];
$sql="update  cattle_feed set feed_id='$feed_id', depositor_id='$depositor_id',feed_type='$feed_type',given_date='$given_date',quantity='$quantity',feed_amount='$feed_amount'
where feed_id='$feed_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="cattle_feed_view.php";
</script>