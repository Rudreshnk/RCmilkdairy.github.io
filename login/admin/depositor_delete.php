<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from depositors where depositor_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="depositor_view.php";
</script>