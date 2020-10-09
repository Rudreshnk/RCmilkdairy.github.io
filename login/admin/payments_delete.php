<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from payments where payment_id='$id'";
mysql_query($sql);
?>

<script>
alert('values deleted');
document.location="payments_view.php";
</script>