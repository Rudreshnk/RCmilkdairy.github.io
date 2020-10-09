<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from local_sale where sale_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="local_sale_view.php";
</script>