<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from employee where employee_id='$id'";
mysql_query($sql);

?>
<script>
alert('values deleted');
document.location="employee_view.php";
</script>