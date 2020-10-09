<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from milk where milk_id='$id'";
mysql_query($sql);
?>

<script>
alert('values deleted');
document.location="milk_view.php";
</script>