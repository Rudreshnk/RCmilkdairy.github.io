<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from loans where loan_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="loans_view.php";
</script>