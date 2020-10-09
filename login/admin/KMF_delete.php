<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from KMF where KMF_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="KMF_view.php";
</script>