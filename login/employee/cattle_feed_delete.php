<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from cattle_feed where feed_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="cattle_feed_view.php";
</script>